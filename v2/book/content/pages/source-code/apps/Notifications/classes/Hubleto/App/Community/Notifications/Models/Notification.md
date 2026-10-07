
# \Hubleto\App\Community\Notifications\Models\Notification
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
### ☍ categories
```php
private static array $categories
```


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ addCategory

```php
public static addCategory(int $id, string $category): bool
```

* This method is **static**.
#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$id`       | **int**    |             |
| `$category` | **string** |             |


### ƒ getCategories

```php
public static getCategories(): array
```

* This method is **static**.

### ƒ describeColumns

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

