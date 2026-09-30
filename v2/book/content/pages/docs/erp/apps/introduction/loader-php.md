# Loader.php class

`Loader.php` is the backend entry point of the app. Hubleto instantiates the `Loader` class of every enabled app and calls its `init()` method. Every app must have it.

The class must:

  * be named `Loader` and live in the app's root namespace (e.g. `Hubleto\App\Community\Deals\Loader`),
  * extend `Hubleto\Erp\App`.

###### Skeleton of Loader.php

```php
<?php

namespace Hubleto\App\Custom\MyFirstApp;

class Loader extends \Hubleto\Erp\App
{
  public function init(): void
  {
    parent::init();

    // Register routes, settings, calendars, workflows, boards, listeners, crons, ...
  }

  public function installApp(int $round): void
  {
    if ($round == 1) {
      // Create tables of the app's models.
    }
  }
}
```

## Lifecycle

| When                              | What is called                            | Where it is called                                   |
| --------------------------------- | ----------------------------------------- | ---------------------------------------------------- |
| Every request, for every enabled app | `__construct()` then `init()`          | `AppManager::init()`                                 |
| Installation of the app           | `installApp(1)`, `installApp(2)`, `installApp(3)` | `php hubleto init`, `php hubleto app install` |
| Generating demo data              | `generateDemoData()`                      | `php hubleto init` with `generateDemoData: yes`      |
| Rendering the desktop             | `renderSecondSidebar()`, `renderAlerts()` | `Desktop` controller (only for the activated app)    |
| Sidebar badge refresh (AJAX)      | `getSidebarBadgeNumber()`                 | `desktop/api/get-sidebar-badge-numbers`              |
| Global fulltext search            | `search()`                                | `Hubleto\Erp\Api\Search`                             |
Loader lifecycle.

> **NOTE** `init()` runs on **every request** for **every enabled app**. Keep it fast. Only register things in `init()`. Don't run database queries there. Exceptions thrown in `init()` are logged and the app is skipped.

The constructor of `Hubleto\Framework\App` does the common work for you. It sets `$srcFolder`, `$namespace`, `$fullName`, `$shortName` and `$viewNamespace`, and it loads and validates `manifest.yaml`. `parent::init()` translates the manifest and registers the `Views/` folder as a Twig namespace. **Always call `parent::init()` first.**

###### From Hubleto\Framework\App::init()

```php
public function init(): void
{
  $this->manifest['nameTranslated'] = $this->translate($this->manifest['name'], [], 'manifest');
  $this->manifest['highlightTranslated'] = $this->translate($this->manifest['highlight'], [], 'manifest');

  $this->renderer()->addNamespace($this->srcFolder . '/Views', $this->viewNamespace);
}
```

## init()

`init()` connects the app to the rest of Hubleto. The Deals app is a complete example:

###### apps/Deals/Loader.php, init()

```php
public function init(): void
{
  parent::init();

  // 1. Routes
  $this->router()->crud('deals', Controllers\Deals::class);

  $this->router()->get([
    '/^deals\/api\/log-activity\/?$/' => Controllers\Api\LogActivity::class,
    '/^deals\/api\/generate-pdf\/?$/' => Controllers\Api\GeneratePdf::class,
    '/^deals\/boards\/most-valuable-deals\/?$/' => Controllers\Boards\MostValuableDeals::class,
    '/^deals\/tags\/?$/' => Controllers\Tags::class,
    '/^deals\/lost-reasons\/?$/' => Controllers\LostReasons::class,
    '/^deals\/plan\/?$/' => Controllers\Plan::class,
  ]);

  // 2. Global search switch: "/d something" searches only in deals
  $this->addSearchSwitch('d', 'deals');

  // 3. Settings
  /** @var \Hubleto\App\Community\Settings\Loader $settingsApp */
  $settingsApp = $this->appManager()->getApp(\Hubleto\App\Community\Settings\Loader::class);
  $settingsApp->addSetting($this, [
    'title' => $this->translate('Deal Tags'),
    'icon' => 'fas fa-tags',
    'url' => 'deals/tags',
  ]);

  // 4. Calendar
  /** @var \Hubleto\App\Community\Calendar\Manager */
  $calendarManager = $this->getService(\Hubleto\App\Community\Calendar\Manager::class);
  $calendarManager->addCalendar($this, 'deals', Calendar::class);

  // 5. Workflow
  /** @var \Hubleto\App\Community\Workflow\Manager */
  $workflowManager = $this->getService(\Hubleto\App\Community\Workflow\Manager::class);
  $workflowManager->addWorkflowGroup($this, 'deals', Workflow::class);

  // 6. Dashboard boards
  /** @var \Hubleto\App\Community\Dashboards\Manager */
  $dashboardManager = $this->getService(\Hubleto\App\Community\Dashboards\Manager::class);
  $dashboardManager->addBoard($this, $this->translate('Most valuable deals'), 'deals/boards/most-valuable-deals');
}
```

Other things commonly registered in `init()`:

###### Event listeners, crons and app menu items

```php
// Event listener (apps/AuditLogs/Loader.php)
$this->eventManager()->addEventListener(
  'onModelAfterUpdate',
  $this->getService(EventListeners\LogUpdatedRecord::class)
);

// Cron (apps/Mail/Loader.php)
$this->cronManager()->addCron(Crons\GetMails::class);

// App menu (apps/Worksheets/Loader.php)
$appMenu = $this->getService(\Hubleto\App\Community\Desktop\AppMenuManager::class);
$appMenu->addItem($this, 'worksheets', $this->translate('Worksheets'), 'fas fa-user-clock');
$appMenu->addItem($this, 'worksheets/activity-types', $this->translate('Activity types'), 'fas fa-table');
```

## installApp(int $round)

Called during installation. The installation runs in three rounds for all apps, so apps can depend on each other:

| Round | What to do                                                                           | What Hubleto does after your code                                                  |
| ----- | ------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------- |
| 1     | Create tables: `$this->getModel(Models\X::class)->upgradeSchema()`. Default records. | Marks the app as installed and enabled, stores installation config (`sidebarOrder`). |
| 2     | Default records that need tables of other apps.                                      | —                                                                                  |
| 3     | Rarely needed.                                                                        | Installs default permissions, assigns them to roles, creates foreign keys.         |
Installation rounds.

###### apps/Orders/Loader.php, installApp()

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    $this->getModel(Models\State::class)->upgradeSchema();
    $this->getModel(Models\Order::class)->upgradeSchema();
    $this->getModel(Models\Item::class)->upgradeSchema();
  }

  if ($round == 2) {
    $mState = $this->getModel(Models\State::class);
    $mState->record->recordCreate(['title' => $this->translate('New'), 'code' => 'N', 'color' => '#444444']);
    $mState->record->recordCreate(['title' => $this->translate('Accepted'), 'code' => 'A', 'color' => '#444444']);
  }
}
```

More details are in [Installation of app's models](../installation/install-app).

> **NOTE** Older documentation mentions an `installTables()` method. The current method is `installApp(int $round)`.

## Methods you can override

| Method                                          | Returns  | Purpose                                                              | Documentation                                        |
| ----------------------------------------------- | -------- | -------------------------------------------------------------------- | ---------------------------------------------------- |
| `init(): void`                                  | —        | Registers routes and integrations.                                   | this page                                            |
| `installApp(int $round): void`                  | —        | Creates tables and default data.                                     | [Installation](../installation/install-app)          |
| `generateDemoData(): void`                      | —        | Creates demo records.                                                | [Demo data](../installation/generate-demo-data)      |
| `renderSecondSidebar(): string`                 | HTML     | App-specific sub-menu.                                               | [Second sidebar](../integrations/second-sidebar)     |
| `renderAlerts(): string`                        | HTML     | Warnings shown above the app's content.                              | [Alerts](../integrations/alerts)                     |
| `getSidebarBadgeNumber(): int`                  | number   | Red badge next to the app in the main sidebar.                       | [Sidebar badges](../integrations/sidebar-badges)     |
| `search(array $expressions): array`             | results  | Results for the global fulltext search.                              | [Fulltext search](../integrations/fulltext-search)   |
| `getMcpTools(): array`                          | list     | Tools for AI assistants (MCP).                                       | see `apps/Contacts/Loader.php`                       |
| `getWelcomeScreenMessages(): array`             | list     | Messages on the welcome screen.                                      | see `apps/Help/Loader.php`                           |
| `dangerouslyInjectDesktopHtmlContent(string $where): string` | HTML | Raw HTML injected into the desktop (e.g. `'beforeSidebar'`). | see `apps/Desktop/Views/Desktop.twig`                |
| `onBeforeRender(): void`                        | —        | Called before the page is rendered.                                  | —                                                    |
Overridable methods of `Hubleto\Erp\App`.

## Helper methods you can call

| Method                                                          | Purpose                                                                  |
| --------------------------------------------------------------- | ------------------------------------------------------------------------ |
| `addSearchSwitch(string $switch, string $name)`                 | Registers a switch for the global search, e.g. `/d`.                     |
| `addSetting(AppInterface $app, array $setting)`                 | Adds a tile to the Settings app (call it on the Settings app's loader).  |
| `collectExtendibles(string $extendibleName)`                    | Collects items from `Extendibles/<Name>.php` of all enabled apps.        |
| `secondSidebarTitle()` / `secondSidebarButton(...)`             | Build the HTML of the second sidebar.                                    |
| `configAsString()`, `configAsInteger()`, `configAsBool()`, `configAsFloat()`, `configAsArray()` | Read app config (stored under `apps/<app>/...`). |
| `setConfigAsString()`, `setConfigAsInteger()`, ...               | Set app config for the current request.                                  |
| `saveConfig(string $path, string $value)`                       | Persist app config.                                                      |
| `saveConfigForUser(string $path, string $value)`                | Persist user-specific app config.                                        |
| `getRootUrlSlug()`                                              | Returns `rootUrlSlug` from the manifest.                                 |
| `translate(string $string, array $vars = [])`                   | Translates a string in the app's context.                                |
Helper methods of `Hubleto\Erp\App`.

###### Reading app configuration (apps/Calendar/Manager.php)

```php
$calendar->setColor($app->configAsString('calendarColor', $calendarConfig['color'] ?? '#000000'));
```

## Properties

| Property                  | Default | Description                                                             | Example                          |
| ------------------------- | ------- | ----------------------------------------------------------------------- | -------------------------------- |
| `$canBeDisabled`          | `true`  | If `false`, the app cannot be disabled in Settings.                     | `Desktop`, `Settings`, `Help`    |
| `$permittedForAllUsers`   | `false` | If `true`, permission checks are skipped for this app.                  | `Desktop`, `About`, `AiAssistent`|
| `$manifest`               | —       | Parsed `manifest.yaml`.                                                 |                                  |
| `$srcFolder`              | —       | Absolute path to the app folder.                                        |                                  |
| `$namespace`              | —       | PHP namespace of the app.                                               |                                  |
| `$shortName`              | —       | Last part of the namespace, e.g. `Deals`.                               |                                  |
| `$viewNamespace`          | —       | Twig namespace, e.g. `Hubleto:App:Community:Deals`.                     |                                  |
| `$isActivated`            | `false` | `true` when the current URL starts with the app's `rootUrlSlug`.        |                                  |
Properties of the app loader.

###### apps/Desktop/Loader.php

```php
class Loader extends \Hubleto\Erp\App
{
  public bool $canBeDisabled = false;
  public bool $permittedForAllUsers = true;
  // ...
}
```

## Accessing another app's loader

```php
/** @var \Hubleto\App\Community\Settings\Loader $settingsApp */
$settingsApp = $this->appManager()->getApp(\Hubleto\App\Community\Settings\Loader::class);

// Returns null if the app is not installed or is disabled.
if ($settingsApp !== null) {
  $settingsApp->addSetting($this, [ 'title' => 'My app', 'icon' => 'fas fa-cog', 'url' => 'my-app/settings' ]);
}
```

## Loader generated by the CLI

`php hubleto create app` generates a `Loader.php` with markers. The CLI uses the markers when it adds more code later. **Don't delete them.**

###### src/apps/MyFirstApp/Loader.php (generated)

```php
public function init(): void
{
  parent::init();

  $this->router()->get([
    '/^myfirstapp\/?$/' => Controllers\Home::class,
    '/^settings\/myfirstapp\/?$/' => Controllers\Settings::class,
  ]);

  // DO NOT DELETE FOLLOWING LINE, OR `php hubleto` WILL NOT GENERATE CODE HERE
  //@hubleto-cli:routes

  $settingsApp = $this->appManager()->getApp(\Hubleto\App\Community\Settings\Loader::class);
  $settingsApp->addSetting($this, [
    'title' => 'MyFirstApp',
    'icon' => 'fas fa-table',
    'url' => 'settings/myfirstapp',
  ]);
}

public function installApp(int $round): void
{
  if ($round == 1) {
    // DO NOT DELETE FOLLOWING LINE, OR `php hubleto` WILL NOT GENERATE CODE HERE
    //@hubleto-cli:upgrade-schema
  }
}
```
