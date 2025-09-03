
Default implementation of authentication provider.

***

* Full name: `\Hubleto\Framework\AuthProvider`
* Parent class: [`\Hubleto\Framework\Core`](./Core)
* This class implements:
  `AuthInterface`

## Properties

### loginAttribute

```php
public $loginAttribute
```

***

### passwordAttribute

```php
public $passwordAttribute
```

***

### activeAttribute

```php
public $activeAttribute
```

***

### verifyMethod

```php
public $verifyMethod
```

***

### user

```php
public array $user
```

***

## Methods

### init

```php
public init(): void
```

***

### getUserFromSession

```php
public getUserFromSession(): array
```

***

### updateUserInSession

```php
public updateUserInSession(array $user): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **array** |             |

***

### isUserInSession

```php
public isUserInSession(): bool
```

***

### deleteSession

```php
public deleteSession(): mixed
```

***

### signIn

```php
public signIn(array $user): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **array** |             |

***

### signOut

```php
public signOut(): mixed
```

***

### createUserModel

```php
public createUserModel(): \Hubleto\Framework\Model
```

***

### findUsersByLogin

```php
public findUsersByLogin(string $login): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$login`  | **string** |             |

***

### verifyPassword

```php
public verifyPassword(mixed $password1, mixed $password2): bool
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$password1` | **mixed** |             |
| `$password2` | **mixed** |             |

***

### getActiveUsers

```php
public getActiveUsers(): array
```

***

### auth

```php
public auth(): void
```

***

### getUser

```php
public getUser(): array
```

***

### getUserType

```php
public getUserType(): int
```

***

### getUserRoles

```php
public getUserRoles(): array
```

***

### userHasRole

```php
public userHasRole(int $idRole): bool
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idRole` | **int** |             |

***

### getUserId

```php
public getUserId(): int
```

***

### forgotPassword

```php
public forgotPassword(): void
```

***

### resetPassword

```php
public resetPassword(): void
```

***

### getUserLanguage

```php
public getUserLanguage(): string
```

***

### setUserLanguage

```php
public setUserLanguage(string $language): void
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$language` | **string** |             |

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
