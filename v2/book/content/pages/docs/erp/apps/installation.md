# Installation

Installing an app means creating its database tables, filling them with default data (lists, tags, states), enabling the app and assigning permissions. Demo data is a separate, optional step.

Two methods of the loader handle it:

| Method                             | When it runs                                                           | Purpose                                     |
| ---------------------------------- | ---------------------------------------------------------------------- | ------------------------------------------- |
| `installApp(int $round): void`     | `php hubleto init`, `php hubleto app install`, `create app/model/mvc` (when you answer *yes*) | Tables and default data.  |
| `generateDemoData(): void`         | `php hubleto init` with `generateDemoData: true`                       | Sample records for demos and development.   |
Installation methods.

###### apps/Contacts/Loader.php (shortened)

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    $mCategory = $this->getModel(Models\Category::class);
    $mContact = $this->getModel(Models\Contact::class);
    $mTag = $this->getModel(Models\Tag::class);

    $mCategory->upgradeSchema();
    $mContact->upgradeSchema();
    $mTag->upgradeSchema();

    $mCategory->record->recordCreate([ 'name' => $this->translate('Work') ]);
    $mCategory->record->recordCreate([ 'name' => $this->translate('Home') ]);

    $mTag->record->recordCreate([ 'name' => "CEO", 'color' => '#4caf50' ]);
    $mTag->record->recordCreate([ 'name' => "Sales", 'color' => '#2196f3' ]);
  }
}
```

## The whole installation process

`php hubleto init` installs a new project in this order:

###### From Hubleto\Erp\Cli\Agent\CommandInit::run()

```php
$installer->createFoldersAndFiles();
$installer->createDatabase();
$installer->installBaseModels();

$installer->installApps(1);   // "Creating tables, round #1."
$installer->installApps(2);   // "Creating tables, round #2."
$installer->installApps(3);   // "Creating tables, round #3. (Creating foreign keys.)"

$installer->addCompanyAndAdminUser();
$this->appManager()->init();

if ($generateDemoData) {
  $this->getService(\Hubleto\Erp\Cli\Agent\Project\GenerateDemoData::class)->run();
}
```

Each round runs for **all apps** before the next round starts. That's why an app can use tables of other apps in round 2.

## Pages in this chapter

| Page                                                                                  | Summary                                                          |
| ------------------------------------------------------------------------------------- | ---------------------------------------------------------------- |
| [Installation of all app's models using Loader::installApp()](installation/install-app) | Rounds, table creation, default data, reinstalling an app.      |
| [Generating demo data using Loader::generateDemoData()](installation/generate-demo-data) | Writing demo data that works on every installation.            |
Pages in the Installation chapter.
