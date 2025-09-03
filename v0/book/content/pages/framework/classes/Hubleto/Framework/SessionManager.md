
Default session manager for Hubleto project.

***

* Full name: `\Hubleto\Framework\SessionManager`
* Parent class: [`\Hubleto\Framework\Core`](./Core)
* This class implements:
  [`\Hubleto\Framework\Interfaces\SessionManagerInterface`](./Interfaces/SessionManagerInterface)

## Properties

### salt

```php
private string $salt
```

***

## Methods

### __construct

```php
public __construct(): mixed
```

***

### getSalt

[Description for getSalt]

```php
public getSalt(): string
```

***

### start

```php
public start(bool $persist, array $options = []): void
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$persist` | **bool**  |             |
| `$options` | **array** |             |

***

### stop

```php
public stop(): void
```

***

### set

```php
public set(string $path, mixed $value, string $key = ''): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |
| `$key`    | **string** |             |

***

### get

```php
public get(string $path = '', string $key = ''): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$key`    | **string** |             |

***

### push

```php
public push(string $path, mixed $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |

***

### isset

```php
public isset(string $path): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |

***

### unset

```php
public unset(string $path): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |

***

### clear

```php
public clear(): void
```

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
