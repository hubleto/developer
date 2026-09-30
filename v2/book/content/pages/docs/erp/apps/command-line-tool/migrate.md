# Using php hubleto migrate

## Purpose

`php hubleto migrate` applies **pending migrations** of installed apps. Use it after:

  * you added a new migration to your app (e.g. `Deal_0005.php`),
  * you updated Hubleto or an app, and the update contains new migrations,
  * you created a model and its first migration with the CLI.

## Syntax

```
php hubleto migrate [appNamespace] [model] [dry-run]
```

| Command                                        | Effect                                                          |
| ---------------------------------------------- | --------------------------------------------------------------- |
| `php hubleto migrate`                          | All models of all installed apps.                               |
| `php hubleto migrate dry-run`                  | Only list pending migrations of all apps. Nothing is changed.   |
| `php hubleto migrate MyFirstApp`               | All models of one app.                                          |
| `php hubleto migrate MyFirstApp Book`          | One model.                                                      |
| `php hubleto migrate MyFirstApp Book dry-run`  | Only list pending migrations of one model.                      |
Forms of the command.

A model can't be given without an app: `<model> provided without <appNamespace>. Please provide the app namespace to migrate for a specific model.`

## Output

###### php hubleto migrate dry-run

```
Hubleto CLI agent (release [dev-main]).

This is dry run. I will not install any migration.
Hubleto\App\Custom\MyFirstApp\Models\Book has 1 pending migration
  -> Hubleto\App\Custom\MyFirstApp\Models\Migrations\Book_0001

Pending migrations successfully applied!
```

###### php hubleto migrate

```
Hubleto CLI agent (release [dev-main]).

Installing tables...
Hubleto\App\Custom\MyFirstApp\Models\Book has 1 pending migration
  -> Hubleto\App\Custom\MyFirstApp\Models\Migrations\Book_0001

Installing foreign keys...
Hubleto\App\Custom\MyFirstApp\Models\Book has 1 pending migration
  -> Hubleto\App\Custom\MyFirstApp\Models\Migrations\Book_0001

Pending migrations successfully applied!
```

> **NOTE** The dry run also prints *"Pending migrations successfully applied!"* at the end, even though nothing was applied.

## How it works

###### From Hubleto\Erp\Cli\Agent\CommandMigrate::run() (simplified)

```php
$this->db()->startTransaction();

for ($round = 1; $round <= ($dryRun ? 1 : 2); $round++) {
  foreach ($appQueue as $app) {
    $modelClasses = empty($model) ? $app->getAvailableModelClasses() : [$appNamespace . '\\Models\\' . $model];

    foreach ($modelClasses as $modelClass) {
      $modelObject = new $modelClass;

      if ($round == 1) {
        $pendingMigrations = $modelObject->getPendingMigrations(InstalledMigrationEnum::TABLES);
      } else {
        $pendingMigrations = $modelObject->getPendingMigrations(InstalledMigrationEnum::FOREIGN_KEYS);
      }

      if (count($pendingMigrations) > 0 && !$dryRun) {
        if ($round == 1) {
          $modelObject->upgradeSchema();       // upgradeSchema() of all pending migrations
        } else {
          $modelObject->upgradeForeignKeys();  // upgradeForeignKeys() of all pending migrations
        }
      }
    }
  }
}

$this->db()->commit();
```

  1. **Round 1** runs `upgradeSchema()` of pending migrations of all models. **Round 2** runs `upgradeForeignKeys()`. Tables of all apps exist before any foreign key is created, so the order of apps doesn't matter.
  2. The models are found by scanning each app's `Models/` folder (`getAvailableModelClasses()`). Unlike `installApp()`, you don't need to list them.
  3. A model's migrations are the files `Models/Migrations/<Model>_*.php`, sorted by name. The index of the last installed migration is stored in the `config` table, separately for tables and foreign keys.
  4. Everything runs in a database transaction. A `DBException` rolls it back.

> **NOTE** MySQL/MariaDB commits DDL statements (`CREATE`, `ALTER`, `DROP`) implicitly. A failing migration may leave earlier DDL changes applied even though the transaction is rolled back. Test migrations on a copy of the database.

## Writing a new migration

To change the schema of an existing model, add the next migration file and describe the change in `describeColumns()` as well:

###### 1. src/apps/MyFirstApp/Models/Migrations/Book_0002.php

```php
<?php

namespace Hubleto\App\Custom\MyFirstApp\Models\Migrations;

use Hubleto\Framework\Migration;

class Book_0002 extends Migration
{
  public function upgradeSchema(): void
  {
    $this->db->execute('alter table `books` add `isbn` varchar(20)');
    $this->db->execute('alter table `books` add `id_owner` int(8) NULL default NULL');
    $this->db->execute('alter table `books` add index(`id_owner`)');
  }

  public function downgradeSchema(): void
  {
    $this->db->execute('alter table `books` drop `isbn`');
    $this->db->execute('alter table `books` drop `id_owner`');
  }

  public function upgradeForeignKeys(): void
  {
    $this->db->execute("
      ALTER TABLE `books` ADD CONSTRAINT `fk__books__id_owner` FOREIGN KEY (`id_owner`)
      REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
    ");
  }

  public function downgradeForeignKeys(): void
  {
    $this->db->execute("ALTER TABLE `books` DROP FOREIGN KEY `fk__books__id_owner`;");
  }
}
```

###### 2. src/apps/MyFirstApp/Models/Book.php

```php
'isbn' => (new Varchar($this, $this->translate('ISBN')))->setDefaultVisible(),
'id_owner' => (new Lookup($this, $this->translate('Owner'), User::class))
  ->setReactComponent('InputUserSelect')
  ->setDefaultValue($this->authProvider()->getUserId()),
```

###### 3. Apply it

```bash
php hubleto migrate MyFirstApp Book dry-run   # check what will run
php hubleto migrate MyFirstApp Book
```

A real example of the same pattern is `apps/Deals/Models/Migrations/Deal_0004.php` (adds `id_document` with a foreign key to `documents`).

## Tips

  * Run `php hubleto migrate dry-run` after every update of Hubleto to see what will change.
  * Never edit a migration that was already applied somewhere. Add a new one.
  * Don't use `php hubleto create migration` for changes. It overwrites `<Model>_0001.php` and generates `drop table`.
  * `migrate` only handles **installed** apps. Install a new app with `php hubleto app install` first.
