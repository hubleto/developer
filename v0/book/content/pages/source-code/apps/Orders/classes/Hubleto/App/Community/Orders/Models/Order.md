
# \Hubleto\App\Community\Orders\Models\Order
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant         | Visibility | Type | Value |
|------------------|------------|------|-------|
| `PURCHASE_ORDER` | public     |      | 1     |
| `SALES_ORDER`    | public     |      | 2     |

## Properties


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


### ƒ getMaxReadLevelForLoadFormData

[Description for getMaxReadLevelForLoadFormData]

```php
public getMaxReadLevelForLoadFormData(): int
```


### ƒ getLookupDetails

[Description for getLookupDetails]

```php
public getLookupDetails(array $dataRaw): string
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


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


### ƒ onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### ƒ generateInvoice

Generates invoice for given order.

```php
public generateInvoice(int $idOrder): void
```

#### Parameters

| Parameter  | Type    | Description |
|------------|---------|-------------|
| `$idOrder` | **int** |             |


### ƒ getDocumentDefaultTemplate

[Description for getDocumentDefaultTemplate]

```php
public getDocumentDefaultTemplate(array $vars = []): string
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$vars`   | **array** |             |

