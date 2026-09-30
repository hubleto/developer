# Registering event listeners using $eventManager->addEventListener()

A listener class does nothing until it is registered for an event. Register listeners in your app's `Loader::init()`.

## Syntax

```php
$this->eventManager()->addEventListener(string $event, EventListenerInterface $listener);
```

| Argument     | Description                                                                          |
| ------------ | ------------------------------------------------------------------------------------ |
| `$event`     | Name of the event, e.g. `'onModelAfterUpdate'`. The listener must have a method with this name. |
| `$listener`  | An **instance** of the listener. Create it with `$this->getService(...)`.            |
Arguments of `addEventListener()`.

## Examples

###### apps/AuditLogs/Loader.php

```php
public function init(): void
{
  parent::init();

  $this->router()->get([
    '/^audit-logs(\/(?<recordId>\d+))?\/?$/' => Controllers\AuditLogs::class,
  ]);

  $this->eventManager()->addEventListener(
    'onModelAfterCreate',
    $this->getService(EventListeners\LogCreatedRecord::class)
  );

  $this->eventManager()->addEventListener(
    'onModelAfterUpdate',
    $this->getService(EventListeners\LogUpdatedRecord::class)
  );

  $this->eventManager()->addEventListener(
    'onModelAfterDelete',
    $this->getService(EventListeners\LogDeletedRecord::class)
  );
}
```

###### apps/Workflow/Loader.php: two listeners for one event

```php
$this->eventManager()->addEventListener(
  'onModelAfterUpdate',
  $this->getService(EventListeners\SaveWorkflowHistory::class)
);

$this->eventManager()->addEventListener(
  'onModelAfterUpdate',
  $this->getService(EventListeners\WorkflowAutomat::class)
);
```

###### apps/Notifications/Loader.php: a model event and a custom event

```php
$this->eventManager()->addEventListener(
  'onModelAfterUpdate',
  $this->getService(EventListeners\NotifyUpdatedRecord::class)
);

$this->eventManager()->addEventListener(
  'onSendEmailNotification',
  $this->getService(EventListeners\EmailNotifications::class)
);
```

###### apps/Usage/Loader.php: a controller event

```php
$this->eventManager()->addEventListener(
  'onControllerBeforeInit',
  $this->getService(EventListeners\LogUsage::class)
);
```

## How the event manager calls listeners

###### Hubleto\Framework\Services\EventManager

```php
public function addEventListener(string $event, EventListenerInterface $listener): void
{
  if (!isset($this->listeners[$event])) $this->listeners[$event] = [];
  $this->listeners[$event][] = $listener;
}

public function getEventListeners(): array
{
  return $this->listeners;
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

Consequences:

  * **Any number of listeners** can listen to one event. They are called in the order of registration, i.e. in the order in which the apps are initialized.
  * The event name is used as the **method name**. A typo in either the event name or the method name results in a PHP error when the event is fired.
  * Listeners run **synchronously**, in the same request as the action that fired the event.
  * An exception thrown in a listener stops the other listeners and bubbles up to the code that fired the event. Catch exceptions in the listener if the main action must continue.

## Register the same listener for more events

```php
$syncListener = $this->getService(EventListeners\SyncToExternalCrm::class);

$this->eventManager()->addEventListener('onModelAfterCreate', $syncListener);
$this->eventManager()->addEventListener('onModelAfterDelete', $syncListener);
```

## Register conditionally

Registration is code, so it can depend on configuration:

```php
$syncEnabled = $this->configAsBool('syncEnabled');

if ($syncEnabled) {
  $this->eventManager()->addEventListener(
    'onModelAfterUpdate',
    $this->getService(EventListeners\SyncToExternalCrm::class)
  );
}
```

## Where to register

  * Register in `Loader::init()`. It runs for every enabled app on every request, before controllers run. A disabled app registers nothing, so its listeners stop working automatically.
  * Events fired before the apps are initialized (e.g. `onCoreAfterBootstrap`) cannot be listened to from `init()`.

## Debugging

List all registered listeners, e.g. in a temporary controller or a test:

```php
foreach ($this->eventManager()->getEventListeners() as $event => $listeners) {
  foreach ($listeners as $listener) {
    $this->logger()->info($event . ' -> ' . get_class($listener));
  }
}
```

## Complete example

###### 1. src/apps/MyFirstApp/EventListeners/LogBookChanges.php

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Custom\MyFirstApp\EventListeners;

use Hubleto\App\Custom\MyFirstApp\Models\Book;
use Hubleto\Framework\Interfaces\ModelInterface;

class LogBookChanges extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{
  public function onModelAfterUpdate(ModelInterface $model, array $originalRecord, array $savedRecord): void
  {
    if (!($model instanceof Book)) return;

    $changedColumns = array_keys($model->diffRecords($originalRecord, $savedRecord));
    $this->logger()->info('Book #' . $savedRecord['id'] . ' changed: ' . join(', ', $changedColumns));
  }
}
```

###### 2. src/apps/MyFirstApp/Loader.php

```php
public function init(): void
{
  parent::init();

  // ... routes

  $this->eventManager()->addEventListener(
    'onModelAfterUpdate',
    $this->getService(EventListeners\LogBookChanges::class)
  );
}
```
