# Integrations

A Hubleto app rarely works alone. Deals appear in the calendar, move through a workflow, show warnings on a dashboard, can be found by the global search and show a badge in the sidebar. None of this requires changing the Calendar, Workflow or Dashboards apps. Each of these apps offers an **integration point**, and your app plugs into it in `Loader::init()` or by overriding a method of the loader.

## Integration points

| Integration                                                         | How                                                                                | Example apps                                |
| ------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ------------------------------------------- |
| [Calendar](integrations/calendar)                                   | `Calendar.php` + `$calendarManager->addCalendar()`                                 | Deals, Leads, Orders, Tasks, Projects, HrLeave, Customers |
| [Workflow](integrations/workflow)                                   | `Workflow.php` + `$workflowManager->addWorkflowGroup()`                            | Deals, Leads, Orders, Tasks, Projects, Invoices, HR apps |
| [Settings](integrations/settings)                                   | `$settingsApp->addSetting()`                                                       | Contacts, Deals, Leads, Orders, Workflow, Notifications |
| [Dashboards](integrations/dashboards)                               | board controller + `$dashboardManager->addBoard()`                                 | Deals, Orders, Tasks, Calendar, Worksheets, Workflow |
| [Creating event listeners](integrations/creating-event-listeners)   | classes in `EventListeners/`                                                       | AuditLogs, Workflow, Notifications, Usage   |
| [Registering event listeners](integrations/registering-event-listeners) | `$eventManager->addEventListener()`                                            | AuditLogs, Workflow, Notifications, Usage   |
| [Second sidebar](integrations/second-sidebar)                       | `Loader::renderSecondSidebar()`                                                    | Deals, Orders, Projects, Tasks, Workflow, HR apps |
| [Alerts](integrations/alerts)                                       | `Loader::renderAlerts()`                                                           | Deals, Leads, Orders, Invoices              |
| [Fulltext search](integrations/fulltext-search)                     | `Loader::search()` + `addSearchSwitch()`                                           | Contacts, Customers, Deals, Orders, Tasks, Projects, Invoices, Products |
| [Sidebar badges](integrations/sidebar-badges)                       | `Counter.php` + `Loader::getSidebarBadgeNumber()`                                  | Calendar, Deals, Leads, Orders, Mail, Tasks, HR apps |
Integration points.

## A loader that uses almost everything

###### apps/Orders/Loader.php (shortened)

```php
class Loader extends \Hubleto\Erp\App
{
  public function init(): void
  {
    parent::init();

    $this->router()->crud('orders', Controllers\Orders::class);

    // Fulltext search: "/o <text>" searches only in orders
    $this->addSearchSwitch('o', 'orders');

    // Workflow
    $workflowManager = $this->getService(\Hubleto\App\Community\Workflow\Manager::class);
    $workflowManager->addWorkflowGroup($this, 'orders', Workflow::class);

    // Settings
    $settingsApp = $this->appManager()->getApp(\Hubleto\App\Community\Settings\Loader::class);
    $settingsApp->addSetting($this, [
      'title' => $this->translate('Order states'),
      'icon' => 'fas fa-file-lines',
      'url' => 'orders/states',
    ]);

    // Calendar
    $calendarManager = $this->getService(\Hubleto\App\Community\Calendar\Manager::class);
    $calendarManager->addCalendar($this, 'orders', Calendar::class);

    // Dashboards
    $dashboardManager = $this->getService(\Hubleto\App\Community\Dashboards\Manager::class);
    $dashboardManager->addBoard($this, $this->translate('Order warnings'), 'orders/boards/order-warnings');
  }

  public function getSidebarBadgeNumber(): int { /* Counter */ }
  public function renderAlerts(): string { /* Counter */ }
  public function renderSecondSidebar(): string { /* buttons */ }
  public function search(array $expressions): array { /* results */ }
}
```

## Principles

  1. **Register in `init()`, compute later.** `init()` runs on every request. Registration is cheap. Counting and querying happen only when the Calendar, Dashboard, sidebar or search actually need the data.
  2. **Use the managers as services** with `$this->getService(Manager::class)`. They are shared, so all apps register into the same instance.
  3. **Put the integration logic into a class of your app** (`Calendar.php`, `Workflow.php`, `Counter.php`). The loader only connects it.
  4. **Reuse the same query** for badges, alerts and filtered lists (see `Counter.php`). Then the numbers always match.
  5. **Check optional dependencies.** `$this->appManager()->getApp(...)` returns `null` when the app is not installed or is disabled.
