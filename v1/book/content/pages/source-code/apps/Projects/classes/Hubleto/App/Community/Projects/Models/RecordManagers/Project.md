
# \Hubleto\App\Community\Projects\Models\RecordManagers\Project
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ MAIN_DEVELOPER

```php
public MAIN_DEVELOPER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ PROJECT_MANAGER

```php
public PROJECT_MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ ACCOUNT_MANAGER

```php
public ACCOUNT_MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
```


### ƒ ORDERS

```php
public ORDERS(): \Hubleto\App\Community\Projects\Models\RecordManagers\hasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Projects\Models\RecordManagers\Lead>
```


### ƒ TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectTask,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
```


### ƒ MILESTONES

```php
public MILESTONES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectTask,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
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

