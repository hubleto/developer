
# \Hubleto\Framework\Interfaces\PermissionsManagerInterface

## Methods

### ƒ init

```php
public init(): void
```


### ƒ createUserRoleModel

```php
public createUserRoleModel(): null|\Hubleto\Framework\Model
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
public loadPermissions(): array
```


### ƒ isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

#### Parameters

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |

