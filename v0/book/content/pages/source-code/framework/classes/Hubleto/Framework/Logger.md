
Default implementation of logger in Hubleto project.

# \Hubleto\Framework\Logger
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/LoggerInterface">\Hubleto\Framework\Interfaces\LoggerInterface</a></td></tr></table>


## Properties

### loggers

`public array $loggers`


### cliEchoEnabled

`public bool $cliEchoEnabled`


### logFolder

`public string $logFolder`


### enabled

`public bool $enabled`


## Methods

### __construct

```php
public __construct(): mixed
```


### initInternalLogger

[Description for initInternalLogger]

```php
public initInternalLogger(string $loggerName = ""): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$loggerName` | **string** |             |


### getInternalLogger

[Description for getInternalLogger]

```php
public getInternalLogger(mixed $loggerName): object
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$loggerName` | **mixed** |             |


### cliEcho

[Description for cliEcho]

```php
public cliEcho(mixed $message, mixed $loggerName, mixed $severity): void
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$loggerName` | **mixed** |             |
| `$severity`   | **mixed** |             |


### debug

[Description for debug]

```php
public debug(mixed $message, array $context = [], string $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


### info

[Description for info]

```php
public info(mixed $message, array $context = [], string $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


### warning

[Description for warning]

```php
public warning(mixed $message, array $context = [], string $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


### error

[Description for error]

```php
public error(mixed $message, array $context = [], string $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$message`    | **mixed**  |             |
| `$context`    | **array**  |             |
| `$loggerName` | **string** |             |


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

