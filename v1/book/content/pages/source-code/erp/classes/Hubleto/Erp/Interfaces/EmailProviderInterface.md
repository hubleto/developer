
# \Hubleto\Erp\Interfaces\EmailProviderInterface

## Methods

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

