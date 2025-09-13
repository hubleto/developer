
# \Hubleto\Erp\Report
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Core">Core</a></td></tr></table>


## Constants

| Constant     | Visibility | Type | Value                                                                  |
|--------------|------------|------|------------------------------------------------------------------------|
| `OPERATIONS` | public     |      | [1 => "=", 2 => "!=", 3 => ">", 4 => "<", 5 => "LIKE", 6 => "BETWEEN"] |

## Properties

### hubletoApp

`public \Hubleto\Framework\Interfaces\AppInterface $hubletoApp`


### modelClass

`public string $modelClass`


### returnWith

`public array $returnWith`


### groupsBy

`public array $groupsBy`


### fields

`public array $fields`


### urlSlug

`protected string $urlSlug`


### name

`protected string $name`


## Methods

### getUrlSlug

```php
public getUrlSlug(): string
```


### getReportConfig

```php
public getReportConfig(): array
```


### loadData

```php
public loadData(): array
```


### loadDataDefault

```php
public loadDataDefault(\Hubleto\Framework\Interfaces\ModelInterface $model): array
```

**Parameters:**

| Parameter | Type                                             | Description |
|-----------|--------------------------------------------------|-------------|
| `$model`  | **\Hubleto\Framework\Interfaces\ModelInterface** |             |


### generateRandomColor

```php
public generateRandomColor(): string
```

