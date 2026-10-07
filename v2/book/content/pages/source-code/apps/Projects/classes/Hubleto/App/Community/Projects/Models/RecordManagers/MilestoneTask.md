
# \Hubleto\App\Community\Projects\Models\RecordManagers\MilestoneTask
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ MILESTONE

```php
public MILESTONE(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Projects\Models\RecordManagers\Tag,\Hubleto\App\Community\Projects\Models\RecordManagers\LeadTag>
```


### ƒ TASK

```php
public TASK(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Tasks\Models\RecordManagers\Task,\Hubleto\App\Community\Projects\Models\RecordManagers\LeadTag>
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

