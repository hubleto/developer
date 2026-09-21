
# \Hubleto\App\Community\Invoices\Models\InvoiceItem
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties

### table

`public string $table`


### lookupSqlValue

`public ?string $lookupSqlValue`


### recordManagerClass

`public string $recordManagerClass`


### relations

`public array $relations`


## Methods

### describeColumns

```php
public describeColumns(): array
```


### recalculatePrices

[Description for recalculatePrices]

```php
public recalculatePrices(int $idItem): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idItem` | **int** |             |


### onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### onAfterUpdate

[Description for onAfterUpdate]

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |

