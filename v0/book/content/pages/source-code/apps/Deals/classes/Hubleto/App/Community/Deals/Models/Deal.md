
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
| `ENUM_SOURCE_CHANNELS`   | public     |      | [1 => "Advertisement", 2 => "Partner", 3 => "Web", 4 => "Cold call", 5 => "E-mail", 6 => "Referral", 7 => "Other"] |
| `ENUM_DEAL_RESULTS`      | public     |      | [self::RESULT_UNKNOWN => "Unknown", self::RESULT_WON => "Won", self::RESULT_LOST => "Lost"]                        |
| `ENUM_BUSINESS_TYPES`    | public     |      | [self::BUSINESS_TYPE_NEW => "New", self::BUSINESS_TYPE_EXISTING => "Existing"]                                     |

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


### ƒ describeInput

[Description for describeInput]

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


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


### ƒ getLookupDetails

[Description for getLookupDetails]

```php
public getLookupDetails(array $dataRaw): string
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |


### ƒ getMaxReadLevelForLoadFormData

[Description for getMaxReadLevelForLoadFormData]

```php
public getMaxReadLevelForLoadFormData(): int
```


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


### ƒ onBeforeUpdate

[Description for onBeforeUpdate]

```php
public onBeforeUpdate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ getPreviewVars

[Description for getPreviewVars]

```php
public getPreviewVars(int $idDeal): array
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idDeal` | **int** |             |


### ƒ getDocumentDefaultTemplate

[Description for getDocumentDefaultTemplate]

```php
public getDocumentDefaultTemplate(array $vars = []): string
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$vars`   | **array** |             |

