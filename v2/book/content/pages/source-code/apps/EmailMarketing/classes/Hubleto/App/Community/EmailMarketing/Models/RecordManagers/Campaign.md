
# \Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Campaign
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Lead>
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Lead>
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ SCHEDULES

```php
public SCHEDULES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\DealTask,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ TAGS

```php
public TAGS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\CampaignTag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Contact>
```


### ƒ addFulltextSearchToQuery

[Description for addFulltextSearchToQuery]

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### ƒ prepareReadQuery

[Description for prepareReadQuery]

```php
public prepareReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): mixed
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |

