
# \Hubleto\App\Community\Customers\Models\Customer
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ isExtendableByCustomColumns
```php
public bool $isExtendableByCustomColumns
```




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
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlDetail
```php
public ?string $lookupUrlDetail
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlAdd
```php
public ?string $lookupUrlAdd
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


### ƒ indexes

```php
public indexes(array $indexes = []): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### ƒ describeInput

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### ƒ describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ getRelationsIncludedInLoadTableData

```php
public getRelationsIncludedInLoadTableData(): array|null
```


### ƒ getMaxReadLevelForLoadTableData

```php
public getMaxReadLevelForLoadTableData(): int
```


### ƒ onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### ƒ getNewRecordDataFromString

```php
public getNewRecordDataFromString(string $text): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$text`   | **string** |             |


### ƒ getAiAssistantContext

[Description for getAiAssistantContext]

```php
public getAiAssistantContext(int $sensitivityLevel, int $recordId): array
```

#### Parameters

| Parameter           | Type    | Description |
|---------------------|---------|-------------|
| `$sensitivityLevel` | **int** |             |
| `$recordId`         | **int** |             |

