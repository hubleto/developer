
# \Hubleto\Framework\Interfaces\UserModelInterface

## Methods

### ƒ loadUser

```php
public loadUser(mixed $uidUser): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$uidUser` | **mixed** |             |


### ƒ isUserActive

```php
public isUserActive(mixed $user): bool
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **mixed** |             |


### ƒ findUsersByLogin

```php
public findUsersByLogin(string $login): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$login`  | **string** |             |


### ƒ authCookieGetLogin

```php
public authCookieGetLogin(): string
```


### ƒ encryptPassword

```php
public encryptPassword(string $password): string
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$password` | **string** |             |


### ƒ updatePassword

```php
public updatePassword(mixed $uidUser, string $password): array
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$uidUser`  | **mixed**  |             |
| `$password` | **string** |             |


### ƒ verifyPassword

```php
public verifyPassword(array $user, string $password): bool
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$user`     | **array**  |             |
| `$password` | **string** |             |

