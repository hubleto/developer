
# \Hubleto\Framework\Interfaces\LoggerInterface
* Parent interfaces:
  <a href="./CoreInterface">\Hubleto\Framework\Interfaces\CoreInterface</a>

## Methods

### ƒ initInternalLogger

```php
public initInternalLogger(string $loggerName = ""): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$loggerName` | **string** |             |


### ƒ getInternalLogger

```php
public getInternalLogger(mixed $loggerName): object
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$loggerName` | **mixed** |             |


### ƒ cliEcho

```php
public cliEcho(mixed $message, mixed $loggerName, mixed $severity): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$loggerName` | **mixed** |             |
| `$severity`   | **mixed** |             |


### ƒ debug

```php
public debug(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### ƒ info

```php
public info(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### ƒ warning

```php
public warning(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### ƒ error

```php
public error(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


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
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
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


### ƒ hookManager

```php
public hookManager(): \Hubleto\Framework\Interfaces\HookManagerInterface
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


### ƒ emailProvider

```php
public emailProvider(): \Hubleto\Framework\Interfaces\EmailProviderInterface
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

