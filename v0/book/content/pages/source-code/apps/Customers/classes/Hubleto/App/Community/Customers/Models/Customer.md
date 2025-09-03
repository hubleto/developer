
# \Hubleto\App\Community\Customers\Models\Customer
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties

### isExtendableByCustomColumns

`public bool $isExtendableByCustomColumns`


### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


### lookupUrlDetail

`public ?string $lookupUrlDetail`


### lookupUrlAdd

`public ?string $lookupUrlAdd`


### relations

`public array $relations`


## Methods

### describeColumns

```php
public describeColumns(): array
```


### indexes

```php
public indexes(array $indexes = []): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


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


### onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### getNewRecordDataFromString

```php
public getNewRecordDataFromString(string $text): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$text`   | **string** |             |

