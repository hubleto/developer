
Default implementation of authentication provider.

# \Hubleto\Framework\AuthProvider
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Framework\Core</a></td></tr><tr><td>Implements</td><td>  `AuthInterface`</td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ loginAttribute
```php
public $loginAttribute
```




<div class="mt-2">&nbsp;</div>
### ☍ passwordAttribute
```php
public $passwordAttribute
```




<div class="mt-2">&nbsp;</div>
### ☍ activeAttribute
```php
public $activeAttribute
```




<div class="mt-2">&nbsp;</div>
### ☍ verifyMethod
```php
public $verifyMethod
```




<div class="mt-2">&nbsp;</div>
### ☍ logInfo
```php
public bool $logInfo
```




<div class="mt-2">&nbsp;</div>
### ☍ user
```php
public array $user
```



## Methods

### ƒ init

```php
public init(): void
```


### ƒ getUserFromSession

```php
public getUserFromSession(): array
```


### ƒ updateUserInSession

```php
public updateUserInSession(array $user): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **array** |             |


### ƒ isUserInSession

```php
public isUserInSession(): bool
```


### ƒ deleteSession

```php
public deleteSession(): mixed
```


### ƒ signIn

```php
public signIn(array $user): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **array** |             |


### ƒ signOut

```php
public signOut(): mixed
```


### ƒ createUserModel

```php
public createUserModel(): \Hubleto\Framework\Model
```


### ƒ findUsersByLogin

```php
public findUsersByLogin(string $login): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$login`  | **string** |             |


### ƒ verifyPassword

```php
public verifyPassword(mixed $password1, mixed $password2): bool
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$password1` | **mixed** |             |
| `$password2` | **mixed** |             |


### ƒ getActiveUsers

```php
public getActiveUsers(): array
```


### ƒ auth

```php
public auth(): void
```


### ƒ getUser

```php
public getUser(): array
```


### ƒ getUserType

```php
public getUserType(): int
```


### ƒ getUserRoles

```php
public getUserRoles(): array
```


### ƒ userHasRole

```php
public userHasRole(int $idRole): bool
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idRole` | **int** |             |


### ƒ getUserId

```php
public getUserId(): int
```


### ƒ getUserEmail

```php
public getUserEmail(): string
```


### ƒ forgotPassword

```php
public forgotPassword(): void
```


### ƒ resetPassword

```php
public resetPassword(): void
```


### ƒ getUserLanguage

```php
public getUserLanguage(): string
```


### ƒ setUserLanguage

```php
public setUserLanguage(string $language): void
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$language` | **string** |             |


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

