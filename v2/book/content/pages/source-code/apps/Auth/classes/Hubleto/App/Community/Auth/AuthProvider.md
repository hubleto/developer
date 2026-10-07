
Default authentication provider class.

# \Hubleto\App\Community\Auth\AuthProvider
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/Services/AuthProvider">AuthProvider</a></td></tr></table>


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
### ☍ user
```php
public array $user
```



## Methods

### ƒ init

```php
public init(): void
```


### ƒ deleteSession

```php
public deleteSession(): mixed
```


### ƒ getUser

Get information about authenticated user.

```php
public getUser(): \Hubleto\App\Community\Auth\UserProfile
```


### ƒ normalizeUserProfile

[Description for normalizeUserProfile]

```php
public normalizeUserProfile(array $user): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$user`   | **array** |             |


### ƒ getUserFromDatabase

[Description for getUserFromDatabase]

```php
public getUserFromDatabase(): array
```


### ƒ getUserPermissions

[Description for getUserPermissions]

```php
public getUserPermissions(): array
```


### ƒ isTeamMember

[Description for isTeamMember]

```php
public isTeamMember(int $idTeam): bool
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idTeam` | **int** |             |


### ƒ forgotPassword

[Description for forgotPassword]

```php
public forgotPassword(): void
```


### ƒ resetPassword

[Description for resetPassword]

```php
public resetPassword(): void
```


### ƒ initiateRememberMe

[Description for initiateRememberMe]

```php
private initiateRememberMe(mixed $userId): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$userId` | **mixed** |             |


### ƒ authenticateRememberedUser

[Description for authenticateRememberedUser]

```php
public authenticateRememberedUser(): bool
```


### ƒ auth

[Description for auth]

```php
public auth(): void
```


### ƒ createUserModel

[Description for createUserModel]

```php
public createUserModel(): \Hubleto\Framework\Model
```


### ƒ userHasRole

[Description for userHasRole]

```php
public userHasRole(int $idRole): bool
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idRole` | **int** |             |


### ƒ signOut

[Description for signOut]

```php
public signOut(): mixed
```

