
# \Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Email
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


### ƒ LAUNCHED_BY

```php
public LAUNCHED_BY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Lead>
```


### ƒ SENDER_ACCOUNT

```php
public SENDER_ACCOUNT(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Mail\Models\RecordManagers\Account,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ RECIPIENTS

```php
public RECIPIENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\DealTask,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
```


### ƒ CAMPAIGNS

```php
public CAMPAIGNS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\DealTask,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Deal>
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

