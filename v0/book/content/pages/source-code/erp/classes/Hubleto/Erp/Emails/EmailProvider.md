
# \Hubleto\Erp\Emails\EmailProvider
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../Framework/Core">Core</a></td></tr></table>


## Properties

### defaultEmailTemplate

`private string $defaultEmailTemplate`


### smtpHost

`private string $smtpHost`


### smtpPort

`private int $smtpPort`


### smtpEncryption

`private string $smtpEncryption`


### smtpUsername

`private string $smtpUsername`


### smtpPassword

`private string $smtpPassword`


### main

`public \Hubleto\Framework\Loader $main`


## Methods

### __construct

```php
public __construct(\Hubleto\Framework\Loader $main): mixed
```

**Parameters:**

| Parameter | Type                          | Description |
|-----------|-------------------------------|-------------|
| `$main`   | **\Hubleto\Framework\Loader** |             |


### init

```php
public init(): void
```


### getFormattedBody

```php
public getFormattedBody(string $title, string $rawBody, string $template = ''): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$title`    | **string** |             |
| `$rawBody`  | **string** |             |
| `$template` | **string** |             |


### send

[Description for send]

```php
public send(string $to, string $subject, string $rawBody, string $template = '', string $fromName = 'Hubleto'): bool
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$to`       | **string** |             |
| `$subject`  | **string** |             |
| `$rawBody`  | **string** |             |
| `$template` | **string** |             |
| `$fromName` | **string** |             |


### sendEmail

[Description for sendEmail]

```php
public sendEmail(string $to, string $subject, string $body, string $fromName = 'Hubleto'): bool
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$to`       | **string** |             |
| `$subject`  | **string** |             |
| `$body`     | **string** |             |
| `$fromName` | **string** |             |


### sendResetPasswordEmail

[Description for sendResetPasswordEmail]

```php
public sendResetPasswordEmail(string $login, string $name, string $language, string $token): void
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$login`    | **string** |             |
| `$name`     | **string** |             |
| `$language` | **string** |             |
| `$token`    | **string** |             |


### sendWelcomeEmail

[Description for sendWelcomeEmail]

```php
public sendWelcomeEmail(string $login, string $name, string $language, string $token): void
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$login`    | **string** |             |
| `$name`     | **string** |             |
| `$language` | **string** |             |
| `$token`    | **string** |             |

