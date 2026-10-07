
# \Hubleto\App\Community\Desktop\Loader
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/App">App</a></td></tr></table>


## Constants

| Constant                      | Visibility | Type | Value                 |
|-------------------------------|------------|------|-----------------------|
| `DEFAULT_INSTALLATION_CONFIG` | public     |      | ['sidebarOrder' => 0] |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ canBeDisabled
```php
public bool $canBeDisabled
```




<div class="mt-2">&nbsp;</div>
### ☍ permittedForAllUsers
```php
public bool $permittedForAllUsers
```




<div class="mt-2">&nbsp;</div>
### ☍ appMenu
```php
public array $appMenu
```




<div class="mt-2">&nbsp;</div>
### ☍ sidebar
```php
public \Hubleto\App\Community\Desktop\SidebarManager $sidebar
```




<div class="mt-2">&nbsp;</div>
### ☍ dashboard
```php
public \Hubleto\App\Community\Desktop\DashboardManager $dashboard
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ init

Inits the app: adds routes, settings, calendars, event listeners, menu items, .

```php
public init(): void
```

..


### ƒ getSidebarGroups

[Description for getSidebarGroups]

```php
public getSidebarGroups(): mixed
```


### ƒ getAppsInSidebar

[Description for getAppsInSidebar]

```php
public getAppsInSidebar(): array
```


### ƒ getActivatedApp

[Description for getActivatedApp]

```php
public getActivatedApp(): \Hubleto\Erp\App|null
```

