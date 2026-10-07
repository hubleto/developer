
# \Hubleto\App\Community\Workflow\Manager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ workflowLoaders
```php
protected array<string,\Hubleto\App\Community\Workflow\Workflow> $workflowLoaders
```



## Methods

### ƒ addWorkflowGroup

```php
public addWorkflowGroup(\Hubleto\Framework\Interfaces\AppInterface $app, string $group, string $workflowClass): void
```

#### Parameters

| Parameter        | Type                                           | Description |
|------------------|------------------------------------------------|-------------|
| `$app`           | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$group`         | **string**                                     |             |
| `$workflowClass` | **string**                                     |             |


### ƒ getWorkflowLoaderForGroup

```php
public getWorkflowLoaderForGroup(string $group): \Hubleto\App\Community\Workflow\Workflow
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$group`  | **string** |             |


### ƒ getWorkflow

```php
public getWorkflow(string $workflowClass): \Hubleto\App\Community\Workflow\Workflow
```

#### Parameters

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$workflowClass` | **string** |             |

