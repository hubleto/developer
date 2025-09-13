
# \Hubleto\App\Community\Projects\Models\RecordManagers\Project
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### MAIN_DEVELOPER

```php
public MAIN_DEVELOPER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ACCOUNT_MANAGER

```php
public ACCOUNT_MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### PHASE

```php
public PHASE(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
```


### WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
```


### ORDERS

```php
public ORDERS(): \Hubleto\App\Community\Projects\Models\RecordManagers\hasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Projects\Models\RecordManagers\Lead>
```


### TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectTask,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
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

