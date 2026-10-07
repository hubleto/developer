
# \Hubleto\App\Community\Api\OAuth
<table class='table-default dense'>
</table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ tokenEndpoint
```php
private string $tokenEndpoint
```




<div class="mt-2">&nbsp;</div>
### ☍ clientId
```php
private string $clientId
```




<div class="mt-2">&nbsp;</div>
### ☍ clientSecret
```php
private string $clientSecret
```



## Methods

### ƒ __construct

```php
public __construct(string $tokenEndpoint, string $clientId, string $clientSecret): mixed
```

#### Parameters

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$tokenEndpoint` | **string** |             |
| `$clientId`      | **string** |             |
| `$clientSecret`  | **string** |             |


### ƒ obtainAccessToken

[Description for obtainAccessToken]

```php
public obtainAccessToken(): string
```


### ƒ decodeAccessToken

[Description for decodeAccessToken]

```php
public decodeAccessToken(string $accessToken): array
```

#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$accessToken` | **string** |             |

