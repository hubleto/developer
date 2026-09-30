# Using php hubleto create model

## Purpose

`php hubleto create model` adds a model to an existing app. It generates three files (the model, its record manager and the first migration) and adds the model to the app's `installApp()`.

```bash
php hubleto create model MyFirstApp Book
```

## Syntax

```
php hubleto create model <appNamespace> <model> [force] [noPrompt]
```

| Argument         | Description                                                             |
| ---------------- | ----------------------------------------------------------------------- |
| `appNamespace`   | The app, e.g. `MyFirstApp` or `Hubleto\App\Custom\MyFirstApp`. The app must be installed. |
| `model`          | Model name in singular PascalCase, e.g. `Book`, `LeaveRequest`.         |
| `force`          | Any non-empty value: overwrite existing files.                          |
| `noPrompt`       | Any non-empty value: reinstall the app without asking.                  |
Arguments.

## Output

Real output:

```
$ php hubleto create model MyFirstApp Book
Hubleto CLI agent (release [dev-main]).
Code inserted into '/var/www/html/hubleto/src/apps/MyFirstApp/Loader.php' under '//@hubleto-cli:upgrade-schema'.

Model 'Book' in 'Hubleto\App\Custom\MyFirstApp' with sample set of columns created successfully.
Do you want to re-install the app with your new model now?:   -> yes
Hubleto\App\Custom\MyFirstApp installed successfully.

💡  TIPS:
💡  -> Add controllers, views and some UI components to manage data in your model.
💡  ->   php hubleto create mvc Hubleto\App\Custom\MyFirstApp Book
```

## Generated and modified files

```
src/apps/MyFirstApp/
├─ Models/
│  ├─ Migrations/
│  │  └─ Book_0001.php       # new: first migration (EMPTY, see below)
│  ├─ RecordManagers/
│  │  └─ Book.php            # new: record manager
│  └─ Book.php               # new: model with sample columns
└─ Loader.php                # modified: upgradeSchema() added to installApp()
```

Names are derived from the model name:

| Item            | Value for `Book`                 | Rule                                   |
| --------------- | -------------------------------- | -------------------------------------- |
| SQL table       | `books`                          | lower case + `s`                       |
| URL part        | `books`                          | plural in kebab-case                   |
| Lookup URL      | `myfirstapp/books/{{ '{%' }}ID{{ '%}' }}`        | `<rootUrlSlug>/<plural-kebab>/{{ '{%' }}ID{{ '%}' }}`  |
Derived names.

> **TIP** The plural is always made by adding `s`. For models like `Category`, rename the table (`categorys`) in the model, record manager and migration before you apply the migration.

### Models/Book.php (shortened)

The model contains three sample columns and many commented examples (dates, enums, colors, files, owner and manager):

```php
<?php

namespace Hubleto\App\Custom\MyFirstApp\Models;

use Hubleto\Framework\Db\Column\Decimal;
use Hubleto\Framework\Db\Column\Text;
use Hubleto\Framework\Db\Column\Varchar;
use Hubleto\App\Community\Auth\Models\User;
// ... more use statements

class Book extends \Hubleto\Framework\Model
{
  // Enum constants for improving readability of the code
  const ENUM_ONE = 1;
  const ENUM_TWO = 2;
  const ENUM_THREE = 3;

  public string $table = 'books';
  public string $recordManagerClass = RecordManagers\Book::class;

  public ?string $lookupSqlValue = 'concat("Book #", {{ '{%' }}TABLE{{ '%}' }}.id)';
  public ?string $lookupUrlDetail = 'myfirstapp/books/{{ '{%' }}ID{{ '%}' }}';

  public array $relations = [
    'OWNER' => [ self::BELONGS_TO, User::class, 'id_owner', 'id' ],
    'MANAGER' => [ self::BELONGS_TO, User::class, 'id_manager', 'id' ],
  ];

  public function describeColumns(): array
  {
    return array_merge(parent::describeColumns(), [
      'varchar_example' => (new Varchar($this, $this->translate('Varchar')))->setDefaultVisible()
        ->setCssClass('text-2xl text-primary'),
      'text_example' => (new Text($this, $this->translate('Text')))->setDefaultVisible()
        ->setCssClass('text-2xl text-primary'),
      'decimal_example' => (new Decimal($this, $this->translate('Number')))->setDefaultVisible()
        ->setCssClass('text-2xl text-primary')
        ->setDecimals(4),
      // 'date_example' => ...
      // 'integer_example' => ... ->setEnumValues(self::INTEGER_ENUM_VALUES)
      // 'id_owner' => (new Lookup($this, $this->translate('Owner'), User::class))->setReactComponent('InputUserSelect') ...
    ]);
  }

  public function describeTable(): \Hubleto\Framework\Description\Table
  {
    $description = parent::describeTable();
    $description->ui['addButtonText'] = 'Add Book';
    $description->show(['header', 'fulltextSearch', 'columnSearch', 'moreActionsButton']);
    $description->hide(['footer']);
    return $description;
  }

  // Commented examples of describeForm(), onBeforeCreate(), onAfterCreate(),
  // onBeforeUpdate() and onAfterUpdate() follow.
}
```

### Models/RecordManagers/Book.php (shortened)

```php
<?php

namespace Hubleto\App\Custom\MyFirstApp\Models\RecordManagers;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Hubleto\App\Community\Settings\Models\RecordManagers\User;

class Book extends \Hubleto\Framework\RecordManager
{
  public $table = 'books';

  public function OWNER(): BelongsTo {
    return $this->belongsTo(User::class, 'id_owner', 'id');
  }

  public function MANAGER(): BelongsTo {
    return $this->belongsTo(User::class, 'id_manager', 'id');
  }

  public function prepareReadQuery(mixed $query = null, int $level = 0, array|null $includeRelations = null): mixed
  {
    $query = parent::prepareReadQuery($query, $level, $includeRelations);

    // Uncomment and modify these lines if you want to apply filtering based on URL parameters
    // if ($hubleto->router()->urlParamAsInteger("idCustomer") > 0) { ... }

    return $query;
  }
}
```

### Models/Migrations/Book_0001.php

```php
<?php

namespace Hubleto\App\Custom\MyFirstApp\Models\Migrations;

use Hubleto\Framework\Migration;

class Book_0001 extends Migration
{
  public function upgradeSchema(): void
  {
  }

  public function downgradeSchema(): void
  {
  }

  public function upgradeForeignKeys(): void
  {
  }

  public function downgradeForeignKeys(): void
  {
  }
}
```

### Loader.php (modified)

```php
public function installApp(int $round): void
{
  if ($round == 1) {
    // DO NOT DELETE FOLLOWING LINE, OR `php hubleto` WILL NOT GENERATE CODE HERE
    //@hubleto-cli:upgrade-schema
    $this->getModel(Models\Book::class)->upgradeSchema();
  }
}
```

## Important: the first migration is empty

The generated `Book_0001.php` contains no SQL. If you reinstall the app or run `php hubleto migrate` now, this empty migration is marked as installed, and **the `books` table is never created**.

The correct order is:

  1. `php hubleto create model MyFirstApp Book`, and answer **no** to the reinstall question.
  2. Edit `describeColumns()` in `Models/Book.php` to define your real columns.
  3. `php hubleto create migration MyFirstApp Book`. It rewrites `Book_0001.php` with `CREATE TABLE` generated from `describeColumns()`.
  4. Check the generated SQL.
  5. `php hubleto migrate MyFirstApp Book`.

###### Output of php hubleto create migration MyFirstApp Book

```
Hubleto CLI agent (release [dev-main]).

Migration Hubleto\App\Custom\MyFirstApp\Models\Book_0001.php in 'Hubleto\App\Custom\MyFirstApp' created successfully.

💡  TIPS:
💡  -> Make sure to verify whether the generated migrations are correct.
```

###### Models/Migrations/Book_0001.php after php hubleto create migration

```php
public function upgradeSchema(): void
{
  $this->db->execute("set foreign_key_checks = 0;
drop table if exists `books`;
set foreign_key_checks = 1;");
  $this->db->execute("SET foreign_key_checks = 0;
create table `books` (
 `id` int(8) primary key auto_increment,
 `varchar_example` varchar(255) ,
 `text_example` text ,
 `decimal_example` decimal(14, 4) ,
 index `id` (`id`)) ENGINE = InnoDB;
SET foreign_key_checks = 1;");
}
```

> **NOTE** If the empty migration is already marked as installed, `migrate` won't run it again. Either create the table with a new migration `Book_0002.php`, or, in a development database, delete the rows `models/Hubleto\App\Custom\MyFirstApp\Models\Book/installed-migration-tables` and `.../installed-migration-foreign-keys` from the `config` table. Then all migrations of the model are pending again.

> **CAUTION** `php hubleto create migration` always writes `<Model>_0001.php` and the generated SQL starts with `drop table if exists`. Use it only for the first migration of a new model. Write later changes (`Book_0002.php`, ...) by hand with `ALTER TABLE`, as in [Design principles for models](../design-principles/models).

## Recommended changes to the generated code

The templates are a starting point. Before you build on them:

| Change                                                                                 | Why                                                                     |
| -------------------------------------------------------------------------------------- | ----------------------------------------------------------------------- |
| Extend `\Hubleto\Erp\Model` instead of `\Hubleto\Framework\Model`                      | Custom columns, record permissions and audit log, like the community apps. |
| Extend `\Hubleto\Erp\RecordManager` instead of `\Hubleto\Framework\RecordManager`      | Filtering by owner, manager, team and `shared_with`.                     |
| In the record manager, replace `use Hubleto\App\Community\Settings\Models\RecordManagers\User;` with `use Hubleto\App\Community\Auth\Models\RecordManagers\User;` | The User record manager lives in the Auth app. The generated import points to a class that doesn't exist. |
| Remove the `OWNER`/`MANAGER` relations, or uncomment the `id_owner`/`id_manager` columns | The relations reference columns that are commented out.                |
| Replace the sample columns and the `lookupSqlValue`                                    | `'concat("Book #", {{ '{%' }}TABLE{{ '%}' }}.id)'` is only a placeholder.               |
| Translate `addButtonText`                                                               | `$this->translate('Add Book')`.                                         |
Recommended changes.
