
# \Hubleto\App\Community\Pipeline\Models\Pipeline
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


### relations

`public array $relations`


## Methods

### describeColumns

```php
public describeColumns(): array
```


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### getDefaultPipelineInGroup

```php
public getDefaultPipelineInGroup(string $group): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$group`  | **string** |             |


### buildTableFilterForPipelineSteps

```php
public static buildTableFilterForPipelineSteps(\Hubleto\Erp\Model $model, string $title): array
```

* This method is **static**.
**Parameters:**

| Parameter | Type                   | Description |
|-----------|------------------------|-------------|
| `$model`  | **\Hubleto\Erp\Model** |             |
| `$title`  | **string**             |             |

