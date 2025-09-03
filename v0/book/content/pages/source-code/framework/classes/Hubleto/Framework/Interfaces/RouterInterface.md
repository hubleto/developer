
# \Hubleto\Framework\Interfaces\RouterInterface

## Methods

### init

```php
public init(): void
```


### isAjax

```php
public isAjax(): bool
```


### extractParamsFromRequest

```php
public extractParamsFromRequest(): array
```


### extractRouteFromRequest

```php
public extractRouteFromRequest(): string
```


### get

```php
public get(array $routes): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$routes` | **array** |             |


### getRoutes

```php
public getRoutes(string $method): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |


### parseRoute

```php
public parseRoute(string $method, string $route): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |
| `$route`  | **string** |             |


### getRoute

```php
public getRoute(): string
```


### setRoute

```php
public setRoute(string $route): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |


### setRouteVars

```php
public setRouteVars(array $routeVars): void
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$routeVars` | **array** |             |


### getRouteVars

```php
public getRouteVars(): array
```


### getRouteVar

```php
public getRouteVar(string|int $varIndex): string
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### routeVarAsString

```php
public routeVarAsString(string|int $varIndex): string
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### routeVarAsInteger

```php
public routeVarAsInteger(string|int $varIndex): int
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### routeVarAsFloat

```php
public routeVarAsFloat(string|int $varIndex): float
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### routeVarAsBool

```php
public routeVarAsBool(string|int $varIndex): bool
```

**Parameters:**

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$varIndex` | **string\|int** |             |


### redirectTo

```php
public redirectTo(string $url, int $code = 302): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$url`    | **string** |             |
| `$code`   | **int**    |             |


### getUrlParams

```php
public getUrlParams(): array
```


### isUrlParam

```php
public isUrlParam(string $paramName): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |


### urlParamNotEmpty

```php
public urlParamNotEmpty(string $paramName): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |


### setUrlParam

```php
public setUrlParam(string $paramName, string $newValue): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |
| `$newValue`  | **string** |             |


### removeUrlParam

```php
public removeUrlParam(string $paramName): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$paramName` | **string** |             |


### urlParamAsString

```php
public urlParamAsString(string $paramName, string $defaultValue = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **string** |             |


### urlParamAsInteger

```php
public urlParamAsInteger(string $paramName, int $defaultValue): int
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **int**    |             |


### urlParamAsFloat

```php
public urlParamAsFloat(string $paramName, float $defaultValue): float
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **float**  |             |


### urlParamAsBool

```php
public urlParamAsBool(string $paramName, bool $defaultValue = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **bool**   |             |


### urlParamAsArray

```php
public urlParamAsArray(string $paramName, array $defaultValue = []): array
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **array**  |             |

