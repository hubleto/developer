
Methods to support locale in Hubleto project.

***

* Full name: `\Hubleto\Framework\Locale`
* Parent class: [`\Hubleto\Framework\Core`](./Core)

## Properties

### locale

```php
private array $locale
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### getDateShortFormat

```php
public getDateShortFormat(): string
```

***

### getDateLongFormat

```php
public getDateLongFormat(): string
```

***

### getDatetimeFormat

```php
public getDatetimeFormat(): string
```

***

### getTimeFormat

```php
public getTimeFormat(bool $addSeconds = true): string
```

**Parameters:**

| Parameter     | Type     | Description |
|---------------|----------|-------------|
| `$addSeconds` | **bool** |             |

***

### getCurrencySymbol

```php
public getCurrencySymbol(): string
```

***

### getCurrencyIsoCode

```php
public getCurrencyIsoCode(): string
```

***

### getAll

```php
public getAll(string $keyBy = ""): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$keyBy`  | **string** |             |

***

### formatCurrency

```php
public formatCurrency(string|float $value, string $symbol = ''): string
```

**Parameters:**

| Parameter | Type              | Description |
|-----------|-------------------|-------------|
| `$value`  | **string\|float** |             |
| `$symbol` | **string**        |             |

***

### formatDateShort

```php
public formatDateShort(string|int $dateOrTimestamp): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |

***

### formatDateLong

```php
public formatDateLong(string|int $dateOrTimestamp): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |

***

### formatDatetime

```php
public formatDatetime(string|int $datetimeOrTimestamp): string
```

**Parameters:**

| Parameter              | Type            | Description |
|------------------------|-----------------|-------------|
| `$datetimeOrTimestamp` | **string\|int** |             |

***

### formatTime

```php
public formatTime(string|int $timeOrTimestamp, bool $addSeconds = true): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$timeOrTimestamp` | **string\|int** |             |
| `$addSeconds`      | **bool**        |             |

***

## Inherited methods

### __construct

```php
public __construct(): mixed
```

***

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

***

### getService

[Description for getService]

```php
public getService(string $service): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |

***

### env

Shortcut for the env service.

```php
public env(): \Hubleto\Framework\Env
```

***

### authProvider

Shortcut for the authentication service.

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
```

***

### db

Shortcut for the database service.

```php
public db(): \Hubleto\Framework\Db
```

***

### appManager

Shortcut for the app manager service.

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```

***

### router

Shortcut for the router service.

```php
public router(): \Hubleto\Framework\Router
```

***

### hookManager

Shortcut for the hook manager service.

```php
public hookManager(): \Hubleto\Framework\HookManager
```

***

### sessionManager

Shortcut for the session manager service.

```php
public sessionManager(): \Hubleto\Framework\SessionManager
```

***

### permissionsManager

Shortcut for the permissions manager service.

```php
public permissionsManager(): \Hubleto\Framework\PermissionsManager
```

***

### cronManager

Shortcut for the cron manager service.

```php
public cronManager(): \Hubleto\Framework\CronManager
```

***

### emailProvider

Shortcut for the email provider service.

```php
public emailProvider(): \Hubleto\Framework\EmailProvider
```

***

### config

Shortcut for the config service.

```php
public config(): \Hubleto\Framework\Config
```

***

### logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Logger
```

***

### locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Locale
```

***

### renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Renderer
```

***

### translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```

***

### getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Models\Model
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |

***

### getController

[Description for getController]

```php
public getController(string $controller): \Hubleto\Framework\Controller
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |

***

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

***
