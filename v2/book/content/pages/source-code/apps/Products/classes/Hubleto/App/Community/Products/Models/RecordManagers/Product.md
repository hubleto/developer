
# \Hubleto\App\Community\Products\Models\RecordManagers\Product
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ GROUP

```php
public GROUP(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ CATEGORY

```php
public CATEGORY(): \Illuminate\Database\Eloquent\Relations\BelongsTo
```


### ƒ PACKAGING

```php
public PACKAGING(): \Illuminate\Database\Eloquent\Relations\HasMany
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


### ƒ categorySubtreeIds

```php
protected categorySubtreeIds(int $idRootCategory): array
```

#### Parameters

| Parameter         | Type    | Description |
|-------------------|---------|-------------|
| `$idRootCategory` | **int** |             |


### ƒ prepareLookupQuery

```php
public prepareLookupQuery(string $search): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |


### ƒ prepareLookupData

```php
public prepareLookupData(array $dataRaw): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |

