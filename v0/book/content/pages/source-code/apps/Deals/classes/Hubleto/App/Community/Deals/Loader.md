
# \Hubleto\App\Community\Deals\Loader
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/App">App</a></td></tr></table>


## Properties

### hasCustomSettings

`public bool $hasCustomSettings`


## Methods

### init

Inits the app: adds routes, settings, calendars, hooks, menu items, .

```php
public init(): void
```

..


### installTables

```php
public installTables(int $round): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### search

Implements fulltext search functionality for tasks

```php
public search(array $expressions): array
```

**Parameters:**

| Parameter      | Type      | Description                                                     |
|----------------|-----------|-----------------------------------------------------------------|
| `$expressions` | **array** | List of expressions to be searched and glued with logical 'or'. |

