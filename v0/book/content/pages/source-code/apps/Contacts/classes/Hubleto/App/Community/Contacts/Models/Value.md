
# \Hubleto\App\Community\Contacts\Models\Value
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


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


### getTypeFromValue

```php
public getTypeFromValue(string $value): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$value`  | **string** |             |


### onBeforeCreate

```php
public onBeforeCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onBeforeUpdate

```php
public onBeforeUpdate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |

