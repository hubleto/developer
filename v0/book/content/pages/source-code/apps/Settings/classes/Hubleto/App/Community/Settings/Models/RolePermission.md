
# \Hubleto\App\Community\Settings\Models\RolePermission
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ findPermissionByString

```php
public findPermissionByString(string $permission): array
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$permission` | **string** |             |


### ƒ grantPermissionByString

```php
public grantPermissionByString(int $idRole, string $permission): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |


### ƒ denyPermissionByString

```php
public denyPermissionByString(int $idRole, string $permission): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |


### ƒ grantPermissionById

```php
public grantPermissionById(int $idRole, int $idPermission): void
```

#### Parameters

| Parameter       | Type    | Description |
|-----------------|---------|-------------|
| `$idRole`       | **int** |             |
| `$idPermission` | **int** |             |


### ƒ grantPermissionsLike

```php
public grantPermissionsLike(int $idRole, string $permission): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$idRole`     | **int**    |             |
| `$permission` | **string** |             |


### ƒ grantPermissionsForModel

```php
public grantPermissionsForModel(int $idRole, string $modelPermission, array $permissions): void
```

#### Parameters

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$idRole`          | **int**    |             |
| `$modelPermission` | **string** |             |
| `$permissions`     | **array**  |             |

