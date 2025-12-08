
Encapsulation for Hubleto app.

# \Hubleto\Framework\App
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/AppInterface">\Hubleto\Framework\Interfaces\AppInterface</a></td></tr></table>


## Constants

| Constant                      | Visibility | Type | Value                   |
|-------------------------------|------------|------|-------------------------|
| `DEFAULT_INSTALLATION_CONFIG` | public     |      | ['sidebarOrder' => 500] |
| `APP_TYPE_COMMUNITY`          | public     |      | 'community'             |
| `APP_TYPE_PREMIUM`            | public     |      | 'premium'               |
| `APP_TYPE_EXTERNAL`           | public     |      | 'external'              |

## Properties

### manifest

`public array $manifest`


### enabled

`public bool $enabled`


### canBeDisabled

`public bool $canBeDisabled`


### permittedForAllUsers

`public bool $permittedForAllUsers`


### srcFolder

`public string $srcFolder`


### viewNamespace

`public string $viewNamespace`


### namespace

`public string $namespace`


### fullName

`public string $fullName`


### shortName

`public string $shortName`


### isActivated

`public bool $isActivated`


### hasCustomSettings

`public bool $hasCustomSettings`


### sidebarView

`public string $sidebarView`


### settings

`private array $settings`


### searchSwitches

`public array $searchSwitches`


## Methods

### __construct

```php
public __construct(): mixed
```


### validateManifest

[Description for validateManifest]

```php
public validateManifest(): mixed
```


### init

[Description for init]

```php
public init(): void
```


### onBeforeRender

[Description for onBeforeRender]

```php
public onBeforeRender(): void
```


### hook

[Description for hook]

```php
public hook(string $hook): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$hook`   | **string** |             |


### getRootUrlSlug

[Description for getRootUrlSlug]

```php
public getRootUrlSlug(): string
```


### getNotificationsCount

[Description for getNotificationsCount]

```php
public getNotificationsCount(): int
```


### installTables

[Description for installTables]

```php
public installTables(int $round): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### getAvailableControllerClasses

[Description for getAvailableControllerClasses]

```php
public getAvailableControllerClasses(): array
```


### getAvailableModelClasses

[Description for getAvailableModelClasses]

```php
public getAvailableModelClasses(): array
```


### installDefaultPermissions

[Description for installDefaultPermissions]

```php
public installDefaultPermissions(): void
```


### assignPermissionsToRoles

[Description for assignPermissionsToRoles]

```php
public assignPermissionsToRoles(): void
```


### generateDemoData

[Description for generateDemoData]

```php
public generateDemoData(): void
```


### renderSecondSidebar

[Description for renderSecondSidebar]

```php
public renderSecondSidebar(): string
```


### search

[Description for search]

```php
public search(array $expressions): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$expressions` | **array** |             |


### addSetting

[Description for addSetting]

```php
public addSetting(\Hubleto\Framework\Interfaces\AppInterface $app, array $setting): void
```

**Parameters:**

| Parameter  | Type                                           | Description |
|------------|------------------------------------------------|-------------|
| `$app`     | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$setting` | **array**                                      |             |


### getSettings

[Description for getSettings]

```php
public getSettings(): array
```


### getFullConfigPath

[Description for getFullConfigPath]

```php
public getFullConfigPath(string $path): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### saveConfig

[Description for saveConfig]

```php
public saveConfig(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### saveConfigForUser

[Description for saveConfigForUser]

```php
public saveConfigForUser(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### configAsString

[Description for configAsString]

```php
public configAsString(string $path, string $defaultValue = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### configAsInteger

[Description for configAsInteger]

```php
public configAsInteger(string $path, int $defaultValue): int
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### configAsFloat

[Description for configAsFloat]

```php
public configAsFloat(string $path, float $defaultValue): float
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### configAsBool

[Description for configAsBool]

```php
public configAsBool(string $path, bool $defaultValue = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### configAsArray

[Description for configAsArray]

```php
public configAsArray(string $path, array $defaultValue = []): array
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### setConfigAsString

[Description for setConfigAsString]

```php
public setConfigAsString(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### setConfigAsInteger

[Description for setConfigAsInteger]

```php
public setConfigAsInteger(string $path, int $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **int**    |             |


### setConfigAsFloat

[Description for setConfigAsFloat]

```php
public setConfigAsFloat(string $path, float $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **float**  |             |


### setConfigAsBool

[Description for setConfigAsBool]

```php
public setConfigAsBool(string $path, bool $value = false): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **bool**   |             |


### setConfigAsArray

[Description for setConfigAsArray]

```php
public setConfigAsArray(string $path, array $value = []): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **array**  |             |


### dangerouslyInjectDesktopHtmlContent

[Description for dangerouslyInjectDesktopHtmlContent]

```php
public dangerouslyInjectDesktopHtmlContent(string $where): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$where`  | **string** |             |


### addSearchSwitch

[Description for addSearchSwitch]

```php
public addSearchSwitch(string $switch, string $name): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |
| `$name`   | **string** |             |


### canHandleSearchSwith

[Description for canHandleSearchSwith]

```php
public canHandleSearchSwith(string $switch): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |


### collectExtendibles

[Description for collectExtendibles]

```php
public collectExtendibles(string $extendibleName): array
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$extendibleName` | **string** |             |


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

