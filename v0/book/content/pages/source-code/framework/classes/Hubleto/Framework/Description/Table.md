
# \Hubleto\Framework\Description\Table
<table class='table-default dense'>
<tr><td>Implements</td><td>  `JsonSerializable`</td></tr></table>


## Properties

### ui

`public array $ui`


### permissions

`public array $permissions`


### columns

`public array $columns`


### inputs

`public array $inputs`


## Methods

### jsonSerialize

[Description for jsonSerialize]

```php
public jsonSerialize(): array
```


### toArray

[Description for toArray]

```php
public toArray(): array
```


### show

[Description for show]

```php
public show(array $what): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$what`   | **array** |             |


### hide

[Description for hide]

```php
public hide(array $what): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$what`   | **array** |             |


### showOnlyColumns

[Description for showOnlyColumns]

```php
public showOnlyColumns(array $columnNames): void
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$columnNames` | **array** |             |


### addFilter

[Description for addFilter]

```php
public addFilter(string $filterName, array $filterConfig): mixed
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$filterName`   | **string** |             |
| `$filterConfig` | **array**  |             |

