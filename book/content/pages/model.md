# Model class

_extends \HubletoMain\Core\Model extends \ADIOS\Core\ [Model](adios/model)_

## Introduction

The Model class alows you to create data structures in Hubleto. One Model class represents one table in your database.

## Parameters

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

| parameter          | Description                                             | type               |
| ------------------ | ------------------------------------------------------- | ------------------ |
| type               | The [ADIOS input type](adios)                           | string             |
| title              | The title of the column that wil be shown in the UI     | string             |
| model              | Full path to the lookup model or a model class          | string/Model class |
| foreignKeyOnUpdate | SQL notation of the foreign key OnUpdate                | string             |
| foreignKeyOnDelete | SQL notation of the foreign key OnDelete                | string             |
| required           | Sets the requirement for the column to be filled        | boolean            |
| readonly           | Disables input                                          | boolean            |
| enum_values        | An array of values that will be available for selection | key-value Array    |

## Example of a lookup column

```php
'id_person' => [
  'type' => 'lookup',
  'title' => 'Person',
  'model' => Person::class,
  'foreignKeyOnUpdate' => 'CASCADE',
  'foreignKeyOnDelete' => 'CASCADE',
  'required' => true,
],
```

## Example with enum_values

```php
'type' => [
  'type' => 'varchar',
  'title' => 'Type',
  'enumValues' => ['email' => 'Email', 'number' => 'Phone Number', 'other' => 'Other'],
  'required' => true,
],
```

## Notable overridable methods

**tableDescribe**(array $description = [])

This method allows you to describe the CRUD permissions, columns and the UI elements of a table during runtime.
By default the permissions of a table will be set depending on the permissions of the role of a user and some of the UI elements of the table will not be present.

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

The columns of a table can be accessed with `$description['columns']`. Columns can be removed, edited or even added.

**formDescription**(array $description = []): array

This method allows you to describe the CRUD permissions, columns, default values and relations of a form during runtime.
By default the permissions of a form will be set depending on the permissions of the role of a user and relations of the model for the form won't be set. This will mean that the form won't retrieve data from the relations.

**prepareLoadRecordQuery**(array|null $includeRelations = null, int $maxRelationLevel = 0, $query = null, int $level = 0)

This method allows you to modify the database query for retrieving data of the model. The query can be modified using Eloquent's query building.

This method also allows you to set `$maxRelationLevel`, the maximum level of depth of the relation information. **The maximum level of depth is four**, due to the amount of information that is received from the model.

Other overridable methods can be found in the ADIOS Framework documentation for the [Model class](adios/model)

## Next up

- Check out the [Eloquent](eloquent) class
