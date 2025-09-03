
Encapsulation for Hubleto app.

***

* Full name: `\Hubleto\Framework\App`
* Parent class: [`\Hubleto\Framework\Core`](./Core)
* This class implements:
  [`\Hubleto\Framework\Interfaces\AppInterface`](./Interfaces/AppInterface)

## Constants

| Constant                      | Visibility | Type | Value                   |
|-------------------------------|------------|------|-------------------------|
| `DEFAULT_INSTALLATION_CONFIG` | public     |      | ['sidebarOrder' => 500] |
| `APP_TYPE_COMMUNITY`          | public     |      | 'community'             |
| `APP_TYPE_PREMIUM`            | public     |      | 'premium'               |
| `APP_TYPE_EXTERNAL`           | public     |      | 'external'              |

## Properties

### manifest

```php
public array $manifest
```

***

### enabled

```php
public bool $enabled
```

***

### canBeDisabled

```php
public bool $canBeDisabled
```

***

### permittedForAllUsers

```php
public bool $permittedForAllUsers
```

***

### srcFolder

```php
public string $srcFolder
```

***

### viewNamespace

```php
public string $viewNamespace
```

***

### namespace

```php
public string $namespace
```

***

### fullName

```php
public string $fullName
```

***

### shortName

```php
public string $shortName
```

***

### isActivated

```php
public bool $isActivated
```

***

### hasCustomSettings

```php
public bool $hasCustomSettings
```

***

### settings

```php
private array $settings
```

***

### searchSwitches

```php
public array $searchSwitches
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### validateManifest

[Description for validateManifest]

```php
public validateManifest(): mixed
```

***

### init

```php
public init(): void
```

***

### onBeforeRender

```php
public onBeforeRender(): void
```

***

### hook

```php
public hook(string $hook): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$hook`   | **string** |             |

***

### getRootUrlSlug

```php
public getRootUrlSlug(): string
```

***

### getNotificationsCount

```php
public getNotificationsCount(): int
```

***

### translate

Shorthand for core translate() function. Uses own language dictionary.

```php
public translate(string $string, array $vars = [], string $context = 'root'): string
```

**Parameters:**

| Parameter  | Type       | Description             |
|------------|------------|-------------------------|
| `$string`  | **string** | String to be translated |
| `$vars`    | **array**  |                         |
| `$context` | **string** |                         |

**Return Value:**

Translated string.

***

### installTables

```php
public installTables(int $round): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |

***

### getAvailableControllerClasses

```php
public getAvailableControllerClasses(): array
```

***

### getAvailableModelClasses

```php
public getAvailableModelClasses(): array
```

***

### installDefaultPermissions

```php
public installDefaultPermissions(): void
```

***

### assignPermissionsToRoles

```php
public assignPermissionsToRoles(): void
```

***

### generateDemoData

```php
public generateDemoData(): void
```

***

### renderSecondSidebar

```php
public renderSecondSidebar(): string
```

***

### search

Implements fulltext search functionality for the app

```php
public search(array $expressions): array
```

**Parameters:**

| Parameter      | Type      | Description                                                     |
|----------------|-----------|-----------------------------------------------------------------|
| `$expressions` | **array** | List of expressions to be searched and glued with logical 'or'. |

***

### addSetting

```php
public addSetting(\Hubleto\Framework\Interfaces\AppInterface $app, array $setting): void
```

**Parameters:**

| Parameter  | Type                                           | Description |
|------------|------------------------------------------------|-------------|
| `$app`     | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$setting` | **array**                                      |             |

***

### getSettings

```php
public getSettings(): array
```

***

### getFullConfigPath

```php
public getFullConfigPath(string $path): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |

***

### saveConfig

```php
public saveConfig(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |

***

### saveConfigForUser

```php
public saveConfigForUser(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |

***

### configAsString

```php
public configAsString(string $path, string $defaultValue = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |

***

### configAsInteger

```php
public configAsInteger(string $path, int $defaultValue): int
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |

***

### configAsFloat

```php
public configAsFloat(string $path, float $defaultValue): float
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |

***

### configAsBool

```php
public configAsBool(string $path, bool $defaultValue = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |

***

### configAsArray

```php
public configAsArray(string $path, array $defaultValue = []): array
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |

***

### setConfigAsString

```php
public setConfigAsString(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |

***

### setConfigAsInteger

```php
public setConfigAsInteger(string $path, int $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **int**    |             |

***

### setConfigAsFloat

```php
public setConfigAsFloat(string $path, float $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **float**  |             |

***

### setConfigAsBool

```php
public setConfigAsBool(string $path, bool $value = false): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **bool**   |             |

***

### setConfigAsArray

```php
public setConfigAsArray(string $path, array $value = []): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **array**  |             |

***

### dangerouslyInjectDesktopHtmlContent

```php
public dangerouslyInjectDesktopHtmlContent(string $where): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$where`  | **string** |             |

***

### addSearchSwitch

```php
public addSearchSwitch(string $switch, string $name): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |
| `$name`   | **string** |             |

***

### canHandleSearchSwith

```php
public canHandleSearchSwith(string $switch): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |

***

### collectExtendibles

```php
public collectExtendibles(string $extendibleName): array
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$extendibleName` | **string** |             |

***

## Inherited methods

### __construct

```php
public __construct(): mixed
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
