
# \Hubleto\App\Community\Documents\Models\RecordManagers\Folder
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ PARENT_FOLDER

```php
public PARENT_FOLDER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Documents\Models\RecordManagers\Customer,\Hubleto\App\Community\Documents\Models\RecordManagers\BillingAccount>
```


### ƒ recordCreate

```php
public recordCreate(array $record, mixed $useProvidedRecordId = false): array
```

#### Parameters

| Parameter              | Type      | Description |
|------------------------|-----------|-------------|
| `$record`              | **array** |             |
| `$useProvidedRecordId` | **mixed** |             |


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

