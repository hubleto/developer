
Model for storing list of user roles. Stored in 'roles' SQL table.

# \Hubleto\Framework\Models\UserRole
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Model">\Hubleto\Framework\Model</a></td></tr></table>


## Constants

| Constant        | Visibility | Type | Value                                    |
|-----------------|------------|------|------------------------------------------|
| `ADMINISTRATOR` | public     |      | 1                                        |
| `USER_ROLES`    | public     |      | [self::ADMINISTRATOR => 'ADMINISTRATOR'] |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```

SQL-compatible string used to render displayed value of the record when used
as a lookup.



## Methods

### ƒ describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


## Inherited methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ setDebugLevel

[Description for setDebugLevel]

```php
public setDebugLevel(int $level): void
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$level`  | **int** |             |


### ƒ getDebugLevel

[Description for getDebugLevel]

```php
public getDebugLevel(): int
```


### ƒ getServiceStatic

Shortcut for the dependency injection.

```php
public static getServiceStatic(string $service): mixed
```

* This method is **static**.
#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### ƒ getService

[Description for getService]

```php
public getService(string $service): mixed
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### ƒ env

Shortcut for the env service.

```php
public env(): \Hubleto\Framework\Env
```


### ƒ authProvider

Shortcut for the authentication service.

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
```


### ƒ db

Shortcut for the database service.

```php
public db(): \Hubleto\Framework\Db
```


### ƒ appManager

Shortcut for the app manager service.

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```


### ƒ router

Shortcut for the router service.

```php
public router(): \Hubleto\Framework\Router
```


### ƒ hookManager

Shortcut for the hook manager service.

```php
public hookManager(): \Hubleto\Framework\HookManager
```


### ƒ sessionManager

Shortcut for the session manager service.

```php
public sessionManager(): \Hubleto\Framework\SessionManager
```


### ƒ permissionsManager

Shortcut for the permissions manager service.

```php
public permissionsManager(): \Hubleto\Framework\PermissionsManager
```


### ƒ cronManager

Shortcut for the cron manager service.

```php
public cronManager(): \Hubleto\Framework\CronManager
```


### ƒ emailProvider

Shortcut for the email provider service.

```php
public emailProvider(): \Hubleto\Framework\EmailProvider
```


### ƒ config

Shortcut for the config service.

```php
public config(): \Hubleto\Framework\Interfaces\ConfigManagerInterface
```


### ƒ terminal

Shortcut for the terminal service.

```php
public terminal(): \Hubleto\Framework\Interfaces\TerminalInterface
```


### ƒ logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Interfaces\LoggerInterface
```


### ƒ locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Interfaces\LocaleInterface
```


### ƒ renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Interfaces\RendererInterface
```


### ƒ translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### ƒ getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Interfaces\ModelInterface
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |


### ƒ getController

[Description for getController]

```php
public getController(string $controller): \Hubleto\Framework\Controller
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |


### ƒ translate

```php
public translate(string $string, array<string,string> $vars = [], string $contextInner = ''): string
```

#### Parameters

| Parameter       | Type                     | Description |
|-----------------|--------------------------|-------------|
| `$string`       | **string**               |             |
| `$vars`         | **array<string,string>** |             |
| `$contextInner` | **string**               |             |


### ƒ initRecordManager

[Description for initRecordManager]

```php
public initRecordManager(): null|object
```


### ƒ isDatabaseConnected

[Description for isDatabaseConnected]

```php
public isDatabaseConnected(): bool
```


### ƒ getConfigFullPath

[Description for getConfigFullPath]

```php
public getConfigFullPath(string $configName): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ configAsString

Retrieves value of configuration parameter.

```php
public configAsString(string $configName): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ configAsInteger

Retrieves value of configuration parameter.

```php
public configAsInteger(string $configName): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ configAsArray

Retrieves value of configuration parameter.

```php
public configAsArray(string $configName): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### ƒ getSqlCreateTableCommands

[Description for getSqlCreateTableCommands]

```php
public getSqlCreateTableCommands(): array
```


### ƒ createSqlTable

[Description for createSqlTable]

```php
public createSqlTable(): mixed
```


### ƒ install

Installs the first version of the model into SQL database. Automatically creates indexes.

```php
public install(): void
```


### ƒ dropTableIfExists

[Description for dropTableIfExists]

```php
public dropTableIfExists(): \Hubleto\Framework\Model
```


### ƒ createSqlForeignKeys

Create foreign keys for the SQL table. Called when all models are installed.

```php
public createSqlForeignKeys(): void
```


### ƒ getFullTableSqlName

Returns full name of the model's SQL table

```php
public getFullTableSqlName(): string
```

#### Return Value

Full name of the model's SQL table


### ƒ upgrades

Returns list of available upgrades. This method must be overriden by each model.

```php
public upgrades(): array
```

#### Return Value

List of available upgrades. Keys of the array are simple numbers starting from 1.


### ƒ getAvailableUpgrades

[Description for hasAvailableUpgrades]

```php
public getAvailableUpgrades(): array
```


### ƒ installUpgrades

Installs all upgrades of the model. Internaly stores current version and
compares it to list of available upgrades.

```php
public installUpgrades(): void
```

#### Throws

When an error occured during the upgrade.
- [`DBException`](../Exceptions/DBException)


### ƒ hasColumn

[Description for hasColumn]

```php
public hasColumn(string $column): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### ƒ getColumns

[Description for getColumns]

```php
public getColumns(): array<string,\Hubleto\Framework\Column>
```


### ƒ getColumn

[Description for getColumn]

```php
public getColumn(string $column): \Hubleto\Framework\Interfaces\ColumnInterface
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### ƒ columnNames

[Description for columnNames]

```php
public columnNames(): array
```


### ƒ indexes

[Description for indexes]

```php
public indexes(array $indexes = []): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### ƒ indexNames

[Description for indexNames]

```php
public indexNames(): array
```


### ƒ describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### ƒ describeInput

[Description for describeInput]

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### ƒ describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### ƒ describeTable

Returns a table description of the model.

```php
public describeTable(): \Hubleto\Framework\Description\Table
```

The descriptions contains configuration for table UI, columns and permissions.


### ƒ convertRecordsToTree

Used to convert flat list of records into tree structure.

```php
public convertRecordsToTree(array $records, int $idParent, int $level): array
```

Suitable for models having parent-child relationship.

#### Parameters

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$records`  | **array** |             |
| `$idParent` | **int**   |             |
| `$level`    | **int**   |             |


### ƒ loadTableData

Loads records to be displayed in table.

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

[Description for diffRecords]

```php
public diffRecords(array $record1, array $record2): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$record1` | **array** |             |
| `$record2` | **array** |             |


### ƒ getById

[Description for getById]

```php
public getById(int $id): mixed
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ getLookupSqlValue

[Description for getLookupSqlValue]

```php
public getLookupSqlValue(string $tableAlias = ''): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$tableAlias` | **string** |             |


### ƒ getLookupValue

[Description for getLookupValue]

```php
public getLookupValue(array $dataRaw): string
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


### ƒ getLookupDetails

[Description for getLookupDetailValue]

```php
public getLookupDetails(array $dataRaw): string
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


### ƒ getItemDetailUrl

[Description for getItemDetailUrl]

```php
public getItemDetailUrl(int $id): string
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ getMaxReadLevelForLoadTableData

Returns maxReadLevel value used in loadTableData() method.

```php
public getMaxReadLevelForLoadTableData(): int
```

By default is set to 0 to save bandwidth when loading data.
Override this method in your model if you need to load more details.


### ƒ getRelationsIncludedInLoadTableData

Returns list of relations to be included when loading table data.

```php
public getRelationsIncludedInLoadTableData(): array
```

By default, empty array is returned, which means no relations are included.
Override this method in your model if you need to specify particular relations.


### ƒ encryptPassword

Used to encrypt passowrd to store it securely.

```php
public encryptPassword(string $original): string
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$original` | **string** |             |


### ƒ onBeforeCreate

onBeforeCreate

```php
public onBeforeCreate(array<string,mixed> $record): array<string,mixed>
```

#### Parameters

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |

#### Throws

- [`RecordSaveException`](../Exceptions/RecordSaveException)


### ƒ onBeforeUpdate

onBeforeUpdate

```php
public onBeforeUpdate(array<string,mixed> $record): array<string,mixed>
```

#### Parameters

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |


### ƒ onBeforeDelete

onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ onAfterCreate

onAfterCreate

```php
public onAfterCreate(array<string,mixed> $savedRecord): array<string,mixed>
```

#### Parameters

| Parameter      | Type                    | Description |
|----------------|-------------------------|-------------|
| `$savedRecord` | **array<string,mixed>** |             |


### ƒ onAfterUpdate

onAfterUpdate

```php
public onAfterUpdate(array<string,mixed> $originalRecord, array<string,mixed> $savedRecord): array<string,mixed>
```

#### Parameters

| Parameter         | Type                    | Description |
|-------------------|-------------------------|-------------|
| `$originalRecord` | **array<string,mixed>** |             |
| `$savedRecord`    | **array<string,mixed>** |             |


### ƒ onAfterDelete

onAfterDelete

```php
public onAfterDelete(int $id): int
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ onAfterLoadRecord

[Description for onAfterLoadRecord]

```php
public onAfterLoadRecord(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onAfterLoadRecords

[Description for onAfterLoadRecords]

```php
public onAfterLoadRecords(array $records): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$records` | **array** |             |

