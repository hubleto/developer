
Default router for Hubleto project.

# \Hubleto\Framework\Router
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/RouterInterface">\Hubleto\Framework\Interfaces\RouterInterface</a></td></tr></table>


## Constants

| Constant   | Visibility | Type | Value      |
|------------|------------|------|------------|
| `HTTP_GET` | public     |      | 'HTTP_GET' |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ routing
```php
public $routing
```




<div class="mt-2">&nbsp;</div>
### ☍ route
```php
protected string $route
```




<div class="mt-2">&nbsp;</div>
### ☍ routesHttpGet
```php
protected array $routesHttpGet
```




<div class="mt-2">&nbsp;</div>
### ☍ routeVars
```php
protected array $routeVars
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ init

```php
public init(): void
```


### ƒ extractParamsFromRequest

```php
public extractParamsFromRequest(): array
```


### ƒ extractRouteFromRequest

```php
public extractRouteFromRequest(): string
```


### ƒ isAjax

```php
public isAjax(): bool
```


### ƒ get

```php
public get(array $routes): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$routes` | **array** |             |


### ƒ getRoutes

```php
public getRoutes(string $method): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |


### ƒ getRoute

```php
public getRoute(): string
```


### ƒ setRoute

```php
public setRoute(string $route): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |


### ƒ parseRoute

array<string, array<string, string>>

```php
public parseRoute(string $method, string $route): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |
| `$route`  | **string** |             |


### ƒ setRouteVars

```php
public setRouteVars(array $routeVars): void
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$routeVars` | **array** |             |


### ƒ getRouteVars

```php
public getRouteVars(): array
```


### ƒ getRouteVar

```php
public getRouteVar(string|int $varIndex): string
```

#### Parameters

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### ƒ routeVarAsString

```php
public routeVarAsString(string|int $varIndex): string
```

#### Parameters

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### ƒ routeVarAsInteger

```php
public routeVarAsInteger(string|int $varIndex): int
```

#### Parameters

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### ƒ routeVarAsFloat

```php
public routeVarAsFloat(string|int $varIndex): float
```

#### Parameters

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### ƒ routeVarAsBool

```php
public routeVarAsBool(string|int $varIndex): bool
```

#### Parameters

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### ƒ getUploadedFile

```php
public getUploadedFile(string $paramName, ?array $defaultValue = null): null|array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **?array** |             |


### ƒ redirectTo

```php
public redirectTo(string $url, int $code = 302): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$url`    | **string** |             |
| `$code`   | **int**    |             |


### ƒ getUrlParams

```php
public getUrlParams(): array
```


### ƒ isUrlParam

```php
public isUrlParam(string $paramName): bool
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |


### ƒ urlParamNotEmpty

```php
public urlParamNotEmpty(string $paramName): bool
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |


### ƒ setUrlParam

```php
public setUrlParam(string $paramName, string $newValue): void
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |
| `$newValue`  | **string** |             |


### ƒ removeUrlParam

```php
public removeUrlParam(string $paramName): void
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |


### ƒ urlParamAsString

```php
public urlParamAsString(string $paramName, string $defaultValue = ''): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **string** |             |


### ƒ urlParamAsInteger

```php
public urlParamAsInteger(string $paramName, int $defaultValue): int
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **int**    |             |


### ƒ urlParamAsFloat

```php
public urlParamAsFloat(string $paramName, float $defaultValue): float
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **float**  |             |


### ƒ urlParamAsBool

```php
public urlParamAsBool(string $paramName, bool $defaultValue = false): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **bool**   |             |


### ƒ urlParamAsArray

```php
public urlParamAsArray(string $paramName, array $defaultValue = []): array<string,string>
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **array**  |             |


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

