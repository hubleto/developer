# Add first model

In this tutorial, you learn how to add your first model into your app and how to create UI for managing data in SQL database.

> **IMPORTANT** In this tutorial, we will follow up with the **MyApp** developed in [this tutorial](../create-first-app).

All app models are stored in two separated files. In this tutorial, we'll create a simple model without any relation.

## Introduction

### Hubleto model

Each model in Hubleto app is located in `Models` sub-folder of your app's root folder. And, each model is a class that extends from `\HubletoMain\Core\Model` class.

### Adding eloquent

Hubleto uses [Laravel's Eloquent](https://laravel.com/docs/11.x/eloquent) as the database layer. It's flexible, secure and well-maintained.

To make this working, additional file has to be created in `Models/Eloquent` subfolder and this file must contain a class which extends from `\HubletoMain\Core\ModelEloquent` class.

## Addressbook app: Manage contacts

### Add model

Let's learn by examples. We will create a very simple addressbook app.

The first file to create is `Models/Contact.php`.

**./apps/external/MyApp/Models/Contact.php**
```php
<?php
namespace HubletoApp\External\MyApp\Models;
class Contact extends \HubletoMain\Core\Model {
  public string $table = 'my_app_contacts';
  public string $eloquentClass = Eloquent\Contact::class;
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
    ]));
  }
}
```

And the second file is `Models/Eloquent/Contact.php`.

**./apps/external/MyApp/Models/Eloquent/Contact.php**
```php
<?php
namespace HubletoApp\External\MyApp\Models\Eloquent;
class Contact extends \HubletoMain\Core\ModelEloquent {
  public $table = 'my_app_contacts';
}
```

With this setup, you will create a model with:

  * two *varchar* columns
  * no relations

We have used following properties and methods:

| Property or Method | Description                                                                                                                           |
| ------------------ | ------------------------------------------------------------------------------------------------------------------------------------- |
| **string $table**  | Name of the table in SQL database.                                                                                                    |
| **$eloquentClass** | Reference to the class representing the *Eloquent* object                                                                             |
| **columns()**      | Definition of *columns* (a.k.a attributes) of the model, including data-related information (e.g. *varchar*) and UI-related information (e.g., *title*). |

Table: Properties and methods used in the example.

### Definition of columns

At this moment, we have to slow down a bit. Definition of *columns* in Hubleto model is crucial part of development of models. This is because many other functionalities, including rendering of some core UI components like [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx), [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) or [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx) heavily use definition of *columns* in the model.

Columns are defines using the `columns()` method. In the example above, whe defined two columns: *first_name* and *last_name*. Both columns have their `type` which is the most important attribute of the columns. The *type* determines:

  * what will be the SQL data type of the column;
  * how the column will be displayed in a [Table](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx) or [Form](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) components;
  * how the [Input](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx) for the column will look like.

For the list of default types of columns, check the `DataTypes` folder in `Adios` framework: https://github.com/wai-blue/adios/tree/main/src/Core/Db/DataTypes.

Each column then can have various additional attributes. Some examples are listed below. For the full list of available attributes see [documentation of Adios framework](https://github.com/wai-blue/adios/tree/main/docs/pages).

| Attribute             | Applies to     | Description                                                            |
| --------------------- | -------------- | ---------------------------------------------------------------------- |
| string **$title**     | All data types | Used in table header and form inputs                                   |
| boolean **$required** | All data types | Whether the column is required to have any value when saving the form. |
| boolean **$show**     | All data types | Whether to show the column in tables and forms.                        |
| array **$enumValues** | varchar, int   | If provided, the input will be renderd as a `select`.                  |
| string **$model**     | lookup         | Reference to a related model (its class) in an 1:N relation.           |
| boolean **$readonly** | All data types | Whethe the input for the column should render as readonly.             |

Table: List of most commonly used attributes of columns.

### Render table with form

Now, having the columns defined, we want to create a UI with a table to manage data in this model. For this, we will use pre-built data-grid component from Adios framework: [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx). This component then automatically uses other components to render forms and inputs: [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) and [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx).

To render the table, you need to:

  * add routing
  * create controller and view
  * install SQL
  * add a button to publish your new addressbook

#### Add new route

Add following line anywhere in the `init()` method of your app's `Loader.php`:

**./apps/external/MyApp/Loader.php**
```php
<?php
namespace HubletoApp\External\MyApp;
class Loader extends \HubletoMain\Core\App {
  public function init(): void {
    ...
    $this->main->router->httpGet([ '/^my-app\/contacts\/?$/' => Controllers\Contacts::class ]);
    ...
  }
}
```

#### Create controller and view

Create following controller in `./apps/external/MyApp/Controllers/Contacts.php`:

**./apps/external/MyApp/Controllers/Contacts.php**
```php
<?php
namespace HubletoApp\External\MyApp\Controllers;
class Contacts extends \HubletoMain\Core\Controller {
  public function prepareView(): void {
    parent::prepareView();
    $this->setView('@app/MyApp/Views/Contacts.twig');
  }
}
```

Then create following view in `./apps/external/MyApp/Views/Contacts.twig`:

**./apps/external/MyApp/Views/Contacts.twig**
```php
<app-table string:model="HubletoApp/External/MyApp/Models/Contact"></app-table>
```

> **NOTE** Hubleto uses `<app-*` HTML notation to insert React components into the browser's DOM.

### Add a button

Last step is to publish your new addressbook. Simply add a button in your `Dashboard.twig`:

```html
<div class="mt-2">
  <a class="btn btn-primary" href="my-app/contacts">
    <span class="icon"><i class="fas fa-user"></i></span>
    <span class="text">{{ '{{' }} translate("Contacts") {{ '}}' }}</span>
  </a>
</div>
```

### Install SQL tables

Add a new method `installTables()` into your app's `Loader.php`:

**./apps/external/MyApp/Loader.php**
```php
<?php
namespace HubletoApp\External\MyApp;
class Loader extends \HubletoMain\Core\App {
  ...
  public function installTables() {
    $mContact = new \HubletoApp\External\MyApp\Models\Contact($this->main);
    $mContact->dropTableIfExists()->install();
  }
}
```

And run following command in your `project root folder`:

```
php hubleto app install \HubletoApp\External\MyApp\Loader
```

> **YOU ARE READY** Now open Hubleto in your browser, go to your app and then to contacts. Enjoy your new addressbook 😜. If you like Hubleto, [help us improve](../improve) it.

## Download the source code

To check if you did everything correctly, you can [download the full source code of this app](../downloads/MyApp.zip).
