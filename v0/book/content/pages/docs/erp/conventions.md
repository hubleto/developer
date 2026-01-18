# Conventions

Follow these conventions to create top-quality Hubleto code.

The conventions for the development of Hubleto ERP apps are divided into several categories. Each category is described in separate chapter.

> **Hint:** If you are using AI to help you create the Hubleto code, you may directly point the agent to this page and force him to follow these conventions.

## Namespace

  * *Community* apps must always have a namespace `Hubleto\App\Community\APP_NAME`
  * *Enterprise* apps must always have a namespace `Hubleto\App\Enterprise\APP_NAME`.
  * *External* apps must always have a namespace `Hubleto\App\External\VENDOR_NAME\APP_NAME`.
  * *Custom* apps must always have a namespace `Hubleto\App\Custom\APP_NAME`.

## Files and folder structure

Folder structure of each app shall be following:

### Minimal configuration

  * Each app must contain `manifest.yaml` and `Loader.php`.

### Models (files)

  * Models shall be stored in `Models` folder and their record managers in `Models/RecordManagers` folder.
  * Each model shall have its corresponding record manager and this record manager shall have the same file name as the model. For example, a model `Customer` shall consits of `Models/Customer.php` file and `Models/RecordManagers/Customer.php` file.
  * Models must always be in singular.

### Controllers (files)

  * Controllers shall be stored in `Controllers` folder.
  * Controllers that extend the `ApiController` class shall be stored in `Controllers/Api` folder.
  * Controllers that whose purpose is to provide the browsing feature for some model shall have the same name as the model, but in plural. For example, a controller that 

### Views (files)

  * Views shall be stored in `Views` folder.
  * Views shall be Twig files with `.twig` extension.
  * Name of the file of the view shall be the same as the name of the controller. For example

## App loader

  * `manifest.yaml` file must be valid.
  * A class in `Loader.php` must extend from `Hubleto\Erp\App` and must implement at least following functions: `init()`, `installTables()`. It is recommended (but not required) to implement following functions: `search()`, `generateDemoData()`.
  * `init()` method shall contain routes to all controllers.
  * `installTables()` must install all app's models in the `$round == 1` iteration and may create default app's data (e.g. configuration or default lists) in the `$round == 2` iteration.
  * There are other commonly used methods that are available in `Loader.php` class: `renderSecondSidebar()`, `getSidebarBadgeNumber()`.

### URLs and routing

It is recommended, but not strictly required, that routing table shall route the snake-case and lowercase version of the controllers name to the appropriate controller.

For example, route to the `Customers/Api/DeactivateCustomer` controller shall be `customers/api/deactivate-customer`.

If a "CRUD functionality" is required, routes shall be implemented followingly (examples are for the `Customer` model):

  * regular expression for the route to browse or update record shall use named variable `recordId` and shall be `'/^customers(\/(?<recordId>\d+))?\/?$/' => Controllers\Customers::class`
  * regular expression for the route to create new record shall set the `recordId` variable to `-1` and shall be `'/^customers\/add\/?$/' => ['controller' => Controllers\Customers::class, 'vars' => ['recordId' => -1]],`

## Models and their record managers

A model shall contain at least:

  * `describeColumns()` method, returing associative array of columns with their properties.
  * `describeTable()` method returning a description of how the model's data grid (table to browse the model's records) should look like and behave.
  * `describeForm()` method returning a descripiton of how the model's form for creating or updating a record should look like and behave.
  * Definition of *BELONGS_TO* `$relations` for each column of type lookup. All relation names shall be in UPPERCASE - this convention makes reading results from *record API* more readable.

Optionally, a model can contain:

  * `onBeforeCreate()`, `onAfterCreate()`, `onBeforeUpdate()`, `onAfterUpdate()`, `onBeforeDelete()`, `onAfterDelete()` callbacks.
  * Various methods to implement specific data-manipulation algorithms.

A model's record manager shall contain at least:

  * Implementation of all relations described in the model.

## Controllers

There are mostly two types of controllers:

  * controllers setting a view, resulting in a HTML-formatted response
  * controllers returing a JSON content (so-called *API controllers*)

If a controllers sets a view, it shall call the `setView()` method at the end of its `prepareView()`. The view set shall have the same name as the controller. For example, a view for `Customers.php` controller shall be `Customers.twig`.

If a controller returns a JSON, the response shall be returned from `renderJson()` method.

## Views

*To be described later.*