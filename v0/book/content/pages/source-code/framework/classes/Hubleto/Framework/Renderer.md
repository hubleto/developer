
Default view renderer for Hubleto project.

# \Hubleto\Framework\Renderer
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr></table>


## Properties

### twigLoader

`public \Twig\Loader\FilesystemLoader $twigLoader`


### twig

`public \Twig\Environment $twig`


## Methods

### init

```php
public init(): void
```


### getTwig

```php
public getTwig(): \Twig\Environment
```


### addNamespace

Adds namespace for Twig renderer

```php
public addNamespace(string $folder, string $namespace): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$folder`    | **string** |             |
| `$namespace` | **string** |             |


### renderView

```php
public renderView(string $view, array $vars = []): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |
| `$vars`   | **array**  |             |


### render

Renders the requested content. It can be the (1) whole desktop with complete <html>
content; (2) the HTML of a controller requested dynamically using AJAX; or (3) a JSON
string requested dynamically using AJAX and further processed in Javascript.

```php
public render(string $route = '', mixed $params = []): string
```

**Parameters:**

| Parameter | Type       | Description                                                |
|-----------|------------|------------------------------------------------------------|
| `$route`  | **string** |                                                            |
| `$params` | **mixed**  | Parameters (a.k.a. arguments) of the requested controller. |

**Return Value:**

Rendered content.

**Throws:**

When running in CLI and requested controller is blocked for the CLI.
- [`Exception`](./Exception)
When running in SAPI and requested controller is blocked for the SAPI.
- [`Exception`](./Exception)


### renderSuccess

```php
public renderSuccess(mixed $return): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$return` | **mixed** |             |


### renderWarning

```php
public renderWarning(mixed $message, mixed $isHtml = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |
| `$isHtml`  | **mixed** |             |


### renderFatal

```php
public renderFatal(mixed $message, mixed $isHtml = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |
| `$isHtml`  | **mixed** |             |


### renderHtmlFatal

```php
public renderHtmlFatal(mixed $message): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |


### renderExceptionHtml

```php
public renderExceptionHtml(mixed $exception, array $args = []): string
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$exception` | **mixed** |             |
| `$args`      | **array** |             |


### renderHtmlWarning

```php
public renderHtmlWarning(mixed $warning): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$warning` | **mixed** |             |


### onBeforeRender

```php
public onBeforeRender(): void
```


### onAfterRender

```php
public onAfterRender(): void
```


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
public config(): \Hubleto\Framework\Config
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

