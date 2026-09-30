# App file and folder structure

An app lives in a single folder. Hubleto finds most parts of the app by convention (folder and file names), so it is important to follow the structure below.

###### Full folder structure of a Hubleto app (based on the Deals app)

```
Deals/
├─ Components/                  # React components (TypeScript)
│  ├─ FC/                       # functional components (current style)
│  │  ├─ TableDeals.tsx
│  │  ├─ FormDeal.tsx
│  │  └─ DealCalendarActivityForm.tsx
│  └─ TableDealHistory.tsx      # older class components (legacy style)
├─ Controllers/                 # controllers rendering HTML views
│  ├─ Api/                      # controllers returning JSON
│  │  └─ GeneratePdf.php
│  ├─ Boards/                   # controllers rendering dashboard boards
│  │  └─ MostValuableDeals.php
│  ├─ Deals.php
│  └─ Tags.php
├─ Crons/                       # scheduled jobs (e.g. Mail, Notifications apps)
├─ EventListeners/              # event listeners (e.g. AuditLogs, Workflow apps)
├─ Extendibles/                 # data provided to other apps
│  ├─ AppMenu.php
│  └─ ContextHelp.php
├─ Lang/                        # app-specific language files (optional)
├─ McpTools/                    # tools for AI assistants (e.g. Contacts app)
├─ Models/
│  ├─ Migrations/               # one or more migrations per model
│  │  ├─ Deal_0001.php
│  │  └─ Deal_0002.php
│  ├─ RecordManagers/           # Eloquent-based record managers
│  │  └─ Deal.php
│  ├─ Deal.php
│  └─ DealTag.php
├─ Reports/                     # reports
├─ Tests/                       # PHPUnit tests
│  └─ RenderAllRoutesTest.php
├─ Views/                       # Twig views
│  ├─ Boards/
│  │  └─ MostValuableDeals.twig
│  └─ Deals.twig
├─ Calendar.php                 # integration with the Calendar app
├─ Counter.php                  # counts for badges and alerts
├─ Workflow.php                 # integration with the Workflow app
├─ Loader.php                   # backend entry point (required)
├─ Loader.tsx                   # frontend entry point
└─ manifest.yaml                # app identification (required)
```

## Folders

| Folder                     | Content                                                                                          | Found by convention?                                                               |
| -------------------------- | ------------------------------------------------------------------------------------------------ | ---------------------------------------------------------------------------------- |
| `Components/`              | React components. New code goes to `Components/FC/`.                                             | No. Imported in `Loader.tsx`.                                                      |
| `Controllers/`             | Controllers. JSON endpoints go to `Controllers/Api/`, dashboard boards to `Controllers/Boards/`. | Yes. Used when installing default permissions (`installDefaultPermissions()`).     |
| `Crons/`                   | Classes extending `Hubleto\Erp\Cron`.                                                            | No. Registered with `$this->cronManager()->addCron()`.                             |
| `EventListeners/`          | Classes extending `Hubleto\Framework\EventListener`.                                             | No. Registered with `$this->eventManager()->addEventListener()`.                   |
| `Extendibles/`             | Classes extending `Hubleto\Framework\Extendible`.                                                | Yes. Collected by other apps with `collectExtendibles('AppMenu')`.                 |
| `Models/`                  | Models, one class per SQL table.                                                                 | Yes. `getAvailableModelClasses()` scans this folder (used by `php hubleto migrate`). |
| `Models/RecordManagers/`   | Record managers, one per model, same file name as the model.                                     | No. Referenced by `$recordManagerClass` in the model.                              |
| `Models/Migrations/`       | Migrations named `<Model>_<NNNN>.php`.                                                           | Yes. The model loads all files starting with `<Model>_`.                           |
| `Views/`                   | Twig templates.                                                                                  | Yes. Registered as Twig namespace `@Hubleto:App:Community:AppName` in `App::init()`. |
| `Tests/`                   | PHPUnit tests extending `Hubleto\Erp\TestCase`.                                                  | No. Regular PHPUnit tests.                                                          |
| `Lang/`                    | App-specific language files.                                                                     | —                                                                                  |
Folders of a Hubleto app.

## Files in the root of the app

| File            | Required | Purpose                                                                                            | Examples                                   |
| --------------- | -------- | -------------------------------------------------------------------------------------------------- | ------------------------------------------ |
| `manifest.yaml` | yes      | Identification of the app. See [manifest.yaml](manifest-yaml).                                     | all apps                                   |
| `Loader.php`    | yes      | Backend entry point. See [Loader.php](loader-php).                                                 | all apps                                   |
| `Loader.tsx`    | no       | Frontend entry point. See [Loader.tsx](loader-tsx).                                                | 32 of 40 community apps                    |
| `Calendar.php`  | no       | Provides events to the Calendar app. See [Calendar integration](../integrations/calendar).         | Deals, Leads, Orders, Projects, Tasks, HrLeave |
| `Workflow.php`  | no       | Provides items for the Workflow kanban. See [Workflow integration](../integrations/workflow).      | Deals, Orders, Tasks, Projects, HrLeave    |
| `Counter.php`   | no       | Counts records for badges and alerts. See [Sidebar badges](../integrations/sidebar-badges).        | Deals, Orders, Invoices, Mail, Tasks       |
| `Manager.php`   | no       | A service other apps talk to.                                                                      | Calendar, Workflow, Dashboards             |
Root files of a Hubleto app.

## Naming conventions

| Item                    | Convention                                             | Example                                                  |
| ----------------------- | ------------------------------------------------------ | -------------------------------------------------------- |
| App folder              | PascalCase, same as the last part of the namespace     | `HrLeave`                                                |
| Model                   | singular, PascalCase                                   | `Models/Deal.php`, `Models/LeaveRequest.php`             |
| Record manager          | same name as the model                                 | `Models/RecordManagers/Deal.php`                         |
| Migration               | `<Model>_<4-digit counter>`                            | `Models/Migrations/Deal_0003.php`                        |
| SQL table               | plural, snake_case, often prefixed by the app          | `deals`, `hr_leave_requests`, `contact_tags`             |
| Controller for a model  | plural of the model                                    | `Controllers/Deals.php`                                  |
| API controller          | verb + noun in `Controllers/Api/`                      | `Controllers/Api/GeneratePdf.php`                        |
| View                    | same name as the controller                            | `Views/Deals.twig`                                       |
| Table component         | `Table` + plural                                       | `Components/FC/TableDeals.tsx`                           |
| Form component          | `Form` + singular                                      | `Components/FC/FormDeal.tsx`                             |
| Registered component    | app name + component name                              | `DealsTableDeals`                                        |
| HTML tag in Twig        | `hblreact-` + kebab-case of the registered name        | `<hblreact-deals-table-deals>`                           |
| URL slug                | kebab-case, starts with `rootUrlSlug`                  | `deals`, `deals/lost-reasons`, `hr-leave/leave-types`    |
| Foreign key column      | `id_` + referenced entity                              | `id_customer`, `id_workflow_step`                        |
| Relation name           | UPPER_CASE                                             | `CUSTOMER`, `WORKFLOW_STEP`, `ITEMS`                     |
| Virtual column          | `virt_` prefix                                         | `virt_email`, `virt_next_activity_date`                  |
Naming conventions used by the community apps.

## Extendibles

An *extendible* is a small class in `Extendibles/` that returns an array of items. Other apps collect these items from all enabled apps. This is how one app can extend another app without a hard dependency.

###### apps/Contacts/Extendibles/AppMenu.php

```php
<?php

namespace Hubleto\App\Community\Contacts\Extendibles;

class AppMenu extends \Hubleto\Framework\Extendible
{
  public function getItems(): array
  {
    return [
      [
        'app' => $this->app,
        'url' => 'contacts',
        'title' => $this->app->translate('Contacts'),
        'icon' => 'fas fa-user',
      ],
      [
        'app' => $this->app,
        'url' => 'contacts/import',
        'title' => $this->app->translate('Import contacts'),
        'icon' => 'fas fa-file-import',
      ],
    ];
  }
}
```

###### apps/Deals/Extendibles/ContextHelp.php

```php
class ContextHelp extends \Hubleto\Framework\Extendible
{
  public function getItems(): array
  {
    // route => [language => URL of the help page]
    return [
      'deals' => [
        'en' => 'en/apps/community/deals',
      ],
    ];
  }
}
```

The collecting app calls `collectExtendibles()` with the name of the class:

###### How the Mail app collects variables from other apps

```php
$this->templateVariables = $this->collectExtendibles('MailTemplateVariables');
```

Extendibles used by the community apps: `AppMenu`, `ContextHelp`, `MailTemplateVariables`, `ProductTypes`.

## Tests

Tests extend `Hubleto\Erp\TestCase`. The test helpers make it easy to check that all routes of the app render:

###### apps/Deals/Tests/RenderAllRoutesTest.php

```php
<?php declare(strict_types=1);

namespace Hubleto\App\Community\Deals\Tests;

use Hubleto\App\Community\Deals\Models\Deal;

final class RenderAllRoutesTest extends \Hubleto\Erp\TestCase
{
  public function testCrudRouteForModel(): void
  {
    $this->_testCrudRouteForModel(Deal::class, 'deals');
  }

  public function testApiRoutes(): void
  {
    $this->_testApiRouteReturnsJson('deals/api/log-activity', ['idDeal' => 1, 'activity' => 'test']);
    $this->_testApiRouteReturnsJson('deals/api/create-from-lead', ['idLead' => 1]);
  }
}
```

These are regular PHPUnit tests (`Hubleto\Erp\TestCase` extends `PHPUnit\Framework\TestCase`). Run them with PHPUnit, for example `./vendor/bin/phpunit vendor/hubleto/erp/apps/Deals/Tests`.

> **NOTE** `php hubleto help` lists an `app test` command, but the current CLI dispatcher does not implement it. Use PHPUnit directly.

> **NOTE** Tests may modify your data. Run them only in a development environment.
