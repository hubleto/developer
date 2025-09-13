
Methods to support locale in Hubleto project.

# \Hubleto\Framework\Locale
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/LocaleInterface">\Hubleto\Framework\Interfaces\LocaleInterface</a></td></tr></table>


## Properties

### locale

`private array $locale`


## Methods

### __construct

```php
public __construct(): mixed
```


### getDateShortFormat

[Description for getDateShortFormat]

```php
public getDateShortFormat(): string
```


### getDateLongFormat

[Description for getDateLongFormat]

```php
public getDateLongFormat(): string
```


### getDatetimeFormat

[Description for getDatetimeFormat]

```php
public getDatetimeFormat(): string
```


### getTimeFormat

[Description for getTimeFormat]

```php
public getTimeFormat(bool $addSeconds = true): string
```

**Parameters:**

| Parameter     | Type     | Description |
|---------------|----------|-------------|
| `$addSeconds` | **bool** |             |


### getCurrencySymbol

[Description for getCurrencySymbol]

```php
public getCurrencySymbol(): string
```


### getCurrencyIsoCode

[Description for getCurrencyIsoCode]

```php
public getCurrencyIsoCode(): string
```


### getAll

[Description for getAll]

```php
public getAll(string $keyBy = ""): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$keyBy`  | **string** |             |


### formatCurrency

[Description for formatCurrency]

```php
public formatCurrency(string|float $value, string $symbol = ''): string
```

**Parameters:**

| Parameter | Type              | Description |
|-----------|-------------------|-------------|
| `$value`  | **string\|float** |             |
| `$symbol` | **string**        |             |


### formatDateShort

[Description for formatDateShort]

```php
public formatDateShort(string|int $dateOrTimestamp): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### formatDateLong

[Description for formatDateLong]

```php
public formatDateLong(string|int $dateOrTimestamp): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### formatDatetime

[Description for formatDatetime]

```php
public formatDatetime(string|int $datetimeOrTimestamp): string
```

**Parameters:**

| Parameter              | Type            | Description |
|------------------------|-----------------|-------------|
| `$datetimeOrTimestamp` | **string\|int** |             |


### formatTime

[Description for formatTime]

```php
public formatTime(string|int $timeOrTimestamp, bool $addSeconds = true): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$timeOrTimestamp` | **string\|int** |             |
| `$addSeconds`      | **bool**        |             |


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

