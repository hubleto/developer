
# \Hubleto\App\Community\HrLeave\Models\RecordManagers\LeaveRequest
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ USER

```php
public USER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ LEAVE_TYPE

```php
public LEAVE_TYPE(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ APPROVER

```php
public APPROVER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne
```


### ƒ addUrlFiltersToQuery

```php
public addUrlFiltersToQuery(mixed $query): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |

