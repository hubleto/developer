
# \Hubleto\App\Community\Settings\Models\RecordManagers\User
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public string $table`


## Methods

### DEFAULT_COMPANY

```php
public DEFAULT_COMPANY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\Company,\Hubleto\App\Community\Settings\Models\RecordManagers\User>
```


### ROLES

```php
public ROLES(): \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Hubleto\App\Community\Settings\Models\RecordManagers\UserRole,\Hubleto\App\Community\Settings\Models\RecordManagers\User>
```


### TEAMS

```php
public TEAMS(): \Illuminate\Database\Eloquent\Relations\BelongsToMany<\Hubleto\App\Community\Settings\Models\RecordManagers\UserRole,\Hubleto\App\Community\Settings\Models\RecordManagers\User>
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


### prepareLookupQuery

```php
public prepareLookupQuery(string $search): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |

