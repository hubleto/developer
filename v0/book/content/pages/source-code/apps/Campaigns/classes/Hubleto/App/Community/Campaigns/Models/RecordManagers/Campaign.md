
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


### MAIL_TEMPLATE

```php
public MAIL_TEMPLATE(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Pipeline\Models\RecordManagers\Pipeline,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### PIPELINE

```php
public PIPELINE(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Pipeline\Models\RecordManagers\Pipeline,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
```


### PIPELINE_STEP

```php
public PIPELINE_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Pipeline\Models\RecordManagers\PipelineStep,\Hubleto\App\Community\Campaigns\Models\RecordManagers\Deal>
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

