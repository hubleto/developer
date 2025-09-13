
# \Hubleto\App\Community\Campaigns\Models\RecordManagers\Campaign
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\User,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Lead>
```


### MAIL_ACCOUNT

```php
public MAIL_ACCOUNT(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Mail\Models\RecordManagers\Account,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### MAIL_TEMPLATE

```php
public MAIL_TEMPLATE(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Mail\Models\RecordManagers\Template,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### CONTACTS

```php
public CONTACTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Campaigns\Models\RecordManagers\DealTask,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Campaigns\Models\RecordManagers\DealTask,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### prepareReadQuery

```php
public prepareReadQuery(mixed $query = null, int $level): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |
| `$level`  | **int**   |             |

