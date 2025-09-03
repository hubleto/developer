
# \Hubleto\App\Community\Contacts\Models\RecordManagers\Value
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact>
```


### CATEGORY

```php
public CATEGORY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Contacts\Models\RecordManagers\Category,\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact>
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

