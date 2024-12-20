# Start developing own module

A module is a basic functional element of Ceremony. Every functionality available in Ceremony is thus built using modules.

A module is a custom class which extends from [`\CeremonyCrmApp\Core\Module`](https://github.com/wai-blue/ceremonycrm/blob/main/src/core/Module.php) class. Namespace of the model must start with `CeremonyCrmMod`.

Most simple implementation of the module is thus following:

**MyModule/Loader.php**
```php
namespace CeremonyCrmMod\MyModule;
class Loader extends \CeremonyCrmApp\Core\Module { }
```

However, such module does nothing. To add a funcionality, you may:

  * create `models`, `views` or `controllers`
  * create `react components` to be used in views
  * modify app configuration in the `init` phase, e.g.:
    * add routing table with `$this->app->router->httpGet()`, or
    * add buttons to the sidebar with `$this->app->sidebar->addLink()`, or
    * add button to the settings manager with `$this->app->addSetting()`.

Let's illustrate everything on examples in following chapters:

  * [Initialization phase of the module](#initialization)
  * [Create model](#create-model)


## Initialization

Each module is initialized during the Ceremony bootstrap. The initialization is done by executing `init()` method of each module in the order in which they have been registered to the application.

### Creating routing table

To create a routing table for HTTP GET requests, you must use `httpGet()` method of the application's router which is availabe in `$this->app->router` variable. The method takes an array of routes as an argument and adds these routes to the router's routing table.

Each route is a very simple key/value pair where key is a regular expression to match relative URL (the URL without the rewritebase) against and the value is the class name of controller to be executed.

An example of a simple routing table is shown below.

**MyModule/Loader.php**
```php
namespace CeremonyCrmMod\MyModule;
class Loader extends \CeremonyCrmApp\Core\Module {
  public function init(): void {
    $this->app->router->httpGet([
      '/^help\/?$/' => Controllers\Help::class,
      '/^contact-us\/?$/' => Controllers\ContactUs::class,
    ]);
  }
}
```

To learn how router works, check this script: https://github.com/wai-blue/ceremonycrm/blob/main/src/core/Router.php

### Adding buttons to the sidebar

To add a button to the sidebar, simply call the app's `$this->app-sidebar->addLink()` method. It takes following arguments:

  * int $level - Into which level of sidebar the link should be added. Currently only levels 1 or 2 are supported. 
  * int $order - A number specifying the orderinx index of the button.
  * string $url - Which url to open .
  * string $title - Title/text of the button.
  * string $icon - Icon of the button, from the FontAwesome set.
  * boolean $highlighted - Whether the button should be highlighted.


**MyModule/Loader.php**
```php
namespace CeremonyCrmMod\MyModule;
class Loader extends \CeremonyCrmApp\Core\Module {
  public function init(): void {
    $this->app->router->httpGet([
      '/^help\/?$/' => Controllers\Help::class,
      '/^contact-us\/?$/' => Controllers\ContactUs::class,
    ]);
    $this->app->sidebar->addLink(
      1,
      1000,
      'help',
      $this->translate('Help'),
      'fas fa-life-ring',
      str_starts_with($this->app->requestedUri, 'help')
    );
  }
}
```

You can similarly add headings or dividers, see https://github.com/wai-blue/ceremonycrm/blob/main/src/core/Sidebar.php for more details.

## Add button to the settings manager

If your module requires specific settings, it should be managed via the app's setting manager. This manager is available under `Settings` button in the app's sidebar.

To add a button to this manager, run the `$this->app->addSetting()` method. See example below.

**MyModule/Loader.php**
```php
namespace CeremonyCrmMod\MyModule;
class Loader extends \CeremonyCrmApp\Core\Module {
  public function init(): void {
    $this->app->addSetting([
      'title' => $this->translate('Countries'),
      'icon' => 'fas fa-globe',
      'url' => 'settings/countries',
    ]);
  }
}
```

## Create model

Models are stored in the `Models` folder and consist of two files:

  * a base model which is a class extending from [`\CeremonyCrmApp\Core\Model`](https://github.com/wai-blue/adios/blob/main/src/Core/Model.php)
  * a representing Eloquent model which is a class extending from [`\ADIOS\Core\Model\Eloquent`](https://github.com/wai-blue/adios/blob/main/src/Core/Model/Eloquent.php)

The *base model* provides classes and properties to configure data structure of the model (columns in the database), as well as some UI-related definitions, e.g. how the particular data (a column in database) should be displayed in UI components like [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx), [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) or [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx).

So, to create a model, you must create two files, see example for model Customer.

**MyModule/Models/Customer.php**
```php
namespace CeremonyCrmMod\MyModule\Models;
class Company extends \CeremonyCrmApp\Core\Model {
  public string $table = 'companies';
  public string $eloquentClass = Eloquent\Company::class;
  public ?string $lookupSqlValue = '{%TABLE%}.name';

  // public function columns(array $columns = []): array
  // public function tableDescribe(array $description = []): array
  // public function formDescribe(array $description = []): array
  // public function prepareLoadRecordQuery(array|null $includeRelations = null, int $maxRelationLevel = 0, $query = null, int $level = 0)
  // ....

}
```

**MyModule/Models/Eloquent/Customer.php**
```php
namespace CeremonyCrmMod\MyModule\Models\Eloquent;
class Company extends \ADIOS\Core\Model\Eloquent {
  public $table = 'customers'
  // Here go definitions of relations using Eloquent's HasMany, BelongsTo or other.
}
```
