
# \Hubleto\App\Community\Leads\Models\Lead
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant                    | Visibility | Type | Value |
|-----------------------------|------------|------|-------|
| `STATUS_NO_INTERACTION_YET` | public     |      | 0     |
| `STATUS_CONTACTED`          | public     |      | 1     |
| `STATUS_IN_PROGRESS`        | public     |      | 2     |
| `STATUS_CLOSED`             | public     |      | 3     |
| `STATUS_CONVERTED_TO_DEAL`  | public     |      | 20    |

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


### ƒ checkOwnership

[Description for checkOwnership]

```php
public checkOwnership(array $record): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ getRelationsIncludedInLoadTableData

[Description for getRelationsIncludedInLoadTableData]

```php
public getRelationsIncludedInLoadTableData(): array|null
```


### ƒ getMaxReadLevelForLoadTableData

[Description for getMaxReadLevelForLoadTableData]

```php
public getMaxReadLevelForLoadTableData(): int
```


### ƒ getMaxReadLevelForLoadFormData

[Description for getMaxReadLevelForLoadFormData]

```php
public getMaxReadLevelForLoadFormData(): int
```


### ƒ onBeforeCreate

[Description for onBeforeCreate]

```php
public onBeforeCreate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onBeforeUpdate

[Description for onBeforeUpdate]

```php
public onBeforeUpdate(array $record): array
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

