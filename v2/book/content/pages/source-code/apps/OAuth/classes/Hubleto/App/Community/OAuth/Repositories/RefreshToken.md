
# \Hubleto\App\Community\OAuth\Repositories\RefreshToken
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Core">Core</a></td></tr><tr><td>Implements</td><td>  `RefreshTokenRepositoryInterface`</td></tr></table>


## Methods

### ƒ persistNewRefreshToken

```php
public persistNewRefreshToken(\League\OAuth2\Server\Entities\RefreshTokenEntityInterface $refreshTokenEntity): void
```

#### Parameters

| Parameter             | Type                                                           | Description |
|-----------------------|----------------------------------------------------------------|-------------|
| `$refreshTokenEntity` | **\League\OAuth2\Server\Entities\RefreshTokenEntityInterface** |             |


### ƒ revokeRefreshToken

```php
public revokeRefreshToken(mixed $tokenId): void
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tokenId` | **mixed** |             |


### ƒ isRefreshTokenRevoked

```php
public isRefreshTokenRevoked(mixed $tokenId): bool
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tokenId` | **mixed** |             |


### ƒ getNewRefreshToken

```php
public getNewRefreshToken(): ?\League\OAuth2\Server\Entities\RefreshTokenEntityInterface
```

