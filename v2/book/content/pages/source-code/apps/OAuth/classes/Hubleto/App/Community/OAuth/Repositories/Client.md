
# \Hubleto\App\Community\OAuth\Repositories\Client
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Core">Core</a></td></tr><tr><td>Implements</td><td>  `ClientRepositoryInterface`</td></tr></table>


## Methods

### ƒ getClientEntity

```php
public getClientEntity(string $clientIdentifier): ?\League\OAuth2\Server\Entities\ClientEntityInterface
```

#### Parameters

| Parameter           | Type       | Description |
|---------------------|------------|-------------|
| `$clientIdentifier` | **string** |             |


### ƒ validateClient

```php
public validateClient(mixed $clientIdentifier, mixed $clientSecret, mixed $grantType): bool
```

#### Parameters

| Parameter           | Type      | Description |
|---------------------|-----------|-------------|
| `$clientIdentifier` | **mixed** |             |
| `$clientSecret`     | **mixed** |             |
| `$grantType`        | **mixed** |             |

