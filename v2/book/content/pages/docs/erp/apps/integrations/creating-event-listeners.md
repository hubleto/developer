# Creating event listeners in EventListeners folder

An event listener is a class that reacts to events fired by Hubleto or by other apps. This page shows how to write one. How to connect it to an event is described in [Registering event listeners](registering-event-listeners). The principles are in [Design principles for event listeners](../design-principles/event-listeners).

## Anatomy of a listener

###### apps/AuditLogs/EventListeners/LogCreatedRecord.php (structure)

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Community\AuditLogs\EventListeners;

use Hubleto\Framework\Interfaces\ModelInterface;

class LogCreatedRecord extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterCreate(ModelInterface $model, array $record): void
  {
    // react to the event
  }
}
```

| Part            | Rule                                                                                 |
| --------------- | ------------------------------------------------------------------------------------ |
| File            | `EventListeners/<WhatItDoes>.php` in your app.                                       |
| Namespace       | `<AppNamespace>\EventListeners`.                                                     |
| Base class      | `Hubleto\Framework\EventListener` (a `Core` descendant, so all services are available). |
| Interface       | `Hubleto\Framework\Interfaces\EventListenerInterface` (required by `addEventListener()`). |
| Method name     | Exactly the name of the event, e.g. `onModelAfterCreate`.                            |
| Method arguments | The arguments passed by `fire()`, in the same order. See the table of events in [Design principles](../design-principles/event-listeners). |
| Return value    | `void`. The return value is ignored.                                                 |
Rules for listener classes.

## Example 1: react to changes of any model

The Notifications app notifies the owner and the manager of a record when someone updates it:

###### apps/Notifications/EventListeners/NotifyUpdatedRecord.php

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Community\Notifications\EventListeners;

use Hubleto\App\Community\Notifications\Sender;
use Hubleto\Framework\Interfaces\ModelInterface;

class NotifyUpdatedRecord extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterUpdate(ModelInterface $model, array $originalRecord, array $savedRecord): void
  {
    $user = $this->authProvider()->getUser();

    /** @var Sender $sender */
    $sender = $this->getService(Sender::class);

    $idOwner = (int) ($savedRecord['id_owner'] ?? 0);
    $idManager = (int) ($savedRecord['id_manager'] ?? 0);
    $recordId = (int) ($savedRecord['id'] ?? 0);

    $diff = $model->diffRecords($originalRecord, $savedRecord);
    if (count($diff) == 0) return;

    $body =
      'User ' . $user['email'] . ' updated ' . $model->shortName . ":\n"
      . json_encode($diff, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

    if ($idOwner > 0) {
      $sender->send(
        945, // category
        [$model->shortName, $model->fullName],
        $model->fullName,
        $recordId,
        $idOwner, // to
        $model->shortName . ' updated', // subject
        $body,
        $this->env()->projectUrl . '/' . $model->getRecordDetailUrl($savedRecord) // url
      );
    }

    // ... the same for $idManager
  }
}
```

Useful model methods inside listeners:

| Method                                         | Returns                                                     |
| ---------------------------------------------- | ----------------------------------------------------------- |
| `$model->diffRecords($original, $saved)`       | Changed columns: `column => [oldValue, newValue]`.          |
| `$model->hasColumn('id_workflow')`             | Whether the model has a column.                             |
| `$model->getRecordDetailUrl($record)`          | URL of the record (from `$lookupUrlDetail`).                |
| `$model->shortName`, `$model->fullName`        | `Deal`, `Hubleto\App\Community\Deals\Models\Deal`.          |
| `get_class($model)`                            | Class name, e.g. to compare with a specific model.          |
Model methods useful in listeners.

## Example 2: react only to one model

Model events are fired for every model. Check the model first:

###### EventListeners/CreateProjectFromWonDeal.php (example for your app)

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Custom\MyFirstApp\EventListeners;

use Hubleto\App\Community\Deals\Models\Deal;
use Hubleto\Framework\Interfaces\ModelInterface;

class CreateProjectFromWonDeal extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterUpdate(ModelInterface $model, array $originalRecord, array $savedRecord): void
  {
    if (!($model instanceof Deal)) return;

    $wasWon = ($originalRecord['deal_result'] ?? 0) == Deal::RESULT_WON;
    $isWon = ($savedRecord['deal_result'] ?? 0) == Deal::RESULT_WON;

    // Only when the deal has just been won
    if ($wasWon || !$isWon) return;

    $mProject = $this->getModel(\Hubleto\App\Community\Projects\Models\Project::class);
    $mProject->record->recordCreate([
      'title' => $savedRecord['title'],
      'id_customer' => $savedRecord['id_customer'],
    ]);
  }
}
```

## Example 3: react to controllers

The Usage app logs which pages users open. It listens to a controller event and respects the controller's opt-out flag:

###### apps/Usage/EventListeners/LogUsage.php

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Community\Usage\EventListeners;

use Hubleto\Erp\Controller;
use Hubleto\App\Community\Usage\Logger;

class LogUsage extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onControllerBeforeInit(Controller $controller): void
  {
    if (!$controller->disableLogUsage) {
      try {
        /** @var Logger $usageLogger */
        $usageLogger = $this->getService(Logger::class);
        $usageLogger->logUsage();
      } catch (\Throwable $e) {
        //
      }
    }
  }
}
```

## Example 4: one class per action

The AuditLogs app has three small listeners instead of one big one:

```
apps/AuditLogs/EventListeners/
├─ LogCreatedRecord.php   # onModelAfterCreate
├─ LogUpdatedRecord.php   # onModelAfterUpdate
└─ LogDeletedRecord.php   # onModelAfterDelete
```

###### apps/AuditLogs/EventListeners/LogUpdatedRecord.php

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

## One class, more events

A listener may implement more event methods. Register it for each event separately:

```php
class SyncToExternalCrm extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterCreate(ModelInterface $model, array $savedRecord): void
  {
    // ...
  }

  public function onModelAfterDelete(ModelInterface $model, int $id): void
  {
    // ...
  }
}
```

## Checklist

  * The file is in `EventListeners/` and the namespace matches.
  * The class extends `Hubleto\Framework\EventListener` and implements `EventListenerInterface`.
  * The method name equals the event name, and the arguments match `fire()`.
  * The listener returns early for models or records it doesn't care about.
  * Failures that must not stop the main action are caught.
  * The listener is registered in `Loader::init()` (next page).
