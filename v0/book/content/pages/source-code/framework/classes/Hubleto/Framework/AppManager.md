
Default manager of Hubleto apps used in the Hubleto project.

# \Hubleto\Framework\AppManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/AppManagerInterface">\Hubleto\Framework\Interfaces\AppManagerInterface</a></td></tr></table>


## Properties

### activatedApp

`public \Hubleto\Framework\Interfaces\AppInterface $activatedApp`


### enabledApps

`public \Hubleto\Framework\Interfaces\AppInterface[] $enabledApps`


### disabledApps

`public \Hubleto\Framework\Interfaces\AppInterface[] $disabledApps`


### registeredAppNamespaces

`public string[] $registeredAppNamespaces`


## Methods

### init

[Description for init]

```php
public init(): void
```


### sanitizeAppNamespace

[Description for sanitizeAppNamespace]

```php
public sanitizeAppNamespace(string $appNamespace): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### validateAppNamespace

[Description for validateAppNamespace]

```php
public validateAppNamespace(string $appNamespace): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### onBeforeRender

[Description for onBeforeRender]

```php
public onBeforeRender(): void
```


### getAppNamespaceForConfig

[Description for getAppNamespaceForConfig]

```php
public getAppNamespaceForConfig(string $appNamespace): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### getAvailableApps

[Description for getAvailableApps]

```php
public getAvailableApps(): array
```


### getInstalledAppNamespaces

[Description for getInstalledAppNamespaces]

```php
public getInstalledAppNamespaces(): array
```


### createAppInstance

[Description for createAppInstance]

```php
public createAppInstance(string $appNamespace): \Hubleto\Framework\Interfaces\AppInterface
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### getEnabledApps

```php
public getEnabledApps(): \Hubleto\Framework\Interfaces\AppInterface[]
```


### getDisabledApps

```php
public getDisabledApps(): \Hubleto\Framework\Interfaces\AppInterface[]
```


### getInstalledApps

```php
public getInstalledApps(): \Hubleto\Framework\Interfaces\AppInterface[]
```


### getActivatedApp

[Description for getActivatedApp]

```php
public getActivatedApp(): null|\Hubleto\Framework\Interfaces\AppInterface
```


### getApp

[Description for getApp]

```php
public getApp(string $appNamespace): null|\Hubleto\Framework\Interfaces\AppInterface
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### isAppInstalled

[Description for isAppInstalled]

```php
public isAppInstalled(string $appNamespace): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### isAppEnabled

[Description for isAppEnabled]

```php
public isAppEnabled(string $appNamespace): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### installApp

```php
public installApp(int $round, string $appNamespace, array<string,mixed> $appConfig = [], bool $forceInstall = false): bool
```

**Parameters:**

| Parameter       | Type                    | Description |
|-----------------|-------------------------|-------------|
| `$round`        | **int**                 |             |
| `$appNamespace` | **string**              |             |
| `$appConfig`    | **array<string,mixed>** |             |
| `$forceInstall` | **bool**                |             |


### disableApp

```php
public disableApp(string $appNamespace): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### enableApp

```php
public enableApp(string $appNamespace): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### createApp

```php
public createApp(string $appNamespace, string $appSrcFolder): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |
| `$appSrcFolder` | **string** |             |


### canAppDangerouslyInjectDesktopHtmlContent

```php
public canAppDangerouslyInjectDesktopHtmlContent(string $appNamespace): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


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

