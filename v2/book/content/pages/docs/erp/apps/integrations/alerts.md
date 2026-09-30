# Rendering alerts using Loader::renderAlerts()

Alerts warn the user about things in the app that need attention: *7 open leads without future plan*, *orders awaiting invoice*, *not paid invoices*. Each alert is a link to a filtered list, so the user can fix the problem with one click.

<img src="{{ bookRootUrl }}/content/assets/images/docs/erp/apps/alerts.png" alt="Alert of the Leads app" />
The alert of the Leads app: *7 open leads without future plan*. The red triangle button next to the breadcrumb shows and hides the alerts.

## How it works

Override `renderAlerts()` in your loader and return HTML. Like the second sidebar, it is called **only for the activated app**:

###### From apps/Desktop/Controllers/Desktop.php

```php
$this->viewParams['appAlerts'] = $activatedApp ? $activatedApp->renderAlerts() : '';
```

When the returned HTML is not empty, the desktop shows a red triangle button next to the breadcrumb. The alerts are hidden by default and the button toggles them:

###### From apps/Desktop/Views/Desktop.twig

```twig
{{ '{%' }} if viewParams.appAlerts != '' {{ '%}' }}
  <div>
    <div class="btn btn-danger" onclick="$('.app-alerts').toggle()">
      <span class="icon"><i class="fas fa-exclamation-triangle"></i></span>
    </div>
  </div>
{{ '{%' }} endif {{ '%}' }}

{{ '{#' }} ... {{ '#}' }}

{{ '{%' }} if viewParams.appAlerts != '' {{ '%}' }}
  <div class="app-alerts">{{ '{{' }} viewParams.appAlerts|raw {{ '}}' }}</div>
{{ '{%' }} endif {{ '%}' }}
```

**Return an empty string when there is nothing to report.** Then the button is not shown at all.

## Examples

### One alert

###### apps/Deals/Loader.php (simplified)

```php
public function renderAlerts(): string
{
  /** @var Counter $counter */
  $counter = $this->getService(Counter::class);

  $openDealsWithoutFuturePlan = $counter->openDealsWithoutFuturePlan();

  if ($openDealsWithoutFuturePlan == 0) {
    return '';
  }

  return '
    <a href="' . $this->env()->projectUrl . '/deals?filters%5BfDealClosed%5D=1&filters%5BfDealWithPlan%5D=2">'
      . $openDealsWithoutFuturePlan . ' ' . $this->translate('open deals without future plan')
    . '</a><br/>
  ';
}
```

The link opens the deals table with the filters *Open* (`fDealClosed=1`) and *Without plan* (`fDealWithPlan=2`). Those are the filters defined in `Deal::describeTable()`. `%5B` and `%5D` are the URL-encoded `[` and `]`.

### More alerts

###### apps/Orders/Loader.php

```php
public function renderAlerts(): string
{
  $counter = $this->getService(Counter::class);

  $countOrdersAwaitingInvoice = $counter->ordersAwaitingInvoice();
  $countOpenOrdersWithoutFuturePlan = $counter->openOrdersWithoutFuturePlan();

  return
    ($countOrdersAwaitingInvoice > 0 ? '
      <a href="' . $this->env()->projectUrl . '/orders/orders-awaiting-invoice">'
        . $countOrdersAwaitingInvoice . ' ' . $this->translate('orders are awaiting invoice')
      . '</a><br/>
    ' : '')
    . ($countOpenOrdersWithoutFuturePlan > 0 ? '
      <a href="' . $this->env()->projectUrl . '/orders?filters%5BfOrderClosed%5D=1&filters%5BfOrderWithPlan%5D=2">'
        . $countOpenOrdersWithoutFuturePlan . ' ' . $this->translate('orders without future plan')
      . '</a><br/>
    ' : '');
}
```

###### apps/Invoices/Loader.php (part)

```php
$draftInvoicesCount = $counter->draftInvoices();
$notPaidInvoicesCount = $counter->notPaidInvoices();

return
  ($draftInvoicesCount > 0 ? '
    <a href="' . $this->env()->projectUrl . '/invoices?filters%5BfDraft%5D=1">'
      . $this->translate('Drafts') . ': ' . $draftInvoicesCount
    . '</a><br/>
  ' : '')
  . ($notPaidInvoicesCount > 0 ? '
    <a href="' . $this->env()->projectUrl . '/invoices?filters%5BfIssued%5D=0&filters%5BfPaid%5D=2">'
      . $this->translate('Not paid') . ': ' . $notPaidInvoicesCount
    . '</a><br/>
  ' : '');
```

### A readable version for your app

With more alerts, collect them in an array. It is easier to read than a chain of ternary operators:

```php
public function renderAlerts(): string
{
  /** @var Counter $counter */
  $counter = $this->getService(Counter::class);

  $alerts = [];

  $overdueBooks = $counter->overdueBooks();
  if ($overdueBooks > 0) {
    $url = $this->env()->projectUrl . '/myfirstapp/books?filters%5BfOverdue%5D=1';
    $alerts[] = '<a href="' . $url . '">' . $overdueBooks . ' ' . $this->translate('overdue books') . '</a>';
  }

  $booksWithoutAuthor = $counter->booksWithoutAuthor();
  if ($booksWithoutAuthor > 0) {
    $url = $this->env()->projectUrl . '/myfirstapp/books?filters%5BfWithoutAuthor%5D=1';
    $alerts[] = '<a href="' . $url . '">' . $booksWithoutAuthor . ' ' . $this->translate('books without author') . '</a>';
  }

  return join('<br/>', $alerts);
}
```

## Alerts, badges and filters belong together

The community apps use one query for three things:

| Place                              | Code                                                        |
| ---------------------------------- | ----------------------------------------------------------- |
| Alert (this page)                  | `$counter->openDealsWithoutFuturePlan()` in `renderAlerts()` |
| Sidebar badge                      | the same method in `getSidebarBadgeNumber()`                |
| Filtered table the alert links to  | the filter `fDealWithPlan=2` in `addUrlFiltersToQuery()`    |
One query, three places.

Keep the counter query and the filter in the record manager consistent. Then the number in the alert equals the number of rows the user sees after clicking it. See [Sidebar badges](sidebar-badges) for the `Counter` class.

## Tips

  * One alert per line, each a link.
  * Put the number first, then a short translated text.
  * Don't show alerts for things the user cannot change.
  * Keep the queries cheap. `renderAlerts()` runs on every page of the app.
