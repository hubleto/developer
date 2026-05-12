
# \Hubleto\Framework\Interfaces\ConfigManagerInterface
* Parent interfaces:
  <a href="./CoreInterface">\Hubleto\Framework\Interfaces\CoreInterface</a>

## Methods

### ƒ forApp

```php
public forApp(string $appClass): mixed
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$appClass` | **string** |             |


### ƒ forModel

```php
public forModel(string $modelClass): mixed
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$modelClass` | **string** |             |


### ƒ setPrefix

```php
public setPrefix(string $prefix): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$prefix` | **string** |             |


### ƒ setConfig

```php
public setConfig(array $configData): mixed
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$configData` | **array** |             |


### ƒ empty

```php
public empty(string $path): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### ƒ get

```php
public get(string $path = '', mixed $default = null): mixed
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$path`    | **string** |             |
| `$default` | **mixed**  |             |


### ƒ getAsString

```php
public getAsString(string $path, string $defaultValue = ''): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### ƒ getAsInteger

```php
public getAsInteger(string $path, int $defaultValue): int
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### ƒ getAsFloat

```php
public getAsFloat(string $path, float $defaultValue): float
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### ƒ getAsBool

```php
public getAsBool(string $path, bool $defaultValue = false): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### ƒ getAsArray

```php
public getAsArray(string $path, array $defaultValue = []): array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### ƒ set

```php
public set(string $path, mixed $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |


### ƒ save

```php
public save(string $path, string $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ saveForUser

```php
public saveForUser(string $path, string $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ delete

```php
public delete(mixed $path): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$path`   | **mixed** |             |


### ƒ init

```php
public init(): void
```


### ƒ filterByUser

```php
public filterByUser(): void
```


## Inherited methods

### ƒ getServiceStatic

```php
public static getServiceStatic(string $service): mixed
```

* This method is **static**.
#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### ƒ setDebugLevel

```php
public setDebugLevel(int $level): void
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$level`  | **int** |             |


### ƒ getDebugLevel

```php
public getDebugLevel(): int
```


### ƒ getService

```php
public getService(string $service): mixed
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### ƒ env

```php
public env(): \Hubleto\Framework\Interfaces\EnvInterface
```


### ƒ authProvider

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthProviderInterface
```


### ƒ db

```php
public db(): \Hubleto\Framework\Interfaces\DbInterface
```


### ƒ appManager

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```


### ƒ router

```php
public router(): \Hubleto\Framework\Interfaces\RouterInterface
```


### ƒ eventManager

```php
public eventManager(): \Hubleto\Framework\Interfaces\EventManagerInterface
```


### ƒ sessionManager

```php
public sessionManager(): \Hubleto\Framework\Interfaces\SessionManagerInterface
```


### ƒ permissionsManager

```php
public permissionsManager(): \Hubleto\Framework\Interfaces\PermissionsManagerInterface
```


### ƒ cronManager

```php
public cronManager(): \Hubleto\Framework\Interfaces\CronManagerInterface
```


### ƒ config

```php
public config(): \Hubleto\Framework\Interfaces\ConfigManagerInterface
```


### ƒ logger

```php
public logger(): \Hubleto\Framework\Interfaces\LoggerInterface
```


### ƒ locale

```php
public locale(): \Hubleto\Framework\Interfaces\LocaleInterface
```


### ƒ renderer

```php
public renderer(): \Hubleto\Framework\Interfaces\RendererInterface
```


### ƒ translator

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### ƒ getModel

```php
public getModel(string $model): \Hubleto\Framework\Interfaces\ModelInterface
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |


### ƒ getController

```php
public getController(string $controller): \Hubleto\Framework\Interfaces\ControllerInterface
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |


### ƒ translate

```php
public translate(string $string, array $vars = [], string $contextInner = ''): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$string`       | **string** |             |
| `$vars`         | **array**  |             |
| `$contextInner` | **string** |             |

