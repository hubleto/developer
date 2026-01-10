
Default view renderer for Hubleto project.

# \Hubleto\Framework\Renderer
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/RendererInterface">\Hubleto\Framework\Interfaces\RendererInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ twigLoader
```php
public \Twig\Loader\FilesystemLoader $twigLoader
```




<div class="mt-2">&nbsp;</div>
### ☍ twig
```php
public \Twig\Environment $twig
```



## Methods

### ƒ init

```php
public init(): void
```


### ƒ getTwig

```php
public getTwig(): \Twig\Environment
```


### ƒ addNamespace

Adds namespace for Twig renderer

```php
public addNamespace(string $folder, string $namespace): void
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$folder`    | **string** |             |
| `$namespace` | **string** |             |


### ƒ renderView

```php
public renderView(string $view, array $vars = []): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |
| `$vars`   | **array**  |             |


### ƒ render

Renders the requested content. It can be the (1) whole desktop with complete <html>
content; (2) the HTML of a controller requested dynamically using AJAX; or (3) a JSON
string requested dynamically using AJAX and further processed in Javascript.

```php
public render(string $route = '', mixed $params = []): string
```

#### Parameters

| Parameter | Type       | Description                                                |
|-----------|------------|------------------------------------------------------------|
| `$route`  | **string** |                                                            |
| `$params` | **mixed**  | Parameters (a.k.a. arguments) of the requested controller. |

#### Return Value

Rendered content.

#### Throws

When running in CLI and requested controller is blocked for the CLI.
- [`Exception`](./Exceptions/Exception)
When running in SAPI and requested controller is blocked for the SAPI.
- [`Exception`](./Exceptions/Exception)


### ƒ renderSuccess

```php
public renderSuccess(mixed $return): string
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$return` | **mixed** |             |


### ƒ renderWarning

```php
public renderWarning(\Hubleto\Framework\Exceptions\Exception $exception, mixed $isHtml = true): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |
| `$isHtml`    | **mixed**                                   |             |


### ƒ renderFatal

```php
public renderFatal(\Hubleto\Framework\Exceptions\Exception $exception, mixed $isHtml = true): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |
| `$isHtml`    | **mixed**                                   |             |


### ƒ renderHtmlFatal

```php
public renderHtmlFatal(\Hubleto\Framework\Exceptions\Exception $exception): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |


### ƒ renderExceptionHtml

```php
public renderExceptionHtml(mixed $exception, array $args = []): string
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$exception` | **mixed** |             |
| `$args`      | **array** |             |


### ƒ renderHtmlWarning

```php
public renderHtmlWarning(\Hubleto\Framework\Exceptions\Exception $exception): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |


### ƒ onBeforeRender

```php
public onBeforeRender(): void
```


### ƒ onAfterRender

```php
public onAfterRender(): void
```


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

