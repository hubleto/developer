# HubletoMain\Core\Model

## Introduction

The Model class allows you to define data structures, UI and permissions of form and table components.

**Base Model File**

```php
<?php

namespace HubletoApp\External\MyCompany\MyApp\Models;

class MyModel extends \HubletoMain\Core\Model {}
```

## Class parameters

| parameter      | Description                                                                                  | type                             |
| -------------- | -------------------------------------------------------------------------------------------- | -------------------------------- |
| table          | The name of the table in your database                                                       | string                           |
| eloquentClass  | The class that will be managing the relations to other Models                                | \ADIOS\Core\Model\Eloquent class |
| lookupSqlValue | The value that will be visible when using a lookup for this Model ({\%TABLE\%}.lookup_value) | string                           |
| relations      | An array of relations in the Model                                                           | array                            |

.

If the Eloquent class of the Model contains relations, you also need to describe these relations in the Model class, like this:

### Example of relations in the Model class

```php
public array $relations = [
  'PERSON' => [ self::BELONGS_TO, Person::class, 'id_person', 'id' ],
  'COUNTRY' => [ self::HAS_ONE, Country::class, 'id', 'id_country' ],
];
```

## Describing the data structure

For the tables to be created in your database when installing Models, you first need to describe the columns of the tables. You can do so by overriding the `describeColumns()` method.

### Example of the `describeColumns()` method

```php
public function describeColumns(): array
{
  return array_merge(parent::describeColumns(), [
    'name' => (new \ADIOS\Core\Db\Column\Varchar($this, $this->translate('Name'))),
  ]);
}
```

The array key specifies the column name in the database. Each column has to be defined by creating an instance of `ADIOS\Core\Db\Column` classes. For each of these classes you need to set the instance of the current `Model` class and the title of the column as the parameters of the `ADIOS\Core\Db\Column` class initialization. Check out how to further describe each column type in the [ADIOS repository](https://github.com/wai-blue/adios/tree/main/src/Core/Db/Column).

## Example of a lookup column

```php
'id_person' => (new \ADIOS\Core\Db\Column\Lookup($this, 'Person', Person::class))
```

## Example with enumValues

```php
'type' => (new \ADIOS\Core\Db\Column\Varchar($this, 'Type'))
  ->setEnumValues('email' => 'Email', 'number' => 'Phone Number', 'other' => 'Other')
```

## Notable overridable methods

**describeTable()**

This method allows you to override the default CRUD permissions, columns and the UI elements of a table.
By default the permissions of a table will be set depending on the permissions of the role of a user and some of the UI elements of the table will not be present.

This example shows the options of how you can describe the table:

```php
public function describeTable(): \ADIOS\Core\Description\Table
  {
    $description = parent::describeTable();

    $description->ui['title'] = 'Table Title';
    $description->ui['addButtonText'] = 'Add Model';
    $description->ui['showHeader'] = true;
    $description->ui['showFooter'] = false;
    $description->ui['showFilter'] = false;
    $description->permissions['canRead'] = true;
    $description->permissions['canCreate'] = true;
    $description->permissions['canUpdate'] = true;
    $description->permissions['canDelete'] = true;

    return $description;
  }
```

The columns of a table can be accessed with `$description->columns`. Columns can be removed, edited or even added.

**describeForm()**

This method allows you to override the default the CRUD permissions, columns, default values and relations of a form.
By default the permissions of a form will be set depending on the permissions of the role of a user.

```php
public function describeForm(): \ADIOS\Core\Description\Form
  {
    $description = parent::describeForm();

    $description->defaultValues['is_active'] = 0;
    $description->defaultValues['id_user'] = $this->main->auth->getUserId();
    $description->defaultValues['date_created'] = date("Y-m-d");

    return $description;
  }
```

**describeInput(string $columnName)**

This method can further override the default description of a column. With this method you can accurately pinpoint the column you want to modify.

With this example we changed the default React element of a `Varchar` column and added a description below the new input.

```php
public function describeInput(string $columnName): \ADIOS\Core\Description\Input
{
  $description = parent::describeInput($columnName);
  switch ($columnName) {
    case 'shared_folder':
      $description
        ->setReactComponent('InputHyperlink')
        ->setDescription($this->translate('Link to shared folder (online storage) with related documents'))
      ;
    break;
  }
  return $description;
}
```

Other overridable methods can be found in the ADIOS Framework documentation for the [Model class](https://github.com/wai-blue/adios/blob/main/src/Core/Model.php)

## Next up

- Check out the [Eloquent](eloquent) class
