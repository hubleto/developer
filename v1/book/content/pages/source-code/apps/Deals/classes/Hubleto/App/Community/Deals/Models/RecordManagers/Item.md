
# \Hubleto\App\Community\Deals\Models\RecordManagers\Item
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ DEAL

```php
public DEAL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Deals\Models\RecordManagers\Deal,\Hubleto\App\Community\Deals\Models\RecordManagers\Item>
```


### ƒ PRODUCT

```php
public PRODUCT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Products\Models\RecordManagers\Product,\Hubleto\App\Community\Deals\Models\RecordManagers\Item>
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

