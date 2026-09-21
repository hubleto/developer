
# \Hubleto\App\Community\Invoices\Models\Payment
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


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

[Description for describeColumns]

```php
public describeColumns(): array
```


### ƒ describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
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

