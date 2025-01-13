# Class Loader

_extends \HubletoMain\Core\Extension_

## Introduction

A class that defines routing, permissions of models and installation of models.

This is the base of a Loader.php file:

**./apps/MyApp/Loader.php**

```php
  <?php
  namespace HubletoApp\MyApp;
  class Loader extends \HubletoMain\Core\App { }
```

## Routing

The Loader class will allow you to set URLs to your Controllers through you desired routes.
In the `init()` method of a Loader class, the Router class's `httpGet()` method adds URLs to existing URLs from all Loader classes within Hubleto.
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
  $this->main->router->httpGet([
    '/new-route' => Controllers\ControllerName::class
  ]);
}
```

## Adding links to the sidebar navigation

The Loader class allows you to easily modify the sidebar navigation to add new links to your Views.
You can specify a new link through the sidebar class's method `addLink()` in the `init()` method of the Loader class.

### Example of a new sidebar navigation link

```php
$this->main->sidebar->addLink($level, $index, $url, $title, $fontAwesomeIconCssClass, $highlighted);
```

`level` - specifies which of the sidebars will the link appear in

`index` - specifies the order in the array of all the links in the sidebar in the specified level

`url` - URL that was specified in the router

`title` - specifies the text that will be on the button of the link

`fontAwesomeIconCssClass` - specifies the FontAwesome CSS icon class that the button will have.

`highlighted` - specifies, if the button should change it's color.

> Note: You need to carefully specify the index of the link. Creating a link on the same index but with different level will result in the new link to overwrite the first link. You need to manage the indexes with structured numbering, for example the level 1 links can use two-digit numbers and the level 2 links can use only three-digit numbers.

When creating the second level of the sidebar navigation, you need to correctly specify for which URL will the second level links be shown to. In the example below, we specify that two links will be available in the Customer Views.

### Example of adding level 1 and level 2 links

```php
$this->main->sidebar->addLink(1, 40, 'customers/companies', $this->translate('Customers'), 'fas fa-address-card', str_starts_with($this->main->requestedUri, 'customers'));

if (str_starts_with($this->main->requestedUri, 'customers')) { //specifying the url that the second level links can be shown in
  $this->main->sidebar->addHeading1(2, 310, $this->translate('Customers'));
  $this->main->sidebar->addLink(2, 320, 'customers/companies', $this->translate('Companies'), 'fas fa-building');
  $this->main->sidebar->addLink(2, 330, 'customers/persons', $this->translate('Contact Persons'), 'fas fa-users');
}
```

## Installing tables of models

During installation of Hubleto the `installTables()` method will be called for every Loader class in every module. You need to initialize the models of the module and use the `install()` method of the models to properly create the tables and columns of the models.

### Example of model installation

```php
public function installTables() {
  $mExampleModel = new Models\ExampleModel($this->main);
  $mExampleModel->dropTableIfExists()->install();
}
```

## Creating permissions

Within the Loader class you also can create permissions for your Models and Controllers in the `installDefaultPermissions()` method.
Note that, **if you don't create permissions** only the **Admin** user will be able to use the modules, models or controllers.
Creating permissions for Models follows CRUD methods.
Permissions for both Models and Controllers need to be created as a full path to the Models or Controllers.
You also need to add the full path to the sub-app as a whole.

### Example of permissions creation

```php
public function installDefaultPermissions()
{
  $mPermission = new \HubletoApp\Settings\Models\Permission($this->main);
  $permissions = [
    "HubletoApp/Customers/Models/Activity:Create",
    "HubletoApp/Customers/Models/Activity:Read",
    "HubletoApp/Customers/Models/Activity:Update",
    "HubletoApp/Customers/Models/Activity:Delete",
    "HubletoApp/Customers/Controllers/Activity"
    "HubletoApp/Customers/Activity"
  ]

  foreach ($permissions as $key => $permission) {
    $mPermission->eloquent->create([
      "permission" => $permission
    ]);
  }
}
```

## Register the module

After creating a Loader.php in your app and having created the correct file structure you need to register your app in the account to initialize it during installation. In the `./ConfigAccount.php` add the Loader class of your app to the `enabledApps` config to successfully register your app.

```php
...
$config['enabledApps'] = [
  \HubletoApp\Billing\Loader::class,
  \HubletoApp\Calendar\Loader::class,
  \HubletoApp\Customers\Loader::class,
  \HubletoApp\Dashboard\Loader::class,
  \HubletoApp\Documents\Loader::class,
  \HubletoApp\Invoices\Loader::class,
  \HubletoApp\Services\Loader::class,
  \HubletoApp\Settings\Loader::class,
  \HubletoApp\Pipeline\Loader::class,
  \HubletoApp\Deals\Loader::class,
  \HubletoApp\Leads\Loader::class,
  \HubletoApp\MyApp\Loader::class, // <-- your app goes here
];
...
```

## Next Up

- Check out the [Model](model) class
