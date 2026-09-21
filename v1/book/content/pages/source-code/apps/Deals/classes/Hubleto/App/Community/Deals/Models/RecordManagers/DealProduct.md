
# \Hubleto\App\Community\Deals\Models\RecordManagers\DealProduct
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### DEAL

```php
public DEAL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Deals\Models\RecordManagers\Deal,\Hubleto\App\Community\Deals\Models\RecordManagers\DealProduct>
```


### PRODUCT

```php
public PRODUCT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Products\Models\RecordManagers\Product,\Hubleto\App\Community\Deals\Models\RecordManagers\DealProduct>
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

