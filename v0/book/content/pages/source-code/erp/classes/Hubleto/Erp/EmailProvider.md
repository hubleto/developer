
Default implementation of email provider.

# \Hubleto\Erp\EmailProvider
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Core">\Hubleto\Erp\Core</a></td></tr><tr><td>Implements</td><td>  <a href="./Interfaces/EmailProviderInterface">\Hubleto\Erp\Interfaces\EmailProviderInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ translationContext
```php
public string $translationContext
```




<div class="mt-2">&nbsp;</div>
### ☍ translationContextInner
```php
public string $translationContextInner
```




<div class="mt-2">&nbsp;</div>
### ☍ defaultEmailTemplate
```php
private string $defaultEmailTemplate
```




<div class="mt-2">&nbsp;</div>
### ☍ smtpHost
```php
private string $smtpHost
```




<div class="mt-2">&nbsp;</div>
### ☍ smtpPort
```php
private int $smtpPort
```




<div class="mt-2">&nbsp;</div>
### ☍ smtpEncryption
```php
private string $smtpEncryption
```




<div class="mt-2">&nbsp;</div>
### ☍ smtpUsername
```php
private string $smtpUsername
```




<div class="mt-2">&nbsp;</div>
### ☍ smtpPassword
```php
private string $smtpPassword
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ getFormattedBody

```php
public getFormattedBody(string $title, string $rawBody, string $template = ''): string
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$title`    | **string** |             |
| `$rawBody`  | **string** |             |
| `$template` | **string** |             |


### ƒ send

[Description for send]

```php
public send(string $to, string $subject, string $rawBody, string $template = '', string $fromName = 'Hubleto'): bool
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$to`       | **string** |             |
| `$subject`  | **string** |             |
| `$rawBody`  | **string** |             |
| `$template` | **string** |             |
| `$fromName` | **string** |             |


### ƒ sendEmail

[Description for sendEmail]

```php
public sendEmail(string $to, string $subject, string $body, string $fromName = 'Hubleto'): bool
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$to`       | **string** |             |
| `$subject`  | **string** |             |
| `$body`     | **string** |             |
| `$fromName` | **string** |             |


### ƒ sendResetPasswordEmail

[Description for sendResetPasswordEmail]

```php
public sendResetPasswordEmail(string $login, string $name, string $language, string $token): void
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$login`    | **string** |             |
| `$name`     | **string** |             |
| `$language` | **string** |             |
| `$token`    | **string** |             |


### ƒ sendWelcomeEmail

[Description for sendWelcomeEmail]

```php
public sendWelcomeEmail(string $login, string $name, string $language, string $token): void
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$login`    | **string** |             |
| `$name`     | **string** |             |
| `$language` | **string** |             |
| `$token`    | **string** |             |


## Inherited methods

### ƒ emailProvider

Shortcut for the email provider service.

```php
public emailProvider(): \Hubleto\Erp\EmailProvider
```

