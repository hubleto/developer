# Dashboard

Dashboard is shown in the welcome screen of your app.

Your app can create unlimited boards for the welcome dashboard. For example, the [Community/Deals](../../apps/community/deals) app
introduces following boards:

  * Most valuable deals
  * Deals value by status

These boards can be shown on the welcome dashboard (see picture below).

<img src="{{ bookRootUrl }}/content/assets/images/dashboard.jpg">
*Example of dashboard with boards 'Most valuable deals' and 'Deals value by status'.*

> **NOTE** | Dashboard is the feature of [Community/Desktop](../../apps/community/desktop) app.

## How to add your board

### Step 1: Create the board's controller and view

To create your own board and add it to the welcome dashboard, you must first create the board's controller and view. Sample
implementation can be found in the Community/Deals app, check out following files:

| Board                  | Files                                                                                                                                                                                                                                    |
| ---------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `Most valuable deals`  | [Controller](https://github.com/hubleto/main/blob/main/apps/community/Deals/Controllers/Boards/MostValuableDeals.php) [View](https://github.com/hubleto/main/blob/main/apps/community/Deals/Views/Boards/MostValuableDeals.twig) |
| `Deal value by status` | [Controller](https://github.com/hubleto/main/blob/main/apps/community/Deals/Controllers/Boards/DealValueByStatus.php) [View](https://github.com/hubleto/main/blob/main/apps/community/Deals/Views/Boards/DealValueByStatus.twig) |
*Source files for sample boards*

Feel free to make a copy of them into your app and modify.

### Step 2: Create an endpoint to render the board

The board renderer is accessible via an endpoint specified in a router. Basically, it's an URL adress on which the board is rendered.

Modify your app's router so that it will contain routes for your board controllers:

```php
$this->getRouter()->httpGet([
  '/^my-app\/boards\/most-valuable-deals\/?$/' => Controllers\Boards\MostValuableDeals::class,
  '/^my-app\/boards\/deal-value-by-status\/?$/' => Controllers\Boards\DealValueByStatus::class,
]);
```

### Step 3: Add a board to the welcome dashboard

In your app's `init()` method, add the board to the dashboard manager:

```php
$dashboardManager = $this->getAppManager()->getApp(\HubletoApp\Community\Desktop::class)->dashboardManager;

$dashboardManager->addBoard(new \HubletoApp\Community\Desktop\Types\Board(
  'Most valuable deals',
  'my-app/boards/most-valuable-deals',
));
```

> **NOTE** | `DashboardManager` is a class of the Community/Desktop app and contains the logic for managing boards
> which will be rendered in the welcome dashboard.

### Step 4: Check the result

Now open the welcome screen of your Hubleto and you should see your boards there.