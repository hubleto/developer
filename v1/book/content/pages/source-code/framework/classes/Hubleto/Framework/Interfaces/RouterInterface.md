
# \Hubleto\Framework\Interfaces\RouterInterface

## Methods

### ƒ init

```php
public init(): void
```


### ƒ isAjax

```php
public isAjax(): bool
```


### ƒ extractParamsFromRequest

```php
public extractParamsFromRequest(): array
```


### ƒ extractRouteFromRequest

```php
public extractRouteFromRequest(): string
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


### ƒ parseRoute

```php
public parseRoute(string $method, string $route): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$method` | **string** |             |
| `$route`  | **string** |             |


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
public urlParamAsArray(string $paramName, array $defaultValue = []): array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$paramName`    | **string** |             |
| `$defaultValue` | **array**  |             |

