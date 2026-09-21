
# \Hubleto\App\Community\Contacts\Models\Contact
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
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ describeForm

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


### ƒ onBeforeCreate

```php
public onBeforeCreate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |

