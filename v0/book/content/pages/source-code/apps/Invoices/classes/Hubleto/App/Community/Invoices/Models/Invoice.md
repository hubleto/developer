
# \Hubleto\App\Community\Invoices\Models\Invoice
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant           | Visibility | Type | Value                                                                                                                                                                                   |
|--------------------|------------|------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `TYPE_PROFORMA`    | public     |      | 1                                                                                                                                                                                       |
| `TYPE_ADVANCE`     | public     |      | 2                                                                                                                                                                                       |
| `TYPE_STANDARD`    | public     |      | 3                                                                                                                                                                                       |
| `TYPE_CREDIT_NOTE` | public     |      | 4                                                                                                                                                                                       |
| `TYPE_DEBIT_NOTE`  | public     |      | 5                                                                                                                                                                                       |
| `TYPES`            | public     |      | [self::TYPE_PROFORMA => 'Proforma', self::TYPE_ADVANCE => 'Advance', self::TYPE_STANDARD => 'Standard', self::TYPE_CREDIT_NOTE => 'Credit Note', self::TYPE_DEBIT_NOTE => 'Debit Note'] |
| `INBOUND_INVOICE`  | public     |      | 1                                                                                                                                                                                       |
| `OUTBOUND_INVOICE` | public     |      | 2                                                                                                                                                                                       |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlAdd
```php
public ?string $lookupUrlAdd
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlDetail
```php
public ?string $lookupUrlDetail
```




<div class="mt-2">&nbsp;</div>
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### ƒ describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### ƒ getRelationsIncludedInLoadTableData

```php
public getRelationsIncludedInLoadTableData(): array|null
```


### ƒ getMaxReadLevelForLoadTableData

```php
public getMaxReadLevelForLoadTableData(): int
```


### ƒ recalculateTotalsForInvoice

[Description for recalculateTotalsForInvoice]

```php
public recalculateTotalsForInvoice(int $idInvoice): void
```

#### Parameters

| Parameter    | Type    | Description |
|--------------|---------|-------------|
| `$idInvoice` | **int** |             |


### ƒ onBeforeCreate

[Description for onBeforeCreate]

```php
public onBeforeCreate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### ƒ onAfterUpdate

[Description for onAfterUpdate]

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### ƒ onAfterLoadRecord

[Description for onAfterLoadRecord]

```php
public onAfterLoadRecord(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ generateInvoice

Generates invoice and return ID of generated invoice

```php
public generateInvoice(\Hubleto\App\Community\Invoices\Models\InvoiceInterface $invoice): int
```

#### Parameters

| Parameter  | Type                                                        | Description |
|------------|-------------------------------------------------------------|-------------|
| `$invoice` | **\Hubleto\App\Community\Invoices\Models\InvoiceInterface** |             |

#### Return Value

ID of generated invoice


### ƒ getDocumentPreviewVars

[Description for getDocumentPreviewVars]

```php
public getDocumentPreviewVars(int $idInvoice, mixed $relations = []): array
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$idInvoice` | **int**   |             |
| `$relations` | **mixed** |             |

