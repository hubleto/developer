
Class managing Hubleto permissions.

# \Hubleto\App\Community\Settings\PermissionsManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/PermissionsManager">PermissionsManager</a></td></tr></table>


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


### createUserRoleModel

```php
public createUserRoleModel(): \Hubleto\Framework\Model
```


### createRolePermissionModel

```php
public createRolePermissionModel(): \Hubleto\Framework\Model
```


### loadAdministratorRoles

```php
public loadAdministratorRoles(): array
```


### loadAdministratorTypes

```php
public loadAdministratorTypes(): array
```


### loadPermissions

```php
public loadPermissions(): array<int,array<int,string>>
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


### DANGEROUS__grantAllPermissions

```php
public DANGEROUS__grantAllPermissions(): void
```


### revokeGrantAllPermissions

```php
public revokeGrantAllPermissions(): void
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


### isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

**Parameters:**

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |

