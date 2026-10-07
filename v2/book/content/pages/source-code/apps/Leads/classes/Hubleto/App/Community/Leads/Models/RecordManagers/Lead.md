
# \Hubleto\App\Community\Leads\Models\RecordManagers\Lead
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ DEAL

```php
public DEAL(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasOne<\Hubleto\App\Community\Deals\Models\RecordManagers\Deal,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ TEAM

```php
public TEAM(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ CONTACT

```php
public CONTACT(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasOne<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ CURRENCY

```php
public CURRENCY(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ HISTORY

```php
public HISTORY(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadHistory,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ TAGS

```php
public TAGS(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadTag,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ ACTIVITIES

```php
public ACTIVITIES(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadActivity,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ DOCUMENTS

```php
public DOCUMENTS(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\DealTask,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


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


### ƒ addUrlFiltersToQuery

[Description for addUrlFiltersToQuery]

```php
public addUrlFiltersToQuery(mixed $query): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |


### ƒ addOrderByToQuery

[Description for addOrderByToQuery]

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


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

