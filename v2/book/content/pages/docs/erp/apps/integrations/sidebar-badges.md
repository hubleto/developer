# Counting badge numbers in sidebar using custom Counter.php class and Loader::getSidebarBadgeNumber()

A badge is the red number next to an app in the main sidebar. It tells the user how many things wait for them in that app: missed activities, open leads without a plan, unread e-mails, pending leave requests.

<img src="{{ bookRootUrl }}/content/assets/images/docs/erp/apps/sidebar-badges.png" alt="Badges in the main sidebar" />
Badges in the main sidebar: Calendar 5, Leads 7, Deals 6, Orders 9, Recruitment 3, Leave 4, Attendance 2, Performance 1.

## The pattern: Counter.php + getSidebarBadgeNumber()

  1. Put the counting queries into a `Counter` class in the app's root folder.
  2. Return the number from `getSidebarBadgeNumber()` in the loader.
  3. Reuse the same `Counter` methods in [alerts](alerts) and the [second sidebar](second-sidebar).

13 community apps use this pattern: Calendar, Deals, Leads, Orders, Invoices, Mail, Notifications, Tasks, HrEmployees, HrLeave, HrAttendance, HrRecruitment, HrPerformance.

### 1. Counter.php

###### apps/Deals/Counter.php

```php
<?php

namespace Hubleto\App\Community\Deals;

use Hubleto\Erp\Core;

class Counter extends Core
{
  public function queryForOpenDealsWithoutFuturePlan(): mixed
  {
    $mDeal = $this->getModel(Models\Deal::class);

    return $mDeal->record->prepareReadQuery()
      ->whereDoesntHave('ACTIVITIES', function($q) {
        $q->where('completed', false);
        $q->whereDate('date_start', '>=', date("Y-m-d"));
      })
      ->where($mDeal->table . '.is_closed', false);
  }

  public function openDealsWithoutFuturePlan(): int
  {
    return $this->queryForOpenDealsWithoutFuturePlan()->count();
  }
}
```

Conventions of Counter classes:

  * extend `Hubleto\Erp\Core`,
  * one public method per number, named after what it counts (`openDealsWithoutFuturePlan()`, `myDueTodo()`, `pendingRequests()`),
  * a separate `queryFor...()` method returning the query, if the same records are also listed somewhere,
  * start with `prepareReadQuery()`, so the number respects the user's permissions.

### 2. getSidebarBadgeNumber()

###### apps/Deals/Loader.php

```php
public function getSidebarBadgeNumber(): int
{
  /** @var Counter $counter */
  $counter = $this->getService(Counter::class);
  return $counter->openDealsWithoutFuturePlan();
}
```

Return `0` to show no badge. That is the default implementation in `Hubleto\Framework\App`.

## More examples

###### apps/HrLeave/Counter.php: count by workflow step tags

```php
class Counter extends Core
{
  public function pendingRequests(): int
  {
    $mRequest = $this->getModel(Models\LeaveRequest::class);

    return $mRequest->record->prepareReadQuery()
      ->whereHas('WORKFLOW_STEP', function ($query) {
        $query->whereIn('tag', [
          'hr-leave-submitted',
          'hr-leave-manager-review',
          'hr-leave-hr-review',
        ]);
      })
      ->count();
  }
}
```

###### apps/HrLeave/Loader.php

```php
public function getSidebarBadgeNumber(): int
{
  $counter = $this->getService(Counter::class);
  return $counter->pendingRequests();
}
```

###### apps/Orders/Loader.php: sum of more numbers

```php
public function getSidebarBadgeNumber(): int
{
  $counter = $this->getService(Counter::class);

  $countOrdersAwaitingInvoice = $counter->ordersAwaitingInvoice();
  $countOpenOrdersWithoutFuturePlan = $counter->openOrdersWithoutFuturePlan();

  return $countOrdersAwaitingInvoice + $countOpenOrdersWithoutFuturePlan;
}
```

###### apps/Orders/Counter.php (part)

```php
public function queryForDueAndChargeableItemsNotPreparedForInvoice(): mixed
{
  $mItem = $this->getModel(Models\Item::class);
  return $mItem->record->prepareReadQuery()
    ->whereDate('orders_items.date_due', '<', date("Y-m-d"))
    ->whereNull('orders_items.id_invoice_item')
    ->where('orders_items.is_chargeable', 1)
    ->where('orders_items.price_excl_vat', '>', 0);
}

public function dueAndChargeableItemsNotPreparedForInvoice(): int
{
  return $this->queryForDueAndChargeableItemsNotPreparedForInvoice()->count();
}
```

The same query is used for the badge of the *Items* button in the second sidebar and by the items controller for its list.

###### Other badges

| App           | Method in Loader                           | Counts                                    |
| ------------- | ------------------------------------------ | ----------------------------------------- |
| Calendar      | `$counter->missedIncompleteActivities(null)` | activities in the past not completed    |
| Leads         | `$counter->openLeadsWithoutFuturePlan()`   | open leads without a future activity      |
| Mail          | `$counter->allUnreadMails()`               | unread e-mails                            |
| Notifications | `$counter->myUnread()`                     | unread notifications of the user          |
| Tasks         | `$counter->myDueTodo()`                    | due to-dos of the user                    |
Badges of the community apps.

## How badges are loaded

Badges are not computed while the page is rendered. The desktop loads them with an AJAX request **5 seconds after the page loads**, so a slow counter doesn't slow down the page:

###### From apps/Desktop/Views/Desktop.twig (part)

```js
function getSidebarBadgeNumbers() {
  $('.notification-badge').show();
  $.getJSON(
    window.ConfigEnv.projectUrl + '/desktop/api/get-sidebar-badge-numbers',
    {},
    // ... puts the numbers next to the apps
  );
}

setTimeout(function() { getSidebarBadgeNumbers(); }, 5000);
```

###### apps/Desktop/Controllers/Api/GetSidebarBadgeNumbers.php

```php
public function renderJson(): array
{
  $desktopApp = $this->getService(Loader::class);
  $appsInSidebar = $desktopApp->getAppsInSidebar();

  $sidebarBadgeNumbers = [];
  foreach ($appsInSidebar as $appNamespace => $app) {
    try {
      $sidebarBadgeNumbers[$appNamespace] = $app->getSidebarBadgeNumber();
    } catch (\Throwable $e) {
      //
    }
  }

  return [
    "sidebarBadgeNumbers" => $sidebarBadgeNumbers,
  ];
}
```

Consequences:

  * `getSidebarBadgeNumber()` is called for **every app in the sidebar**, on every page. Keep the query fast. Use indexes and `count()`, not `get()`.
  * An exception in your counter is ignored. Your app gets no badge, and the other apps are not affected.
  * Only apps visible in the sidebar (permitted for the user, `sidebarOrder > 0`) are asked.

## Tips

  * Badges should count things **the current user** should act on. Filter by owner (`id_owner`) or rely on `prepareReadQuery()`.
  * Use the same `Counter` method for the badge, the alert and the filtered list, so the numbers match.
  * Don't show informational totals (e.g. the number of all customers) as a badge. Users learn to ignore badges that are always there.
