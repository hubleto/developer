
Default implementation of model for Hubleto project.

# \Hubleto\Framework\Models\UserHasRole
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Model">\Hubleto\Framework\Model</a></td></tr></table>


## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### isJunctionTable

If set to TRUE, the SQL table will not contain the ID autoincrement column

`public bool $isJunctionTable`


## Methods

### describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


## Inherited methods

### __construct

```php
public __construct(): mixed
```


### getServiceStatic

Shortcut for the dependency injection.

```php
public static getServiceStatic(string $service): mixed
```

* This method is **static**.
**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### getService

[Description for getService]

```php
public getService(string $service): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### env

Shortcut for the env service.

```php
public env(): \Hubleto\Framework\Env
```


### authProvider

Shortcut for the authentication service.

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
```


### db

Shortcut for the database service.

```php
public db(): \Hubleto\Framework\Db
```


### appManager

Shortcut for the app manager service.

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```


### router

Shortcut for the router service.

```php
public router(): \Hubleto\Framework\Router
```


### hookManager

Shortcut for the hook manager service.

```php
public hookManager(): \Hubleto\Framework\HookManager
```


### sessionManager

Shortcut for the session manager service.

```php
public sessionManager(): \Hubleto\Framework\SessionManager
```


### permissionsManager

Shortcut for the permissions manager service.

```php
public permissionsManager(): \Hubleto\Framework\PermissionsManager
```


### cronManager

Shortcut for the cron manager service.

```php
public cronManager(): \Hubleto\Framework\CronManager
```


### emailProvider

Shortcut for the email provider service.

```php
public emailProvider(): \Hubleto\Framework\EmailProvider
```


### config

Shortcut for the config service.

```php
public config(): \Hubleto\Framework\Interfaces\ConfigManagerInterface
```


### terminal

Shortcut for the terminal service.

```php
public terminal(): \Hubleto\Framework\Interfaces\TerminalInterface
```


### logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Interfaces\LoggerInterface
```


### locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Interfaces\LocaleInterface
```


### renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Interfaces\RendererInterface
```


### translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Interfaces\ModelInterface
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |


### getController

[Description for getController]

```php
public getController(string $controller): \Hubleto\Framework\Controller
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |


### translate

```php
public translate(string $string, array<string,string> $vars = [], string $contextInner = ''): string
```

**Parameters:**

| Parameter       | Type                     | Description |
|-----------------|--------------------------|-------------|
| `$string`       | **string**               |             |
| `$vars`         | **array<string,string>** |             |
| `$contextInner` | **string**               |             |


### initRecordManager

[Description for initRecordManager]

```php
public initRecordManager(): null|object
```


### isDatabaseConnected

[Description for isDatabaseConnected]

```php
public isDatabaseConnected(): bool
```


### getConfigFullPath

[Description for getConfigFullPath]

```php
public getConfigFullPath(string $configName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### configAsString

Retrieves value of configuration parameter.

```php
public configAsString(string $configName): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### configAsInteger

Retrieves value of configuration parameter.

```php
public configAsInteger(string $configName): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### configAsArray

Retrieves value of configuration parameter.

```php
public configAsArray(string $configName): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |


### getSqlCreateTableCommands

[Description for getSqlCreateTableCommands]

```php
public getSqlCreateTableCommands(): array
```


### createSqlTable

[Description for createSqlTable]

```php
public createSqlTable(): mixed
```


### install

Installs the first version of the model into SQL database. Automatically creates indexes.

```php
public install(): void
```


### dropTableIfExists

[Description for dropTableIfExists]

```php
public dropTableIfExists(): \Hubleto\Framework\Model
```


### createSqlForeignKeys

Create foreign keys for the SQL table. Called when all models are installed.

```php
public createSqlForeignKeys(): void
```


### getFullTableSqlName

Returns full name of the model's SQL table

```php
public getFullTableSqlName(): string
```

**Return Value:**

Full name of the model's SQL table


### upgrades

Returns list of available upgrades. This method must be overriden by each model.

```php
public upgrades(): array
```

**Return Value:**

List of available upgrades. Keys of the array are simple numbers starting from 1.


### hasColumn

[Description for hasColumn]

```php
public hasColumn(string $column): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### getColumns

[Description for getColumns]

```php
public getColumns(): array<string,\Hubleto\Framework\Column>
```


### getColumn

[Description for getColumn]

```php
public getColumn(string $column): \Hubleto\Framework\Interfaces\ColumnInterface
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |


### columnNames

[Description for columnNames]

```php
public columnNames(): array
```


### indexes

[Description for indexes]

```php
public indexes(array $indexes = []): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### indexNames

[Description for indexNames]

```php
public indexNames(): array
```


### describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### describeInput

[Description for describeInput]

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### convertRecordsToTree

[Description for convertRecordsToTree]

```php
public convertRecordsToTree(array $records, int $idParent, int $level): array
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$records`  | **array** |             |
| `$idParent` | **int**   |             |
| `$level`    | **int**   |             |


### loadTableData

[Description for loadTableData]

```php
public loadTableData(string $fulltextSearch = '', array $columnSearch = [], array $orderBy = [], int $itemsPerPage = 15, int $page, string $dataView = ''): array
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$fulltextSearch` | **string** |             |
| `$columnSearch`   | **array**  |             |
| `$orderBy`        | **array**  |             |
| `$itemsPerPage`   | **int**    |             |
| `$page`           | **int**    |             |
| `$dataView`       | **string** |             |


### diffRecords

[Description for diffRecords]

```php
public diffRecords(array $record1, array $record2): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$record1` | **array** |             |
| `$record2` | **array** |             |


### getById

[Description for getById]

```php
public getById(int $id): mixed
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### getLookupSqlValue

[Description for getLookupSqlValue]

```php
public getLookupSqlValue(string $tableAlias = ''): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$tableAlias` | **string** |             |


### getLookupValue

```php
public getLookupValue(array $dataRaw): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


### encryptPassword

Used to encrypt passowrd to store it securely.

```php
public encryptPassword(string $original): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$original` | **string** |             |


### onBeforeCreate

[Description for onBeforeCreate]

```php
public onBeforeCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onBeforeUpdate

[Description for onBeforeUpdate]

```php
public onBeforeUpdate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### onAfterUpdate

[Description for onAfterUpdate]

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### onBeforeDelete

[Description for onBeforeDelete]

```php
public onBeforeDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### onAfterDelete

[Description for onAfterDelete]

```php
public onAfterDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### onAfterLoadRecord

[Description for onAfterLoadRecord]

```php
public onAfterLoadRecord(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onAfterLoadRecords

[Description for onAfterLoadRecords]

```php
public onAfterLoadRecords(array $records): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$records` | **array** |             |

