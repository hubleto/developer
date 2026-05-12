
# \Hubleto\App\Community\Settings\Models\RecordManagers\Team
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\User,\Hubleto\App\Community\Settings\Models\RecordManagers\User>
```


### ƒ MEMBERS

```php
public MEMBERS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Settings\Models\RecordManagers\TeamMember,\Hubleto\App\Community\Settings\Models\RecordManagers\TeamMember>
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

