
Core implementation of model.

# \Hubleto\Erp\Model
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Model">Model</a></td></tr></table>


## Methods

### onBeforeCreate

onBeforeCreate

```php
public onBeforeCreate(array<string,mixed> $record): array<string,mixed>
```

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |


### onBeforeUpdate

onBeforeUpdate

```php
public onBeforeUpdate(array<string,mixed> $record): array<string,mixed>
```

**Parameters:**

| Parameter | Type                    | Description |
|-----------|-------------------------|-------------|
| `$record` | **array<string,mixed>** |             |


### onAfterCreate

onAfterCreate

```php
public onAfterCreate(array<string,mixed> $savedRecord): array<string,mixed>
```

**Parameters:**

| Parameter      | Type                    | Description |
|----------------|-------------------------|-------------|
| `$savedRecord` | **array<string,mixed>** |             |


### onAfterUpdate

onAfterUpdate

```php
public onAfterUpdate(array<string,mixed> $originalRecord, array<string,mixed> $savedRecord): array<string,mixed>
```

**Parameters:**

| Parameter         | Type                    | Description |
|-------------------|-------------------------|-------------|
| `$originalRecord` | **array<string,mixed>** |             |
| `$savedRecord`    | **array<string,mixed>** |             |


### onBeforeDelete

onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### onAfterDelete

onAfterDelete

```php
public onAfterDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

