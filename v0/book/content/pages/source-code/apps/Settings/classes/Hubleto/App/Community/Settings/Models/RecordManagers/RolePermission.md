
# \Hubleto\App\Community\Settings\Models\RecordManagers\RolePermission
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### ROLE

```php
public ROLE(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\UserRole,\Hubleto\App\Community\Settings\Models\RecordManagers\RolePermission>
```


### PERMISSION

```php
public PERMISSION(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\Permission,\Hubleto\App\Community\Settings\Models\RecordManagers\RolePermission>
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

