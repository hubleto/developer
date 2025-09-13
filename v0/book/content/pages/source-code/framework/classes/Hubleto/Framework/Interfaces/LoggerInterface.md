
# \Hubleto\Framework\Interfaces\LoggerInterface

## Methods

### initInternalLogger

```php
public initInternalLogger(string $loggerName = ""): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$loggerName` | **string** |             |


### getInternalLogger

```php
public getInternalLogger(mixed $loggerName): object
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$loggerName` | **mixed** |             |


### cliEcho

```php
public cliEcho(mixed $message, mixed $loggerName, mixed $severity): void
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$loggerName` | **mixed** |             |
| `$severity`   | **mixed** |             |


### debug

```php
public debug(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### info

```php
public info(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### warning

```php
public warning(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |


### error

```php
public error(mixed $message, array $context = [], mixed $loggerName = 'core'): void
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$message`    | **mixed** |             |
| `$context`    | **array** |             |
| `$loggerName` | **mixed** |             |

