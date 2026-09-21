# Complex model with CRUD components

Learn step-by-step how to create complex model and its CRUD components.

## The backend

Complete definition of the model in Hubeto's backend consists of:

  * model itself
  * model's record manager
  * model's migrations

### About the Hubleto model

The **model itself** is stored in `Models` folder and contains:

  * properties for relations and lookup behavior
  * description methods (`describeColumns`, `describeInput`, `describeForm`, `describeTable`),
  * callbacks (`onAfter` and `onBefore`, all for *create*, *save*, *update* and *delete*).

The **record manager** is stored in the `Models/RecordManagers` folder is most often the Laravel's Eloquent class containing methods for relations specified in the model and a *prepareReadQuery* method.

And, finally, **migrations** are stored in the `Models/Migrations` folder and contain SQL migrations for the model in a chronological order.

### Create model from CLI

Creating a new model with its CRUD components requires several steps which are described below.

You can create the model file by executing the `php hubleto create model MyCustomApp MyModel`, just replace the `MyCustomApp` and `MyModel` accordingly.

This command will create `Models/MyModel.php`, `Models/RecordManagers/MyModel.php` and `Models/Migrations/MyModel_0001.php` files.

### Model's basic properties

See the example below of how the model's basic properties should look like. Compare it to your model.

```php
  public string $table = 'accounting_accounts';
  public string $recordManagerClass = RecordManagers\Account::class;
  public ?string $lookupSqlValue = 'concat({{ "{%" }}TABLE{{ "%}" }}.number, " ", {{ "{%" }}TABLE{{ "%}" }}.name)';
  public ?string $lookupUrlAdd = 'accounting/accounts/add';
  public ?string $lookupUrlDetail = 'accounting/accounts/{{ "{%" }}ID{{ "%}" }}';
```
###### Example of `Account` model properties

### Describe the model

Model created from the template contains a sample set of columns (attributes). Modify it to your needs in the `describeColumns()` method.

```php
public function describeColumns(): array {
  return array_merge(parent::describeColumns(), [
    'id_book' => new Lookup($this, $this->translate("Book"), Book::class)->setDefaultVisible(),
    'id_parent' => new Lookup($this, $this->translate("Parent account"), Account::class)->setDefaultVisible(),
    'number' => new Varchar($this, $this->translate("Account number"))->setDefaultVisible()->setRequired()->addIndex('INDEX `number` (`number`)'),
    'name' => new Varchar($this, $this->translate("Account name"))->setDefaultVisible()->setRequired()->setIcon(self::COLUMN_NAME_DEFAULT_ICON),
    'id_type' => new Lookup($this, $this->translate("Account type"), AccountType::class)->setDefaultVisible()->setRequired(),
    'id_category' => new Lookup($this, $this->translate("Account category"), AccountCategory::class)->setDefaultVisible()->setDescription('Closer specification of this accounts purpose')
  ]);
}
```
###### Example of `describeColumns()` for the `Account` model

#### 1:N relations (lookups)

`Lookup` columns define the 1:N relationship between models. They require additional code to work properly:

  * model's `$relation` property must list the relation for the lookup
  * a method in the *RecordManager* must be implemented

For example, let's have `Account` and `Book` models and the `Account` belongs to the `Book` (the 1:N relationship), the `$relations` property of the `Account` model must contain:

```php
public array $relations = [
  'BOOK' => [ self::BELONGS_TO, Book::class, 'id_book', 'id'  ],
];
```
###### Definition of relation between `Account` and `Book`

#### `describeTable()` and `describeForm()`

The `describeTable()` and `describeForm()` methods are part of model's *Description API* providing information about how the UI for managing model's data should look like and behave.

If you created the model from the CLI (the `php hubleto create model` command), you may leave these methods unchanged.

### Record manager

#### Relations

In the example above we have specified the relation `BOOK`. The same relation must be implemented in the model's record manager:

```php
class Account extends \Hubleto\Erp\RecordManager
{
  public $table = 'accounting_accounts';
  public function BOOK(): BelongsTo {
    return $this->belongsTo(Book::class, 'id_book', 'id');
  }
}
```
###### Implementation of the `BOOK` relation in the record manager


#### `prepareReadQuery()`

The `prepareReadQuery()` method prepares the query for reading the records. The method is used in both `Table` and `Form` components. The former reads many records, the latter reads just one record.

This method can be very powerul and can contain filtering or grouping features, support for "nested views" (the *Table* in a *Form*, e.g. when you want to list all *Accounts* for the *Book* while viewing the form for the *Book*) or many others.

If you have created the model with the `php hubleto create model` command, you can leave this method unchanged for now.

### Migrations

Each model shall have at least the migration to create its SQL table (usually, this migration ends with `_0001`). This migration is automatically created by the `php hubleto create model` command.

If your are modifying existing model (e.g. adding new columns), you have to create new migrations manually. The example below shows the second migration of the model, adding a column `id_book`.

```php
class Account_0002 extends Migration
{
  public function upgradeSchema(): void {
    $this->db->execute("alter table `accounting_accounts` add `id_book` int(8)");
    $this->db->execute("alter table `accounting_accounts` add index(`id_book`)");
  }

  public function downgradeSchema(): void {
    $this->db->execute("alter table `accounting_accounts` drop `id_book`");
  }
}
```
###### Example of model's migration









> 🏆 **New achievement** Your model's backend part is ready.





## The frontend

With the model, it's record manager and migration, we are ready with the backend programmming. Now, let's do some fancy UI for the model.

### Add `Table` and `Form` components from CLI

First, run `php hubleto create mvc Accounting Accounts` to create the `Table` and `Form` components. In our example, the accounting app and the model for accounts, the command will:

  * create the `TableAccounts.tsx` file for the table (datagrid)
  * create the `FormAccount.tsx` file for the basic (and further customizable) form
  * add some lines to app's `Loader.tsx` file to register these new components
  * create the **controller** and **view** to display the table

You may similarly run the command `php hubleto create mvc Accounting Books` to create table and form React components for the `Book` model.

Note that all `.tsx` components are using React and *Hubleto React UI* library. You will need to compile them later.

#### Routing

If you have proper placeholders in your app's `Loader.php`, the command will also add routing table for your new model. If you do not have these placeholders, you will need to create the routing manually.

```php
class Loader extends \Hubleto\Erp\App {
  public function init(): void {
    $this->router()->get([
      '/^accounting\/accounts\/add\/?$/' => ['controller' => Controllers\Accounts::class, 'vars' => ['recordId' => -1]],
      '/^accounting\/accounts(\/(?<recordId>\d+))?\/?$/' => Controllers\Accounts::class,
    ]);
  }
}
```
###### Example of the routing table for the model

#### Controller and view

The newly created route requires its controller and view to work properly. These are generated by the `php hubleto create mvc` command and look similarly to the examples below.

```php
class Books extends \Hubleto\Erp\Controller {
  public function getBreadcrumbs(): array {
    return array_merge(parent::getBreadcrumbs(), [ ]);
  }

  public function prepareView(): void {
    parent::prepareView();
    $this->setView('@Hubleto:App:Enterprise:Accounting/Books.twig');
  }
}
```
###### Example of the controller for the list of books

```html
<h1 class="app-main-title">{{ "{{" }} translate('Accounting') {{ "}}" }} > {{ "{{" }} translate('Books') {{ "}}" }}</h1>

<hblreact-accounting-tree-books
  string:tag="accounting-table-books"
  string:view="{{ viewParams.view }}"
  int:record-id="{{ viewParams.recordId }}"
  string:fulltext-search='{{ viewParams.q }}'
  json:column-search='{{ viewParams.search|json_encode }}'
  json:filters='{{ viewParams.filters|json_encode }}'
  string:form-active-tab-uid='{{ viewParams.tab }}'
></hblreact-accounting-tree-books>
```
###### Example of the view for the list of books

Note, this view is using `<hblreact>` tags to render the React components.

### Compile new React components

Now, with the new `.tsx` files ready, compile them with `npm run build` and test it by opening your new app's URL added to the routing table. In our example, it could be something like `http://localhost/my-hubleto/accounting/accounts`.

> 🏆 **New achievement** Basic UI components for CRUD are ready.

## Adding complexity

In this part, we will show how to add some complexity into the model. We will continue using the example of accounting app and the models `Book` and `Account`.

Let's review first what we achieved:

  * backend components (model, record manager, migrations, controller, route) are ready
  * frontend components (Table.tsx, Form.tsx, view) are ready

Now check following tutorials explaining how to add more complex features to your model.

  * [Table inside the form](complex-model-with-crud-components/table-inside-form)