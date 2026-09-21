# Routing

Hubleto implements standard MVC routing.

MVC routing is the mechanism that maps incoming browser requests to specific controller actions within a web application. Instead of using direct file paths like /about.html, routing uses a predefined URL pattern to determine which code to execute. This decouples the URL from the physical file structure, making the application's URLs cleaner, more predictable, and easier to manage.

## Router class

In Hubleto, fundamental routing functionality is implemented in the `Hubleto\Framework\Router` class (see on [Github](https://github.com/hubleto/framework/blob/main/src/Router.php)). This class is further extended by `Hubleto\Erp\Loader` to include additional functionality related to Hubleto ERP.

For example, the `Hubleto\Erp\Loader` adds following default routes:

###### Hubleto\Erp\Loader.php
```php
$this->router()->get([
  '/^api\/get-apps-info\/?$/' => Api\GetAppsInfo::class,
  '/^api\/search\/?$/' =>  Api\Search::class,
]);
```
###### Default routes added in the Hubleto ERP loader.

In the example above, the `api/get-apps-info` route leads to the `Api/GetAppsInfo` controller and the `api/search` route leads to the `Api/Search` controller.

## Defining routes

Routes are defined with `$this->router()->get()` method. Read more about [defining routes](routing/defining-routes).

## Accessing query parameters

In your controller, you often need to access parameters from the URL query or from the POST payload. Read more about [accessing query parameters](routing/accessing-query-parameters).

## Parametric routes

A route itself (not URL query parameters) can contain valuable information. For example a route `contacts/1` means that we want to show the details of the contact with *ID = 1*.

Parametric routes make accessing of this information very easy. Read more about [parametric routes](routing/parametric-routes).