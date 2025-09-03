
Default implementation of model for Hubleto project.

***

* Full name: `\Hubleto\Framework\Models\RolePermission`
* Parent class: [`\Hubleto\Framework\Model`](../Model)

## Properties

### table

```php
public string $table
```

***

## Methods

### grantPermissionByString

```php
public grantPermissionByString(int $idRole, string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |

***

## Inherited methods

### __construct

Creates instance of model's object.

```php
public __construct(): void
```

***

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

***

### getService

[Description for getService]

```php
public getService(string $service): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |

***

### env

Shortcut for the env service.

```php
public env(): \Hubleto\Framework\Env
```

***

### authProvider

Shortcut for the authentication service.

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
```

***

### db

Shortcut for the database service.

```php
public db(): \Hubleto\Framework\Db
```

***

### appManager

Shortcut for the app manager service.

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```

***

### router

Shortcut for the router service.

```php
public router(): \Hubleto\Framework\Router
```

***

### hookManager

Shortcut for the hook manager service.

```php
public hookManager(): \Hubleto\Framework\HookManager
```

***

### sessionManager

Shortcut for the session manager service.

```php
public sessionManager(): \Hubleto\Framework\SessionManager
```

***

### permissionsManager

Shortcut for the permissions manager service.

```php
public permissionsManager(): \Hubleto\Framework\PermissionsManager
```

***

### cronManager

Shortcut for the cron manager service.

```php
public cronManager(): \Hubleto\Framework\CronManager
```

***

### emailProvider

Shortcut for the email provider service.

```php
public emailProvider(): \Hubleto\Framework\EmailProvider
```

***

### config

Shortcut for the config service.

```php
public config(): \Hubleto\Framework\Config
```

***

### logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Logger
```

***

### locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Locale
```

***

### renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Renderer
```

***

### translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```

***

### getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Models\Model
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |

***

### getController

[Description for getController]

```php
public getController(string $controller): \Hubleto\Framework\Controller
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |

***

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

***

### initRecordManager

```php
public initRecordManager(): null|object
```

***

### isDatabaseConnected

```php
public isDatabaseConnected(): bool
```

***

### getConfigFullPath

```php
public getConfigFullPath(string $configName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |

***

### configAsString

Retrieves value of configuration parameter.

```php
public configAsString(string $configName): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |

***

### configAsInteger

Retrieves value of configuration parameter.

```php
public configAsInteger(string $configName): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |

***

### configAsArray

Retrieves value of configuration parameter.

```php
public configAsArray(string $configName): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$configName` | **string** |             |

***

### upgrades

Returns list of available upgrades. This method must be overriden by each model.

```php
public upgrades(): array
```

**Return Value:**

List of available upgrades. Keys of the array are simple numbers starting from 1.

***

### getSqlCreateTableCommands

```php
public getSqlCreateTableCommands(): array
```

***

### createSqlTable

```php
public createSqlTable(): mixed
```

***

### install

Installs the first version of the model into SQL database. Automatically creates indexes.

```php
public install(): void
```

***

### dropTableIfExists

```php
public dropTableIfExists(): \Hubleto\Framework\Model
```

***

### createSqlForeignKeys

Create foreign keys for the SQL table. Called when all models are installed.

```php
public createSqlForeignKeys(): void
```

***

### getFullTableSqlName

Returns full name of the model's SQL table

```php
public getFullTableSqlName(): string
```

**Return Value:**

Full name of the model's SQL table

***

### getLookupSqlValue

```php
public getLookupSqlValue(string $tableAlias = ''): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$tableAlias` | **string** |             |

***

### hasColumn

```php
public hasColumn(string $column): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |

***

### describeColumns

```php
public describeColumns(): array<string,\Hubleto\Framework\Db\Column>
```

***

### getColumns

```php
public getColumns(): array
```

***

### getColumn

```php
public getColumn(string $column): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$column` | **string** |             |

***

### columnNames

columnNames

```php
public columnNames(): string[]
```

***

### indexes

indexes

```php
public indexes(array<string,mixed> $indexes = []): array<string,mixed>
```

**Parameters:**

| Parameter  | Type                    | Description |
|------------|-------------------------|-------------|
| `$indexes` | **array<string,mixed>** |             |

***

### indexNames

indexNames

```php
public indexNames(): string[]
```

***

### getById

```php
public getById(int $id): mixed
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

***

### describeInput

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |

***

### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```

***

### describeForm

```php
public describeForm(): \Hubleto\Framework\Description\Form
```

***

### recordGet

recordGet

```php
public recordGet(callable|null $queryModifierCallback = null): array
```

**Parameters:**

| Parameter                | Type               | Description |
|--------------------------|--------------------|-------------|
| `$queryModifierCallback` | **callable\|null** |             |

***

### recordGetList

recordGetList

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

***

### onBeforeCreate

onBeforeCreate

```php
public onBeforeCreate(array<string,mixed> $record): array<string,mixed>
```

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |

***

### onBeforeUpdate

onBeforeUpdate

```php
public onBeforeUpdate(array<string,mixed> $record): array<string,mixed>
```

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |

***

### onAfterCreate

onAfterCreate

```php
public onAfterCreate(array<string,mixed> $savedRecord): array<string,mixed>
```

**Parameters:**

| Parameter      | Type                    | Description |
|----------------|-------------------------|-------------|
| `$savedRecord` | **array<string,mixed>** |             |

***

### onAfterUpdate

onAfterUpdate

```php
public onAfterUpdate(array<string,mixed> $originalRecord, array<string,mixed> $savedRecord): array<string,mixed>
```

**Parameters:**

| Parameter         | Type                    | Description |
|-------------------|-------------------------|-------------|
| `$originalRecord` | **array<string,mixed>** |             |
| `$savedRecord`    | **array<string,mixed>** |             |

***

### onBeforeDelete

onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

***

### onAfterDelete

onAfterDelete

```php
public onAfterDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

***

### onAfterLoadRecord

onAfterLoadRecord

```php
public onAfterLoadRecord(array<string,mixed> $record): array<string,mixed>
```

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |

***

### onAfterLoadRecords

```php
public onAfterLoadRecords(array $records): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$records` | **array** |             |

***

### encryptPassword

Used to encrypt passowrd to store it securely.

```php
public encryptPassword(string $original): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$original` | **string** |             |

***
