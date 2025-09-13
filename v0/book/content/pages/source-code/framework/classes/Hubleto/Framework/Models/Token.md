
Model for storing various validation tokens. Stored in 'tokens' SQL table.

# \Hubleto\Framework\Models\Token
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Model">\Hubleto\Framework\Model</a></td></tr></table>


## Properties

### table

`public string $table`


### lookupSqlValue

SQL-compatible string used to render displayed value of the record when used
as a lookup.

`public ?string $lookupSqlValue`


### tokenTypes

`public $tokenTypes`


### recordManagerClass

`public string $recordManagerClass`


## Methods

### describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
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


### isTokenTypeRegistered

```php
public isTokenTypeRegistered(mixed $type): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$type`   | **mixed** |             |


### registerTokenType

```php
public registerTokenType(mixed $type): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$type`   | **mixed** |             |


### generateToken

```php
public generateToken(mixed $tokenSalt, mixed $tokenType, mixed $validTo = NULL): mixed
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$tokenSalt` | **mixed** |             |
| `$tokenType` | **mixed** |             |
| `$validTo`   | **mixed** |             |


### validateToken

```php
public validateToken(mixed $token): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$token`  | **mixed** |             |


### deleteToken

```php
public deleteToken(mixed $tokenId): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tokenId` | **mixed** |             |


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


### logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Logger
```


### locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Locale
```


### renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Renderer
```


### translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Models\Model
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

Shorthand for core translate() function. Uses own language dictionary.

```php
public translate(string $string, array $vars = []): string
```

**Parameters:**

| Parameter | Type       | Description             |
|-----------|------------|-------------------------|
| `$string` | **string** | String to be translated |
| `$vars`   | **array**  |                         |

**Return Value:**

Translated string.


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


### recordGet

[Description for recordGet]

```php
public recordGet(callable|null $queryModifierCallback = null): array
```

**Parameters:**

| Parameter                | Type               | Description |
|--------------------------|--------------------|-------------|
| `$queryModifierCallback` | **callable\|null** |             |


### recordGetList

[Description for recordGetList]

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

