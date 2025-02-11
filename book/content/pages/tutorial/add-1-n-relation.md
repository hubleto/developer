# Add 1:N relation

In this tutorial, you learn how to add a simple 1:N relation to your model and how to create UI to manage data in SQL database.

> **IMPORTANT** In this tutorial, we will follow up with the **MyApp** developed in [this tutorial](add-first-model).

## Introduction

To create a 1:N relation, a [lookup data type](https://github.com/wai-blue/adios/blob/main/src/Core/Db/DataTypes/DataTypeLookup.php) from ADIOS framework is used.

Let's explain concept of *lookups* now.

> **NOTE** ADIOS has various [data types](https://github.com/wai-blue/adios/tree/main/src/Core/Db/DataTypes) and for each of them implements a) conversion to the SQL data column (see `sqlCreateString` in [DataType.php](https://github.com/wai-blue/adios/blob/main/src/Core/Db/DataType.php)) and b) a set of UI components to implement CRUD features for this data type (see [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx), [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) and [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx)).

You should know at least following about the **lookup** data type:
  * is converted to `int(8) NULL DEFAULT 0` in SQL
  * input is rendered as `<select>` or `<autocomplete>` (see [Inputs/Lookup.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Inputs/Lookup.tsx))
  * the value displayed in tables is based on `$lookupSqlValue` of the related model

### lookupSqlValue

A `lookupSqlValue` is an attribute of [`\ADIOS\Core\Model`](https://github.com/wai-blue/adios/blob/main/src/Core/Model.php) class and specifies how data from this model will be displayed to the user (in tables, forms or elsewhere). It is an SQL-compatible statement directly used in *SQL selects*.

For example, a [User](https://github.com/wai-blue/adios/blob/main/src/Models/User.php) model has:

  * a column `login` of type `varchar`
  * its `lookupSqlValue` set to `{{ '{%' }}TABLE{{ '%}' }}.login`

Then each *SQL select* containing also 1:N relation to this model will contain following attribute:

```sql
select
  ...
  `users`.login as `id_user:LOOKUP`
  ...
from `my_table`
left join `users` on `users`.`id` = `my_table`.`id_user`
```

## Addressbook app: Contact owner

Let's continue in the development of the addressbook app from the [previous tutorial](add-first-model). We will add a new column with a 1:N relation to the [Hubleto's model User](https://github.com/wai-blue/hubleto/blob/main/apps/community/Settings/Models/User.php).

### Add relation to contact owner

We have to add few things to:

  * **Models/Contact.php**:
    1. column `id_owner` of type `lookup` connected to `HubletoApp\Community\Settings\Models\User`
    2. definition of Hubleto relation
  *  **Models/Eloquent/Contact.php**:
    1. definition of Eloquent relation

###### ./apps/external/MyApp/Models/Contact.php
```php
<?php
namespace HubletoApp\External\MyApp\Models;
use \Illuminate\Database\Eloquent\Relations\BelongsTo; // <-- use Eloquent's BelongsTo
use \HubletoApp\Community\Settings\Models\User; // <-- use model for users
class Contact extends \HubletoMain\Core\Model {
  public string $table = 'my_app_contacts';
  public string $eloquentClass = Eloquent\Contact::class;
  public array $relations = [ 'OWNER' => [ self::BELONGS_TO, User::class, 'id_owner', 'id' ]]; // <-- Hubleto relation
  public function columns(array $columns = []): array {
    return parent::columns(array_merge($columns, [
      'first_name' => [
        'type' => 'varchar',
        'title' => $this->translate('First name'),
        'required' => true,
      ],
      'last_name' => [
        'type' => 'varchar',
        'title' => $this->translate('Last name'),
        'required' => true,
      ],
      'id_owner' => [ // <--- new column
        'type' => 'lookup',
        'title' => $this->translate('Owner'),
        'model' => User::class,
      ],
    ]));
  }
}
```

###### ./apps/external/MyApp/Models/Eloquent/Contact.php**
```php
namespace HubletoApp\External\MyApp\Models\Eloquent;
use \HubletoApp\Community\Settings\Models\Eloquent\User; // <-- use model for users
class Contact extends \HubletoMain\Core\ModelEloquent {
  public $table = 'my_app_contacts';
  public function USER(): BelongsTo { return $this->belongsTo(User::class, 'id_user', 'id'); } // <-- Eloquent relation
}
```

### Re-install SQL tables

Run `php hubleto app install \HubletoApp\External\MyApp\Loader` in your project root folder.

## Download the source code

To check if you did everything correctly, you can [download the full source code of this app](../downloads/MyApp.zip).
