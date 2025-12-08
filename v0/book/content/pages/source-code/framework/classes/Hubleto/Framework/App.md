
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


<div class="mt-2">&nbsp;</div>
### ☍ manifest
```php
public array $manifest
```

Basic identification of the app. More details at https://developer.hubleto.com/docs/apps/manifest




<div class="mt-2">&nbsp;</div>
### ☍ enabled
```php
public bool $enabled
```

If set to `false`, app is not accessible.


Apps get enabled in `AppManager`.



<div class="mt-2">&nbsp;</div>
### ☍ canBeDisabled
```php
public bool $canBeDisabled
```

If set to `false`, app cannot be disabled.


Some core apps (e.g., `Desktop`) have this set to `false`.



<div class="mt-2">&nbsp;</div>
### ☍ permittedForAllUsers
```php
public bool $permittedForAllUsers
```

If set to `true`, permission checking is not performed for this app.`




<div class="mt-2">&nbsp;</div>
### ☍ srcFolder
```php
public string $srcFolder
```

Path to source code of this app. Usefull when accessing app's resources.




<div class="mt-2">&nbsp;</div>
### ☍ viewNamespace
```php
public string $viewNamespace
```

TWIG namespace of this app.




<div class="mt-2">&nbsp;</div>
### ☍ namespace
```php
public string $namespace
```

App's PHP namespace.




<div class="mt-2">&nbsp;</div>
### ☍ fullName
```php
public string $fullName
```

App's full classname.




<div class="mt-2">&nbsp;</div>
### ☍ shortName
```php
public string $shortName
```

App's short name, extracted from the namespace.




<div class="mt-2">&nbsp;</div>
### ☍ isActivated
```php
public bool $isActivated
```

If set to `true`, app is activated in the UI. Only enabled app can be activated.


Only one app can be activated at a time.



<div class="mt-2">&nbsp;</div>
### ☍ sidebarView
```php
public string $sidebarView
```

Path to TWIG view for rendering the apps's sidebar.




<div class="mt-2">&nbsp;</div>
### ☍ settings
```php
private array $settings
```




<div class="mt-2">&nbsp;</div>
### ☍ searchSwitches
```php
public array $searchSwitches
```

List of app's search switches used in global Hubleto fulltext search.



## Methods

### ƒ __construct

Default app's constructor.

```php
public __construct(): mixed
```


### ƒ validateManifest

[Description for validateManifest]

```php
public validateManifest(): mixed
```


### ƒ init

[Description for init]

```php
public init(): void
```


### ƒ onBeforeRender

[Description for onBeforeRender]

```php
public onBeforeRender(): void
```


### ƒ hook

[Description for hook]

```php
public hook(string $hook): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$hook`   | **string** |             |


### ƒ getRootUrlSlug

[Description for getRootUrlSlug]

```php
public getRootUrlSlug(): string
```


### ƒ getNotificationsCount

[Description for getNotificationsCount]

```php
public getNotificationsCount(): int
```


### ƒ installTables

[Description for installTables]

```php
public installTables(int $round): void
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### ƒ getAvailableControllerClasses

[Description for getAvailableControllerClasses]

```php
public getAvailableControllerClasses(): array
```


### ƒ getAvailableModelClasses

[Description for getAvailableModelClasses]

```php
public getAvailableModelClasses(): array
```


### ƒ installDefaultPermissions

[Description for installDefaultPermissions]

```php
public installDefaultPermissions(): void
```


### ƒ assignPermissionsToRoles

[Description for assignPermissionsToRoles]

```php
public assignPermissionsToRoles(): void
```


### ƒ generateDemoData

[Description for generateDemoData]

```php
public generateDemoData(): void
```


### ƒ renderSecondSidebar

[Description for renderSecondSidebar]

```php
public renderSecondSidebar(): string
```


### ƒ search

[Description for search]

```php
public search(array $expressions): array
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$expressions` | **array** |             |


### ƒ addSetting

[Description for addSetting]

```php
public addSetting(\Hubleto\Framework\Interfaces\AppInterface $app, array $setting): void
```

#### Parameters

| Parameter  | Type                                           | Description |
|------------|------------------------------------------------|-------------|
| `$app`     | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$setting` | **array**                                      |             |


### ƒ getSettings

[Description for getSettings]

```php
public getSettings(): array
```


### ƒ getFullConfigPath

[Description for getFullConfigPath]

```php
public getFullConfigPath(string $path): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### ƒ saveConfig

[Description for saveConfig]

```php
public saveConfig(string $path, string $value = ''): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ saveConfigForUser

[Description for saveConfigForUser]

```php
public saveConfigForUser(string $path, string $value = ''): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ configAsString

[Description for configAsString]

```php
public configAsString(string $path, string $defaultValue = ''): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### ƒ configAsInteger

[Description for configAsInteger]

```php
public configAsInteger(string $path, int $defaultValue): int
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### ƒ configAsFloat

[Description for configAsFloat]

```php
public configAsFloat(string $path, float $defaultValue): float
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### ƒ configAsBool

[Description for configAsBool]

```php
public configAsBool(string $path, bool $defaultValue = false): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### ƒ configAsArray

[Description for configAsArray]

```php
public configAsArray(string $path, array $defaultValue = []): array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### ƒ setConfigAsString

[Description for setConfigAsString]

```php
public setConfigAsString(string $path, string $value = ''): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ setConfigAsInteger

[Description for setConfigAsInteger]

```php
public setConfigAsInteger(string $path, int $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **int**    |             |


### ƒ setConfigAsFloat

[Description for setConfigAsFloat]

```php
public setConfigAsFloat(string $path, float $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **float**  |             |


### ƒ setConfigAsBool

[Description for setConfigAsBool]

```php
public setConfigAsBool(string $path, bool $value = false): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **bool**   |             |


### ƒ setConfigAsArray

[Description for setConfigAsArray]

```php
public setConfigAsArray(string $path, array $value = []): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **array**  |             |


### ƒ dangerouslyInjectDesktopHtmlContent

[Description for dangerouslyInjectDesktopHtmlContent]

```php
public dangerouslyInjectDesktopHtmlContent(string $where): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$where`  | **string** |             |


### ƒ addSearchSwitch

[Description for addSearchSwitch]

```php
public addSearchSwitch(string $switch, string $name): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |
| `$name`   | **string** |             |


### ƒ canHandleSearchSwith

[Description for canHandleSearchSwith]

```php
public canHandleSearchSwith(string $switch): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |


### ƒ collectExtendibles

[Description for collectExtendibles]

```php
public collectExtendibles(string $extendibleName): array
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$extendibleName` | **string** |             |


## Inherited methods

### ƒ __construct

```php
public __construct(): mixed
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

