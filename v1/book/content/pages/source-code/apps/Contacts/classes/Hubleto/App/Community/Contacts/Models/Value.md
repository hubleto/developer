
# \Hubleto\App\Community\Contacts\Models\Value
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


### ƒ getTypeFromValue

```php
public getTypeFromValue(string $value): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$value`  | **string** |             |


### ƒ onBeforeCreate

```php
public onBeforeCreate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ onBeforeUpdate

```php
public onBeforeUpdate(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |

