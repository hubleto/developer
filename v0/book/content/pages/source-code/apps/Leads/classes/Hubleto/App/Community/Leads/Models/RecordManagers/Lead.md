
# \Hubleto\App\Community\Leads\Models\RecordManagers\Lead
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### CAMPAIGN

```php
public CAMPAIGN(): \Hubleto\App\Community\Leads\Models\RecordManagers\belongsTo<\Hubleto\App\Community\Campaigns\Models\RecordManagers\Campaign,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### DEAL

```php
public DEAL(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasOne<\Hubleto\App\Community\Deals\Models\RecordManagers\Deal,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### TEAM

```php
public TEAM(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### LEVEL

```php
public LEVEL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### CONTACT

```php
public CONTACT(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasOne<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### CURRENCY

```php
public CURRENCY(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### HISTORY

```php
public HISTORY(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadHistory,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### TAGS

```php
public TAGS(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadTag,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ACTIVITIES

```php
public ACTIVITIES(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadActivity,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### DOCUMENTS

```php
public DOCUMENTS(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### CAMPAIGNS

```php
public CAMPAIGNS(): \Hubleto\App\Community\Leads\Models\RecordManagers\hasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\DealTask,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
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


### addOrderByToQuery

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### addFulltextSearchToQuery

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |

