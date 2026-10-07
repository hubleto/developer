
# \Hubleto\App\Community\Auth\Models\User
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Framework/Models/User">User</a></td></tr><tr><td>Implements</td><td>  `UserModelInterface`</td></tr></table>


## Constants

| Constant             | Visibility | Type | Value                                                                                                                                                                                                                                                                     |
|----------------------|------------|------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `TYPE_NOT_SPECIFIED` | public     |      | 0                                                                                                                                                                                                                                                                         |
| `TYPE_ADMINISTRATOR` | public     |      | 1                                                                                                                                                                                                                                                                         |
| `TYPE_CHIEF_OFFICER` | public     |      | 2                                                                                                                                                                                                                                                                         |
| `TYPE_MANAGER`       | public     |      | 3                                                                                                                                                                                                                                                                         |
| `TYPE_EMPLOYEE`      | public     |      | 4                                                                                                                                                                                                                                                                         |
| `TYPE_ASSISTANT`     | public     |      | 5                                                                                                                                                                                                                                                                         |
| `TYPE_EXTERNAL`      | public     |      | 6                                                                                                                                                                                                                                                                         |
| `TYPE_ENUM_VALUES`   | public     |      | [self::TYPE_NOT_SPECIFIED => '---', self::TYPE_ADMINISTRATOR => 'Administrator', self::TYPE_CHIEF_OFFICER => 'Chief Officer', self::TYPE_MANAGER => 'Manager', self::TYPE_EMPLOYEE => 'Employee', self::TYPE_ASSISTANT => 'Assistant', self::TYPE_EXTERNAL => 'External'] |
| `ENUM_LANGUAGES`     | public     |      | ['en' => 'English', 'de' => 'Deutsch', 'fr' => 'Francais', 'es' => 'Español', 'sk' => 'Slovensky', 'cs' => 'Česky', 'pl' => 'Polski', 'ro' => 'Română']                                                                                                                   |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ translationContext
```php
public string $translationContext
```




<div class="mt-2">&nbsp;</div>
### ☍ permission
```php
public string $permission
```




<div class="mt-2">&nbsp;</div>
### ☍ rolePermissions
```php
public array $rolePermissions
```




<div class="mt-2">&nbsp;</div>
### ☍ junctions
```php
public ?array $junctions
```



## Methods

### ƒ indexes

```php
public indexes(array $indexes = []): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### ƒ __construct

```php
public __construct(): mixed
```


### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ describeForm

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### ƒ onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### ƒ loadUser

[Description for loadUser]

```php
public loadUser(mixed $uidUser): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$uidUser` | **mixed** |             |


### ƒ isUserActive

[Description for isUserActive]

```php
public isUserActive(mixed $user): bool
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **mixed** |             |


### ƒ findUsersByLogin

[Description for findUsersByLogin]

```php
public findUsersByLogin(string $login): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$login`  | **string** |             |


### ƒ authCookieGetLogin

[Description for authCookieGetLogin]

```php
public authCookieGetLogin(): string
```


### ƒ encryptPassword

[Description for encryptPassword]

```php
public encryptPassword(string $password): string
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$password` | **string** |             |


### ƒ updatePassword

[Description for updatePassword]

```php
public updatePassword(mixed $uidUser, string $password): array
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$uidUser`  | **mixed**  |             |
| `$password` | **string** |             |


### ƒ verifyPassword

[Description for verifyPassword]

```php
public verifyPassword(array $user, string $password): bool
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$user`     | **array**  |             |
| `$password` | **string** |             |

