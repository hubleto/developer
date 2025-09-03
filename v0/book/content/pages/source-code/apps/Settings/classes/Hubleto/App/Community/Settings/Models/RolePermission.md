
# \Hubleto\App\Community\Settings\Models\RolePermission
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### relations

`public array $relations`


## Methods

### describeColumns

```php
public describeColumns(): array
```


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### findPermissionByString

```php
public findPermissionByString(string $permission): array
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |


### grantPermissionByString

```php
public grantPermissionByString(int $idRole, string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |


### denyPermissionByString

```php
public denyPermissionByString(int $idRole, string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |


### grantPermissionById

```php
public grantPermissionById(int $idRole, int $idPermission): void
```

**Parameters:**

| Parameter       | Type    | Description |
|-----------------|---------|-------------|
| `$idRole`       | **int** |             |
| `$idPermission` | **int** |             |


### grantPermissionsLike

```php
public grantPermissionsLike(int $idRole, string $permission): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |


### grantPermissionsForModel

```php
public grantPermissionsForModel(int $idRole, string $modelPermission, array $permissions): void
```

**Parameters:**

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$idRole`          | **int**    |             |
| `$modelPermission` | **string** |             |
| `$permissions`     | **array**  |             |

