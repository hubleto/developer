
# \Hubleto\App\Community\OAuth\Repositories\AccessToken
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Core">Core</a></td></tr><tr><td>Implements</td><td>  `AccessTokenRepositoryInterface`</td></tr></table>


## Methods

### ƒ persistNewAccessToken

```php
public persistNewAccessToken(\League\OAuth2\Server\Entities\AccessTokenEntityInterface $accessTokenEntity): void
```

#### Parameters

| Parameter            | Type                                                          | Description |
|----------------------|---------------------------------------------------------------|-------------|
| `$accessTokenEntity` | **\League\OAuth2\Server\Entities\AccessTokenEntityInterface** |             |


### ƒ revokeAccessToken

```php
public revokeAccessToken(mixed $tokenId): void
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tokenId` | **mixed** |             |


### ƒ isAccessTokenRevoked

```php
public isAccessTokenRevoked(mixed $tokenId): bool
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tokenId` | **mixed** |             |


### ƒ getNewToken

```php
public getNewToken(\League\OAuth2\Server\Entities\ClientEntityInterface $clientEntity, array $scopes, mixed $userIdentifier = null): \League\OAuth2\Server\Entities\AccessTokenEntityInterface
```

#### Parameters

| Parameter         | Type                                                     | Description |
|-------------------|----------------------------------------------------------|-------------|
| `$clientEntity`   | **\League\OAuth2\Server\Entities\ClientEntityInterface** |             |
| `$scopes`         | **array**                                                |             |
| `$userIdentifier` | **mixed**                                                |             |

