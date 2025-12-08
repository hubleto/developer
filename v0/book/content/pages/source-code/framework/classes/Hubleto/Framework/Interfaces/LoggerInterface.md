
# \Hubleto\Framework\Interfaces\LoggerInterface

## Methods

### ƒ initInternalLogger

```php
public initInternalLogger(string $loggerName = ""): void
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$loggerName` | **string** |             |


### ƒ getInternalLogger

```php
public getInternalLogger(mixed $loggerName): object
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$loggerName` | **mixed** |             |


### ƒ cliEcho

```php
public cliEcho(mixed $message, mixed $loggerName, mixed $severity): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$loggerName` | **mixed** |             |
| `$severity`   | **mixed** |             |


### ƒ debug

```php
public debug(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### ƒ info

```php
public info(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### ƒ warning

```php
public warning(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### ƒ error

```php
public error(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |

