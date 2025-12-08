
# \Hubleto\Erp\Report
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Core">Core</a></td></tr></table>


## Constants

| Constant     | Visibility | Type | Value                                                                  |
|--------------|------------|------|------------------------------------------------------------------------|
| `OPERATIONS` | public     |      | [1 => "=", 2 => "!=", 3 => ">", 4 => "<", 5 => "LIKE", 6 => "BETWEEN"] |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ hubletoApp
```php
public \Hubleto\Framework\Interfaces\AppInterface $hubletoApp
```




<div class="mt-2">&nbsp;</div>
### ☍ modelClass
```php
public string $modelClass
```




<div class="mt-2">&nbsp;</div>
### ☍ returnWith
```php
public array $returnWith
```




<div class="mt-2">&nbsp;</div>
### ☍ groupsBy
```php
public array $groupsBy
```




<div class="mt-2">&nbsp;</div>
### ☍ fields
```php
public array $fields
```




<div class="mt-2">&nbsp;</div>
### ☍ urlSlug
```php
protected string $urlSlug
```




<div class="mt-2">&nbsp;</div>
### ☍ name
```php
protected string $name
```



## Methods

### ƒ getUrlSlug

```php
public getUrlSlug(): string
```


### ƒ getReportConfig

```php
public getReportConfig(): array
```


### ƒ loadData

```php
public loadData(): array
```


### ƒ loadDataDefault

```php
public loadDataDefault(\Hubleto\Framework\Interfaces\ModelInterface $model): array
```

#### Parameters

| Parameter | Type                                             | Description |
|-----------|--------------------------------------------------|-------------|
| `$model`  | **\Hubleto\Framework\Interfaces\ModelInterface** |             |


### ƒ generateRandomColor

```php
public generateRandomColor(): string
```

