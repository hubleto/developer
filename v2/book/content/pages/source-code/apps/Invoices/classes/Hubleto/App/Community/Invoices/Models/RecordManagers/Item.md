
# \Hubleto\App\Community\Invoices\Models\RecordManagers\Item
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ INVOICE

```php
public INVOICE(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice,\Hubleto\App\Community\Invoices\Models\RecordManagers\Item>
```


### ƒ CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ ORDER

```php
public ORDER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice,\Hubleto\App\Community\Invoices\Models\RecordManagers\Item>
```


### ƒ ORDER_ITEM

```php
public ORDER_ITEM(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice,\Hubleto\App\Community\Invoices\Models\RecordManagers\Item>
```


### ƒ prepareSelectsForReadQuery

[Description for prepareSelectsForReadQuery]

```php
public prepareSelectsForReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): array
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


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

