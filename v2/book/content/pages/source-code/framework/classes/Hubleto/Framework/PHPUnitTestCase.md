
# \Hubleto\Framework\PHPUnitTestCase
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../PHPUnit/Framework/TestCase">TestCase</a></td></tr></table>


## Methods

### ƒ _app

```php
public _app(): \Hubleto\Framework\Core
```


### ƒ _setTerminalColor

```php
protected _setTerminalColor(string $color): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$color`  | **string** |             |


### ƒ _echo

```php
protected _echo(string $message, string $color = 'yellow'): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |
| `$color`   | **string** |             |


### ƒ _warning

```php
protected _warning(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ _info

```php
protected _info(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ _error

```php
protected _error(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ _replaceVarsInRoute

```php
protected _replaceVarsInRoute(string $route, array $vars = []): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |
| `$vars`   | **array**  |             |


### ƒ _testRouteDoesNotContainError

```php
protected _testRouteDoesNotContainError(string $route, array $vars = []): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |
| `$vars`   | **array**  |             |


### ƒ _callApi

[Description for _callApi]

```php
protected _callApi(string $route, array $vars = []): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |
| `$vars`   | **array**  |             |


### ƒ _callView

[Description for _callView]

```php
protected _callView(string $route, array $vars = []): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |
| `$vars`   | **array**  |             |

