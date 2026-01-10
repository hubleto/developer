
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


<div class="mt-2">&nbsp;</div>
### ☍ gtp
```php
protected string $gtp
```

Shorthand for "global table prefix"




<div class="mt-2">&nbsp;</div>
### ☍ params
```php
public array $params
```

DEPRECATED Array of parameters (arguments) passed to the controller




<div class="mt-2">&nbsp;</div>
### ☍ permissionsByUserRole
```php
public static array $permissionsByUserRole
```

TRUE/FALSE array with permissions for the user role


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ requiresAuthenticatedUser
```php
public bool $requiresAuthenticatedUser
```

If set to FALSE, the rendered content of controller is available to public




<div class="mt-2">&nbsp;</div>
### ☍ permittedForAllUsers
```php
public bool $permittedForAllUsers
```

If set to TRUE, the controller's permissions is not checked.




<div class="mt-2">&nbsp;</div>
### ☍ hideDefaultDesktop
```php
public bool $hideDefaultDesktop
```

If set to TRUE, the default desktop will not be added to the rendered content




<div class="mt-2">&nbsp;</div>
### ☍ cliSAPIEnabled
```php
public static bool $cliSAPIEnabled
```

If set to FALSE, the controller will not be rendered in CLI


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ webSAPIEnabled
```php
public static bool $webSAPIEnabled
```

If set to FALSE, the controller will not be rendered in WEB


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ dictionary
```php
public array $dictionary
```




<div class="mt-2">&nbsp;</div>
### ☍ viewParams
```php
protected array $viewParams
```




<div class="mt-2">&nbsp;</div>
### ☍ name
```php
public string $name
```




<div class="mt-2">&nbsp;</div>
### ☍ shortName
```php
public string $shortName
```




<div class="mt-2">&nbsp;</div>
### ☍ fullName
```php
public string $fullName
```




<div class="mt-2">&nbsp;</div>
### ☍ permission
```php
public string $permission
```




<div class="mt-2">&nbsp;</div>
### ☍ view
```php
public string $view
```




<div class="mt-2">&nbsp;</div>
### ☍ returnType
```php
public int $returnType
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ validateInputs

Validates inputs used for the TWIG template.

```php
public validateInputs(): bool
```

return bool True if inputs are valid, otherwise false.


### ƒ preInit

1st phase of controller's initialization phase.

```php
public preInit(): void
```

#### Throws

Should throw an exception on error.
- [`Exception`](./Exception)


### ƒ init

2nd phase of controller's initialization phase.

```php
public init(): void
```

#### Throws

Should throw an exception on error.
- [`Exception`](./Exception)


### ƒ postInit

3rd phase of controller's initialization phase.

```php
public postInit(): void
```

#### Throws

Should throw an exception on error.
- [`Exception`](./Exception)


### ƒ run

```php
public run(): mixed
```


### ƒ renderString

```php
public renderString(): string
```


### ƒ renderJson

If the controller shall only return JSON, this method must be overriden.

```php
public renderJson(): array
```

#### Return Value

Array to be returned as a JSON.


### ƒ prepareViewParams

If the controller shall return the HTML of the view, this method must be overriden.

```php
public prepareViewParams(): array
```

#### Return Value

View to be used to render the HTML.


### ƒ prepareView

[Description for prepareView]

```php
public prepareView(): void
```


### ƒ setView

[Description for setView]

```php
public setView(string $view): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |


### ƒ getView

[Description for getView]

```php
public getView(): string
```


### ƒ getViewParams

[Description for getViewParams]

```php
public getViewParams(): array
```


### ƒ render

[Description for render]

```php
public render(): string
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

