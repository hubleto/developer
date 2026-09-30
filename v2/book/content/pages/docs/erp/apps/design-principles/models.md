# Design principles for models, record managers and migrations

Data in Hubleto is handled by three classes per SQL table:

| Class                                    | Extends                           | Responsibility                                                                                  |
| ---------------------------------------- | --------------------------------- | ----------------------------------------------------------------------------------------------- |
| **Model** `Models/Deal.php`              | `Hubleto\Erp\Model`               | *What* the data is: table name, columns, relations, lookups, UI description, business callbacks. |
| **Record manager** `Models/RecordManagers/Deal.php` | `Hubleto\Erp\RecordManager` | *How* the data is read and written: Eloquent relations, read queries, filters, search, sorting.  |
| **Migration** `Models/Migrations/Deal_0001.php` | `Hubleto\Framework\Migration` | *How the table is created and changed*: SQL for tables, indexes and foreign keys.                 |
Three classes per table.

The model owns its record manager. You always work with the model and reach the record manager through `$model->record`:

```php
/** @var \Hubleto\App\Community\Deals\Models\Deal $mDeal */
$mDeal = $this->getModel(\Hubleto\App\Community\Deals\Models\Deal::class);

$openDeals = $mDeal->record->prepareReadQuery()
  ->where('deals.is_closed', false)
  ->get()
  ->toArray();
```

> **Convention** Variables holding a model start with `m`: `$mDeal`, `$mContact`, `$mWorkflowStep`.

## Models

### Principles

  1. **One model per table, singular name.** `Deal` for table `deals`, `LeaveRequest` for `hr_leave_requests`.
  2. **Extend `Hubleto\Erp\Model`**, not the framework model. You get custom columns, record permissions and audit logging.
  3. **Define every column in `describeColumns()`** with a column object. The model is the single source of truth for the database schema *and* the UI.
  4. **Translate every title** with `$this->translate()`.
  5. **Use constants for enum values** and keep the labels in a constant array.
  6. **Keep business rules in callbacks** (`onBeforeCreate()`, `onAfterUpdate()`, ...). Always call the parent method, because it fires the `onModel*` events that other apps listen to.

### Anatomy of a model

###### apps/Deals/Models/Deal.php (shortened)

```php
<?php

namespace Hubleto\App\Community\Deals\Models;

use Hubleto\Framework\Db\Column\Boolean;
use Hubleto\Framework\Db\Column\Decimal;
use Hubleto\Framework\Db\Column\Integer;
use Hubleto\Framework\Db\Column\Lookup;
use Hubleto\Framework\Db\Column\Varchar;
use Hubleto\Framework\Db\Column\Virtual;
use Hubleto\App\Community\Customers\Models\Customer;
use Hubleto\App\Community\Auth\Models\User;

class Deal extends \Hubleto\Erp\Model
{
  public string $table = 'deals';
  public string $recordManagerClass = RecordManagers\Deal::class;

  // How a deal is displayed when it is selected in a lookup input
  public ?string $lookupSqlValue = 'concat(ifnull({{ '{%' }}TABLE{{ '%}' }}.identifier, ""), " ", ifnull({{ '{%' }}TABLE{{ '%}' }}.title, ""))';
  public ?string $lookupUrlDetail = 'deals/{{ '{%' }}ID{{ '%}' }}';

  public const RESULT_UNKNOWN = 0;
  public const RESULT_WON = 1;
  public const RESULT_LOST = 2;

  public const ENUM_DEAL_RESULTS = [
    self::RESULT_UNKNOWN => "Unknown",
    self::RESULT_WON => "Won",
    self::RESULT_LOST => "Lost",
  ];

  public array $relations = [
    'CUSTOMER' => [ self::BELONGS_TO, Customer::class, 'id_customer', 'id' ],
    'OWNER' => [ self::BELONGS_TO, User::class, 'id_owner', 'id' ],
    'ITEMS' => [ self::HAS_MANY, Item::class, 'id_deal', 'id' ],
    'TAGS' => [ self::HAS_MANY, DealTag::class, 'id_deal', 'id' ],
  ];

  public function describeColumns(): array
  {
    return array_merge(parent::describeColumns(), [
      'identifier' => (new Varchar($this, $this->translate('Deal Identifier')))->setCssClass('badge badge-info')->setDefaultVisible(),
      'title' => (new Varchar($this, $this->translate('Title')))->setRequired()->setDefaultVisible()->setCssClass('font-bold'),
      'id_customer' => (new Lookup($this, $this->translate('Customer'), Customer::class)),
      'price_excl_vat' => new Decimal($this, $this->translate('Price excl. VAT')),
      'id_owner' => (new Lookup($this, $this->translate('Owner'), User::class))
        ->setReactComponent('InputUserSelect')
        ->setDefaultValue($this->authProvider()->getUserId()),
      'is_closed' => (new Boolean($this, $this->translate('Closed')))->setDefaultVisible(),
      'deal_result' => (new Integer($this, $this->translate('Deal Result')))
        ->setEnumValues(self::ENUM_DEAL_RESULTS)
        ->setEnumCssClasses([
          self::RESULT_UNKNOWN => 'bg-yellow-100 text-yellow-800',
          self::RESULT_WON => 'bg-green-100 text-green-800',
          self::RESULT_LOST => 'bg-red-100 text-red-800',
        ])
        ->setDefaultValue(self::RESULT_UNKNOWN),
    ]);
  }
}
```

### Model properties

| Property                        | Description                                                                                         | Example                                          |
| ------------------------------- | --------------------------------------------------------------------------------------------------- | ------------------------------------------------ |
| `$table`                        | SQL table name.                                                                                     | `'deals'`                                        |
| `$recordManagerClass`           | Class of the record manager.                                                                        | `RecordManagers\Deal::class`                     |
| `$relations`                    | Relations: `NAME => [type, model class, foreign key, local key]`.                                   | `'CUSTOMER' => [self::BELONGS_TO, Customer::class, 'id_customer', 'id']` |
| `$lookupSqlValue`               | SQL expression that displays the record in lookups. `{{ '{%' }}TABLE{{ '%}' }}` is replaced by the table alias.     | `'{{ '{%' }}TABLE{{ '%}' }}.name'`                               |
| `$lookupUrlDetail`              | URL of the record detail. `{{ '{%' }}ID{{ '%}' }}` is replaced by the record ID.                                    | `'contacts/{{ '{%' }}ID{{ '%}' }}'`                              |
| `$lookupUrlAdd`                 | URL to create a new record from a lookup input.                                                     | `'contacts/tags/add'`                            |
| `$isExtendableByCustomColumns`  | Allows users to add custom columns to the model in Settings.                                        | `true` in `Contact`                              |
| `$isJunctionTable`              | If `true`, the table has no `id` primary key.                                                       | `false` (default)                                |
| `$disableAuditLog`              | If `true`, the AuditLogs app ignores changes of this model.                                         | `false` (default)                                |
Model properties.

Relation types are the constants `self::BELONGS_TO`, `self::HAS_ONE`, `self::HAS_MANY` and `self::HAS_MANY_THROUGH`. Relation names are in UPPER_CASE, and the same names must exist as methods in the record manager.

### Column types

All column classes are in `Hubleto\Framework\Db\Column`:

| Class       | SQL type       | Typical use                                           |
| ----------- | -------------- | ----------------------------------------------------- |
| `Varchar`   | varchar(255)   | names, titles, identifiers                            |
| `Text`      | text           | notes, descriptions                                   |
| `Integer`   | int            | numbers, enums (`setEnumValues()`)                    |
| `Decimal`   | decimal        | prices, amounts (`setDecimals()`)                     |
| `Boolean`   | int(1)         | flags (`setYesText()`, `setNoText()`)                  |
| `Date`      | date           | dates                                                 |
| `DateTime`  | datetime       | timestamps                                            |
| `Time`      | time           | times                                                 |
| `Lookup`    | int(8) + FK    | foreign keys (`new Lookup($this, 'Title', Model::class)`) |
| `Color`     | char(7)        | colors of tags                                        |
| `Json`      | text           | structured data                                       |
| `File`      | varchar        | uploaded file                                         |
| `Image`     | varchar        | uploaded image                                        |
| `Password`  | varchar        | passwords                                             |
| `Virtual`   | —              | computed value from an SQL subquery (`setProperty('sql', ...)`), not stored |
Column types.

Common setters (all return the column, so they can be chained): `setRequired()`, `setReadonly()`, `setDefaultValue()`, `setDefaultVisible()`, `setAlwaysVisible()`, `setCssClass()`, `setEnumValues()`, `setEnumCssClasses()`, `setPredefinedValues()`, `setReactComponent()`, `setTableCellRenderer()`, `setHint()`, `setUnit()`, `setDecimals()`, `setIcon()`, `setFkOnDelete()`, `setFkOnUpdate()`, `addIndex()`. Details are in [describeColumns()](../description-api/describe-columns).

### Virtual columns

A `Virtual` column is not stored in the table. Its value comes from an SQL subquery, and it can be displayed, searched and sorted like other columns.

###### apps/Contacts/Models/Contact.php (part)

```php
'virt_email' => (new Virtual($this, $this->translate('Emails')))->setDefaultVisible()
  ->setProperty('sql','
    SELECT group_concat(value)
    FROM contact_values
    WHERE contact_values.id_contact = contacts.id
    AND contact_values.type = "email"
  '),
```

### Ownership columns and permissions

`Hubleto\Erp\Model` and `Hubleto\Erp\RecordManager` give record-level permissions automatically when the table has these columns:

| Column        | Meaning                                                        |
| ------------- | -------------------------------------------------------------- |
| `id_owner`    | User who owns the record.                                      |
| `id_manager`  | User who manages the record.                                   |
| `id_team`     | Team the record belongs to.                                    |
| `shared_with` | JSON object `{ "<idUser>": "read" | "modify" }`.               |
Ownership columns.

Add them with the standard inputs:

###### Ownership columns in apps/Deals/Models/Deal.php

```php
'id_owner' => (new Lookup($this, $this->translate('Owner'), User::class))
  ->setReactComponent('InputUserSelect')
  ->setDefaultValue($this->authProvider()->getUserId()),
'id_manager' => (new Lookup($this, $this->translate('Manager'), User::class))
  ->setReactComponent('InputUserSelect')
  ->setDefaultValue($this->authProvider()->getUserId()),
'shared_with' => new Json($this, $this->translate('Shared with'))
  ->setReactComponent('InputSharedWith')
  ->setTableCellRenderer('TableCellRendererSharedWith'),
```

### Callbacks

| Callback                                                    | Called by                         | Typical use                                          |
| ----------------------------------------------------------- | --------------------------------- | ---------------------------------------------------- |
| `onBeforeCreate(array $record): array`                      | `recordCreate()`                  | Set default or computed values.                      |
| `onAfterCreate(array $savedRecord): array`                  | `recordCreate()`                  | Generate identifiers, create history, apply workflow.|
| `onBeforeUpdate(array $record): array`                      | `recordUpdate()`                  | Log changes, validate transitions.                   |
| `onAfterUpdate(array $originalRecord, array $savedRecord): array` | `recordUpdate()`            | Recalculate totals, clean up related records.        |
| `onBeforeDelete(int $id): int` / `onAfterDelete(int $id): int` | `recordDelete()`               | Delete dependent records or files.                   |
| `onAfterLoadRecord(array $record): array`                   | `loadTableData()`                 | Adjust a record before it is sent to the UI.         |
| `onAfterLoadRecords(array $records): array`                 | `loadTableData()`                 | Adjust the whole list.                               |
Model callbacks.

###### apps/Deals/Models/Deal.php, onAfterCreate(): generate the identifier

```php
public function onAfterCreate(array $savedRecord): array
{
  $savedRecord = parent::onAfterCreate($savedRecord);

  if (empty($savedRecord['identifier'])) {
    $identifier = $this->config()->forApp(DealsApp::class)->getAsString('numberingPattern', 'D{YY}-{{ '{#' }}}');
    $identifier = str_replace('{YYYY}', date('Y'), $identifier);
    $identifier = str_replace('{YY}', date('y'), $identifier);
    $identifier = str_replace('{{ '{#' }}}', $savedRecord['id'], $identifier);

    $savedRecord['identifier'] = $identifier;
    $this->record->recordUpdate($savedRecord);
  }

  return $savedRecord;
}
```

###### apps/Contacts/Models/Contact.php, onBeforeCreate(): set a computed value

```php
public function onBeforeCreate(array $record): array
{
  $record['date_created'] = date('Y-m-d');
  return $record;
}
```

> **NOTE** Always call `parent::onAfterCreate()`, `parent::onAfterUpdate()`, etc. The parent methods fire the `onModelAfterCreate`, `onModelAfterUpdate`, ... events. The AuditLogs, Notifications and Workflow apps depend on them.

### Controlling how much data is loaded

| Method                                     | Default | Purpose                                                         |
| ------------------------------------------ | ------- | --------------------------------------------------------------- |
| `getRelationsIncludedInLoadTableData()`    | `null`  | Relations loaded for the table (`null` = all).                  |
| `getMaxReadLevelForLoadTableData()`        | —       | How deep nested relations are loaded for the table.             |
| `getRelationsIncludedInLoadFormData()`     | `null`  | Relations loaded for the form.                                  |
| `getMaxReadLevelForLoadFormData()`         | —       | How deep nested relations are loaded for the form.              |
Methods controlling data loading.

###### apps/Contacts/Models/Contact.php

```php
public function getRelationsIncludedInLoadTableData(): array|null
{
  return ['TAGS', 'VALUES'];
}

public function getMaxReadLevelForLoadTableData(): int
{
  return 2;
}
```

## Record managers

### Principles

  1. **One record manager per model, same file name**, in `Models/RecordManagers/`.
  2. **Extend `Hubleto\Erp\RecordManager`.** It is an Eloquent model, so all Eloquent methods work.
  3. **Define one method per relation** with the same UPPER_CASE name as in the model's `$relations`.
  4. **Put read logic here**: `prepareReadQuery()`, `addUrlFiltersToQuery()`, `addFulltextSearchToQuery()`, `addOrderByToQuery()`, `prepareLookupQuery()`.
  5. **Write with `recordCreate()`, `recordUpdate()` and `recordDelete()`**, not with the raw Eloquent `create()`, `update()` and `delete()`. The `record*()` methods call the model callbacks, normalize values and check permissions.

###### apps/Contacts/Models/RecordManagers/Contact.php (shortened)

```php
<?php

namespace Hubleto\App\Community\Contacts\Models\RecordManagers;

use Hubleto\App\Community\Customers\Models\RecordManagers\Customer;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends \Hubleto\Erp\RecordManager
{
  public $table = 'contacts';

  /** @return BelongsTo<Customer, covariant Contact> */
  public function CUSTOMER(): BelongsTo
  {
    return $this->belongsTo(Customer::class, 'id_customer');
  }

  /** @return HasMany<Value, covariant Contact> */
  public function VALUES(): HasMany
  {
    return $this->hasMany(Value::class, 'id_contact', 'id');
  }

  /** @return HasMany<ContactTag, covariant Contact> */
  public function TAGS(): HasMany
  {
    return $this->hasMany(ContactTag::class, 'id_contact', 'id');
  }

  public function addUrlFiltersToQuery(mixed $query): mixed
  {
    $query = parent::addUrlFiltersToQuery($query);

    $hubleto = \Hubleto\Erp\Loader::getGlobalApp();
    $filters = $hubleto->router()->urlParamAsArray("filters");

    // Show only contacts of one customer, e.g. in the customer's form
    if ($hubleto->router()->urlParamAsInteger("idCustomer") > 0) {
      $query = $query->where($this->table . '.id_customer', $hubleto->router()->urlParamAsInteger("idCustomer"));
    }

    // Filter "fTag" is defined in Contact::describeTable()
    if (isset($filters['fTag']) && is_array($filters['fTag']) && count($filters['fTag']) > 0) {
      $query = $query->whereHas('TAGS', function($q) use ($filters) {
        $q->whereIn('contact_contact_tags.id_tag', $filters['fTag']);
      });
    }

    return $query;
  }
}
```

> **NOTE** The Eloquent relations in the record manager point to **record manager** classes (e.g. `RecordManagers\Customer`), while `$relations` in the model points to **model** classes.

### Methods to override

| Method                                                        | Called when                                        | Purpose                                                  |
| ------------------------------------------------------------- | -------------------------------------------------- | -------------------------------------------------------- |
| `prepareReadQuery($query, $level, $includeRelations)`         | every read (tables, forms, lookups, your code)     | Base query: selects, joins, relations, permission filter. Add computed selects here. |
| `addUrlFiltersToQuery($query)`                                | `loadTableData()`                                  | Filters from URL parameters and table filters.           |
| `addFulltextSearchToQuery($query, $fulltextSearch)`           | `loadTableData()`                                  | Search box of the table.                                 |
| `addColumnSearchToQuery($query, $columnSearch)`               | `loadTableData()`                                  | Search in individual columns.                            |
| `addOrderByToQuery($query, $orderBy)`                         | `loadTableData()`                                  | Sorting.                                                 |
| `prepareLookupQuery($search)` / `prepareLookupData($dataRaw)` | lookup inputs (`api/record/lookup`)                | Which records a lookup offers and how they look.         |
Record manager methods.

###### Sorting by a virtual column (apps/Contacts/Models/RecordManagers/Contact.php)

```php
public function addOrderByToQuery(mixed $query, array $orderBy): mixed
{
  if (($orderBy['field'] ?? null) === 'virt_tags') {
    return $query->orderBy('tags_count', $orderBy['direction']);
  }
  return parent::addOrderByToQuery($query, $orderBy);
}
```

###### Restricting a lookup (apps/Contacts/Models/RecordManagers/Contact.php)

```php
public function prepareLookupQuery(string $search): mixed
{
  $hubleto = \Hubleto\Erp\Loader::getGlobalApp();
  $idCustomer = $hubleto->router()->urlParamAsInteger('idCustomer');

  $query = parent::prepareLookupQuery($search);

  // Offer only contacts of the selected customer
  if ($idCustomer > 0) {
    $query->where($this->table . '.id_customer', $idCustomer);
  }

  return $query;
}
```

### Record API

| Method                                           | Description                                                                   |
| ------------------------------------------------ | ----------------------------------------------------------------------------- |
| `recordCreate(array $record): array`             | Creates a record. Calls `onBeforeCreate()` and `onAfterCreate()`. Returns the record with `id`. |
| `recordUpdate(array $record, array $originalRecord = []): array` | Updates a record. Calls `onBeforeUpdate()` and `onAfterUpdate()`. |
| `recordDelete(int $id): int`                     | Deletes a record after checking permissions. Calls the delete callbacks.     |
| `recordSave(array $record, ...)`                 | Creates or updates, including related records (`saveRelations`). Used by forms. |
| `recordRead($query): array`                      | Reads one record from a query.                                                |
| `loadTableData(...)` / `loadFormData($id)`       | Loads data for tables and forms (used by the generic API).                    |
Record API.

###### Creating default records in installApp() (apps/Contacts/Loader.php)

```php
$mTag = $this->getModel(Models\Tag::class);
$mTag->record->recordCreate([ 'name' => "CEO", 'color' => '#4caf50' ]);
$mTag->record->recordCreate([ 'name' => "Sales", 'color' => '#2196f3' ]);
```

## Migrations

### Principles

  1. **Each change of the schema is a new migration.** Never edit a migration that is already released.
  2. **Name migrations `<Model>_<NNNN>.php`**, starting with `0001`. The model finds its migrations by the file name prefix.
  3. **Implement all four methods**: `upgradeSchema()`, `downgradeSchema()`, `upgradeForeignKeys()`, `downgradeForeignKeys()`.
  4. **Keep foreign keys in `upgradeForeignKeys()`**. Hubleto creates all tables first and all foreign keys later, so the order of tables does not matter.
  5. **Generate the first migration** with `php hubleto create migration <app> <Model>` from `describeColumns()`, then check it.

###### apps/Deals/Models/Migrations/Deal_0004.php: add a column with a foreign key

```php
<?php

namespace Hubleto\App\Community\Deals\Models\Migrations;

use Hubleto\Framework\Migration;

class Deal_0004 extends Migration
{
  public function upgradeSchema(): void
  {
    $this->db->execute('alter table `deals` add `id_document` int(8)');
    $this->db->execute('alter table `deals` add index(`id_document`)');
  }

  public function downgradeSchema(): void
  {
    $this->db->execute('alter table `deals` drop `id_document`');
  }

  public function upgradeForeignKeys(): void
  {
    $this->db->execute("
      ALTER TABLE `deals` ADD CONSTRAINT `fk__deals__id_document` FOREIGN KEY (`id_document`)
      REFERENCES `documents` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
    ");
  }

  public function downgradeForeignKeys(): void
  {
    $this->db->execute("ALTER TABLE `deals` DROP FOREIGN KEY `fk__deals__id_document`;");
  }
}
```

### How migrations are applied

`$model->upgradeSchema()` runs all pending `upgradeSchema()` methods. `$model->upgradeForeignKeys()` runs all pending `upgradeForeignKeys()` methods. The number of the last installed migration is stored in the configuration, separately for tables and for foreign keys:

###### From Hubleto\Framework\Model

```php
public function upgradeSchema(): void
{
  $pendingMigrations = $this->getPendingMigrations(InstalledMigrationEnum::TABLES);

  foreach ($pendingMigrations as $migration) {
    if ($migration instanceof Migration) {
      $migration->upgradeSchema();
    }
  }

  $this->config()->save(
    'models/' . str_replace("/", "-", $this->fullName) . '/' . InstalledMigrationEnum::TABLES->toString(),
    $this->getLatestMigration()
  );
}
```

  * During installation, you call `upgradeSchema()` in `installApp()` round 1. Hubleto calls `upgradeForeignKeys()` for all models in round 3.
  * After an update of the code, run [`php hubleto migrate`](../command-line-tool/migrate) to apply new migrations.

## Checklist for a new model

| Step | Done by                                          |
| ---- | ------------------------------------------------ |
| Create `Models/Book.php` with `describeColumns()` | `php hubleto create model MyApp Book` |
| Create `Models/RecordManagers/Book.php`           | `php hubleto create model MyApp Book` |
| Create `Models/Migrations/Book_0001.php`          | `php hubleto create model` (empty) or `php hubleto create migration` (generated SQL) |
| Add `upgradeSchema()` to `installApp()` round 1  | `php hubleto create model` (at the `//@hubleto-cli:upgrade-schema` marker) |
| Apply the migration                               | `php hubleto migrate MyApp Book`      |
Checklist for a new model.
