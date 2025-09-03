
Record manager based on Laravel's Eloquent.

# \Hubleto\Framework\Models\RecordManagers\UserHasRole
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../EloquentRecordManager">\Hubleto\Framework\EloquentRecordManager</a></td></tr></table>


## Properties

### snakeAttributes

`public static $snakeAttributes`

* This property is **static**.


### table

`public $table`


## Inherited methods

### __construct

```php
public __construct(array $attributes = []): mixed
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$attributes` | **array** |             |


### getPermissions

```php
public getPermissions(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### prepareReadQuery

prepareReadQuery

```php
public prepareReadQuery(mixed $query = null, int $level): mixed
```

**Parameters:**

| Parameter | Type      | Description                        |
|-----------|-----------|------------------------------------|
| `$query`  | **mixed** | Leave empty for default behaviour. |
| `$level`  | **int**   | Leave empty for default behaviour. |

**Return Value:**

Eloquent query used to read record.


### prepareLookupQuery

prepareLookupQuery

```php
public prepareLookupQuery(string $search): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |


### prepareLookupData

```php
public prepareLookupData(array $dataRaw): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


### addFulltextSearchToQuery

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### addColumnSearchToQuery

```php
public addColumnSearchToQuery(mixed $query, array $columnSearch): mixed
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$columnSearch` | **array** |             |


### addOrderByToQuery

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### recordReadMany

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

```php
public recordRead(mixed $query): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |


### recordEncryptIds

```php
public recordEncryptIds(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### recordDecryptIds

```php
public recordDecryptIds(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### recordCreate

```php
public recordCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### recordUpdate

```php
public recordUpdate(array $record, array $originalRecord = []): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$record`         | **array** |             |
| `$originalRecord` | **array** |             |


### recordDelete

```php
public recordDelete(int|string $id): int
```

**Parameters:**

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$id`     | **int\|string** |             |


### recordSave

```php
public recordSave(array $record, int $idMasterRecord, bool $saveRelationsRecursively = false): array
```

**Parameters:**

| Parameter                   | Type      | Description |
|-----------------------------|-----------|-------------|
| `$record`                   | **array** |             |
| `$idMasterRecord`           | **int**   |             |
| `$saveRelationsRecursively` | **bool**  |             |


### recordValidate

validate

```php
public recordValidate(array<string,mixed> $record, bool $validateRelationsRecursively = false): array<string,mixed>
```

**Parameters:**

| Parameter                       | Type                    | Description |
|---------------------------------|-------------------------|-------------|
| `$record`                       | **array<string,mixed>** |             |
| `$validateRelationsRecursively` | **bool**                |             |


### recordNormalize

```php
public recordNormalize(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |

