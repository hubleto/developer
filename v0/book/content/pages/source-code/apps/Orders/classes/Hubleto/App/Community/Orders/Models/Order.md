
# \Hubleto\App\Community\Orders\Models\Order
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

[Description for describeColumns]

```php
public describeColumns(): array
```


### describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


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


### onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### generatePdf

Generates PDF document from given order and returns ID of generated document

```php
public generatePdf(int $idOrder): int
```

**Parameters:**

| Parameter  | Type    | Description                                  |
|------------|---------|----------------------------------------------|
| `$idOrder` | **int** | Order for which the PDF should be generated. |

**Return Value:**

ID of generated document.


### generateInvoice

Generates invoice for given order.

```php
public generateInvoice(int $idOrder): void
```

**Parameters:**

| Parameter  | Type    | Description |
|------------|---------|-------------|
| `$idOrder` | **int** |             |

