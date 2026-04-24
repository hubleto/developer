# Hubleto\Erp\Core\Loader

## Introduction

A class that defines routing, permissions of models and installation of models.

This is the base of a Loader.php file:

**./apps/custom/MyApp/Loader.php**

```php
  <?php
  namespace Hubleto\App\Custom\MyApp;
  class Loader extends \Hubleto\Erp\Core\App { }
```

## Routing

The Loader class will allow you to set URLs to your Controllers through you desired routes.
In the `init()` method of a Loader class, the Router class' `httpGet()` method adds URLs to existing URLs from all Loader classes within Hubleto.
For safe and correct routing please check out other Loader classes within Hubleto and their routes.

Creating routes follows this pattern:

```php
  '/new-route' => Controllers\ControllerName::class
```

The string on the left is the URL for the route. The string on the right is the Controller that the route should point to.

### Example of routing with `httpGet()`

```php
public function init(): void
{
  $this->router()->get([
    '/new-route' => Controllers\ControllerName::class
  ]);
}
```

## Adding links to the sidebar navigation

Check out the [Customizing sidebar page](./../customizing-ui/customizing-sidebar).

## Installing tables of models

During installation of Hubleto the `installTables()` method will be called for every Loader class in every app. You need to initialize the models of the apps and use the `install()` method of the models to properly create the tables and columns of the models in your database.

### Example of model installation

```php
public function installTables() {
  $mExampleModel = new Models\ExampleModel($this->main);
  $mExampleModel->dropTableIfExists()->install();
}
```

## Creating permissions

Within the Loader class you also can create permissions for your Models and Controllers in the `installDefaultPermissions()` method.
Note that, **if you don't create permissions** only the **Admin** user will be able to use the apps, models or controllers.
Creating permissions for Models follows CRUD methods.
Permissions for both Models and Controllers need to be created as a full path to the Models or Controllers.
You also need to add the full path to the sub-app as a whole.

### Example of permissions creation

```php
public function installDefaultPermissions()
{
  $mPermission = new \Hubleto\App\Community\Settings\Models\Permission($this->main);
  $permissions = [
    "Hubleto/App/Community/Customers/Models/Activity:Create",
    "Hubleto/App/Community/Customers/Models/Activity:Read",
    "Hubleto/App/Community/Customers/Models/Activity:Update",
    "Hubleto/App/Community/Customers/Models/Activity:Delete",
    "Hubleto/App/Community/Customers/Controllers/Activity"
    "Hubleto/App/Community/Customers/Activity"
  ]

  foreach ($permissions as $key => $permission) {
    $mPermission->eloquent->create([
      "permission" => $permission
    ]);
  }
}
```

## Next Up

- Check out the [Model](model) class
