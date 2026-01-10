
Default implementation of Hubleto controller.

# \Hubleto\Framework\Controllers\Components\Inputs\Tags\Data
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Controller">\Hubleto\Framework\Controller</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ hideDefaultDesktop
```php
public bool $hideDefaultDesktop
```

If set to TRUE, the default desktop will not be added to the rendered content



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ renderJson

If the controller shall only return JSON, this method must be overriden.

```php
public renderJson(): array
```

#### Return Value

Array to be returned as a JSON.


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
- [`Exception`](../../../../Exception)


### ƒ init

2nd phase of controller's initialization phase.

```php
public init(): void
```

#### Throws

Should throw an exception on error.
- [`Exception`](../../../../Exception)


### ƒ postInit

3rd phase of controller's initialization phase.

```php
public postInit(): void
```

#### Throws

Should throw an exception on error.
- [`Exception`](../../../../Exception)


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

