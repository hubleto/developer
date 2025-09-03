
# \Hubleto\App\Community\Pipeline\Manager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/Core">Core</a></td></tr></table>


## Properties

### pipelineLoaders

`protected array<string,\Hubleto\App\Community\Pipeline\Pipeline> $pipelineLoaders`


## Methods

### addPipeline

```php
public addPipeline(\Hubleto\Framework\Interfaces\AppInterface $app, string $group, string $pipelineClass): void
```

**Parameters:**

| Parameter        | Type                                           | Description |
|------------------|------------------------------------------------|-------------|
| `$app`           | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$group`         | **string**                                     |             |
| `$pipelineClass` | **string**                                     |             |


### getPipelineLoaderForGroup

```php
public getPipelineLoaderForGroup(string $group): \Hubleto\App\Community\Pipeline\Pipeline
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$group`  | **string** |             |


### getPipeline

```php
public getPipeline(string $pipelineClass): \Hubleto\App\Community\Pipeline\Pipeline
```

**Parameters:**

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$pipelineClass` | **string** |             |

