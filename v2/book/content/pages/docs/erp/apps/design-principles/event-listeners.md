# Design principles for event listeners

Events let an app react to things that happen in other apps without changing their code. For example:

  * the **AuditLogs** app logs every created, updated and deleted record of every model,
  * the **Workflow** app saves the history of workflow steps of any record that has `id_workflow` and `id_workflow_step`,
  * the **Notifications** app notifies the owner and the manager when their record is updated,
  * the **Usage** app logs which controllers users open.

None of the apps that own these records know about AuditLogs, Workflow or Notifications. This is the main purpose of events: **loose coupling**.

## How it works

  1. Some code **fires** an event: `$this->eventManager()->fire('onModelAfterUpdate', [$model, $originalRecord, $savedRecord])`.
  2. The `EventManager` calls the method **with the same name as the event** on every listener registered for that event.
  3. Listeners are registered in `Loader::init()` with `$this->eventManager()->addEventListener()`.

###### Hubleto\Framework\Services\EventManager (simplified)

```php
public function addEventListener(string $event, EventListenerInterface $listener): void
{
  if (!isset($this->listeners[$event])) $this->listeners[$event] = [];
  $this->listeners[$event][] = $listener;
}

public function fire(string $event, array $args): void
{
  if (isset($this->listeners[$event]) && is_array($this->listeners[$event])) {
    foreach ($this->listeners[$event] as $listener) {
      call_user_func_array([$listener, $event], $args);
    }
  }
}
```

The details of creating and registering listeners are in the Integrations chapter: [Creating event listeners](../integrations/creating-event-listeners) and [Registering event listeners](../integrations/registering-event-listeners).

## Principles

  1. **One listener class, one purpose.** `LogCreatedRecord`, `LogUpdatedRecord` and `LogDeletedRecord` are three classes, not one.
  2. **Name the class by what it does**, not by the event: `SaveWorkflowHistory`, `NotifyUpdatedRecord`, `LogUsage`.
  3. **Put listeners in `EventListeners/`**, extend `Hubleto\Framework\EventListener` and implement `Hubleto\Framework\Interfaces\EventListenerInterface`.
  4. **Name the method exactly like the event** and use the same arguments in the same order as `fire()` passes them.
  5. **Filter early.** Model events are fired for *every* model. Return immediately if the model or the record is not relevant, e.g. with `$model->hasColumn(...)` or `$model instanceof ...`.
  6. **Never break the main action.** A failing listener must not stop saving a record. Catch exceptions where a failure is acceptable, and say why in a short comment.
  7. **Keep listeners fast.** They run synchronously in the same request. Move heavy work to a cron or a queue.
  8. **Respect opt-outs**, e.g. `$model->disableAuditLog` or `$controller->disableLogUsage`.

###### apps/Workflow/EventListeners/SaveWorkflowHistory.php: filtering early

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Community\Workflow\EventListeners;

use Hubleto\App\Community\Workflow\Models\WorkflowHistory;
use Hubleto\Framework\Interfaces\ModelInterface;

class SaveWorkflowHistory extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterUpdate(ModelInterface $model, array $originalRecord, array $savedRecord): void
  {
    if (!$model || !$savedRecord) return;

    // Only models with a workflow are relevant
    if ($model->hasColumn('id_workflow') && $model->hasColumn('id_workflow_step')) {
      $mWorkflowHistory = $this->getService(WorkflowHistory::class);

      $lastState = $mWorkflowHistory->record
        ->where('model', get_class($model))
        ->where('record_id', $savedRecord['id'])
        ->first();

      $workflowChanged = !$lastState
        || $lastState->id_workflow != $savedRecord['id_workflow']
        || $lastState->id_workflow_step != $savedRecord['id_workflow_step'];

      if ($workflowChanged) {
        $mWorkflowHistory->record->recordCreate([
          'model' => get_class($model),
          'record_id' => $savedRecord['id'],
          'datetime_change' => date('Y-m-d H:i:s'),
          'id_user' => $this->authProvider()->getUserId(),
          'id_workflow' => $savedRecord['id_workflow'] ?? 0,
          'id_workflow_step' => $savedRecord['id_workflow_step'] ?? 0,
        ]);
      }
    }
  }
}
```

###### apps/AuditLogs/EventListeners/LogUpdatedRecord.php: respecting opt-outs, not breaking the save

```php
class LogUpdatedRecord extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterUpdate(ModelInterface $model, array $originalRecord, array $savedRecord): void
  {
    /** @var Logger $logger */
    $logger = $this->getService(Logger::class);

    try {
      if (isset($model->disableAuditLog) && $model->disableAuditLog) return;

      $diff = $model->diffRecords($originalRecord, $savedRecord);
      if (count($diff) == 0) return;

      $logger->logUpdate(get_class($this), get_class($model), (int) $savedRecord['id']);
    } catch (\Throwable $e) {
      // Audit logging must never block saving the record.
    }
  }
}
```

## Events fired by Hubleto

| Event                            | Fired in                         | Arguments                                         |
| -------------------------------- | -------------------------------- | ------------------------------------------------- |
| `onCoreAfterBootstrap`           | `Hubleto\Erp\Loader`             | `$loader`                                         |
| `onCoreAfterInit`                | `Hubleto\Erp\Loader`             | `$loader`                                         |
| `onControllerBeforeInit`         | `Hubleto\Erp\Controller::init()` | `$controller`                                     |
| `onControllerBeforePrepareView`  | `Hubleto\Erp\Controller::prepareView()` | `$controller`                              |
| `onControllerAfterPrepareView`   | `Hubleto\Erp\Controller::prepareView()` | `$controller`                              |
| `onControllerSetView`            | `Hubleto\Erp\Controller::setView()` | `$controller`, `$view`                          |
| `onModelBeforeCreate`            | `Model::onBeforeCreate()`        | `$model`, `$record`                               |
| `onModelAfterCreate`             | `Model::onAfterCreate()`         | `$model`, `$savedRecord`                          |
| `onModelBeforeUpdate`            | `Model::onBeforeUpdate()`        | `$model`, `$record`                               |
| `onModelAfterUpdate`             | `Model::onAfterUpdate()`         | `$model`, `$originalRecord`, `$savedRecord`       |
| `onModelBeforeDelete`            | `Model::onBeforeDelete()`        | `$model`, `$id`                                   |
| `onModelAfterDelete`             | `Model::onAfterDelete()`         | `$model`, `$id`                                   |
| `onModelAfterLoadRecord`         | `Model::onAfterLoadRecord()`     | named: `model`, `record`                          |
| `onModelAfterLoadRecords`        | `Model::onAfterLoadRecords()`    | `$model`, `$records`                              |
| `onBeforeValidate`, `onAfterValidate` | `Model::onBeforeValidate()`, ... | `$model`, `$record`                        |
| `onMailReceived`                 | `Hubleto\App\Community\Mail\Mailer` | `$mail`, `$attachments`                        |
Events fired by Hubleto.

> **NOTE** `onModelAfterLoadRecord` passes an associative array (`['model' => ..., 'record' => ...]`). PHP maps it to **named** arguments, so the listener's parameters must be called `$model` and `$record`.

> **NOTE** The model events are fired by the model callbacks. If a model overrides `onAfterUpdate()` and does not call `parent::onAfterUpdate()`, the event is not fired and no listener runs.

## Firing your own events

Any app can fire its own events. Other apps can then listen to them:

###### Firing an event (apps/Mail/Mailer.php)

```php
$this->eventManager()->fire('onMailReceived', [ $mail, $attachments ]);
```

###### Listening to it in another app

```php
// Loader.php of your app
$this->eventManager()->addEventListener(
  'onMailReceived',
  $this->getService(EventListeners\CreateTicketFromMail::class)
);

// EventListeners/CreateTicketFromMail.php
public function onMailReceived($mail, $attachments): void
{
  // ...
}
```

> **Convention** Name events `on` + subject + moment, e.g. `onMailReceived`, `onInvoiceIssued`. Document the arguments in the class that fires the event.
