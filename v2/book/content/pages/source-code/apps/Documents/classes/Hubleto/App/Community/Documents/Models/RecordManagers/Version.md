
# \Hubleto\App\Community\Documents\Models\RecordManagers\Version
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ DOCUMENT

```php
public DOCUMENT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Documents\Models\RecordManagers\Customer,\Hubleto\App\Community\Documents\Models\RecordManagers\BillingAccount>
```


### ƒ CREATED_BY

```php
public CREATED_BY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Documents\Models\RecordManagers\Customer,\Hubleto\App\Community\Documents\Models\RecordManagers\BillingAccount>
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


### ƒ prepareLookupQuery

```php
public prepareLookupQuery(string $search): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |

