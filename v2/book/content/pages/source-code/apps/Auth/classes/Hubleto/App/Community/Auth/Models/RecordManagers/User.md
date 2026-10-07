
# \Hubleto\App\Community\Auth\Models\RecordManagers\User
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ snakeAttributes
```php
public static $snakeAttributes
```


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ hidden
```php
protected $hidden
```



## Methods

### ƒ DEFAULT_COMPANY

```php
public DEFAULT_COMPANY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\Company,\Hubleto\App\Community\Auth\Models\RecordManagers\User>
```


### ƒ ROLES

```php
public ROLES(): \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Hubleto\App\Community\Auth\Models\RecordManagers\UserRole,\Hubleto\App\Community\Auth\Models\RecordManagers\User>
```


### ƒ TEAMS

```php
public TEAMS(): \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Hubleto\App\Community\Auth\Models\RecordManagers\UserRole,\Hubleto\App\Community\Auth\Models\RecordManagers\User>
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


### ƒ prepareLookupQuery

[Description for prepareLookupQuery]

```php
public prepareLookupQuery(string $search): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |

