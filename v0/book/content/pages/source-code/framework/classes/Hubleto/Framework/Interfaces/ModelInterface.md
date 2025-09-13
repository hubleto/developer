
# \Hubleto\Framework\Interfaces\ModelInterface

## Methods

### initRecordManager

```php
public initRecordManager(): null|object
```


### isDatabaseConnected

```php
public isDatabaseConnected(): bool
```


### getConfigFullPath

```php
public getConfigFullPath(string $configName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### configAsString

```php
public configAsString(string $configName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### configAsInteger

```php
public configAsInteger(string $configName): int
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### configAsArray

```php
public configAsArray(string $configName): array
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### getSqlCreateTableCommands

```php
public getSqlCreateTableCommands(): array
```


### createSqlTable

```php
public createSqlTable(): mixed
```


### install

```php
public install(): mixed
```


### dropTableIfExists

```php
public dropTableIfExists(): \Hubleto\Framework\Interfaces\ModelInterface
```


### createSqlForeignKeys

```php
public createSqlForeignKeys(): mixed
```


### getFullTableSqlName

```php
public getFullTableSqlName(): mixed
```


### hasColumn

```php
public hasColumn(string $column): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### getColumns

```php
public getColumns(): array
```


### getColumn

```php
public getColumn(string $column): \Hubleto\Framework\Interfaces\ColumnInterface
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### columnNames

```php
public columnNames(): array
```


### indexes

```php
public indexes(array $indexes = []): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### indexNames

```php
public indexNames(): array
```


### upgrades

```php
public upgrades(): array
```


### describeColumns

```php
public describeColumns(): array
```


### describeInput

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### describeForm

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### recordGet

```php
public recordGet(callable|null $queryModifierCallback = null): array
```

**Parameters:**

| Parameter                | Type               | Description |
|--------------------------|--------------------|-------------|
| `$queryModifierCallback` | **callable\|null** |             |


### recordGetList

```php
public recordGetList(string $fulltextSearch = '', array $columnSearch = [], array $orderBy = [], int $itemsPerPage = 15, int $page): array
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$fulltextSearch` | **string** |             |
| `$columnSearch`   | **array**  |             |
| `$orderBy`        | **array**  |             |
| `$itemsPerPage`   | **int**    |             |
| `$page`           | **int**    |             |


### diffRecords

```php
public diffRecords(array $record1, array $record2): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$record1` | **array** |             |
| `$record2` | **array** |             |


### getById

```php
public getById(int $id): mixed
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### getLookupSqlValue

```php
public getLookupSqlValue(string $tableAlias = ''): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$tableAlias` | **string** |             |


### encryptPassword

```php
public encryptPassword(string $original): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$original` | **string** |             |


### onBeforeCreate

```php
public onBeforeCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onBeforeUpdate

```php
public onBeforeUpdate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onAfterCreate

```php
public onAfterCreate(array $savedRecord): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### onAfterDelete

```php
public onAfterDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### onAfterLoadRecord

```php
public onAfterLoadRecord(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onAfterLoadRecords

```php
public onAfterLoadRecords(array $records): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$records` | **array** |             |

