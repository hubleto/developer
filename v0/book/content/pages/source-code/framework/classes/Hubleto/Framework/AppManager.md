
Default manager of Hubleto apps used in the Hubleto project.

# \Hubleto\Framework\AppManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/AppManagerInterface">\Hubleto\Framework\Interfaces\AppManagerInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ activatedApp
```php
public \Hubleto\Framework\Interfaces\AppInterface $activatedApp
```




<div class="mt-2">&nbsp;</div>
### ☍ enabledApps
```php
public \Hubleto\Framework\Interfaces\AppInterface[] $enabledApps
```




<div class="mt-2">&nbsp;</div>
### ☍ disabledApps
```php
public \Hubleto\Framework\Interfaces\AppInterface[] $disabledApps
```




<div class="mt-2">&nbsp;</div>
### ☍ registeredAppNamespaces
```php
public string[] $registeredAppNamespaces
```



## Methods

### ƒ init

[Description for init]

```php
public init(): void
```


### ƒ sanitizeAppNamespace

[Description for sanitizeAppNamespace]

```php
public sanitizeAppNamespace(string $appNamespace): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ validateAppNamespace

[Description for validateAppNamespace]

```php
public validateAppNamespace(string $appNamespace): void
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ onBeforeRender

[Description for onBeforeRender]

```php
public onBeforeRender(): void
```


### ƒ getAppNamespaceForConfig

[Description for getAppNamespaceForConfig]

```php
public getAppNamespaceForConfig(string $appNamespace): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ getAvailableApps

[Description for getAvailableApps]

```php
public getAvailableApps(): array
```


### ƒ getInstalledAppNamespaces

[Description for getInstalledAppNamespaces]

```php
public getInstalledAppNamespaces(): array
```


### ƒ createAppInstance

[Description for createAppInstance]

```php
public createAppInstance(string $appNamespace): \Hubleto\Framework\Interfaces\AppInterface
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ getEnabledApps

```php
public getEnabledApps(): \Hubleto\Framework\Interfaces\AppInterface[]
```


### ƒ getDisabledApps

```php
public getDisabledApps(): \Hubleto\Framework\Interfaces\AppInterface[]
```


### ƒ getInstalledApps

```php
public getInstalledApps(): \Hubleto\Framework\Interfaces\AppInterface[]
```


### ƒ getActivatedApp

[Description for getActivatedApp]

```php
public getActivatedApp(): null|\Hubleto\Framework\Interfaces\AppInterface
```


### ƒ getApp

[Description for getApp]

```php
public getApp(string $appNamespace): null|\Hubleto\Framework\Interfaces\AppInterface
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ isAppInstalled

[Description for isAppInstalled]

```php
public isAppInstalled(string $appNamespace): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ isAppEnabled

[Description for isAppEnabled]

```php
public isAppEnabled(string $appNamespace): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ installApp

```php
public installApp(int $round, string $appNamespace, array<string,mixed> $appConfig = [], bool $forceInstall = false): bool
```

#### Parameters

| Parameter       | Type                    | Description |
|-----------------|-------------------------|-------------|
| `$round`        | **int**                 |             |
| `$appNamespace` | **string**              |             |
| `$appConfig`    | **array<string,mixed>** |             |
| `$forceInstall` | **bool**                |             |


### ƒ disableApp

```php
public disableApp(string $appNamespace): void
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ enableApp

```php
public enableApp(string $appNamespace): void
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ canAppDangerouslyInjectDesktopHtmlContent

```php
public canAppDangerouslyInjectDesktopHtmlContent(string $appNamespace): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


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

