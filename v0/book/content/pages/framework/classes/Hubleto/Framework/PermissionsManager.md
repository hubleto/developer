
Default manager for permissions and user access for Hubleto project.

***

* Full name: `\Hubleto\Framework\PermissionsManager`
* Parent class: [`\Hubleto\Framework\Core`](./Core)
* This class implements:
  [`\Hubleto\Framework\Interfaces\PermissionsManagerInterface`](./Interfaces/PermissionsManagerInterface)

## Properties

### grantAllPermissions

```php
protected bool $grantAllPermissions
```

***

### permissionsData

```php
protected array $permissionsData
```

***

### administratorRoles

```php
public array $administratorRoles
```

***

### administratorTypes

```php
public array $administratorTypes
```

***

### permission

```php
protected string $permission
```

***

## Methods

### init

```php
public init(): void
```

***

### getPermission

```php
public getPermission(): string
```

***

### setPermission

```php
public setPermission(string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |

***

### createUserRoleModel

```php
public createUserRoleModel(): \Hubleto\Framework\Model
```

***

### createRolePermissionModel

```php
public createRolePermissionModel(): \Hubleto\Framework\Model
```

***

### DANGEROUS__grantAllPermissions

```php
public DANGEROUS__grantAllPermissions(): void
```

***

### revokeGrantAllPermissions

```php
public revokeGrantAllPermissions(): void
```

***

### loadAdministratorRoles

```php
public loadAdministratorRoles(): array
```

***

### loadAdministratorTypes

```php
public loadAdministratorTypes(): array
```

***

### expandPermissionGroups

```php
public expandPermissionGroups(): void
```

***

### set

```php
public set(string $permission, int $idUserRole, bool $isEnabled): mixed
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |
| `$idUserRole` | **int**    |             |
| `$isEnabled`  | **bool**   |             |

***

### hasRole

```php
public hasRole(int|string $role): bool
```

**Parameters:**

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$role`   | **int\|string** |             |

***

### grantedForRole

```php
public grantedForRole(string $permission, int|string $userRole): bool
```

**Parameters:**

| Parameter     | Type            | Description |
|---------------|-----------------|-------------|
| `$permission` | **string**      |             |
| `$userRole`   | **int\|string** |             |

***

### granted

```php
public granted(string $permission, array $userRoles = [], int $userType): bool
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |
| `$userRoles`  | **array**  |             |
| `$userType`   | **int**    |             |

***

### checkPermission

```php
public checkPermission(): void
```

***

### check

```php
public check(string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |

***

### loadPermissions

```php
public loadPermissions(): array<int,array<int,string>>
```

***

### isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

**Parameters:**

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |

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
