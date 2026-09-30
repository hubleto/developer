# Design principles for Twig views

Views are [Twig](https://twig.symfony.com) templates in the app's `Views/` folder. A controller prepares the variables (`$this->viewParams`) and selects the view (`$this->setView()`). The renderer puts the rendered HTML into the Hubleto desktop (sidebar, top bar, second sidebar, alerts).

## Principles

  1. **Views are thin.** Most views only render a React component with the [`hblreact` tag](hblreact-tag). Data for tables and forms is loaded by React, not by Twig.
  2. **Prepare data in the controller, not in the view.** A view should not call models or run queries. Put everything it needs into `$this->viewParams`.
  3. **One view per controller, same name.** `Controllers/Deals.php` → `Views/Deals.twig`.
  4. **Reference views by their namespace**: `@Hubleto:App:Community:Deals/Deals.twig`.
  5. **Translate every text** with `{{ '{{' }} translate('...') {{ '}}' }}`.
  6. **Use the Hubleto CSS classes** (`app-main-title`, `card`, `btn`, `badge`, `alert`, `table-default`) for a consistent look.

## Registering and selecting views

`App::init()` registers the `Views/` folder of each app as a Twig namespace. The namespace is the app namespace with colons:

| App namespace                         | Twig namespace                          | View path in the controller                          |
| ------------------------------------- | --------------------------------------- | ---------------------------------------------------- |
| `Hubleto\App\Community\Deals`         | `@Hubleto:App:Community:Deals`          | `@Hubleto:App:Community:Deals/Deals.twig`            |
| `Hubleto\App\Community\HrLeave`       | `@Hubleto:App:Community:HrLeave`        | `@Hubleto:App:Community:HrLeave/Leaves.twig`         |
| `Hubleto\App\Custom\MyFirstApp`       | `@Hubleto:App:Custom:MyFirstApp`        | `@Hubleto:App:Custom:MyFirstApp/Home.twig`           |
Twig namespaces of apps.

###### apps/Deals/Controllers/Deals.php (simplified)

```php
<?php

namespace Hubleto\App\Community\Deals\Controllers;

class Deals extends \Hubleto\Erp\Controller
{
  public function prepareView(): void
  {
    parent::prepareView();

    if ($this->router()->isUrlParam('add')) {
      $this->viewParams['recordId'] = -1;
    }

    $this->setView('@Hubleto:App:Community:Deals/Deals.twig');
  }
}
```

> **NOTE** Call `parent::prepareView()` **before** you add your own `viewParams`. The parent fills `viewParams` with the URL and route parameters (e.g. `recordId`, `q`, `filters`, `tab`) and would overwrite values set earlier.

## Variables available in a view

| Variable      | Content                                                                                        |
| ------------- | ---------------------------------------------------------------------------------------------- |
| `viewParams`  | Values set by the controller, plus all URL and route parameters (`recordId`, `q`, `filters`, `search`, `tab`, ...) and `breadcrumbs`, `requestedUri`, `contextHelpUrl`. |
| `hubleto`     | The renderer (a `Core` object). Gives access to services: `hubleto.locale()`, `hubleto.config()`, `hubleto.appManager()`, ... |
| `user`        | The signed-in user (array).                                                                    |
| `config`      | The whole configuration.                                                                       |
Variables passed to every view.

## Twig functions added by Hubleto

| Function                          | Description                                                                 | Example                                              |
| --------------------------------- | --------------------------------------------------------------------------- | ---------------------------------------------------- |
| `translate(string)`               | Translates a string in the controller's context.                            | `{{ '{{' }} translate('Open deal') {{ '}}' }}`                       |
| `translate(string, ctx, inner)`   | Translates in an explicit context.                                          | `{{ '{{' }} translate('Deals', 'Hubleto\\App\\Community\\Deals\\Loader', 'manifest') {{ '}}' }}` |
| `setTranslationContext(ctx, inner)` | Changes the translation context for the rest of the view.                 |                                                      |
| `hasPermission(permission)`       | Checks a permission of the user.                                            | `{{ '{%' }} if hasPermission('...') {{ '%}' }}`                      |
| `hasRole(role)`                   | Checks a role of the user.                                                  |                                                      |
| `number(amount)`                  | Formats a number with 2 decimals.                                           | `{{ '{{' }} number(deal.price) {{ '}}' }}`                           |
| `str2url(string)`                 | Converts a string to a URL slug.                                            |                                                      |
Twig functions.

## Typical views

### A view with a table

This is the most common view. It passes the URL state (opened record, search, filters, tab) to the React table, so that a URL like `deals/5?tab=items` opens the right record on the right tab.

###### apps/Deals/Views/Deals.twig

```twig
<hblreact-deals-table-deals
  string:tag="table-deals"
  int:record-id="{{ '{{' }} viewParams.recordId {{ '}}' }}"
  string:fulltext-search='{{ '{{' }} viewParams.q {{ '}}' }}'
  json:column-search='{{ '{{' }} viewParams.search|json_encode {{ '}}' }}'
  json:filters='{{ '{{' }} viewParams.filters|json_encode {{ '}}' }}'
  string:form-active-tab-uid='{{ '{{' }} viewParams.tab {{ '}}' }}'
></hblreact-deals-table-deals>
```

### A view with a title

###### apps/Deals/Views/DealsArchive.twig (start)

```twig
<h1 class="app-main-title">{{ '{{' }} translate('Archived deals') {{ '}}' }}</h1>
```

### A view with a form

Settings pages are simple HTML forms. The controller reads the posted values and saves them:

###### apps/Deals/Controllers/Settings.php (part)

```php
public function prepareView(): void
{
  parent::prepareView();

  /** @var \Hubleto\App\Community\Deals\Loader $dealsApp */
  $dealsApp = $this->appManager()->getApp(\Hubleto\App\Community\Deals\Loader::class);

  $settingsChanged = $this->router()->urlParamAsBool('settingsChanged');
  if ($settingsChanged) {
    $calendarColor = $this->router()->urlParamAsString('calendarColor');
    $dealsApp->setConfigAsString('calendarColor', $calendarColor);
    $dealsApp->saveConfig('calendarColor', $calendarColor);
    $this->viewParams['settingsSaved'] = true;
  }

  $this->viewParams['calendarColor'] = $dealsApp->configAsString('calendarColor');
  $this->setView('@Hubleto:App:Community:Deals/Settings.twig');
}
```

###### Settings view (simplified from apps/Deals/Views/Settings.twig)

```twig
<div class="flex">
  <h1 class="app-main-title">{{ '{{' }} translate('Deals') {{ '}}' }} > {{ '{{' }} translate('Settings') {{ '}}' }}</h1>
  {{ '{%' }} if viewParams.settingsSaved {{ '%}' }}
    <div class="badge badge-info text-sm ml-4">{{ '{{' }} translate('Settings saved.') {{ '}}' }}</div>
  {{ '{%' }} endif {{ '%}' }}
</div>

<div class="card mt-10 w-1/2 m-auto">
  <form id="settings-form" action="" method="POST">
    <input type="hidden" name="settingsChanged" value="1">
    <table class="table-default">
      <tr>
        <td>{{ '{{' }} translate("Calendar color") {{ '}}' }}</td>
        <td>
          <input type="text" name="calendarColor" class="hubleto component input"
            value="{{ '{{' }} viewParams.calendarColor {{ '}}' }}" onchange="this.form.submit();" />
        </td>
      </tr>
    </table>
  </form>
</div>
```

### A view for a dashboard board

Boards are small views shown inside a dashboard panel. Their controller sets `$hideDefaultDesktop = true`, so only the view's HTML is returned (no sidebar, no top bar).

###### apps/Deals/Controllers/Boards/MostValuableDeals.php

```php
class MostValuableDeals extends \Hubleto\Erp\Controller
{
  public bool $hideDefaultDesktop = true;

  public function prepareView(): void
  {
    parent::prepareView();

    /** @var Deal */
    $mDeal = $this->getModel(Deal::class);

    $this->viewParams['mostValuableDeals'] = $mDeal->record->prepareReadQuery()
      ->with('CURRENCY')
      ->orderBy("price", "desc")
      ->limit(5)
      ->get()
      ->toArray();

    $this->setView('@Hubleto:App:Community:Deals/Boards/MostValuableDeals.twig');
  }
}
```

###### apps/Deals/Views/Boards/MostValuableDeals.twig

```twig
{{ '{%' }} if viewParams.mostValuableDeals|length > 0 {{ '%}' }}
  <table class="table-default dense w-full">
    {{ '{%' }} for deal in viewParams.mostValuableDeals {{ '%}' }}
      <tr>
        <td>
          {{ '{{' }} deal.identifier {{ '}}' }}
          {{ '{{' }} deal.title {{ '}}' }}
          <small>{{ '{{' }} deal.CUSTOMER.name {{ '}}' }}</small>
        </td>
        <td>{{ '{{' }} hubleto.locale().formatCurrency(deal.price_excl_vat ?? 0, deal.CURRENCY.code ?? '') {{ '}}' }}</td>
        <td class="text-right">
          <a href="deals/{{ '{{' }} deal.id {{ '}}' }}" class="btn btn-transparent btn-small">
            <span class="icon"><i class="fas fa-arrow-right"></i></span>
            <span class="text">{{ '{{' }} translate('Open deal') {{ '}}' }}</span>
          </a>
        </td>
      </tr>
    {{ '{%' }} endfor {{ '%}' }}
  </table>
{{ '{%' }} else {{ '%}' }}
  <div class="alert alert-info">
    {{ '{{' }} translate('No deals found.') {{ '}}' }}
  </div>
{{ '{%' }} endif {{ '%}' }}
```

## Controller properties that affect the view

| Property                     | Default | Effect                                                                      |
| ---------------------------- | ------- | --------------------------------------------------------------------------- |
| `$hideDefaultDesktop`        | `false` | If `true`, the view is returned without the desktop. Use it for boards, printable pages, embedded content. |
| `$requiresAuthenticatedUser` | `true`  | If `false`, the page is public.                                             |
| `$permittedForAllUsers`      | `false` | If `true`, the app permission check is skipped.                             |
Controller properties.

## Breadcrumbs

Override `getBreadcrumbs()` in the controller. The result is available as `viewParams.breadcrumbs`:

###### apps/Deals/Controllers/Settings.php

```php
public function getBreadcrumbs(): array
{
  return array_merge(parent::getBreadcrumbs(), [
    [ 'url' => 'deals', 'content' => $this->translate('Deals') ],
    [ 'url' => 'settings', 'content' => $this->translate('Settings') ],
  ]);
}
```

## Twig syntax in this documentation

> **NOTE** This documentation site is rendered with Twig too. In the source files of these pages, Twig delimiters in code samples are escaped (for example `{{ '{{' }} '{{ '{{' }}' {{ '}}' }}`). In your own `.twig` files, write them normally.
