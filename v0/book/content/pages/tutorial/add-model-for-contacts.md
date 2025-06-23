# Add model for contacts

In this tutorial, you learn how to add your first model into your app and how to create UI for managing data in SQL database.

> **IMPORTANT** In this tutorial, we will follow up with the **MyApp** developed in [this tutorial](add-route-controller-and-view).

All app models are stored in two separated files. In this tutorial, we'll create a simple model without any relation.

## Introduction

Each model in Hubleto app is located in `Models` sub-folder of your app's root folder. And, each model is a class that extends from `\HubletoMain\Core\Model` class.

> **REMEMBER** | Hubleto uses [Symphony Eloquent](https://laravel.com/docs/11.x/eloquent) as the default database layer. It's flexible, secure and well-maintained.

To make Hubleto model compatible with Eloquent, additional file has to be created in `Models/Eloquent` subfolder and this file must contain a class which extends from `\HubletoMain\Core\ModelEloquent` class.

Summary... To add a model to your Hubleto app, e.g. model for contacts, you have to create two files:

  * ./apps/custom/MyApp/**Models/**Contact.php and
  * ./apps/custom/MyApp/**Models/Eloquent/**Contact.php

Let's show this in an example.

## Addressbook app: Manage contacts

### Add model

The first file we need to create is `./apps/custom/MyApp/Models/Contact.php`. It will be very simple, containg description of columns in this model and a reference to its Eloquent class:

###### ./apps/custom/MyApp/Models/Contact.php
```php
<?php
namespace HubletoApp\Custom\MyApp\Models;
class Contact extends \HubletoMain\Core\Model {
  public string $table = 'my_app_contacts';
  public string $eloquentClass = Eloquent\Contact::class;
  public function describeColumns(): array {
    return array_merge(parent::describeColumns(), [
      'first_name' => (new \ADIOS\Core\Db\Column\Varchar($this, $this->translate('First name')))->setRequired(),
      'last_name' => (new \ADIOS\Core\Db\Column\Varchar($this, $this->translate('Last name')))->setRequired(),
    ]);
  }
}
```

The code above contains:

  * `$table` property specifying the name of the corresponding SQL table.
  * `$eloquentClass` property specifying reference to the model's Eloquent equivalent.
  * `describeColumns()` method returning the description columns used in this model (this will be later used also elsewhere, e.g. in rendering tables or forms).

Method `describeColumns()` returns an array defined as *array<string, \ADIOS\Core\Db\Column>*. The keys of this array are names of the columns as they will be present in the SQL table and values are objects of [`\ADIOS\Core\Db\Column` class](https://github.com/wai-blue/adios/blob/main/src/Core/Db/Column.php).

> **IMPORTANT** | Description of columns is very important part of Hubleto app. We recommend reading [this guide](../advanced-development/data-management/understanding-columns-in-model) to understand *Hubleto columns* much better.


### Specify model's equivalent for Eloquent

Now we have the base model created. To be able to use the Eloquent features, we need to create a second file - a class specifying Eloquent relations in this model. For now, we will have no relations but they will come later.

To create a model's equivalentt for Eloquent, create the second file `./apps/custom/MyApp/Models/Eloquent/Contact.php`.

###### ./apps/custom/MyApp/Models/Eloquent/Contact.php
```php
<?php
namespace HubletoApp\Custom\MyApp\Models\Eloquent;
class Contact extends \HubletoMain\Core\ModelEloquent {
  public $table = 'my_app_contacts';
  // Eloquent relations will get here later
}
```

## Reinstall the app and create SQL tables

Now we have added the first model to our app. We need to reinstall the app to create the SQL tables. This requires two steps:

  * implement a `installTables()` method and
  * running `php hubleto app install` command.

### Adding `installTables()` method

The `installTables()` method is called everytime the app is installed. The method should implement creation of SQL tables in the order and way how you - as the app developer - think it is necessary.

Add a new method `installTables()` into your app's `Loader.php`:

###### ./apps/custom/MyApp/Loader.php
```php
<?php
namespace HubletoApp\Custom\MyApp;
class Loader extends \HubletoMain\Core\App {
  ...
  public function installTables(): void {
    $mContact = new \HubletoApp\Custom\MyApp\Models\Contact($this->main);
    $mContact->dropTableIfExists()->install();
  }
}
```

### Reinstalling app

To reinstall the app run following command:

```
php hubleto app install \HubletoApp\Custom\MyApp force
```

See, there is a new argument `force` which will forcefully reinstall the app even if it is already installed.

### Create user interface for managing contacts

Now we have in our `MyApp` a model for storing contacts but we cannot do anything with it in the user interface. We need to add **another route, controller and view** to create user interface containing table and form to manage our contacts.

We will learn this in the next tutorial.

