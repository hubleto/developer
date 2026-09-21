
Default authentication provider class.

# \Hubleto\Erp\AuthProvider
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/AuthProvider">AuthProvider</a></td></tr></table>


## Methods

### getUser

Get information about authenticated user.

```php
public getUser(): \Hubleto\Erp\UserProfile
```


### getUserFromSession

Get user information from the session.

```php
public getUserFromSession(): \Hubleto\Erp\UserProfile
```


### isUserMemberOfTeam

```php
public isUserMemberOfTeam(int $idTeam): bool
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idTeam` | **int** |             |


### findUsersByLogin

```php
public findUsersByLogin(string $login): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$login`  | **string** |             |


### forgotPassword

```php
public forgotPassword(): void
```


### resetPassword

```php
public resetPassword(): void
```


### auth

```php
public auth(): void
```

