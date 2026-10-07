
# \Hubleto\App\Community\Tasks\Models\RecordManagers\Task
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ DEVELOPER

```php
public DEVELOPER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ TESTER

```php
public TESTER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ TODO

```php
public TODO(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Tasks\Models\RecordManagers\Todo,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ PROJECTS

```php
public PROJECTS(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
```


### ƒ DEALS

```php
public DEALS(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
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


### ƒ addUrlFiltersToQuery

[Description for addUrlFiltersToQuery]

```php
public addUrlFiltersToQuery(mixed|null $query): mixed
```

#### Parameters

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$query`  | **mixed\|null** |             |

