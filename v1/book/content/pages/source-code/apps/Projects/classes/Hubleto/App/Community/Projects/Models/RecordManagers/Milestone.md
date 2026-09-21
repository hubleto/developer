
# \Hubleto\App\Community\Projects\Models\RecordManagers\Milestone
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ PROJECT

```php
public PROJECT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Projects\Models\RecordManagers\Deal,\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectActivity>
```


### ƒ REPORTS

```php
public REPORTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectTask,\Hubleto\App\Community\Projects\Models\RecordManagers\Deal>
```


### ƒ RESPONSIBLE

```php
public RESPONSIBLE(): \Illuminate\Database\Eloquent\Relations\BelongsTo
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

