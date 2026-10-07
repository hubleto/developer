
# \Hubleto\App\Community\Desktop\SidebarManager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Constants

| Constant         | Visibility | Type | Value       |
|------------------|------------|------|-------------|
| `ITEM_LINK`      | public     |      | 'link'      |
| `ITEM_DIVIDER`   | public     |      | 'divider'   |
| `ITEM_HEADING_1` | public     |      | 'heading_1' |
| `ITEM_HEADING_2` | public     |      | 'heading_2' |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ items
```php
public array<int,array<string,bool|string>> $items
```



## Methods

### ƒ addItem

```php
public addItem(string $type, string $url, string $title, string $icon, bool $highlighted = false): void
```

#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$type`        | **string** |             |
| `$url`         | **string** |             |
| `$title`       | **string** |             |
| `$icon`        | **string** |             |
| `$highlighted` | **bool**   |             |


### ƒ addLink

```php
public addLink(string $url, string $title, string $icon, bool $highlighted = false): void
```

#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$url`         | **string** |             |
| `$title`       | **string** |             |
| `$icon`        | **string** |             |
| `$highlighted` | **bool**   |             |


### ƒ addDivider

```php
public addDivider(): void
```


### ƒ addHeading1

```php
public addHeading1(string $title): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$title`  | **string** |             |


### ƒ addHeading2

```php
public addHeading2(string $title): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$title`  | **string** |             |


### ƒ getItems

```php
public getItems(): array
```

