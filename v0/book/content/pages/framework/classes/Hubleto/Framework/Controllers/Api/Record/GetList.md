
Default implementation of Hubleto controller.

'Controller' is fundamendal class for generating HTML content of each call. Controllers can
be rendered using Twig template or using custom render() method.

# \Hubleto\Framework\Controllers\Api\Record\GetList
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../ApiController">\Hubleto\Framework\Controllers\ApiController</a></td></tr></table>


## Properties

### model

`public \Hubleto\Framework\Model $model`


## Methods

### __construct

```php
public __construct(): mixed
```


### response

```php
public response(): array
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


### validateInputs

Validates inputs used for the TWIG template.

```php
public validateInputs(): bool
```

return bool True if inputs are valid, otherwise false.


### preInit

1st phase of controller's initialization phase.

```php
public preInit(): void
```

**Throws:**

Should throw an exception on error.
- [`Exception`](../../../Exception)


### init

2nd phase of controller's initialization phase.

```php
public init(): void
```

**Throws:**

Should throw an exception on error.
- [`Exception`](../../../Exception)


### postInit

3rd phase of controller's initialization phase.

```php
public postInit(): void
```

**Throws:**

Should throw an exception on error.
- [`Exception`](../../../Exception)


### run

```php
public run(): mixed
```


### renderString

```php
public renderString(): string
```


### renderJson

If the controller shall only return JSON, this method must be overriden.

```php
public renderJson(): array
```

**Return Value:**

Array to be returned as a JSON.


### prepareViewParams

If the controller shall return the HTML of the view, this method must be overriden.

```php
public prepareViewParams(): array
```

**Return Value:**

View to be used to render the HTML.


### prepareView

```php
public prepareView(): void
```


### setView

```php
public setView(string $view): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |


### getView

```php
public getView(): string
```


### getViewParams

```php
public getViewParams(): array
```


### render

```php
public render(): string
```


### response

```php
public response(): array
```

