
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

### ƒ CAMPAIGN

```php
public CAMPAIGN(): \Hubleto\App\Community\Leads\Models\RecordManagers\belongsTo<\Hubleto\App\Community\Campaigns\Models\RecordManagers\Campaign,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


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


### ƒ LEVEL

```php
public LEVEL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
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


### ƒ CAMPAIGNS

```php
public CAMPAIGNS(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\DealTask,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ prepareReadQuery

```php
public prepareReadQuery(mixed $query = null, int $level, array|null $includeRelations = null): mixed
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed**       |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


### ƒ addOrderByToQuery

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### ƒ addFulltextSearchToQuery

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |

