# Creating other routes using $router->get()

## Purpose

`$this->router()->get(array $routes)` registers any routes: API controllers, dashboard boards, settings pages, reports, custom pages. You can call it several times. The routes are added to the routing table.

###### apps/Deals/Loader.php

```php
$this->router()->get([
  '/^deals\/api\/log-activity\/?$/' => Controllers\Api\LogActivity::class,
  '/^deals\/api\/generate-pdf\/?$/' => Controllers\Api\GeneratePdf::class,
  '/^deals\/api\/get-preview-html\/?$/' => Controllers\Api\GetPreviewHtml::class,
  '/^deals\/api\/create-from-lead\/?$/' => Controllers\Api\CreateFromLead::class,

  '/^deals\/boards\/deal-warnings\/?$/' => Controllers\Boards\DealWarnings::class,
  '/^deals\/boards\/most-valuable-deals\/?$/' => Controllers\Boards\MostValuableDeals::class,

  '/^deals\/tags\/?$/' => Controllers\Tags::class,
  '/^deals\/lost-reasons\/?$/' => Controllers\LostReasons::class,
  '/^deals\/plan\/?$/' => Controllers\Plan::class,
]);
```

## Route syntax

The key is a PHP regular expression (PCRE) with `/` delimiters. The value is one of three forms:

| Value                                                         | Meaning                                                   |
| ------------------------------------------------------------- | --------------------------------------------------------- |
| `Controllers\Tags::class`                                     | Use this controller. Named groups become route variables. |
| `['controller' => Controllers\X::class, 'vars' => [...]]`     | Use this controller and set these fixed variables.        |
| `['redirect' => ['url' => '...', 'code' => 301]]`             | Redirect to another URL.                                  |
Route values.

Writing the regular expression:

  * Start with `^` and end with `\/?$`. The route then matches the whole URL, with or without a trailing slash.
  * Escape slashes: `deals\/api\/log-activity`.
  * Don't include the project URL or the query string. `https://my.hubleto.com/deals/tags?x=1` is matched as `deals/tags`.
  * Matching is case-insensitive.

## API routes

API controllers live under `<rootUrlSlug>/api/`:

###### apps/Contacts/Loader.php

```php
$this->router()->get([
  '/^contacts\/api\/get-customer-contacts\/?$/' => Controllers\Api\GetCustomerContacts::class,
  '/^contacts\/api\/check-primary-contact\/?$/' => Controllers\Api\CheckPrimaryContact::class,
]);
```

###### apps/Orders/Loader.php

```php
$this->router()->get([
  '/^orders\/api\/generate-invoice\/?$/' => Controllers\Api\GenerateInvoice::class,
  '/^orders\/api\/log-activity\/?$/' => Controllers\Api\LogActivity::class,
  '/^orders\/api\/create-from-deal\/?$/' => Controllers\Api\CreateFromDeal::class,
  '/^orders\/api\/get-statistics\/?$/' => Controllers\Api\GetStatistics::class,
]);
```

The URL is used in React as it is: `request.get('orders/api/create-from-deal', {idDeal: form.id}, ...)`.

## Route variables

Named groups `(?<name>...)` become route variables. The controller reads them from the router, or from `$this->viewParams` in a view.

###### apps/Workflow/Loader.php

```php
$this->router()->get([
  '/^workflow\/?$/' => Controllers\Home::class,
  '/^workflow\/(?<idWorkflow>\d+)\/?$/' => Controllers\Workflow::class,
]);
```

###### apps/Workflow/Controllers/Workflow.php (part)

```php
$idWorkflow = $this->router()->urlParamAsInteger('idWorkflow');

$workflow = $mWorkflow->record
  ->where("id", $idWorkflow)
  ->with("STEPS")
  ->first();
```

###### Optional variable with letters (apps/Calendar/Loader.php)

```php
'/^calendar(\/(?<key>\w+))?\/ics\/?$/' => Controllers\IcsCalendar::class,
```

Route variables and query-string parameters are read with the same methods:

| Method                                              | Returns                                          |
| --------------------------------------------------- | ------------------------------------------------ |
| `urlParamAsString(string $name, string $default = '')`  | string                                       |
| `urlParamAsInteger(string $name, int $default = 0)`     | int                                          |
| `urlParamAsFloat(string $name, float $default = 0)`     | float                                        |
| `urlParamAsBool(string $name, bool $default = false)`   | bool (`'false'` is `false`)                  |
| `urlParamAsArray(string $name, array $default = [])`    | array                                        |
| `isUrlParam(string $name)`                              | bool                                         |
| `getUrlParams()`                                        | all parameters                               |
Reading parameters.

> **NOTE** Route variables are merged with GET, POST and JSON body parameters. A route variable wins over a query parameter of the same name.

## Fixed variables

Instead of a class, the value can be an array with a controller and variables. `crud()` uses this for the `add` URL:

```php
'/^deals\/add\/?$/' => ['controller' => Controllers\Deals::class, 'vars' => ['recordId' => -1]],
```

Use it to reuse one controller for more URLs:

```php
$this->router()->get([
  '/^my-app\/reports\/monthly\/?$/' => ['controller' => Controllers\Report::class, 'vars' => ['period' => 'monthly']],
  '/^my-app\/reports\/yearly\/?$/' => ['controller' => Controllers\Report::class, 'vars' => ['period' => 'yearly']],
]);
```

```php
// In Controllers\Report
$period = $this->router()->urlParamAsString('period');
```

## Redirects

```php
$this->router()->get([
  '/^my-app\/old-page\/?$/' => ['redirect' => ['url' => 'my-app/new-page', 'code' => 301]],
  '/^my-app\/items\/(?<id>\d+)\/?$/' => ['redirect' => ['url' => 'my-app/products/$id']],
]);
```

`$name` in the URL is replaced by the named group of the same name. The default code is 302.

## Settings page of an app

The CLI generates a settings page under `settings/<slug>` and links it in the Settings app:

###### src/apps/MyFirstApp/Loader.php (generated)

```php
$this->router()->get([
  '/^myfirstapp\/?$/' => Controllers\Home::class,
  '/^settings\/myfirstapp\/?$/' => Controllers\Settings::class,
]);

$settingsApp = $this->appManager()->getApp(\Hubleto\App\Community\Settings\Loader::class);
$settingsApp->addSetting($this, [
  'title' => 'MyFirstApp',
  'icon' => 'fas fa-table',
  'url' => 'settings/myfirstapp',
]);
```

The community apps usually keep the settings pages under their own slug (`deals/tags`, `contacts/categories`). See [Settings integration](../integrations/settings).

## Order of routes

The router tests all routes and **the last matching route wins**. This lets a later app override a route of an earlier one, but it can also hide a route by accident. Keep your regular expressions specific (use `^` and `$`) and start them with your app's slug.

## Debugging routes

`php hubleto help` lists `php hubleto debug router [routeToDebug]`.

> **NOTE** In the tested dev-main build (erp `9cdb6ba`), `php hubleto debug router` fails with *Class "Hubleto\Erp\Router" not found*. Until it is fixed, you can print the routes yourself, e.g. in a temporary controller: `var_dump(array_keys($this->router()->getRoutes(\Hubleto\Framework\Services\Router::HTTP_GET)));`.
