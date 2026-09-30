# Installation of all app's models using Loader::installApp()

## Purpose

`installApp(int $round)` creates everything the app needs in the database. Hubleto does **not** create tables automatically. Every model of the app must be installed here.

> **NOTE** Older documentation calls this method `installTables()`. In the current code it is `installApp(int $round)`.

## The three rounds

`AppManager::installApp($round, $appNamespace)` calls your `installApp($round)` and then does its own work for that round:

| Round | Your code                                                         | Hubleto (after your code)                                                    |
| ----- | ----------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| 1     | Create tables with `upgradeSchema()`. Insert default records that use only your own tables. | Marks the app as installed and enabled. Saves the installation config (`sidebarOrder`, ...). |
| 2     | Insert default records that need tables of **other** apps.         | —                                                                            |
| 3     | Rarely needed.                                                    | Installs default permissions, assigns them to user roles, **creates foreign keys** of all models (`migrateForeignKeys()`). |
Installation rounds.

###### From Hubleto\Framework\Services\AppManager::installApp() (simplified)

```php
// Dependencies from manifest.yaml are installed first, in the same round
foreach ($dependencies as $dependencyAppNamespace) {
  if (!$this->isAppInstalled($dependencyAppNamespace)) {
    $this->installApp($round, $dependencyAppNamespace, [], $forceInstall);
  }
}

$app->installApp($round);

if ($round == 1) {
  // mark the app as installed and enabled, save installation config
  $this->config()->save('apps/' . $appNameForConfig . "/installedOn", date('Y-m-d H:i:s'));
  $this->config()->save('apps/' . $appNameForConfig . "/enabled", '1');
}

if ($round == 3) {
  $app->installDefaultPermissions();
  $app->assignPermissionsToRoles();
  $app->migrateForeignKeys();
}
```

**Why tables and foreign keys are separated:** a foreign key can only be created when the referenced table exists. Tables are created in round 1 and foreign keys in round 3, so the order of models and apps doesn't matter.

## Examples

### Tables and default records (round 1)

###### apps/Deals/Loader.php (shortened)

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    $mDeal = $this->getModel(Models\Deal::class);
    $mDealHistory = $this->getModel(Models\DealHistory::class);
    $mDealTag = $this->getModel(Models\Tag::class);
    $mCrossDealTag = $this->getModel(Models\DealTag::class);
    $mItem = $this->getModel(Models\Item::class);
    $mDealActivity = $this->getModel(Models\DealActivity::class);
    $mLostReasons = $this->getModel(Models\LostReason::class);

    $mLostReasons->upgradeSchema();
    $mDeal->upgradeSchema();
    $mDealHistory->upgradeSchema();
    $mDealTag->upgradeSchema();
    $mCrossDealTag->upgradeSchema();
    $mItem->upgradeSchema();
    $mDealActivity->upgradeSchema();

    $mDealTag->record->recordCreate([ 'name' => $this->translate("Important"), 'color' => '#fc2c03' ]);
    $mDealTag->record->recordCreate([ 'name' => $this->translate("ASAP"), 'color' => '#62fc03' ]);

    $mLostReasons->record->recordCreate(["reason" => $this->translate("Price")]);
    $mLostReasons->record->recordCreate(["reason" => $this->translate("Solution")]);
    $mLostReasons->record->recordCreate(["reason" => $this->translate("Other")]);
  }
}
```

### Short form

When you don't need the model variables, call `upgradeSchema()` directly:

###### apps/Orders/Loader.php

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    $this->getModel(Models\State::class)->upgradeSchema();
    $this->getModel(Models\Order::class)->upgradeSchema();
    $this->getModel(Models\Item::class)->upgradeSchema();
    $this->getModel(Models\Quote::class)->upgradeSchema();
    $this->getModel(Models\OrderDeal::class)->upgradeSchema();
    $this->getModel(Models\OrderDocument::class)->upgradeSchema();
    $this->getModel(Models\OrderActivity::class)->upgradeSchema();
    $this->getModel(Models\History::class)->upgradeSchema();
    $this->getModel(Models\Payment::class)->upgradeSchema();
  }

  if ($round == 2) {
    $mState = $this->getModel(Models\State::class);
    $mState->record->recordCreate(['title' => $this->translate('New'), 'code' => 'N', 'color' => '#444444']);
    $mState->record->recordCreate(['title' => $this->translate('Sent to customer'), 'code' => 'S', 'color' => '#444444']);
    $mState->record->recordCreate(['title' => $this->translate('Accepted'), 'code' => 'A', 'color' => '#444444']);
  }
}
```

### A single model

###### apps/AuditLogs/Loader.php

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    $this->getModel(Models\AuditLog::class)->upgradeSchema();
  }
}
```

### Default data for another app

The Workflow app creates default workflows for Deals, Orders, Projects, Tasks and the HR apps (see [Workflow integration](../integrations/workflow)). Records that reference other apps' tables belong to round 2:

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    $this->getModel(Models\Book::class)->upgradeSchema();
  }

  if ($round == 2) {
    // Round 2: all tables of all apps exist now
    $mWorkflow = $this->getModel(\Hubleto\App\Community\Workflow\Models\Workflow::class);
    $mWorkflow->record->recordCreate([ 'name' => $this->translate('Book reviews'), 'group' => 'my_first_app_books', 'show_in_kanban' => 1 ]);
  }
}
```

## Rules

  * **Install every model** of the app in round 1. A model that is not installed has no table.
  * **Translate default data** with `$this->translate()`. `php hubleto init` sets the admin's language before installing apps.
  * **Keep `installApp()` and the `Models/` folder in sync.** `php hubleto migrate` works with all models in `Models/`, but `installApp()` only with the models you list.
  * **Don't put demo data here.** Use [`generateDemoData()`](generate-demo-data).
  * **Declare dependencies** in `manifest.yaml` (`requires`) if your default data needs another app.

## Installing and reinstalling an app

###### Install a single app

```bash
php hubleto app install Hubleto\App\Custom\MyFirstApp
php hubleto app install MyFirstApp          # short names expand to Hubleto\App\Custom\...
```

###### Reinstall an installed app

```bash
php hubleto app install MyFirstApp force
```

> **NOTE** `php hubleto app install` runs **only round 1**. Round 2 data and round 3 (permissions and foreign keys) are not executed. Run `php hubleto migrate` afterwards to create the foreign keys.

`upgradeSchema()` only runs **pending** migrations. The index of the last installed migration is stored in the `config` table under `models/<Model class>/installed-migration-tables` and `models/<Model class>/installed-migration-foreign-keys` (`0` = the first migration). Reinstalling an app whose migrations are already installed does not create the tables again.

Other app commands:

| Command                                 | Description                                                         |
| --------------------------------------- | ------------------------------------------------------------------- |
| `php hubleto app list`                  | List installed apps.                                                |
| `php hubleto app disable <app>`         | Disable an app. Its data is kept.                                   |
| `php hubleto app reset-all`             | Reinstall all apps to their "factory" state (runs round 1 for all). |
App commands.

## Generated code

`php hubleto create model` inserts the `upgradeSchema()` call at the `//@hubleto-cli:upgrade-schema` marker:

###### src/apps/MyFirstApp/Loader.php after `php hubleto create model MyFirstApp Book`

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    // install your models here
    // Example: $this->getModel(Models\Contact::class)->upgradeSchema();

    // DO NOT DELETE FOLLOWING LINE, OR `php hubleto` WILL NOT GENERATE CODE HERE
    //@hubleto-cli:upgrade-schema
    $this->getModel(Models\Book::class)->upgradeSchema();
  }
  if ($round == 2) {
    // do something in the 2nd round, if required
  }
  if ($round == 3) {
    // do something in the 3rd round, if required
  }
}
```
