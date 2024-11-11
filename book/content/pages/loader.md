# Class Loader

_extends \CeremonyCrmApp\Core\Extension_

## Introduction

A class that defines routing, permissions of models and installation of models.

## Parameters

| parameter | Description                                                       | type   |
| --------- | ----------------------------------------------------------------- | ------ |
| name      | The name of the extention. Will be visible in the extention list. | string |
| icon      | Font Awesome CSS class                                            | string |
| urlBase   | The URL of your extention _{organization/extention-name}_         | string |

## Routing

The Loader class will allow you to set URLs to your Controllers and Views through you desired routes.
The `getRoutes()` method will merge other URLs from all Loader classes within Ceremony CRM. For safe and correct routing please check out other Loader classes within Ceremony CRM and their routes.

Creating routes follows this pattern:
`'/report' => 'Report'`

The string on the left is the URL for the route. The string on the right is the Controller and the View that the route should point to, you need to make sure the names of the Controller and the View match. However, you dont have to have a View created for the route to work, for instance, if you are creating a route for an API.

### Example of routing in the example extention in the Loader class

[See Example extention](https://github.com/wai-blue/crmn-ext-hello-world)

```php
public function getRoutes(): array
{
  return array_merge(parent::getRoutes(), [
    '/stats' => 'Stats',
  ]);
}
```

## Installing Models

During the installation of your extention the ```install()``` method will be called. You need to override this method. Within the overriden method, you should have all models of your extention initialized and their ```install()``` methodes called.

### Example of model installation

```php
public function install() {
  $mExampleModel = new Models\ExampleModel($this->app);
  $mExampleModel->install();
}
```

## Creating permissions

Within the Loader class you also need to create permissions for your Models and Controllers in the overriden ```createPermissions()``` method.
Creating permissions for Models follows CRUD methods.
Permissions for both Models and Controllers need to be created as a full path to the Models or Controllers.
You also need to add the full path to the module as a whole.

### Exmaple of permissions creation
```php
public function createPermissions()
{
  $mPermission = new Permission($this->app);
  $permissions = [
    "CeremonyCrmApp/Modules/Core/Customers/Models/Activity:Create",
    "CeremonyCrmApp/Modules/Core/Customers/Models/Activity:Read",
    "CeremonyCrmApp/Modules/Core/Customers/Models/Activity:Update",
    "CeremonyCrmApp/Modules/Core/Customers/Models/Activity:Delete",
    "CeremonyCrmApp/Modules/Core/Customers/Controllers/Activity"
    "CeremonyCrmApp/Modules/Core/Customers/Activity"
  ]

  foreach ($permissions as $key => $permission) {
    $mPermission->eloquent->create([
      "permission" => $permission
    ]);
  }
}
```
## Next Up

- Check out the [Model](model.md) class
