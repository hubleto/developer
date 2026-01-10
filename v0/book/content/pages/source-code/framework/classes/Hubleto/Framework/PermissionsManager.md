
Default manager for permissions and user access for Hubleto project.

# \Hubleto\Framework\PermissionsManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/PermissionsManagerInterface">\Hubleto\Framework\Interfaces\PermissionsManagerInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ grantAllPermissions
```php
protected bool $grantAllPermissions
```




<div class="mt-2">&nbsp;</div>
### ☍ permissionsData
```php
protected array $permissionsData
```




<div class="mt-2">&nbsp;</div>
### ☍ administratorRoles
```php
public array $administratorRoles
```




<div class="mt-2">&nbsp;</div>
### ☍ administratorTypes
```php
public array $administratorTypes
```




<div class="mt-2">&nbsp;</div>
### ☍ permission
```php
protected string $permission
```



## Methods

### ƒ init

```php
public init(): void
```


### ƒ getPermission

```php
public getPermission(): string
```


### ƒ setPermission

```php
public setPermission(string $permission): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |


### ƒ createUserRoleModel

```php
public createUserRoleModel(): \Hubleto\Framework\Model
```


### ƒ createRolePermissionModel

```php
public createRolePermissionModel(): \Hubleto\Framework\Model
```


### ƒ DANGEROUS__grantAllPermissions

```php
public DANGEROUS__grantAllPermissions(): void
```


### ƒ revokeGrantAllPermissions

```php
public revokeGrantAllPermissions(): void
```


### ƒ loadAdministratorRoles

```php
public loadAdministratorRoles(): array
```


### ƒ loadAdministratorTypes

```php
public loadAdministratorTypes(): array
```


### ƒ expandPermissionGroups

```php
public expandPermissionGroups(): void
```


### ƒ set

```php
public set(string $permission, int $idUserRole, bool $isEnabled): mixed
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |
| `$idUserRole` | **int**    |             |
| `$isEnabled`  | **bool**   |             |


### ƒ hasRole

```php
public hasRole(int|string $role): bool
```

#### Parameters

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$role`   | **int\|string** |             |


### ƒ grantedForRole

```php
public grantedForRole(string $permission, int|string $userRole): bool
```

#### Parameters

| Parameter     | Type            | Description |
|---------------|-----------------|-------------|
| `$permission` | **string**      |             |
| `$userRole`   | **int\|string** |             |


### ƒ granted

```php
public granted(string $permission, array $userRoles = [], int $userType): bool
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |
| `$userRoles`  | **array**  |             |
| `$userType`   | **int**    |             |


### ƒ checkPermission

```php
public checkPermission(): void
```


### ƒ check

```php
public check(string $permission): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |


### ƒ loadPermissions

```php
public loadPermissions(): array<int,array<int,string>>
```


### ƒ isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

#### Parameters

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |


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

