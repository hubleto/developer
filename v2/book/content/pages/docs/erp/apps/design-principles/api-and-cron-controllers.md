# Design principles for special controllers: API controller and Cron controller

Most controllers render HTML. Two kinds of classes are special:

  * **API controllers** return JSON. React components call them.
  * **Crons** are not called by a URL. They run on a schedule.

## API controllers

### Principles

  1. **Extend `Hubleto\Erp\Controllers\ApiController`** and put the class in `Controllers/Api/`.
  2. **Name it after the action**: `GeneratePdf`, `CreateFromLead`, `GetCustomerContacts`, `MarkAsRead`.
  3. **Route it under `<rootUrlSlug>/api/<action-in-kebab-case>`**, e.g. `deals/api/create-from-lead`.
  4. **Implement `response()`** and return an array. The base class converts it to JSON. If an exception is thrown, it returns HTTP 400 with the error message. (Many existing controllers override `renderJson()` directly. That works too, but then you must handle errors yourself.)
  5. **Read input only through the router**: `urlParamAsInteger()`, `urlParamAsString()`, `urlParamAsArray()`, `urlParamAsBool()`. GET, POST and JSON body parameters are all available this way.
  6. **Return a `status` key** (`'success'` or `'failed'`), so the caller can check the result easily.
  7. **Don't use API controllers for standard CRUD.** Tables and forms use the generic framework endpoints (`api/record/save`, `api/record/delete`, `api/table-describe-and-load`, ...).

###### Base class: Hubleto\Erp\Controllers\ApiController

```php
class ApiController extends \Hubleto\Erp\Controller
{
  public int $returnType = self::RETURN_TYPE_JSON;
  public bool $permittedForAllUsers = true;
  public bool $disableLogUsage = true;

  public function response(): array
  {
    return [];
  }

  public function renderJson(): array
  {
    try {
      return $this->response();
    } catch (\Throwable $e) {
      http_response_code(400);

      return [
        'status' => 'error',
        'code' => (int) $e->getCode(),
        'trace' => $e->getTraceAsString(),
        'message' => $e->getMessage(),
        'source' => 'api-controller',
      ];
    }
  }
}
```

### Example: an endpoint that creates a record

###### apps/Deals/Controllers/Api/CreateFromLead.php (simplified)

```php
<?php

namespace Hubleto\App\Community\Deals\Controllers\Api;

use Hubleto\App\Community\Deals\Models\Deal;
use Hubleto\App\Community\Deals\Models\DealLead;
use Hubleto\App\Community\Leads\Models\Lead;
use Hubleto\App\Community\Workflow\Models\Workflow;

class CreateFromLead extends \Hubleto\Erp\Controllers\ApiController
{
  public function response(): array
  {
    $idLead = $this->router()->urlParamAsInteger("idLead");

    if ($idLead <= 0) {
      return [ "status" => "failed", "error" => "The lead for converting was not set" ];
    }

    /** @var Lead $mLead */
    $mLead = $this->getModel(Lead::class);
    /** @var Deal $mDeal */
    $mDeal = $this->getModel(Deal::class);
    /** @var DealLead $mDealLead */
    $mDealLead = $this->getModel(DealLead::class);
    /** @var Workflow $mWorkflow */
    $mWorkflow = $this->getModel(Workflow::class);

    $lead = $mLead->record->where("id", $idLead)->first();

    $deal = $mDeal->record->recordCreate([
      "identifier" => $lead->identifier,
      "title" => $lead->title,
      "id_customer" => $lead->id_customer,
      "id_lead" => $lead->id,
      "deal_result" => $mDeal::RESULT_UNKNOWN,
    ]);

    $deal = $mWorkflow->applyDefaultWorkflow($deal, 'deals');

    $mDealLead->record->recordCreate([
      'id_deal' => $deal['id'],
      'id_lead' => $idLead,
    ]);

    return [
      "status" => "success",
      "idDeal" => $deal['id'],
    ];
  }
}
```

###### Route in apps/Deals/Loader.php

```php
$this->router()->get([
  '/^deals\/api\/create-from-lead\/?$/' => Controllers\Api\CreateFromLead::class,
]);
```

###### Calling it from React (apps/Deals/Loader.tsx)

```tsx
import request from "@hubleto/react-ui/core/Request";

request.get(
  'deals/api/create-from-lead',
  {idLead: form.id},
  (data: any) => {
    if (data.status == "success") {
      globalThis.window.open(globalThis.hubleto.config.projectUrl + `/deals/${data.idDeal}`);
    }
  }
);
```

`request.get(url, queryParams, onSuccess, onError)` and `request.post(url, postData, queryParams, onSuccess, onError)` prepend the project URL and add `__IS_AJAX__=1` automatically.

### Example: an endpoint returning data for a chart

###### apps/Worksheets/Controllers/Api/DailyActivityChart.php (shortened)

```php
class DailyActivityChart extends \Hubleto\Erp\Controllers\ApiController
{
  public function response(): array
  {
    $mActivity = $this->getModel(\Hubleto\App\Community\Worksheets\Models\Activity::class);

    $workedHoursPerDay = $mActivity->record
      ->groupBy(DB::raw('date(datetime_created)'))
      ->selectRaw('sum(worked_hours) as worked, date(datetime_created) as date')
      ->get()?->toArray();

    $chartPoints = [];
    foreach ($workedHoursPerDay as $item) {
      $chartPoints[] = ['x' => $item['date'], 'y' => $item['worked']];
    }

    return [
      'data' => [
        'datasets' => [
          [ 'label' => $this->translate('Daily activity'), 'data' => $chartPoints ],
        ],
      ],
    ];
  }
}
```

### Generic API endpoints of the framework

These endpoints are registered by the framework router. You don't need to write them:

| Route                           | Controller                                         | Used by                          |
| ------------------------------- | -------------------------------------------------- | -------------------------------- |
| `api/table-describe-and-load`   | `Hubleto\Framework\Controllers\Api\Table\DescribeAndLoad` | `Table.tsx`               |
| `api/form-describe-and-load`    | `Hubleto\Framework\Controllers\Api\Form\DescribeAndLoad`  | `Form.tsx`                |
| `api/table/describe`, `api/form/describe` | `...\Table\Describe`, `...\Form\Describe`  | legacy components                |
| `api/record/get`                | `...\Record\Get`                                   | forms                            |
| `api/record/load-table-data`    | `...\Record\LoadTableData`                         | legacy tables                    |
| `api/record/lookup`             | `...\Record\Lookup`                                | lookup inputs                    |
| `api/record/save`               | `...\Record\Save`                                  | forms, inline editing            |
| `api/record/save-junction`      | `...\Record\SaveJunction`                          | junction tables                  |
| `api/record/delete`             | `...\Record\Delete`                                | tables, forms                    |
Generic endpoints.

### Public endpoints

API controllers require a signed-in user by default. To make an endpoint public (e.g. a webhook), set:

```php
public bool $requiresAuthenticatedUser = false;
```

> **NOTE** A public endpoint must validate its input carefully and must not expose private data.

### Generating an API controller

```bash
php hubleto create api MyFirstApp get-statistics
```

The command creates `Controllers/Api/GetStatistics.php` (the kebab-case name converted to PascalCase) and adds the route `myfirstapp/api/get-statistics` at the `//@hubleto-cli:routes` marker in `Loader.php`.

## Cron controllers

### Principles

  1. **Extend `Hubleto\Erp\Cron`** and put the class in `Crons/`.
  2. **Set `$schedulingPattern`** in cron syntax (minute, hour, day, month, day of week).
  3. **Implement `run()`.** Keep it short. Move the logic into a service class of the app (e.g. `Mailer`, `Digest`) so it can also be called from elsewhere.
  4. **Register the cron** in `Loader::init()` with `$this->cronManager()->addCron(...)`.
  5. **Log what happened** with `$this->logger()`.
  6. **Limit the work per run** (e.g. max number of e-mails), because the next run comes soon.

###### Base class: Hubleto\Erp\Cron

```php
class Cron extends \Hubleto\Erp\Core
{
  // CRON-formatted string specifying the scheduling pattern
  public string $schedulingPattern = '*/5 * * * *';

  public function run(): void
  {
    // to be overriden
  }
}
```

### Example: fetching e-mails every 5 minutes

###### apps/Mail/Crons/GetMails.php

```php
<?php

namespace Hubleto\App\Community\Mail\Crons;

use Hubleto\App\Community\Mail\Mailer;

class GetMails extends \Hubleto\Erp\Cron
{
  public string $schedulingPattern = '*/5 * * * *';

  public function run(): void
  {
    /** @var Mailer $mailer */
    $mailer = $this->getService(Mailer::class);
    $mailer->getMails();
  }
}
```

###### Registration in apps/Mail/Loader.php

```php
$this->cronManager()->addCron(Crons\GetMails::class);
$this->cronManager()->addCron(Crons\SendMails::class);
```

### Example: a daily job

###### apps/Notifications/Crons/DailyDigest.php

```php
class DailyDigest extends \Hubleto\Erp\Cron
{
  // every day at 06:05
  public string $schedulingPattern = '05 06 * * *';

  public function run(): void
  {
    $emailsSent = [];
    $users = $this->authProvider()->getActiveUsers();

    foreach ($users as $user) {
      $sendDailyDigest = (bool) $this->config()->get('user/' . $user['id'] . '/Hubleto\App\Community\Notifications/sendDailyDigest', false, true);
      if (!$sendDailyDigest) continue;

      /** @var \Hubleto\App\Community\Notifications\Digest $digest */
      $digest = $this->getService(\Hubleto\App\Community\Notifications\Digest::class);
      $digestHtml = $digest->getDailyDigestForUser($user);

      /** @var EmailProvider $emailProvider */
      $emailProvider = $this->getService(EmailProvider::class);

      if (!empty($digestHtml)) {
        if ($emailProvider->send($user['email'], 'Hubleto: Your Daily Digest', $digestHtml)) {
          $emailsSent[] = $user['email'];
        }
      }
    }

    $this->logger()->info('Daily digest sent to: ' . join(', ', $emailsSent));
  }
}
```

### Scheduling pattern

`CronManager::run()` compares the pattern with the current time. Each of the five fields supports:

| Syntax  | Meaning                      | Example        |
| ------- | ---------------------------- | -------------- |
| `*`     | every value                  | `* * * * *`    |
| `*/n`   | every n-th value             | `*/5 * * * *`  |
| number  | exact value                  | `05 06 * * *`  |
Supported syntax.

> **NOTE** Lists (`1,15`) and ranges (`1-5`) are not supported by the built-in `CronManager`.

### Running crons

The project contains `cron.php`. It must be executed **every minute** by the system cron:

###### cron.php in the project root

```php
<?php

// bootstrap
require_once(__DIR__ . "/boot.php");

// run cron
$hubleto->cronManager()->init();
$hubleto->cronManager()->run();
```

###### crontab entry

```
* * * * * php /var/www/html/hubleto/cron.php
```
