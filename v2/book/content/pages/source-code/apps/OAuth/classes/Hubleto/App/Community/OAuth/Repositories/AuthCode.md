
# \Hubleto\App\Community\OAuth\Repositories\AuthCode
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Core">Core</a></td></tr><tr><td>Implements</td><td>  `AuthCodeRepositoryInterface`</td></tr></table>


## Methods

### ƒ persistNewAuthCode

```php
public persistNewAuthCode(\League\OAuth2\Server\Entities\AuthCodeEntityInterface $authCodeEntity): void
```

#### Parameters

| Parameter         | Type                                                       | Description |
|-------------------|------------------------------------------------------------|-------------|
| `$authCodeEntity` | **\League\OAuth2\Server\Entities\AuthCodeEntityInterface** |             |


### ƒ revokeAuthCode

```php
public revokeAuthCode(mixed $codeId): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$codeId` | **mixed** |             |


### ƒ isAuthCodeRevoked

```php
public isAuthCodeRevoked(mixed $codeId): bool
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$codeId` | **mixed** |             |


### ƒ getNewAuthCode

```php
public getNewAuthCode(): \League\OAuth2\Server\Entities\AuthCodeEntityInterface
```

