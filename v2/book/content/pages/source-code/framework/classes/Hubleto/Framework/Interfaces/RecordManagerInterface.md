
Record-management
CRUD-like layer for manipulating records (data)

# \Hubleto\Framework\Interfaces\RecordManagerInterface

## Methods

### ƒ loader

```php
public loader(): \Hubleto\Framework\Interfaces\CoreInterface
```


### ƒ prepareReadQuery

prepareReadQuery

```php
public prepareReadQuery(mixed $query = null, int $level, array|null $includeRelations = null): mixed
```

#### Parameters

| Parameter           | Type            | Description                        |
|---------------------|-----------------|------------------------------------|
| `$query`            | **mixed**       | Leave empty for default behaviour. |
| `$level`            | **int**         | Leave empty for default behaviour. |
| `$includeRelations` | **array\|null** |                                    |

#### Return Value

Object for reading records.


### ƒ addFulltextSearchToQuery

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### ƒ addColumnSearchToQuery

```php
public addColumnSearchToQuery(mixed $query, array $columnSearch): mixed
```

#### Parameters

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$columnSearch` | **array** |             |


### ƒ addOrderByToQuery

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### ƒ recordReadMany

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

```php
public recordRead(mixed $query): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |


### ƒ recordReadByUid

```php
public recordReadByUid(mixed $uid): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$uid`    | **mixed** |             |


### ƒ recordEncryptIds

```php
public recordEncryptIds(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ recordDecryptIds

```php
public recordDecryptIds(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ recordCreate

```php
public recordCreate(array $record, mixed $useProvidedRecordId = false): array
```

#### Parameters

| Parameter              | Type      | Description |
|------------------------|-----------|-------------|
| `$record`              | **array** |             |
| `$useProvidedRecordId` | **mixed** |             |


### ƒ recordUpdate

```php
public recordUpdate(array $record, array $originalRecord = []): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$record`         | **array** |             |
| `$originalRecord` | **array** |             |


### ƒ recordDelete

```php
public recordDelete(int|string $id): int
```

#### Parameters

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$id`     | **int\|string** |             |


### ƒ recordSave

```php
public recordSave(array $record, int $idMasterRecord): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$record`         | **array** |             |
| `$idMasterRecord` | **int**   |             |


### ƒ loadFormData

```php
public loadFormData(mixed $uid): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$uid`    | **mixed** |             |


### ƒ loadTableData

```php
public loadTableData(string $fulltextSearch = '', array $columnSearch = [], array $orderBy = [], int $itemsPerPage = 15, int $page, string $dataView = ''): array
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$fulltextSearch` | **string** |             |
| `$columnSearch`   | **array**  |             |
| `$orderBy`        | **array**  |             |
| `$itemsPerPage`   | **int**    |             |
| `$page`           | **int**    |             |
| `$dataView`       | **string** |             |


### ƒ recordValidate

validate

```php
public recordValidate(array<string,mixed> $record): array<string,mixed>
```

#### Parameters

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |


### ƒ recordNormalize

```php
public recordNormalize(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |

