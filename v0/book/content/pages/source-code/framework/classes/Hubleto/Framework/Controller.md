
Default implementation of Hubleto controller.

'Controller' is fundamendal class for generating HTML content of each call. Controllers can
be rendered using Twig template or using custom render() method.

# \Hubleto\Framework\Controller
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/ControllerInterface">\Hubleto\Framework\Interfaces\ControllerInterface</a></td></tr></table>


## Constants

| Constant             | Visibility | Type | Value |
|----------------------|------------|------|-------|
| `RETURN_TYPE_VIEW`   | public     |      | 0     |
| `RETURN_TYPE_JSON`   | public     |      | 1     |
| `RETURN_TYPE_STRING` | public     |      | 2     |
| `RETURN_TYPE_NONE`   | public     |      | 3     |

## Properties

### gtp

Shorthand for "global table prefix"

`protected string $gtp`


### params

DEPRECATED Array of parameters (arguments) passed to the controller

`public array $params`


### permissionsByUserRole

TRUE/FALSE array with permissions for the user role

`public static array $permissionsByUserRole`

* This property is **static**.


### requiresAuthenticatedUser

If set to FALSE, the rendered content of controller is available to public

`public bool $requiresAuthenticatedUser`


### permittedForAllUsers

If set to TRUE, the controller's permissions is not checked.

`public bool $permittedForAllUsers`


### hideDefaultDesktop

If set to TRUE, the default desktop will not be added to the rendered content

`public bool $hideDefaultDesktop`


### cliSAPIEnabled

If set to FALSE, the controller will not be rendered in CLI

`public static bool $cliSAPIEnabled`

* This property is **static**.


### webSAPIEnabled

If set to FALSE, the controller will not be rendered in WEB

`public static bool $webSAPIEnabled`

* This property is **static**.


### dictionary

`public array $dictionary`


### viewParams

`protected array $viewParams`


### name

`public string $name`


### shortName

`public string $shortName`


### fullName

`public string $fullName`


### permission

`public string $permission`


### view

`public string $view`


### returnType

`public int $returnType`


## Methods

### __construct

```php
public __construct(): mixed
```


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
- [`Exception`](./Exception)


### init

2nd phase of controller's initialization phase.

```php
public init(): void
```

**Throws:**

Should throw an exception on error.
- [`Exception`](./Exception)


### postInit

3rd phase of controller's initialization phase.

```php
public postInit(): void
```

**Throws:**

Should throw an exception on error.
- [`Exception`](./Exception)


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

[Description for prepareView]

```php
public prepareView(): void
```


### setView

[Description for setView]

```php
public setView(string $view): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |


### getView

[Description for getView]

```php
public getView(): string
```


### getViewParams

[Description for getViewParams]

```php
public getViewParams(): array
```


### render

[Description for render]

```php
public render(): string
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
public config(): \Hubleto\Framework\Interfaces\ConfigManagerInterface
```


### terminal

Shortcut for the terminal service.

```php
public terminal(): \Hubleto\Framework\Interfaces\TerminalInterface
```


### logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Interfaces\LoggerInterface
```


### locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Interfaces\LocaleInterface
```


### renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Interfaces\RendererInterface
```


### translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Interfaces\ModelInterface
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

```php
public translate(string $string, array<string,string> $vars = [], string $contextInner = ''): string
```

**Parameters:**

| Parameter       | Type                     | Description |
|-----------------|--------------------------|-------------|
| `$string`       | **string**               |             |
| `$vars`         | **array<string,string>** |             |
| `$contextInner` | **string**               |             |

