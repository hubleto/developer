
# \Hubleto\App\Community\Mail\Models\Mail
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### ƒ describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### ƒ getRelationsIncludedInLoadTableData

[Description for getRelationsIncludedInLoadTableData]

```php
public getRelationsIncludedInLoadTableData(): array|null
```


### ƒ getMaxReadLevelForLoadTableData

[Description for getMaxReadLevelForLoadTableData]

```php
public getMaxReadLevelForLoadTableData(): int
```


### ƒ validateBeforeSending

[Description for validateBeforeSending]

```php
public validateBeforeSending(array $mail): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$mail`   | **array** |             |


### ƒ send

[Description for send]

```php
public send(array $mail): bool
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$mail`   | **array** |             |


### ƒ sendById

[Description for sendById]

```php
public sendById(int $id): bool
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ create

```php
public create(array $mailData, array $attachments = []): int
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$mailData`    | **array** |             |
| `$attachments` | **array** |             |


### ƒ createAndSend

[Description for createAndSend]

```php
public createAndSend(array $mailData, array $attachments = []): int
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$mailData`    | **array** |             |
| `$attachments` | **array** |             |

