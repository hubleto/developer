
Default manager for hooks in the Hubleto project.

# \Hubleto\Framework\HookManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/HookManagerInterface">\Hubleto\Framework\Interfaces\HookManagerInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ enabledHooks
```php
protected \Hubleto\Erp\Hook[] $enabledHooks
```



## Methods

### ƒ init

```php
public init(): void
```


### ƒ log

```php
public log(string $msg): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$msg`    | **string** |             |


### ƒ addHook

```php
public addHook(string $hookClass): void
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$hookClass` | **string** |             |


### ƒ getHooks

```php
public getHooks(): array
```


### ƒ run

```php
public run(string $trigger, array $args): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$trigger` | **string** |             |
| `$args`    | **array**  |             |


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

