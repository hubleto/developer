
Default manager for permissions and user access for Hubleto project.

# \Hubleto\Framework\PermissionsManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/PermissionsManagerInterface">\Hubleto\Framework\Interfaces\PermissionsManagerInterface</a></td></tr></table>


## Properties

### grantAllPermissions

`protected bool $grantAllPermissions`


### permissionsData

`protected array $permissionsData`


### administratorRoles

`public array $administratorRoles`


### administratorTypes

`public array $administratorTypes`


### permission

`protected string $permission`


## Methods

### init

```php
public init(): void
```


### getPermission

```php
public getPermission(): string
```


### setPermission

```php
public setPermission(string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |


### createUserRoleModel

```php
public createUserRoleModel(): \Hubleto\Framework\Model
```


### createRolePermissionModel

```php
public createRolePermissionModel(): \Hubleto\Framework\Model
```


### DANGEROUS__grantAllPermissions

```php
public DANGEROUS__grantAllPermissions(): void
```


### revokeGrantAllPermissions

```php
public revokeGrantAllPermissions(): void
```


### loadAdministratorRoles

```php
public loadAdministratorRoles(): array
```


### loadAdministratorTypes

```php
public loadAdministratorTypes(): array
```


### expandPermissionGroups

```php
public expandPermissionGroups(): void
```


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


### hasRole

```php
public hasRole(int|string $role): bool
```

**Parameters:**

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$role`   | **int\|string** |             |


### grantedForRole

```php
public grantedForRole(string $permission, int|string $userRole): bool
```

**Parameters:**

| Parameter     | Type            | Description |
|---------------|-----------------|-------------|
| `$permission` | **string**      |             |
| `$userRole`   | **int\|string** |             |


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


### checkPermission

```php
public checkPermission(): void
```


### check

```php
public check(string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |


### loadPermissions

```php
public loadPermissions(): array<int,array<int,string>>
```


### isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

**Parameters:**

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |


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

