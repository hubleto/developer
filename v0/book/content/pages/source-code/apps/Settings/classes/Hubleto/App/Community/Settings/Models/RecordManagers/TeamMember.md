
# \Hubleto\App\Community\Settings\Models\RecordManagers\TeamMember
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### TEAM

```php
public TEAM(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\Team,\Hubleto\App\Community\Settings\Models\RecordManagers\User>
```


### MEMBER

```php
public MEMBER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\User,\Hubleto\App\Community\Settings\Models\RecordManagers\User>
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

