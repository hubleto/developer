
# \Hubleto\App\Community\Orders\Models\RecordManagers\OrderProduct
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### ORDER

```php
public ORDER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Orders\Models\RecordManagers\Order,\Hubleto\App\Community\Orders\Models\RecordManagers\OrderProduct>
```


### PRODUCT

```php
public PRODUCT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Products\Models\RecordManagers\Product,\Hubleto\App\Community\Orders\Models\RecordManagers\OrderProduct>
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

