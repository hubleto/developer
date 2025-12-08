
Methods to support locale in Hubleto project.

# \Hubleto\Framework\Locale
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/LocaleInterface">\Hubleto\Framework\Interfaces\LocaleInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ locale
```php
private array $locale
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ getTimezones

```php
public getTimezones(): array
```


### ƒ getTimezone

[Description for getTimezone]

```php
public getTimezone(): string
```


### ƒ getDateShortFormat

[Description for getDateShortFormat]

```php
public getDateShortFormat(): string
```


### ƒ getDateLongFormat

[Description for getDateLongFormat]

```php
public getDateLongFormat(): string
```


### ƒ getDatetimeFormat

[Description for getDatetimeFormat]

```php
public getDatetimeFormat(): string
```


### ƒ getTimeFormat

[Description for getTimeFormat]

```php
public getTimeFormat(bool $addSeconds = true): string
```

#### Parameters

| Parameter     | Type     | Description |
|---------------|----------|-------------|
| `$addSeconds` | **bool** |             |


### ƒ getCurrencySymbol

[Description for getCurrencySymbol]

```php
public getCurrencySymbol(): string
```


### ƒ getCurrencyIsoCode

[Description for getCurrencyIsoCode]

```php
public getCurrencyIsoCode(): string
```


### ƒ getAll

[Description for getAll]

```php
public getAll(string $keyBy = ""): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$keyBy`  | **string** |             |


### ƒ formatCurrency

[Description for formatCurrency]

```php
public formatCurrency(string|float $value, string $symbol = ''): string
```

#### Parameters

| Parameter | Type              | Description |
|-----------|-------------------|-------------|
| `$value`  | **string\|float** |             |
| `$symbol` | **string**        |             |


### ƒ formatDateShort

[Description for formatDateShort]

```php
public formatDateShort(string|int $dateOrTimestamp): string
```

#### Parameters

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### ƒ formatDateLong

[Description for formatDateLong]

```php
public formatDateLong(string|int $dateOrTimestamp): string
```

#### Parameters

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### ƒ formatDatetime

[Description for formatDatetime]

```php
public formatDatetime(string|int $datetimeOrTimestamp): string
```

#### Parameters

| Parameter              | Type            | Description |
|------------------------|-----------------|-------------|
| `$datetimeOrTimestamp` | **string\|int** |             |


### ƒ formatTime

[Description for formatTime]

```php
public formatTime(string|int $timeOrTimestamp, bool $addSeconds = true): string
```

#### Parameters

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$timeOrTimestamp` | **string\|int** |             |
| `$addSeconds`      | **bool**        |             |


## Inherited methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ getServiceStatic

Shortcut for the dependency injection.

```php
public static getServiceStatic(string $service): mixed
```

* This method is **static**.
#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### ƒ getService

[Description for getService]

```php
public getService(string $service): mixed
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### ƒ env

Shortcut for the env service.

```php
public env(): \Hubleto\Framework\Env
```


### ƒ authProvider

Shortcut for the authentication service.

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
```


### ƒ db

Shortcut for the database service.

```php
public db(): \Hubleto\Framework\Db
```


### ƒ appManager

Shortcut for the app manager service.

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```


### ƒ router

Shortcut for the router service.

```php
public router(): \Hubleto\Framework\Router
```


### ƒ hookManager

Shortcut for the hook manager service.

```php
public hookManager(): \Hubleto\Framework\HookManager
```


### ƒ sessionManager

Shortcut for the session manager service.

```php
public sessionManager(): \Hubleto\Framework\SessionManager
```


### ƒ permissionsManager

Shortcut for the permissions manager service.

```php
public permissionsManager(): \Hubleto\Framework\PermissionsManager
```


### ƒ cronManager

Shortcut for the cron manager service.

```php
public cronManager(): \Hubleto\Framework\CronManager
```


### ƒ emailProvider

Shortcut for the email provider service.

```php
public emailProvider(): \Hubleto\Framework\EmailProvider
```


### ƒ config

Shortcut for the config service.

```php
public config(): \Hubleto\Framework\Interfaces\ConfigManagerInterface
```


### ƒ terminal

Shortcut for the terminal service.

```php
public terminal(): \Hubleto\Framework\Interfaces\TerminalInterface
```


### ƒ logger

Shortcut for the logger service.

```php
public logger(): \Hubleto\Framework\Interfaces\LoggerInterface
```


### ƒ locale

Shortcut for the locale service.

```php
public locale(): \Hubleto\Framework\Interfaces\LocaleInterface
```


### ƒ renderer

Shortcut for the renderer service.

```php
public renderer(): \Hubleto\Framework\Interfaces\RendererInterface
```


### ƒ translator

Shortcut for the translator service.

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### ƒ getModel

[Description for getModel]

```php
public getModel(string $model): \Hubleto\Framework\Interfaces\ModelInterface
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |


### ƒ getController

[Description for getController]

```php
public getController(string $controller): \Hubleto\Framework\Controller
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |


### ƒ translate

```php
public translate(string $string, array<string,string> $vars = [], string $contextInner = ''): string
```

#### Parameters

| Parameter       | Type                     | Description |
|-----------------|--------------------------|-------------|
| `$string`       | **string**               |             |
| `$vars`         | **array<string,string>** |             |
| `$contextInner` | **string**               |             |

