# Create first app

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

An app is a custom class which extends from [`\HubletoMain\Core\App`](https://github.com/wai-blue/hubleto/blob/main/src/core/App.php) class. Most simple implementation of the app is shown below.

## Create app Loader

To start, create `./apps/external/MyApp/Loader.php` with the following content:

###### ./apps/external/MyApp/Loader.php
```php
<?php
namespace HubletoApp\External\MyApp;
class Loader extends \HubletoMain\Core\App { }
```

Then, you must let Hubleto know that you want to use this app in your project. Do this by modifying the `./ConfigEnv.php` file; add your app loader class to `apps` config:

###### ./ConfigEnv.php
```php
...
$config['apps'] = [
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
  \HubletoApp\External\MyApp\Loader::class, // <-- your app goes here
];
...
```

> **VISUAL_CHECK** | Now, when you open the Hubleto in your browser and navigate to `Settings > Manage Installed Apps`, you should see `HubletoApp\External\MyApp` at the end of installed apps.

## Adding functionality

However, such app does nothing. To add a functionality, you may:

  * initialize the app during the Hubleto bootstrap phase:
    * add routing table with `$this->main->router->httpGet()`, or
    * add buttons to the sidebar with `$this->main->sidebar->addLink()`, or
    * add button to the settings manager with `$this->main->addSetting()`.
  * create `models`, `views` or `controllers`
  * create `react components` to be used in views

Let's illustrate everything step-by-step with examples in following chapters.

> **TIP** | If your are experienced developer, you know about MVC and you can easily read PHP code directly, you may [download the full source code of *MyApp*](downloads/MyApp.zip).


### Initialization

Each app is initialized during the Hubleto bootstrap. The initialization is done by executing `init()` method of each app in the order in which they have been registered.

#### Add routes

To create a routing table for HTTP GET requests, use `httpGet()` method of the main router which is available in `$this->main->router` property. The method takes an array of routes as an argument and adds these routes to the router's routing table.

> **REMEMBER** `$this->main` is the secret word for accessing the Hubleto main core. It contains project config, router, permission manager and other useful components.

Each route is a very simple key/value pair where key is a regular expression to match relative URL (the URL without the rewritebase) against and the value is the class name of controller to be executed.

An example of a simple routing table is shown below. This routing adds a `my-app` URL which will show your app's dashboard.

###### ./apps/external/MyApp/Loader.php
```php
<?php
namespace HubletoApp\External\MyApp;
class Loader extends \HubletoMain\Core\App {
  public function init(): void {
    $this->main->router->httpGet([ '/^my-app\/?$/' => Controllers\Dashboard::class ]);
  }
}
```

> **TIP** | To learn how router works, check [this script](https://github.com/wai-blue/hubleto/blob/main/src/core/Router.php) and [this script](https://github.com/wai-blue/adios/blob/main/src/Core/Router.php).

However, to see anything at this URL, you need to create a *controller* and a *view*. Let's do it.

To create a controller for your dashboard, create `./apps/external/MyApp/Controllers/Dashboard.php` file with the following content:

###### ./apps/external/MyApp/Controllers/Dashboard.php
```php
<?php
namespace HubletoApp\External\MyApp\Controllers;
class Dashboard extends \HubletoMain\Core\Controller {
  public function prepareView(): void {
    parent::prepareView();
    $this->viewParams['now'] = date('Y-m-d H:i:s');
    $this->setView('@app/external/MyApp/Views/Dashboard.twig');
  }
}
```

To create a corresponding view, create `./apps/external/MyApp/Views/Dashboard.twig` file with the following content:

**./apps/external/MyApp/Views/Dashboard.twig**
```html
Hello. Current date and time is <b>{{ '{{' }} viewParams.now {{ '}}' }}</b>.
```

> **VISUAL_CHECK** | Now you should be able to navigate to `http://localhost/my-hubleto/my-app` (modify the URL according to your local environment) and see the content of Dashboard.twig.

#### Customize sidebar (add button)

To add a button to the sidebar, simply call the app's `$this->main-sidebar->addLink()` method. It takes following arguments:

| Argument             | Description                                                                                       |
| -------------------- | ------------------------------------------------------------------------------------------------- |
| int $level           | Into which level of sidebar the link should be added. Currently only levels 1 or 2 are supported. |
| int $order           | A number specifying the ordering index of the button.                                             |
| string $url          | Which url to open .                                                                               |
| string $title        | Title/text of the button.                                                                         |
| string $icon         | Icon of the button, from the FontAwesome set.                                                     |
| boolean $highlighted | Whether the button should be highlighted.                                                         |

> **TIP** | Check [Sidebar.php](https://github.com/wai-blue/hubleto/blob/main/src/core/Sidebar.php) for more details about how sidebar works.

So, to add a button to the sidebar, replace `Loader.php` file with the following content:

###### ./apps/external/MyApp/Loader.php
```php
<?php
namespace HubletoApp\External\MyApp;
class Loader extends \HubletoMain\Core\App {
  public function init(): void {
    $this->main->router->httpGet([ '/^my-app\/?$/' => Controllers\Dashboard::class ]);
    $this->main->sidebar->addLink(
      1, // sidebar level to add link to
      1000, // link ordering index
      'my-app', // URL to navigate to
      $this->translate('My App'), // title
      'fas fa-star', // icon
      str_starts_with($this->main->requestedUri, 'my-app') // is highlighted
    );
  }
}
```

> **VISUAL_CHECK** | Refresh Hubleto in the browser and now in the sidebar you should see the `My App` link with a star-shaped [FontAwesome icon](https://www.fontawesome.com).

Well done! You are becoming a real Hubleto developer. Keep going and we'll show you more secrets about initialization phase, creating models and implementing custom UI components.

#### Add button to the settings manager

If your app requires specific settings, it should be managed via the app's setting manager. This manager is available under `Settings` button in the app's sidebar.

To add a button to this manager, run the `$this->main->addSetting()` method. See example below.

###### ./apps/external/MyApp/Loader.php
```php
namespace HubletoApp\External\MyApp;
class Loader extends \HubletoMain\Core\App {
  public function init(): void {
    $this->main->addSetting([
      'title' => $this->translate('Countries'),
      'icon' => 'fas fa-globe',
      'url' => 'settings/countries',
    ]);
  }
}
```

### Create first model

Models are stored in the `Models` folder and consist of two files:

  * a base model which is a class extending from [`\HubletoMain\Core\Model`](https://github.com/wai-blue/adios/blob/main/src/Core/Model.php)
  * a representing Eloquent model which is a class extending from [`\ADIOS\Core\Model\Eloquent`](https://github.com/wai-blue/adios/blob/main/src/Core/Model/Eloquent.php)

The *base model* provides classes and properties to configure data structure of the model (columns in the database), as well as some UI-related definitions, e.g. how the particular data (a column in database) should be displayed in UI components like [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx), [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) or [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx).

The *Eloquent model* provides functionality to load records and describes relations in the models.

So, to create a model, you must create two files, see example for model Customer.

###### ./apps/external/MyApp/Models/Customer.php
```php
namespace HubletoApp\External\MyApp\Models;
class Company extends \HubletoMain\Core\Model {
  public string $table = 'companies';
  public string $eloquentClass = Eloquent\Company::class;

  // public function columns(array $columns = []): array
  // public function tableDescribe(array $description = []): array
  // public function formDescribe(array $description = []): array
  // public function prepareLoadRecordQuery(array|null $includeRelations = null, int $maxRelationLevel = 0, $query = null, int $level = 0)
  // ...

}
```

###### ./apps/external/MyApp/Models/Eloquent/Customer.php
```php
namespace HubletoApp\External\MyApp\Models\Eloquent;
class Company extends \ADIOS\Core\Model\Eloquent {
  public $table = 'customers'
  // Here go definitions of relations using Eloquent's HasMany, BelongsTo or other.
}
```

> **DO YOU LIKE HUBLETO?** [Help us improve](improve) it.