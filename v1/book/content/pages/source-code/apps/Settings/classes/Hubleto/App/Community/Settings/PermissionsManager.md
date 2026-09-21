
Class managing Hubleto permissions.

# \Hubleto\App\Community\Settings\PermissionsManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/PermissionsManager">PermissionsManager</a></td></tr></table>


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


### ƒ createUserRoleModel

```php
public createUserRoleModel(): \Hubleto\Framework\Model
```


### ƒ createRolePermissionModel

```php
public createRolePermissionModel(): \Hubleto\Framework\Model
```


### ƒ loadAdministratorRoles

```php
public loadAdministratorRoles(): array
```


### ƒ loadAdministratorTypes

```php
public loadAdministratorTypes(): array
```


### ƒ loadPermissions

```php
public loadPermissions(): array<int,array<int,string>>
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


### ƒ DANGEROUS__grantAllPermissions

```php
public DANGEROUS__grantAllPermissions(): void
```


### ƒ revokeGrantAllPermissions

```php
public revokeGrantAllPermissions(): void
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


### ƒ isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

#### Parameters

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |

