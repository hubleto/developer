
# \Hubleto\App\Community\Products\Loader
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/App">App</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ productTypes
```php
public array $productTypes
```



## Methods

### ƒ init

Inits the app: adds routes, settings, calendars, event listeners, menu items, .

```php
public init(): void
```

..


### ƒ installApp

[Description for upgradeSchema]

```php
public installApp(int $round): void
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### ƒ generateDemoData

[Description for generateDemoData]

```php
public generateDemoData(): void
```


### ƒ search

Implements fulltext search functionality for the contacts

```php
public search(array $expressions): array
```

#### Parameters

| Parameter      | Type      | Description                                                     |
|----------------|-----------|-----------------------------------------------------------------|
| `$expressions` | **array** | List of expressions to be searched and glued with logical 'or'. |

