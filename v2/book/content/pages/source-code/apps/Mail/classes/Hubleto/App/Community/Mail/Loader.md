
# \Hubleto\App\Community\Mail\Loader
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/App">App</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ templateVariables
```php
public array $templateVariables
```



## Methods

### ƒ init

Inits the app: adds routes, settings, calendars, event listeners, menu items, .

```php
public init(): void
```

..


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


### ƒ installApp

```php
public installApp(int $round): void
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### ƒ parseEmailsFromString

```php
public parseEmailsFromString(string $emails): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$emails` | **string** |             |


### ƒ getCipherKey

```php
public getCipherKey(): string
```


### ƒ send

```php
public send(int|string $to, int|string $cc, int|string $bcc, string $subject, string $body, string $color = '', int $priority): array
```

#### Parameters

| Parameter   | Type            | Description |
|-------------|-----------------|-------------|
| `$to`       | **int\|string** |             |
| `$cc`       | **int\|string** |             |
| `$bcc`      | **int\|string** |             |
| `$subject`  | **string**      |             |
| `$body`     | **string**      |             |
| `$color`    | **string**      |             |
| `$priority` | **int**         |             |

