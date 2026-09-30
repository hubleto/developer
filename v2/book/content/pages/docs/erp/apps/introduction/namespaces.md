# About Hubleto\Framework and Hubleto\Erp namespaces

Hubleto code is split into several PHP namespaces. Knowing them tells you which base class to extend and where to look for the source code.

| Namespace                    | Repository / location                                                      | Purpose                                                                                  |
| ---------------------------- | -------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `Hubleto\Framework`          | [hubleto/framework](https://github.com/hubleto/framework) (`src/`)          | Low-level MVC framework: services, models, record managers, columns, controllers, router. |
| `Hubleto\Erp`                | [hubleto/erp](https://github.com/hubleto/erp) (`src/`)                      | ERP base classes used by apps: `App`, `Model`, `RecordManager`, `Controller`, `Cron`, ... |
| `Hubleto\Erp\Cli`            | [hubleto/erp](https://github.com/hubleto/erp) (`cli/`)                      | The `php hubleto` command-line tool and its code templates.                              |
| `Hubleto\App\Community\*`    | [hubleto/erp](https://github.com/hubleto/erp) (`apps/`)                     | Community apps bundled with Hubleto (`Contacts`, `Deals`, `Orders`, ...).                |
| `Hubleto\App\Custom\*`       | your project, `src/apps/`                                                  | Project-specific custom apps.                                                            |
| `Hubleto\App\External\*\*`   | composer package (`vendor/`)                                               | Reusable apps developed by third parties.                                                |
| `Hubleto\App\Enterprise\*`   | composer package (`vendor/`)                                               | Enterprise apps.                                                                          |
Main PHP namespaces in Hubleto.

## Hubleto\Framework

The framework does not know anything about CRM or ERP. It provides the building blocks:

| Class                                          | Description                                                                                   |
| ---------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `Hubleto\Framework\Core`                       | Base class of almost everything. Gives access to all services (see below).                    |
| `Hubleto\Framework\App`                        | Base class for app loaders. Reads `manifest.yaml`, holds settings, search switches, config.   |
| `Hubleto\Framework\Model`                      | Base class for models. Holds the column definitions and the Description API.                  |
| `Hubleto\Framework\RecordManager`              | Base class for record managers. Built on Laravel's Eloquent (`EloquentRecordManager`).        |
| `Hubleto\Framework\Migration`                  | Base class for migrations (`upgradeSchema()`, `upgradeForeignKeys()`, ...).                    |
| `Hubleto\Framework\Controller`                 | Base class for controllers.                                                                   |
| `Hubleto\Framework\Controllers\ApiController`  | Base class for controllers returning JSON.                                                    |
| `Hubleto\Framework\EventListener`              | Base class for event listeners.                                                               |
| `Hubleto\Framework\Extendible`                 | Base class for "extendibles", pieces of data one app provides to another app.                 |
| `Hubleto\Framework\Db\Column\*`                | Column types: `Varchar`, `Text`, `Integer`, `Decimal`, `Boolean`, `Date`, `DateTime`, `Lookup`, `Json`, `Color`, `File`, `Image`, `Virtual`, ... |
| `Hubleto\Framework\Description\*`              | Description objects: `Table`, `Form`, `Input`, `Tree`.                                        |
| `Hubleto\Framework\Services\*`                 | Services: `Router`, `Renderer`, `Translator`, `EventManager`, `CronManager`, `AppManager`, ...|
Most important classes of `Hubleto\Framework`.

Every class extending `Hubleto\Framework\Core` can reach the services through short accessor methods:

###### Service accessors available in every Core descendant

```php
$this->router();             // routes and URL parameters
$this->renderer();           // Twig rendering
$this->translator();         // translations (use $this->translate() instead)
$this->eventManager();       // firing events and registering listeners
$this->cronManager();        // registering crons
$this->appManager();         // access to other apps
$this->authProvider();       // signed-in user
$this->permissionsManager(); // permissions
$this->config();             // configuration values
$this->db();                 // database connection
$this->env();                // environment (projectUrl, projectFolder, ...)
$this->locale();             // number, currency and date formatting
$this->logger();             // logging
$this->terminal();           // CLI output

$this->getService(SomeClass::class);         // any class via dependency injection
$this->getModel(Models\Contact::class);      // a model instance
$this->translate('Some text');               // translated string
```

## Hubleto\Erp

`Hubleto\Erp` extends the framework classes and adds ERP features. **Apps should always extend the `Hubleto\Erp` classes**, not the framework classes directly.

| Extend this class                     | Instead of                                     | What it adds                                                                                  |
| ------------------------------------- | ---------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `Hubleto\Erp\App`                     | `Hubleto\Framework\App`                        | `secondSidebarTitle()`, `secondSidebarButton()`, `getMcpTools()`.                             |
| `Hubleto\Erp\Model`                   | `Hubleto\Framework\Model`                      | Custom columns defined by users, record permissions (owner, manager, team, shared with), audit-log switch. |
| `Hubleto\Erp\RecordManager`           | `Hubleto\Framework\RecordManager`              | Filters records by owner, manager, team and `shared_with`; junction-table filtering.          |
| `Hubleto\Erp\Controller`              | `Hubleto\Framework\Controller`                 | App permission check, breadcrumbs, context help, `onController*` events, usage logging.       |
| `Hubleto\Erp\Controllers\ApiController` | `Hubleto\Framework\Controllers\ApiController` | JSON output with error handling.                                                              |
| `Hubleto\Erp\Cron`                    | —                                              | `$schedulingPattern` and `run()`.                                                             |
| `Hubleto\Erp\Calendar`                | —                                              | Base for calendars (in practice, extend `Hubleto\App\Community\Calendar\Calendar`).           |
| `Hubleto\Erp\Core`                    | `Hubleto\Framework\Core`                       | `emailProvider()` accessor. Use it for your helper classes, e.g. `Counter.php`.               |
Which class to extend.

###### Typical "extends" lines in an app

```php
class Loader extends \Hubleto\Erp\App { }                               // Loader.php
class Contact extends \Hubleto\Erp\Model { }                            // Models/Contact.php
class Contact extends \Hubleto\Erp\RecordManager { }                    // Models/RecordManagers/Contact.php
class Contact_0001 extends \Hubleto\Framework\Migration { }             // Models/Migrations/Contact_0001.php
class Contacts extends \Hubleto\Erp\Controller { }                      // Controllers/Contacts.php
class GetCustomerContacts extends \Hubleto\Erp\Controllers\ApiController { } // Controllers/Api/...
class DailyDigest extends \Hubleto\Erp\Cron { }                         // Crons/DailyDigest.php
class Counter extends \Hubleto\Erp\Core { }                             // Counter.php
class Calendar extends \Hubleto\App\Community\Calendar\Calendar { }     // Calendar.php
class Workflow extends \Hubleto\App\Community\Workflow\Workflow { }     // Workflow.php
class LogUpdatedRecord extends \Hubleto\Framework\EventListener
  implements \Hubleto\Framework\Interfaces\EventListenerInterface { }   // EventListeners/...
```

> **NOTE** Migrations and event listeners have no ERP-specific base class. They extend `Hubleto\Framework\Migration` and `Hubleto\Framework\EventListener` directly.

## App namespaces

The namespace of every app must start with `Hubleto\App`. The third part says the app type and where Hubleto looks for the app.

| App type       | Namespace                                   | Location                                   | Parts |
| -------------- | ------------------------------------------- | ------------------------------------------ | ----- |
| **Community**  | `Hubleto\App\Community\AppName`             | `vendor/hubleto/erp/apps/AppName`          | 4     |
| **Custom**     | `Hubleto\App\Custom\AppName`                | `src/apps/AppName` in your project         | 4     |
| **External**   | `Hubleto\App\External\VendorName\AppName`   | composer package (`vendor/...`)            | 5     |
| **Enterprise** | `Hubleto\App\Enterprise\AppName`            | composer package (`vendor/...`)            | 4     |
App types and their namespaces.

The `AppManager` validates the namespace. Community, custom and enterprise namespaces must have exactly 4 parts. External namespaces must have exactly 5 parts:

###### From Hubleto\Framework\Services\AppManager::validateAppNamespace()

```php
if ($appNamespaceParts[2] == 'External') {
  if (count($appNamespaceParts) != 5) {
    throw new \Exception('External app namespace (' . $appNamespace . ') must have exactly 5 parts ...');
  }
} else {
  if (count($appNamespaceParts) != 4) {
    throw new \Exception('App namespace (' . $appNamespace . ') must have exactly 4 parts ...');
  }
}
```

When you pass only a short name to the CLI, it is expanded to a custom app namespace: `MyFirstApp` becomes `Hubleto\App\Custom\MyFirstApp`.

Custom apps are autoloaded by a small autoloader registered in `Hubleto\Erp\Loader`. It maps `Hubleto\App\Custom\X\Y` to `src/apps/X/Y.php`, so you don't have to change `composer.json`.

## Namespaces inside an app

Inside an app, namespaces follow the folder structure (PSR-4):

| Folder                        | Namespace                                              | Example class                                                   |
| ----------------------------- | ------------------------------------------------------ | --------------------------------------------------------------- |
| `/`                           | `Hubleto\App\Community\Deals`                          | `Loader`, `Calendar`, `Workflow`, `Counter`                     |
| `Models/`                     | `Hubleto\App\Community\Deals\Models`                   | `Deal`, `DealTag`, `Item`                                       |
| `Models/RecordManagers/`      | `Hubleto\App\Community\Deals\Models\RecordManagers`    | `Deal`                                                          |
| `Models/Migrations/`          | `Hubleto\App\Community\Deals\Models\Migrations`        | `Deal_0001`, `Deal_0002`                                        |
| `Controllers/`                | `Hubleto\App\Community\Deals\Controllers`              | `Deals`, `Tags`, `LostReasons`                                  |
| `Controllers/Api/`            | `Hubleto\App\Community\Deals\Controllers\Api`          | `GeneratePdf`, `CreateFromLead`                                 |
| `Controllers/Boards/`         | `Hubleto\App\Community\Deals\Controllers\Boards`       | `MostValuableDeals`                                             |
| `Extendibles/`                | `Hubleto\App\Community\Deals\Extendibles`              | `AppMenu`, `ContextHelp`                                        |
Namespaces inside the `Deals` app.

## Other naming forms of the same namespace

The same app namespace appears in several forms. Use the right form in the right place:

| Where                                 | Form                                         | Example                                                  |
| ------------------------------------- | -------------------------------------------- | -------------------------------------------------------- |
| PHP code                              | backslashes                                  | `Hubleto\App\Community\Deals\Models\Deal`                |
| React (`model` prop, `registerApp()`) | forward slashes                              | `'Hubleto/App/Community/Deals/Models/Deal'`              |
| Twig view namespace                   | colons, prefixed with `@`                    | `'@Hubleto:App:Community:Deals/Deals.twig'`              |
| Translation dictionary file           | lower case with dashes                       | `lang/sk/hubleto-app-community-deals-loader.json`        |
| Config path                           | `apps/...` path from `getFullConfigPath()`   | `$this->configAsString('calendarColor')`                 |
Forms of the app namespace.

###### Example: the Deals app uses all forms

```php
// PHP
$mDeal = $this->getModel(\Hubleto\App\Community\Deals\Models\Deal::class);

// Twig view path, used in a controller
$this->setView('@Hubleto:App:Community:Deals/Deals.twig');
```

```tsx
// React
const parentApp = 'Hubleto/App/Community/Deals';
<Table model={parentApp + '/Models/Deal'} ... />
globalThis.hubleto.registerApp('Hubleto/App/Community/Deals', new DealsApp());
```
