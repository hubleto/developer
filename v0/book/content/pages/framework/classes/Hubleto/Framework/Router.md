
Default router for Hubleto project.

***

* Full name: `\Hubleto\Framework\Router`
* Parent class: [`\Hubleto\Framework\Core`](./Core)
* This class implements:
  [`\Hubleto\Framework\Interfaces\RouterInterface`](./Interfaces/RouterInterface)

## Constants

| Constant   | Visibility | Type | Value      |
|------------|------------|------|------------|
| `HTTP_GET` | public     |      | 'HTTP_GET' |

## Properties

### routing

```php
public $routing
```

***

### route

```php
protected string $route
```

***

### routesHttpGet

```php
protected array $routesHttpGet
```

***

### routeVars

```php
protected array $routeVars
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### init

```php
public init(): void
```

***

### extractParamsFromRequest

```php
public extractParamsFromRequest(): array
```

***

### extractRouteFromRequest

```php
public extractRouteFromRequest(): string
```

***

### isAjax

```php
public isAjax(): bool
```

***

### get

```php
public get(array $routes): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$routes` | **array** |             |

***

### getRoutes

```php
public getRoutes(string $method): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |

***

### getRoute

```php
public getRoute(): string
```

***

### setRoute

```php
public setRoute(string $route): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |

***

### parseRoute

array<string, array<string, string>>

```php
public parseRoute(string $method, string $route): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |
| `$route`  | **string** |             |

***

### setRouteVars

```php
public setRouteVars(array $routeVars): void
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$routeVars` | **array** |             |

***

### getRouteVars

```php
public getRouteVars(): array
```

***

### getRouteVar

```php
public getRouteVar(string|int $varIndex): string
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |

***

### routeVarAsString

```php
public routeVarAsString(string|int $varIndex): string
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |

***

### routeVarAsInteger

```php
public routeVarAsInteger(string|int $varIndex): int
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |

***

### routeVarAsFloat

```php
public routeVarAsFloat(string|int $varIndex): float
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |

***

### routeVarAsBool

```php
public routeVarAsBool(string|int $varIndex): bool
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |

***

### getUploadedFile

```php
public getUploadedFile(string $paramName, ?array $defaultValue = null): null|array
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **?array** |             |

***

### redirectTo

```php
public redirectTo(string $url, int $code = 302): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$url`    | **string** |             |
| `$code`   | **int**    |             |

***

### getUrlParams

```php
public getUrlParams(): array
```

***

### isUrlParam

```php
public isUrlParam(string $paramName): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |

***

### urlParamNotEmpty

```php
public urlParamNotEmpty(string $paramName): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |

***

### setUrlParam

```php
public setUrlParam(string $paramName, string $newValue): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |
| `$newValue`  | **string** |             |

***

### removeUrlParam

```php
public removeUrlParam(string $paramName): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |

***

### urlParamAsString

```php
public urlParamAsString(string $paramName, string $defaultValue = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **string** |             |

***

### urlParamAsInteger

```php
public urlParamAsInteger(string $paramName, int $defaultValue): int
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **int**    |             |

***

### urlParamAsFloat

```php
public urlParamAsFloat(string $paramName, float $defaultValue): float
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **float**  |             |

***

### urlParamAsBool

```php
public urlParamAsBool(string $paramName, bool $defaultValue = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **bool**   |             |

***

### urlParamAsArray

```php
public urlParamAsArray(string $paramName, array $defaultValue = []): array<string,string>
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **array**  |             |

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
