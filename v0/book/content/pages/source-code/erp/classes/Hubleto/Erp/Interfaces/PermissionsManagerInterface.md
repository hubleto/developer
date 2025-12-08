
# \Hubleto\Erp\Interfaces\PermissionsManagerInterface

## Methods

### init

```php
public init(): void
```


### createUserRoleModel

```php
public createUserRoleModel(): null|\Hubleto\Framework\Model
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
public loadPermissions(): array
```


### isAppPermittedForActiveUser

```php
public isAppPermittedForActiveUser(\Hubleto\Framework\Interfaces\AppInterface $app): bool
```

**Parameters:**

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |

