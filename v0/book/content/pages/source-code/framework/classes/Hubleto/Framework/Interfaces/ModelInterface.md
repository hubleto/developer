
# \Hubleto\Framework\Interfaces\ModelInterface

## Methods

### ƒ initRecordManager

```php
public initRecordManager(): null|object
```


### ƒ isDatabaseConnected

```php
public isDatabaseConnected(): bool
```


### ƒ getConfigFullPath

```php
public getConfigFullPath(string $configName): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ configAsString

```php
public configAsString(string $configName): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ configAsInteger

```php
public configAsInteger(string $configName): int
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ configAsArray

```php
public configAsArray(string $configName): array
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ getSqlCreateTableCommands

```php
public getSqlCreateTableCommands(): array
```


### ƒ createSqlTable

```php
public createSqlTable(): mixed
```


### ƒ install

```php
public install(): mixed
```


### ƒ dropTableIfExists

```php
public dropTableIfExists(): \Hubleto\Framework\Interfaces\ModelInterface
```


### ƒ createSqlForeignKeys

```php
public createSqlForeignKeys(): mixed
```


### ƒ getFullTableSqlName

```php
public getFullTableSqlName(): mixed
```


### ƒ hasColumn

```php
public hasColumn(string $column): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### ƒ getColumns

```php
public getColumns(): array
```


### ƒ getColumn

```php
public getColumn(string $column): \Hubleto\Framework\Interfaces\ColumnInterface
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### ƒ columnNames

```php
public columnNames(): array
```


### ƒ indexes

```php
public indexes(array $indexes = []): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### ƒ indexNames

```php
public indexNames(): array
```


### ƒ upgrades

```php
public upgrades(): array
```


### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ describeInput

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### ƒ describeForm

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### ƒ describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


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


### ƒ diffRecords

```php
public diffRecords(array $record1, array $record2): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$record1` | **array** |             |
| `$record2` | **array** |             |


### ƒ getById

```php
public getById(int $id): mixed
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ getLookupSqlValue

```php
public getLookupSqlValue(string $tableAlias = ''): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$tableAlias` | **string** |             |


### ƒ getItemDetailUrl

```php
public getItemDetailUrl(int $id): string
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ encryptPassword

```php
public encryptPassword(string $original): string
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$original` | **string** |             |


### ƒ onBeforeCreate

```php
public onBeforeCreate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onBeforeUpdate

```php
public onBeforeUpdate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onAfterCreate

```php
public onAfterCreate(array $savedRecord): array
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### ƒ onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### ƒ onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ onAfterDelete

```php
public onAfterDelete(int $id): int
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ onAfterLoadRecord

```php
public onAfterLoadRecord(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onAfterLoadRecords

```php
public onAfterLoadRecords(array $records): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$records` | **array** |             |

