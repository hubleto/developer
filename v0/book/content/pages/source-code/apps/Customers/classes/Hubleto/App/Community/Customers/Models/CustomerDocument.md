
# \Hubleto\App\Community\Customers\Models\CustomerDocument
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


### describeInput

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### onBeforeDelete

```php
public onBeforeDelete(int $id): int
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

