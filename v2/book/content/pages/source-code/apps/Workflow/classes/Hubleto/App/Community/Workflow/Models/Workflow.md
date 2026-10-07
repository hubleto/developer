
# \Hubleto\App\Community\Workflow\Models\Workflow
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


### ƒ getDefaultWorkflowInGroup

```php
public getDefaultWorkflowInGroup(string $group): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$group`  | **string** |             |


### ƒ applyDefaultWorkflow

```php
public applyDefaultWorkflow(array $record, string $group): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$record` | **array**  |             |
| `$group`  | **string** |             |


### ƒ buildTableFilterForWorkflowSteps

```php
public static buildTableFilterForWorkflowSteps(\Hubleto\Erp\Model $model, string $title): array
```

* This method is **static**.
#### Parameters

| Parameter | Type                   | Description |
|-----------|------------------------|-------------|
| `$model`  | **\Hubleto\Erp\Model** |             |
| `$title`  | **string**             |             |

