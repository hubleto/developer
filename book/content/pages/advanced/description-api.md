# 'Description' API

Describes how certain parts of Hubleto app look like.

**Description API** is a concept of describing how certain parts of Hubleto apps look like. To get a better idea what *description API* is about, you can think about it as a configuration structure specifying the behaviour of e.g. *tables*, *forms* or *inputs*.

For even better understanding, let's give an example.

## Introdution

As already said, the *description API* can be used on numerous parts of Hubleto App. We will explain it on a simple example - to describe how table showing a list of rows for a specific model should behave in the user interface.

Say, we have a `Customer` model - a class in the `HubletoApp\Community\Customers\Models` namespace. This class contains a method called `describeTable()` and this method returns an object consisting of

  * UI configuration parameters (`Table->$ui`),
  * permissions (`Table->$permissions`) and
  * list of columns and their specification (`Table->$columns`)

To get a grasp, take a look at these properties in [ADIOS\Core\Description\Table class](https://github.com/wai-blue/adios/blob/main/src/Core/Description/Table.php):

```php
  /** @property array{ title: string, subTitle: string, addButtonText: string, showHeader: bool, showFooter: bool, showFilter: bool, showHeaderTitle: bool } */
  public array $ui = [
    'title' => '',
    'subTitle' => '',
    'addButtonText' => '',
    'showHeader' => true,
    'showFooter' => true,
    'showFilter' => true,
    'showHeaderTitle' => true,
  ];

  /** @property array{ canCreate: bool, canRead: bool, canUpdate: bool, canDelete: bool } */
  public array $permissions = [
    'canCreate' => false,
    'canRead' => false,
    'canUpdate' => false,
    'canDelete' => false,
  ];

  /** @property array<\ADIOS\Core\Db\Column> */
  public array $columns = [];
```

And now, you can implement your own logic to describe the behaviour of the table in a `Model->describeTable()` method, for example:

```php
public function describeTable(): \ADIOS\Core\Description\Table
{
  $description = parent::describeTable();
  $description->ui['title'] = 'Customers';
  $description->ui['addButtonText'] = 'Add customer';
  $description->ui['showHeader'] = true;
  $description->ui['showFooter'] = false;
  return $description;
}
```

Got it? With this description API, you have full power to configure the behaviour of *tables*, *forms* or *inputs* for each of your models separately.

## Table description

See [this chapter](../advanced-development/description-api/table) to read about configuration parameters that you can use to describe tables.

## Form description

See [this chapter](../advanced-development/description-api/form) to read about configuration parameters that you can use to describe forms.
