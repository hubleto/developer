
Record manager based on Laravel's Eloquent.

# \Hubleto\Framework\EloquentRecordManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../Illuminate/Database/Eloquent/Model">Model</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/RecordManagerInterface">\Hubleto\Framework\Interfaces\RecordManagerInterface</a></td></tr></table>


## Properties

### primaryKey

`protected $primaryKey`


### guarded

`protected $guarded`


### timestamps

`public $timestamps`


### snakeAttributes

`public static $snakeAttributes`

* This property is **static**.


### main

`public \Hubleto\Framework\Loader $main`


### model

`public \Hubleto\Framework\Model $model`


### maxReadLevel

`protected int $maxReadLevel`


## Methods

### __construct

```php
public __construct(array $attributes = []): mixed
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$attributes` | **array** |             |


### getPermissions

[Description for getPermissions]

```php
public getPermissions(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### prepareReadQuery

[Description for prepareReadQuery]

```php
public prepareReadQuery(mixed|null $query = null, int $level): mixed
```

**Parameters:**

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$query`  | **mixed\|null** |             |
| `$level`  | **int**         |             |


### recordGet

[Description for recordGet]

```php
public recordGet(callable|null $queryModifierCallback = null): array
```

**Parameters:**

| Parameter                | Type               | Description |
|--------------------------|--------------------|-------------|
| `$queryModifierCallback` | **callable\|null** |             |


### prepareLookupQuery

[Description for prepareLookupQuery]

```php
public prepareLookupQuery(string $search): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |


### prepareLookupData

[Description for prepareLookupData]

```php
public prepareLookupData(array $dataRaw): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


### addFulltextSearchToQuery

[Description for addFulltextSearchToQuery]

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### addColumnSearchToQuery

[Description for addColumnSearchToQuery]

```php
public addColumnSearchToQuery(mixed $query, array $columnSearch): mixed
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$columnSearch` | **array** |             |


### addOrderByToQuery

[Description for addOrderByToQuery]

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### recordReadMany

[Description for recordReadMany]

```php
public recordReadMany(mixed $query, int $itemsPerPage, int $page): array
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$itemsPerPage` | **int**   |             |
| `$page`         | **int**   |             |


### recordRead

[Description for recordRead]

```php
public recordRead(mixed $query): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |


### recordEncryptIds

[Description for recordEncryptIds]

```php
public recordEncryptIds(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### recordDecryptIds

[Description for recordDecryptIds]

```php
public recordDecryptIds(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### recordCreate

[Description for recordCreate]

```php
public recordCreate(array $record, mixed $useProvidedRecordId = false): array
```

**Parameters:**

| Parameter              | Type      | Description |
|------------------------|-----------|-------------|
| `$record`              | **array** |             |
| `$useProvidedRecordId` | **mixed** |             |


### recordUpdate

[Description for recordUpdate]

```php
public recordUpdate(array $record, array $originalRecord = []): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$record`         | **array** |             |
| `$originalRecord` | **array** |             |


### recordDelete

[Description for recordDelete]

```php
public recordDelete(int|string $id): int
```

**Parameters:**

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$id`     | **int\|string** |             |


### recordSave

[Description for recordSave]

```php
public recordSave(array $record, int $idMasterRecord, array $saveRelations = [], string $relation = ''): array
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$record`         | **array**  |             |
| `$idMasterRecord` | **int**    |             |
| `$saveRelations`  | **array**  |             |
| `$relation`       | **string** |             |


### recordValidate

[Description for recordValidate]

```php
public recordValidate(array $record, array $validateRelations = [], string $relation = ''): array
```

**Parameters:**

| Parameter            | Type       | Description |
|----------------------|------------|-------------|
| `$record`            | **array**  |             |
| `$validateRelations` | **array**  |             |
| `$relation`          | **string** |             |


### recordNormalize

[Description for recordNormalize]

```php
public recordNormalize(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |

