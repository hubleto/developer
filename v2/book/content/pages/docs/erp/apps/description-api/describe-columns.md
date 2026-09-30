# Model's describeColumns() method

## Purpose

`describeColumns()` defines the columns of the model. It is the **most important method of a model**, because everything else is derived from it:

  * the SQL table (`php hubleto create migration` generates `CREATE TABLE` from it),
  * validation and normalization of values when records are saved,
  * the columns of tables (`describeTable()`),
  * the inputs of forms (`describeInput()`, `describeForm()`),
  * fulltext search, column search and sorting,
  * CSV import and export.

The method returns an associative array `column name => column object`. It is called once, in the model's constructor. The result is available through `$model->getColumns()` and `$model->getColumn('name')`.

## Basic structure

###### apps/HrLeave/Models/LeaveRequest.php

```php
public function describeColumns(): array
{
  return array_merge(parent::describeColumns(), [
    'id_user' => (new Lookup($this, $this->translate('Employee'), User::class))->setReactComponent('InputUserSelect')->setDefaultVisible()->setRequired(),
    'id_leave_type' => (new Lookup($this, $this->translate('Leave type'), LeaveType::class))->setDefaultVisible()->setRequired(),
    'date_from' => (new Date($this, $this->translate('From')))->setDefaultVisible()->setRequired(),
    'date_to' => (new Date($this, $this->translate('To')))->setDefaultVisible()->setRequired(),
    'balance_year' => (new Integer($this, $this->translate('Balance year')))->setDefaultVisible()->setRequired()->setDefaultValue((int) date('Y')),
    'days_requested' => (new Decimal($this, $this->translate('Days requested')))->setDecimals(2)->setRequired(),
    'id_approver' => (new Lookup($this, $this->translate('Approver'), User::class))->setReactComponent('InputUserSelect'),
    'date_decided' => (new Date($this, $this->translate('Decision date'))),
    'reason' => (new Text($this, $this->translate('Reason'))),
    'id_workflow' => (new Lookup($this, $this->translate('Workflow'), WorkflowModel::class))->setReadonly(),
    'id_workflow_step' => (new Lookup($this, $this->translate('Approval step'), WorkflowStep::class))->setDefaultVisible()->setReadonly(),
  ]);
}
```

Rules:

  * **Always merge with `parent::describeColumns()`.** The framework parent adds the `id` primary key. `Hubleto\Erp\Model` also adds the *custom columns* that users defined in Settings (when `$isExtendableByCustomColumns` is `true`).
  * **Every column object gets `$this` (the model) and a translated title** as the first two constructor arguments.
  * **The array key is the SQL column name.** Use snake_case. Foreign keys start with `id_`, virtual columns with `virt_`.

> **TIP** The order of `array_merge()` decides where custom columns appear. `array_merge(parent::describeColumns(), [...])` puts `id` and custom columns first. `array_merge([...], parent::describeColumns())` (used in `Contact`) puts them last.

## Column types

| Class (`Hubleto\Framework\Db\Column\...`) | `type` in JSON | Constructor                                      | Notes                                           |
| ----------------------------------------- | -------------- | ------------------------------------------------ | ----------------------------------------------- |
| `Varchar`                                 | `varchar`      | `new Varchar($this, $title)`                     | 255 characters                                  |
| `Text`                                    | `text`         | `new Text($this, $title)`                        | long text                                       |
| `Integer`                                 | `int`          | `new Integer($this, $title)`                     | enums with `setEnumValues()`                    |
| `Decimal`                                 | `decimal`      | `new Decimal($this, $title)`                     | `setDecimals()`, `setUnit()`                    |
| `Boolean`                                 | `boolean`      | `new Boolean($this, $title)`                     | `setYesText()`, `setNoText()`                   |
| `Date`, `DateTime`, `Time`, `Year`        | `date`, ...    | `new Date($this, $title)`                        |                                                 |
| `Lookup`                                  | `lookup`       | `new Lookup($this, $title, Model::class, 'RESTRICT')` | foreign key to another model               |
| `Color`                                   | `color`        | `new Color($this, $title)`                       | color picker                                    |
| `Json`                                    | `json`         | `new Json($this, $title)`                        | structured data                                 |
| `File`, `Image`                           | `file`, `image`| `new File($this, $title)`                        | upload                                          |
| `Email`, `Password`, `Currency`           | ...            |                                                  |                                                 |
| `Virtual`                                 | `virtual`      | `new Virtual($this, $title)`                     | value from `setProperty('sql', '...')`, not stored |
Column types.

## Column setters

All setters return the column, so you can chain them.

### Data and validation

| Setter                              | Effect                                                              | Example                                                  |
| ----------------------------------- | ------------------------------------------------------------------- | -------------------------------------------------------- |
| `setRequired()`                     | The value must be filled when saving.                               | `->setRequired()`                                        |
| `setReadonly()`                     | The input is read-only in forms.                                    | `->setReadonly()`                                        |
| `setDefaultValue($value)`           | Default value of a new record (sent to the form as `defaultValues`). | `->setDefaultValue(date("Y-m-d"))`                      |
| `setEnumValues(array)`              | List of allowed values `value => label`.                            | `->setEnumValues(self::ENUM_DEAL_RESULTS)`               |
| `setPredefinedValues(array)`        | Suggested values (free text still allowed).                         | `->setPredefinedValues(['Mr.', 'Mrs.'])`                 |
| `setDecimals(int)`                  | Number of decimals.                                                 | `->setDecimals(2)`                                       |
| `setFkOnDelete()`, `setFkOnUpdate()` | Foreign key behaviour of a `Lookup`.                               | `->setFkOnDelete('SET NULL')`                            |
| `addIndex(string)`                  | Extra SQL index.                                                    | `->addIndex('INDEX group_idx (group)')`                  |
Data and validation setters.

### Visibility in tables

| Setter                 | Constant                | Meaning                                                              |
| ---------------------- | ----------------------- | -------------------------------------------------------------------- |
| `setDefaultVisible()`  | `Column::DEFAULT_VISIBLE` | Shown by default. The user can hide it.                            |
| `setDefaultHidden()`   | `Column::DEFAULT_HIDDEN`  | Hidden by default. The user can show it.                           |
| `setAlwaysVisible()`   | `Column::ALWAYS_VISIBLE`  | Always shown.                                                      |
| `setAlwaysHidden()`    | `Column::ALWAYS_HIDDEN`   | Never shown in the table.                                          |
| `setHidden()`          | —                       | Not included in the table description at all (e.g. `force_signout` in `Auth\Models\User`). |
Visibility setters.

> **NOTE** Visibility is applied only when the table has a `tag` (e.g. `string:tag="table-deals"` in the view). Without a tag, all columns except hidden ones are shown. With a tag, the user can reorder and hide columns, and the choice is saved per tag.

### Look and feel

| Setter                               | Effect                                                       | Example (app)                                                               |
| ------------------------------------ | ------------------------------------------------------------ | --------------------------------------------------------------------------- |
| `setCssClass(string)`                | CSS class of the value in tables and forms.                  | `->setCssClass('badge badge-info')` (Deals)                                 |
| `setEnumCssClasses(array)`           | CSS class per enum value.                                    | `[self::RESULT_WON => 'bg-green-100 text-green-800']` (Deals)               |
| `setIcon(string)`                    | Icon next to the input.                                      | `->setIcon(self::COLUMN_EMAIL_DEFAULT_ICON)` (Leads)                        |
| `setUnit(string)`                    | Unit after the value.                                        | `->setUnit("%")` (Deals `Item`, Products)                                   |
| `setColorScale(string)`              | Background color scale for numbers.                          | `->setColorScale('bg-light-blue-to-dark-blue')` (Leads `score`)             |
| `setHint(string)`                    | Help text under the input.                                   | `->setHint($typeDescription)` (Products)                                    |
| `setYesText()`, `setNoText()`        | Labels of a boolean.                                         | `->setYesText('Primary')->setNoText('')` (Contacts)                         |
| `setReactComponent(string)`          | Custom input component.                                      | `'InputUserSelect'`, `'InputHyperlink'`, `'InputSharedWith'`                |
| `setTableCellRenderer(string)`       | Custom table cell component.                                 | `'TableCellRendererSharedWith'` (Deals)                                     |
| `setProperty(name, value)`           | Any extra property (e.g. `sql` of a virtual column).         | `->setProperty('sql', '...')`                                               |
Look-and-feel setters.

`Hubleto\Erp\Model` defines constants with standard icons: `COLUMN_ID_CUSTOMER_DEFAULT_ICON`, `COLUMN_CONTACT_DEFAULT_ICON`, `COLUMN_NAME_DEFAULT_ICON`, `COLUMN_EMAIL_DEFAULT_ICON`, `COLUMN_PHONE_DEFAULT_ICON`, `COLUMN_ADDRESS_DEFAULT_ICON`, `COLUMN_COLOR_DEFAULT_ICON`, ...

## Examples

### Enum stored as integer

###### apps/Deals/Models/Deal.php

```php
public const RESULT_UNKNOWN = 0;
public const RESULT_WON = 1;
public const RESULT_LOST = 2;

public const ENUM_DEAL_RESULTS = [
  self::RESULT_UNKNOWN => "Unknown",
  self::RESULT_WON => "Won",
  self::RESULT_LOST => "Lost",
];

// in describeColumns()
'deal_result' => (new Integer($this, $this->translate('Deal Result')))
  ->setEnumValues(array_map(fn($v) => $this->translate($v), self::ENUM_DEAL_RESULTS))
  ->setEnumCssClasses([
    self::RESULT_UNKNOWN => 'bg-yellow-100 text-yellow-800',
    self::RESULT_WON => 'bg-green-100 text-green-800',
    self::RESULT_LOST => 'bg-red-100 text-red-800',
  ])
  ->setDefaultValue(self::RESULT_UNKNOWN),
```

Resulting input description (from `api/form-describe-and-load`):

```json
"deal_result": {
  "type": "int",
  "title": "Deal Result",
  "enumValues": ["Unknown", "Won", "Lost"],
  "enumCssClasses": ["bg-yellow-100 text-yellow-800", "bg-green-100 text-green-800", "bg-red-100 text-red-800"]
}
```

### Lookup (foreign key)

###### apps/Deals/Models/Deal.php

```php
'id_customer' => (new Lookup($this, $this->translate('Customer'), Customer::class))
  ->setDefaultValue($this->router()->urlParamAsInteger('idCustomer')),
'id_currency' => (new Lookup($this, $this->translate('Currency'), Currency::class))
  ->setFkOnUpdate('RESTRICT')
  ->setFkOnDelete('SET NULL')
  ->setReadonly(),
```

The lookup input shows records of the referenced model using its `$lookupSqlValue`. If the referenced model has `$lookupUrlAdd`, the input gets a *"+"* button (`inputProps.urlAdd`):

```json
"id_customer": {
  "type": "lookup",
  "title": "Customer",
  "model": "Hubleto\\App\\Community\\Customers\\Models\\Customer",
  "inputProps": { "urlAdd": "customers/add" }
}
```

### Users as owner and manager

###### apps/Deals/Models/Deal.php

```php
'id_owner' => (new Lookup($this, $this->translate('Owner'), User::class))
  ->setReactComponent('InputUserSelect')
  ->setDefaultValue($this->authProvider()->getUserId()),
'id_manager' => (new Lookup($this, $this->translate('Manager'), User::class))
  ->setReactComponent('InputUserSelect')
  ->setDefaultValue($this->authProvider()->getUserId()),
```

### Boolean with labels

###### apps/Contacts/Models/Contact.php

```php
'is_primary' => (new Boolean($this, $this->translate('Primary Contact')))
  ->setDefaultValue(0)
  ->setYesText('Primary')
  ->setNoText(''),
'is_valid' => (new Boolean($this, $this->translate('Valid')))
  ->setDefaultValue(1)
  ->setDefaultVisible()
  ->setYesText('Valid')
  ->setNoText('Invalid'),
```

### Read-only value set by the system

###### apps/Contacts/Models/Contact.php

```php
'date_created' => (new Date($this, $this->translate('Date Created')))
  ->setReadonly()
  ->setRequired()
  ->setDefaultValue(date("Y-m-d")),
```

### Virtual column from a subquery

###### apps/Deals/Models/Deal.php

```php
'virt_next_activity_date' => (new Virtual($this, $this->translate('Next activity')))->setDefaultVisible()
  ->setProperty('sql', "
    select `a`.`date_start`
    from `deal_activities` `a`
    where
      `a`.`completed` = 0
      and `a`.`id_deal` = `deals`.`id`
      and `a`.`date_start` >= date(now())
    order by `a`.`date_start` asc
    limit 1
  "),
```

### Enum values provided by other apps

The Products app merges its own product types with types registered by other apps:

###### apps/Products/Models/Product.php (part)

```php
public function describeColumns(): array
{
  $typeEnumValues = array_merge(
    array_map(fn($v) => $this->translate($v), self::TYPE_ENUM_VALUES),
    $this->getService(\Hubleto\App\Community\Products\Loader::class)->productTypes
  );

  return array_merge(parent::describeColumns(), [
    'ean' => (new Varchar($this, $this->translate('EAN')))->setRequired()->setDefaultVisible(),
    'name' => (new Varchar($this, $this->translate('Name')))->setRequired()->setDefaultVisible(),
    'id_group' => (new Lookup($this, $this->translate('Group'), Group::class)),
    'type' => (new Integer($this, $this->translate('Product Type')))->setEnumValues($typeEnumValues)->setDefaultVisible(),
    'is_on_sale' => new Boolean($this, $this->translate('On sale'))->setDefaultVisible(),
  ]);
}
```

## Using columns in your code

```php
$mDeal = $this->getModel(Deal::class);

$columns = $mDeal->getColumns();                  // all column objects
$titleColumn = $mDeal->getColumn('title');        // one column
$hasWorkflow = $mDeal->hasColumn('id_workflow');  // true
$columnNames = $mDeal->columnNames();             // ['id', 'identifier', 'title', ...]

$label = $titleColumn->getTitle();                // "Title" (translated)
$type = $titleColumn->getType();                  // "varchar"
```

The Deals model uses this to write readable change history (`onBeforeUpdate()`): it reads `getTitle()`, `getType()` and `getEnumValues()` of every changed column.

> **NOTE** `describeColumns()` runs in the constructor of every model instance. Keep it free of heavy database queries. If you need values from the database (e.g. filter options), load them in `describeTable()` or `describeForm()` instead.
