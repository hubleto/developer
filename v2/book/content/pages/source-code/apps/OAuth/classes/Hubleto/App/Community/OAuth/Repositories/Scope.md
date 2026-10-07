
# \Hubleto\App\Community\OAuth\Repositories\Scope
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Core">Core</a></td></tr><tr><td>Implements</td><td>  `ScopeRepositoryInterface`</td></tr></table>


## Methods

### ƒ getScopeEntityByIdentifier

```php
public getScopeEntityByIdentifier(mixed $scopeIdentifier): ?\League\OAuth2\Server\Entities\ScopeEntityInterface
```

#### Parameters

| Parameter          | Type      | Description |
|--------------------|-----------|-------------|
| `$scopeIdentifier` | **mixed** |             |


### ƒ finalizeScopes

```php
public finalizeScopes(array $scopes, mixed $grantType, \League\OAuth2\Server\Entities\ClientEntityInterface $clientEntity, mixed $userIdentifier = null, mixed $authCodeId = null): array
```

#### Parameters

| Parameter         | Type                                                     | Description |
|-------------------|----------------------------------------------------------|-------------|
| `$scopes`         | **array**                                                |             |
| `$grantType`      | **mixed**                                                |             |
| `$clientEntity`   | **\League\OAuth2\Server\Entities\ClientEntityInterface** |             |
| `$userIdentifier` | **mixed**                                                |             |
| `$authCodeId`     | **mixed**                                                |             |

