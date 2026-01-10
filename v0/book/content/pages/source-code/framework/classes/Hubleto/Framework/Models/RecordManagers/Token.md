
Record manager based on Laravel's Eloquent.

# \Hubleto\Framework\Models\RecordManagers\Token
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../EloquentRecordManager">\Hubleto\Framework\EloquentRecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ snakeAttributes
```php
public static $snakeAttributes
```


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Inherited methods

### ƒ __construct

```php
public __construct(array $attributes = []): mixed
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$attributes` | **array** |             |


### ƒ getPermissions

Gets permissions for the given record.

```php
public getPermissions(array $record): array
```

#### Parameters

| Parameter | Type      | Description                      |
|-----------|-----------|----------------------------------|
| `$record` | **array** | Record to check permissions for. |


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


### ƒ prepareJoinsForReadQuery

[Description for prepareJoinsForReadQuery]

```php
public prepareJoinsForReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): array
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


### ƒ prepareRelationsForReadQuery

[Description for prepareRelationsForReadQuery]

```php
public prepareRelationsForReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): array
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


### ƒ prepareReadQuery

Prepares the read query for fetching records.

```php
public prepareReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): mixed
```

#### Parameters

| Parameter           | Type            | Description                                                           |
|---------------------|-----------------|-----------------------------------------------------------------------|
| `$query`            | **mixed\|null** | Leave empty for default behaviour.                                    |
| `$level`            | **int**         | Level of recursion for including relations.                           |
| `$includeRelations` | **array\|null** | If not null, only these relations will be included in the read query. |


### ƒ recordGet

[Description for recordGet]

```php
public recordGet(callable|null $queryModifierCallback = null): array
```

#### Parameters

| Parameter                | Type               | Description |
|--------------------------|--------------------|-------------|
| `$queryModifierCallback` | **callable\|null** |             |


### ƒ prepareLookupQuery

Prepares the lookup query for fetching records.

```php
public prepareLookupQuery(string $search): mixed
```

#### Parameters

| Parameter | Type       | Description                     |
|-----------|------------|---------------------------------|
| `$search` | **string** | String to filter lookup values. |


### ƒ prepareLookupData

[Description for prepareLookupData]

```php
public prepareLookupData(array $dataRaw): array
```

#### Parameters

| Parameter  | Type      | Description                                   |
|------------|-----------|-----------------------------------------------|
| `$dataRaw` | **array** | List of raw records loaded from the database. |


### ƒ addFulltextSearchToQuery

[Description for addFulltextSearchToQuery]

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### ƒ addColumnSearchToQuery

[Description for addColumnSearchToQuery]

```php
public addColumnSearchToQuery(mixed $query, array $columnSearch): mixed
```

#### Parameters

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$columnSearch` | **array** |             |


### ƒ addOrderByToQuery

[Description for addOrderByToQuery]

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### ƒ recordReadMany

[Description for recordReadMany]

```php
public recordReadMany(mixed $query, int $itemsPerPage, int $page): array
```

#### Parameters

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$itemsPerPage` | **int**   |             |
| `$page`         | **int**   |             |


### ƒ recordRead

[Description for recordRead]

```php
public recordRead(mixed $query): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |


### ƒ recordEncryptIds

[Description for recordEncryptIds]

```php
public recordEncryptIds(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ recordDecryptIds

[Description for recordDecryptIds]

```php
public recordDecryptIds(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ recordCreate

[Description for recordCreate]

```php
public recordCreate(array $record, mixed $useProvidedRecordId = false): array
```

#### Parameters

| Parameter              | Type      | Description |
|------------------------|-----------|-------------|
| `$record`              | **array** |             |
| `$useProvidedRecordId` | **mixed** |             |


### ƒ recordUpdate

[Description for recordUpdate]

```php
public recordUpdate(array $record, array $originalRecord = []): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$record`         | **array** |             |
| `$originalRecord` | **array** |             |


### ƒ recordDelete

[Description for recordDelete]

```php
public recordDelete(int|string $id): int
```

#### Parameters

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$id`     | **int\|string** |             |


### ƒ recordSave

[Description for recordSave]

```php
public recordSave(array $record, int $idMasterRecord, array $saveRelations = [], string $relation = ''): array
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$record`         | **array**  |             |
| `$idMasterRecord` | **int**    |             |
| `$saveRelations`  | **array**  |             |
| `$relation`       | **string** |             |


### ƒ recordValidate

[Description for recordValidate]

```php
public recordValidate(array $record, array $validateRelations = [], string $relation = ''): array
```

#### Parameters

| Parameter            | Type       | Description |
|----------------------|------------|-------------|
| `$record`            | **array**  |             |
| `$validateRelations` | **array**  |             |
| `$relation`          | **string** |             |


### ƒ recordNormalize

[Description for recordNormalize]

```php
public recordNormalize(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |

