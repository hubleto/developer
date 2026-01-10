
Default implementation of logger in Hubleto project.

# \Hubleto\Framework\Logger
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/LoggerInterface">\Hubleto\Framework\Interfaces\LoggerInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ loggers
```php
public array $loggers
```




<div class="mt-2">&nbsp;</div>
### ☍ cliEchoEnabled
```php
public bool $cliEchoEnabled
```




<div class="mt-2">&nbsp;</div>
### ☍ logFolder
```php
public string $logFolder
```




<div class="mt-2">&nbsp;</div>
### ☍ enabled
```php
public bool $enabled
```




<div class="mt-2">&nbsp;</div>
### ☍ logCache
```php
private array $logCache
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ clearLogCache

```php
public clearLogCache(): void
```


### ƒ getLogCache

```php
public getLogCache(): array
```


### ƒ initInternalLogger

[Description for initInternalLogger]

```php
public initInternalLogger(string $loggerName = ""): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$loggerName` | **string** |             |


### ƒ getInternalLogger

[Description for getInternalLogger]

```php
public getInternalLogger(mixed $loggerName): object
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$loggerName` | **mixed** |             |


### ƒ cliEcho

[Description for cliEcho]

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

[Description for debug]

```php
public debug(mixed $message, array $context = [], string $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


### ƒ info

[Description for info]

```php
public info(mixed $message, array $context = [], string $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


### ƒ warning

[Description for warning]

```php
public warning(mixed $message, array $context = [], string $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


### ƒ error

[Description for error]

```php
public error(mixed $message, array $context = [], string $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


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

