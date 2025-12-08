
Core implementation of model.

# \Hubleto\Erp\Model
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Model">Model</a></td></tr></table>


## Constants

| Constant                          | Visibility | Type | Value                                                                                      |
|-----------------------------------|------------|------|--------------------------------------------------------------------------------------------|
| `COLUMN_ID_CUSTOMER_DEFAULT_ICON` | public     |      | 'fas fa-address-card bg-yellow-50 rounded text-yellow-600 p-2 mr-2 w-10 text-center block' |
| `COLUMN_CONTACT_DEFAULT_ICON`     | public     |      | 'fas fa-id-badge bg-yellow-50 rounded text-yellow-600 p-2 mr-2 w-10 text-center block'     |
| `COLUMN_IDENTIFIER_DEFUALT_ICON`  | public     |      | 'fas fa-pen bg-blue-50 rounded text-blue-600 p-2 mr-2 w-10 text-center block'              |
| `COLUMN_NAME_DEFAULT_ICON`        | public     |      | 'fas fa-a bg-sky-50 rounded text-sky-600 p-2 mr-2 w-10 text-center block'                  |
| `COLUMN_ADDRESS_DEFAULT_ICON`     | public     |      | 'fas fa-location-dot bg-green-50 rounded text-green-600 p-2 mr-2 w-10 text-center block'   |
| `COLUMN_COLOR_DEFAULT_ICON`       | public     |      | 'fas fa-palette bg-violet-50 rounded text-violet-600 p-2 mr-2 w-10 text-center block'      |

## Methods

### ƒ onBeforeCreate

onBeforeCreate

```php
public onBeforeCreate(array<string,mixed> $record): array<string,mixed>
```

#### Parameters

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |


### ƒ onBeforeUpdate

onBeforeUpdate

```php
public onBeforeUpdate(array<string,mixed> $record): array<string,mixed>
```

#### Parameters

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |


### ƒ onAfterCreate

onAfterCreate

```php
public onAfterCreate(array<string,mixed> $savedRecord): array<string,mixed>
```

#### Parameters

| Parameter      | Type                    | Description |
|----------------|-------------------------|-------------|
| `$savedRecord` | **array<string,mixed>** |             |


### ƒ onAfterUpdate

onAfterUpdate

```php
public onAfterUpdate(array<string,mixed> $originalRecord, array<string,mixed> $savedRecord): array<string,mixed>
```

#### Parameters

| Parameter         | Type                    | Description |
|-------------------|-------------------------|-------------|
| `$originalRecord` | **array<string,mixed>** |             |
| `$savedRecord`    | **array<string,mixed>** |             |


### ƒ onBeforeDelete

onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ onAfterDelete

onAfterDelete

```php
public onAfterDelete(int $id): int
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

