
# \Hubleto\App\Community\Worksheets\Models\RecordManagers\Activity
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ WORKER

```php
public WORKER(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ TASK

```php
public TASK(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ TYPE

```php
public TYPE(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ prepareSelectsForReadQuery

[Description for prepareSelectsForReadQuery]

```php
public prepareSelectsForReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): array
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


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

