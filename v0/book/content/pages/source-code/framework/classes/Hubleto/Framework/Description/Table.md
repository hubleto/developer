
# \Hubleto\Framework\Description\Table
<table class='table-default dense'>
<tr><td>Implements</td><td>  `JsonSerializable`</td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ ui
```php
public array $ui
```




<div class="mt-2">&nbsp;</div>
### ☍ permissions
```php
public array $permissions
```




<div class="mt-2">&nbsp;</div>
### ☍ columns
```php
public array $columns
```




<div class="mt-2">&nbsp;</div>
### ☍ inputs
```php
public array $inputs
```



## Methods

### ƒ jsonSerialize

[Description for jsonSerialize]

```php
public jsonSerialize(): array
```


### ƒ toArray

[Description for toArray]

```php
public toArray(): array
```


### ƒ show

[Description for show]

```php
public show(array $what): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$what`   | **array** |             |


### ƒ hide

[Description for hide]

```php
public hide(array $what): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$what`   | **array** |             |


### ƒ showOnlyColumns

[Description for showOnlyColumns]

```php
public showOnlyColumns(array $columnNames): void
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$columnNames` | **array** |             |


### ƒ addColumn

[Description for showOnlyColumns]

```php
public addColumn(string $colName, mixed $column): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$colName` | **string** |             |
| `$column`  | **mixed**  |             |


### ƒ hideColumns

[Description for hideColumns]

```php
public hideColumns(array $columnNames): void
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$columnNames` | **array** |             |


### ƒ addFilter

[Description for addFilter]

```php
public addFilter(string $filterName, array $filterConfig): mixed
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$filterName`   | **string** |             |
| `$filterConfig` | **array**  |             |

