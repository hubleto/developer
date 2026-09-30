# Creating CRUD routes using $router->crud()

## Purpose

Most pages in Hubleto show a table of records and open a record in a form. Such a page needs three URLs:

| URL             | Meaning                                 | `recordId` |
| --------------- | --------------------------------------- | ---------- |
| `deals`         | the list of deals                       | —          |
| `deals/5`       | the list with deal #5 opened in a form  | `5`        |
| `deals/add`     | the list with an empty form             | `-1`       |
URLs of a CRUD page.

`$this->router()->crud()` registers all of them in one line:

###### apps/Deals/Loader.php

```php
$this->router()->crud('deals', Controllers\Deals::class);
```

## What crud() does

###### From Hubleto\Framework\Services\Router

```php
public function crud(string $urlSlug, string $controllerClass): void
{
  $urlSlugSanitized = str_replace('/', '\/', $urlSlug);
  $this->get([
    '/^' . $urlSlugSanitized . '(\/(?<recordId>\d+))?\/?$/' => $controllerClass,
    '/^' . $urlSlugSanitized . '\/add\/?$/' => ['controller' => $controllerClass, 'vars' => ['recordId' => -1]],
  ]);
}
```

So `crud('deals', Controllers\Deals::class)` is the same as:

```php
$this->router()->get([
  '/^deals(\/(?<recordId>\d+))?\/?$/' => Controllers\Deals::class,
  '/^deals\/add\/?$/' => ['controller' => Controllers\Deals::class, 'vars' => ['recordId' => -1]],
]);
```

The slug can contain slashes. They are escaped for you:

###### apps/HrLeave/Loader.php

```php
$this->router()->crud('hr-leave', Controllers\Leaves::class);
$this->router()->crud('hr-leave/leave-types', Controllers\LeaveTypes::class);
$this->router()->crud('hr-leave/leave-requests', Controllers\LeaveRequests::class);
```

> **NOTE** The slug `hr-leave` does not match `hr-leave/leave-types`. The regular expression allows only an optional number after the slug.

## Examples from the community apps

| App           | Registration                                                                 |
| ------------- | ---------------------------------------------------------------------------- |
| Deals         | `crud('deals', Controllers\Deals::class)`                                    |
| Leads         | `crud('leads', Controllers\Leads::class)`                                    |
| Orders        | `crud('orders', ...)`, `crud('orders/items', ...)`, `crud('orders/quotes', ...)` |
| Projects      | `crud('projects', ...)`, `crud('projects/milestones', ...)`, `crud('projects/tasks', ...)` |
| Products      | `crud('products', ...)`, `crud('products/categories', ...)`, `crud('products/groups', ...)`, `crud('products/units', ...)` |
| Tasks         | `crud('tasks', ...)`, `crud('tasks/todo', ...)`                              |
| Workflow      | `crud('workflow/workflows', ...)`, `crud('workflow/steps', ...)`, `crud('workflow/automats', ...)` |
| HrEmployees   | `crud('hr-employees', ...)`, `crud('hr-employees/employment-types', ...)`, ... |
| HrRecruitment | `crud('hr-recruitment/applications', ...)`, `crud('hr-recruitment/candidates', ...)`, ... |
| Worksheets    | `crud('worksheets', ...)`, `crud('worksheets/activity-types', ...)`          |
`crud()` in the community apps.

## The complete chain

`crud()` is one part of a chain that must use the **same URL slug** everywhere:

###### 1. Route (apps/Deals/Loader.php)

```php
$this->router()->crud('deals', Controllers\Deals::class);
```

###### 2. Controller (apps/Deals/Controllers/Deals.php)

```php
class Deals extends \Hubleto\Erp\Controller
{
  public function prepareView(): void
  {
    parent::prepareView(); // viewParams now contain 'recordId' from the route
    $this->setView('@Hubleto:App:Community:Deals/Deals.twig');
  }
}
```

###### 3. View (apps/Deals/Views/Deals.twig)

```twig
<hblreact-deals-table-deals
  string:tag="table-deals"
  int:record-id="{{ '{{' }} viewParams.recordId {{ '}}' }}"
  string:fulltext-search='{{ '{{' }} viewParams.q {{ '}}' }}'
  json:filters='{{ '{{' }} viewParams.filters|json_encode {{ '}}' }}'
  string:form-active-tab-uid='{{ '{{' }} viewParams.tab {{ '}}' }}'
></hblreact-deals-table-deals>
```

###### 4. Table (apps/Deals/Components/FC/TableDeals.tsx)

```tsx
<Table
  model={parentApp + '/Models/Deal'}
  baseUrlSlug='deals'    // the URL changes to deals/<id> when a row is opened
  ...
/>
```

###### 5. Form (apps/Deals/Components/FC/FormDeal.tsx)

```tsx
<Form
  model={parentApp + '/Models/Deal'}
  urlSlug='deals'        // "Open in new tab" and the URL use deals/<id> or deals/add
  ...
/>
```

###### 6. Model (apps/Deals/Models/Deal.php)

```php
public ?string $lookupUrlDetail = 'deals/{{ '{%' }}ID{{ '%}' }}'; // links from lookups to the deal
```

When the user opens `deals/5`:

  1. The router matches `/^deals(\/(?<recordId>\d+))?\/?$/` and sets `recordId = 5`.
  2. `Controllers\Deals` renders `Deals.twig` with `viewParams.recordId = 5`.
  3. The table gets `recordId={5}` and opens `FormDeal` with `id = 5` in a modal.
  4. When the user closes the form, the table changes the URL back to `deals`, without reloading the page.

When the user clicks *Add Deal*, the URL changes to `deals/add`. If the page is reloaded, the second route sets `recordId = -1` and an empty form opens again.

## The same without crud()

Some older apps still write the routes by hand. The result is the same:

###### apps/Contacts/Loader.php (part)

```php
$this->router()->get([
  '/^contacts\/?$/' => Controllers\Contacts::class,
  '/^contacts(\/(?<recordId>\d+))?\/?$/' => Controllers\Contacts::class,
  '/^contacts\/add\/?$/' => ['controller' => Controllers\Contacts::class, 'vars' => ['recordId' => -1]],
]);
```

Prefer `crud()` in new code. It is shorter and makes typos in the regular expressions impossible.

## Routes generated by the CLI

`php hubleto create mvc MyFirstApp Book` adds a route like this at the `//@hubleto-cli:routes` marker:

```php
$this->router()->get([ '/^myfirstapp\/books(\/(?<recordId>\d+))?\/?$/' => Controllers\Books::class ]);
```

You can replace it with `$this->router()->crud('myfirstapp/books', Controllers\Books::class);` to also support `myfirstapp/books/add`.
