
# \Hubleto\App\Community\Deals\Models\Deal
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant                 | Visibility | Type | Value                                                                                                              |
|--------------------------|------------|------|--------------------------------------------------------------------------------------------------------------------|
| `RESULT_UNKNOWN`         | public     |      | 0                                                                                                                  |
| `RESULT_WON`             | public     |      | 1                                                                                                                  |
| `RESULT_LOST`            | public     |      | 2                                                                                                                  |
| `BUSINESS_TYPE_NEW`      | public     |      | 1                                                                                                                  |
| `BUSINESS_TYPE_EXISTING` | public     |      | 2                                                                                                                  |
| `ENUM_SOURCE_CHANNELS`   | public     |      | [1 => "Advertisement", 2 => "Partner", 3 => "Web", 4 => "Cold call", 5 => "E-mail", 6 => "Refferal", 7 => "Other"] |
| `ENUM_DEAL_RESULTS`      | public     |      | [self::RESULT_UNKNOWN => "Unknown", self::RESULT_WON => "Won", self::RESULT_LOST => "Lost"]                        |
| `ENUM_BUSINESS_TYPES`    | public     |      | [self::BUSINESS_TYPE_NEW => "New", self::BUSINESS_TYPE_EXISTING => "Existing"]                                     |

## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


### lookupUrlDetail

`public ?string $lookupUrlDetail`


### relations

`public array $relations`


## Methods

### describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### describeInput

[Description for describeInput]

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


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


### onBeforeUpdate

[Description for onBeforeUpdate]

```php
public onBeforeUpdate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### generateQuotationPdf

Generates quotation PDF document from given deal and returns ID of generated document

```php
public generateQuotationPdf(int $idDeal): int
```

**Parameters:**

| Parameter | Type    | Description                                 |
|-----------|---------|---------------------------------------------|
| `$idDeal` | **int** | Deal for which the PDF should be generated. |

**Return Value:**

ID of generated document.


### generateInvoice

Generates invoice for given deal.

```php
public generateInvoice(int $idDeal): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idDeal` | **int** |             |

