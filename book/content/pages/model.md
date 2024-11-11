# Model class

_extends \CeremonyCrmApp\Core\Model extends \ADIOS\Core\ [Model](adios/model)_

## Introduction

The Model class alows you to create data structures in Ceremony CRM. One Model class represents one table in your database.

## Parameters

| parameter      | Description                                                                                  | type                             |
| -------------- | -------------------------------------------------------------------------------------------- | -------------------------------- |
| table          | The name of the table in your database                                                       | string                           |
| eloquentClass  | The class that will be managing the relations to other Models                                | \ADIOS\Core\Model\Eloquent class |
| lookupSqlValue | The value that will be visible when using a lookup for this Model ({\%TABLE\%}.lookup_value) | string                           |
| relations      | An array of relations in the Model                                                           | array                            |

.

If the Eloquent class of the Model contains relations, you also need to describe these relations in the Model class:

### Example of relations in the Model class

```php
public array $relations = [
  'PERSON' => [ self::BELONGS_TO, Person::class, 'id_person', 'id' ],
  'COUNTRY' => [ self::HAS_ONE, Country::class, 'id', 'id_country' ],
];
```

## Describing the data structure

For the tables to be created in your database when installing Models, you first need to describe the columns of the tables. You can do so by overriding the `columns()` method.

### Example of the `columns()` method

```php
public function columns(array $columns = []): array
{
  return parent::columns(array_merge($columns, [
    'name' => [
      'type' => 'varchar',
      'title' => 'Name'
    ]
  ]
))}
```

The array key specifies the column name in the database. Each column can be further defined by several key-value pairs:

| parameter          | Description                                         | type    |
| ------------------ | --------------------------------------------------- | ------- |
| type               | The ADIOS column/input type                         | string  |
| title              | The title of the column that wil be shown in the UI | string  |
| model              | Full path to the lookup model                       | string  |
| foreignKeyOnUpdate | SQL notation of the foreing key OnUpdate            | string  |
| foreignKeyOnDelete | SQL notation of the foreing key OnDelete            | string  |
| required           | Sets the requirement for the column to be filled    | boolean |

## Example of a lookup column

```php
'id_person' => [
  'type' => 'lookup',
  'title' => 'Person',
  'model' => 'CeremonyCrmApp/Modules/Core/Customers/Models/Person',
  'foreignKeyOnUpdate' => 'CASCADE',
  'foreignKeyOnDelete' => 'CASCADE',
  'required' => true,
],
```

For each lookup column, you **need to describe the relation** in the Model and the Eloquent class of the Model, otherwise the lookup value will not be shown.

## Overridable Methods

**tableDescribe**(array $description = [])

This method allows you to describe the CRUD permissions, columns and the UI elements of the table during runtime.
Defultly the permissions of a table will be set depending on the permissions of the role of a user and some of the UI elements of the table will not be present.

This example shows the options of how you can describe the table:

```php
public function tableDescribe(array $description = []): array
  {
    $description = parent::tableDescribe($description);
    $description['ui']['title'] = 'Table Title';
    $description['ui']['addButtonText'] = 'Add Model';
    $description['ui']['showHeader'] = true;
    $description['ui']['showFooter'] = false;
    $description['permissions']['canRead'] = true;
    $description['permissions']['canCreate'] = true;
    $description['permissions']['canUpdate'] = true;
    $description['permissions']['canDelete'] = true;
    return $description;
  }
```

The columns of a table can be accesed with `$description['columns']`. Columns can be removed, edited or even added.

**recordSave**(array $data)

**onAfterLoadRecord**(array $data)

**convertRecord**(array $row, bool $reverseConversion = false)

**convert**(array $rows, bool $reverseConversion = false)

Other overrideable methods can be found in the ADIOS Framework documentation for the [Model class](adios/model)
