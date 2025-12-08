
# \Hubleto\App\Community\Invoices\Models\Invoice
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant           | Visibility | Type | Value                                                                                     |
|--------------------|------------|------|-------------------------------------------------------------------------------------------|
| `TYPE_PROFORMA`    | public     |      | 1                                                                                         |
| `TYPE_ADVANCE`     | public     |      | 2                                                                                         |
| `TYPE_STANDARD`    | public     |      | 3                                                                                         |
| `TYPE_CREDIT_NOTE` | public     |      | 4                                                                                         |
| `TYPE_DEBIT_NOTE`  | public     |      | 5                                                                                         |
| `TYPES`            | public     |      | [1 => 'Proforma', 2 => 'Advance', 3 => 'Standard', 4 => 'Credit Note', 5 => 'Debit Note'] |

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


### recalculateTotalsForInvoice

[Description for recalculateTotalsForInvoice]

```php
public recalculateTotalsForInvoice(int $idInvoice): void
```

**Parameters:**

| Parameter    | Type    | Description |
|--------------|---------|-------------|
| `$idInvoice` | **int** |             |


### onBeforeCreate

[Description for onBeforeCreate]

```php
public onBeforeCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


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


### onAfterLoadRecord

[Description for onAfterLoadRecord]

```php
public onAfterLoadRecord(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### generateInvoice

Generates invoice and return ID of generated invoice

```php
public generateInvoice(\Hubleto\App\Community\Invoices\Models\InvoiceInterface $invoice): int
```

**Parameters:**

| Parameter  | Type                                                        | Description |
|------------|-------------------------------------------------------------|-------------|
| `$invoice` | **\Hubleto\App\Community\Invoices\Models\InvoiceInterface** |             |

**Return Value:**

ID of generated invoice


### generatePdf

Generates PDF document from given invoice and returns ID of generated document

```php
public generatePdf(int $idInvoice): int
```

**Parameters:**

| Parameter    | Type    | Description                                    |
|--------------|---------|------------------------------------------------|
| `$idInvoice` | **int** | Invoice for which the PDF should be generated. |

**Return Value:**

ID of generated document.

