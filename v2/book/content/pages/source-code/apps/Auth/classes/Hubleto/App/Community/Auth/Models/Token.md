
Model for storing various validation tokens. Stored in 'tokens' SQL table.

# \Hubleto\App\Community\Auth\Models\Token
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Framework/Models/Token">Token</a></td></tr></table>


## Constants

| Constant                          | Visibility | Type | Value  |
|-----------------------------------|------------|------|--------|
| `TOKEN_TYPE_USER_FORGOT_PASSWORD` | public     |      | 551155 |
| `TOKEN_TYPE_USER_REMEMBER_ME`     | public     |      | 661166 |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ tokenTypes
```php
public $tokenTypes
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ disableAuditLog
```php
public bool $disableAuditLog
```



## Methods

### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ indexes

```php
public indexes(array $indexes = []): array
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$indexes` | **array** |             |


### ƒ isTokenTypeRegistered

```php
public isTokenTypeRegistered(mixed $type): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$type`   | **mixed** |             |


### ƒ registerTokenType

```php
public registerTokenType(mixed $type): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$type`   | **mixed** |             |


### ƒ generateToken

```php
public generateToken(mixed $tokenSalt, mixed $tokenType, mixed $validTo = NULL): mixed
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$tokenSalt` | **mixed** |             |
| `$tokenType` | **mixed** |             |
| `$validTo`   | **mixed** |             |


### ƒ validateToken

```php
public validateToken(mixed $token, int $token_type): int|bool
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$token`      | **mixed** |             |
| `$token_type` | **int**   |             |


### ƒ deleteToken

```php
public deleteToken(mixed $tokenId): mixed
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$tokenId` | **mixed** |             |

