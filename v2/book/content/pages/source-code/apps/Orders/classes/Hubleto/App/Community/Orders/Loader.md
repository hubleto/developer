
# \Hubleto\App\Community\Orders\Loader
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/App">App</a></td></tr></table>


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


### ƒ getSidebarBadgeNumber

[Description for getSidebarBadgeNumber]

```php
public getSidebarBadgeNumber(): int
```


### ƒ renderSecondSidebar

[Description for renderSecondSidebar]

```php
public renderSecondSidebar(): string
```


### ƒ generateDemoData

[Description for generateDemoData]

```php
public generateDemoData(): void
```


### ƒ search

Implements fulltext search functionality for orders

```php
public search(array $expressions): array
```

#### Parameters

| Parameter      | Type      | Description                                                     |
|----------------|-----------|-----------------------------------------------------------------|
| `$expressions` | **array** | List of expressions to be searched and glued with logical 'or'. |

