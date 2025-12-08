
# \Hubleto\Framework\Interfaces\TerminalInterface

## Methods

### setOutput

```php
public setOutput(mixed $output): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$output` | **mixed** |             |


### isLaunchedFromTerminal

```php
public isLaunchedFromTerminal(): bool
```


### color

```php
public color(string $fgColor, string $bgColor = 'black'): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$fgColor` | **string** |             |
| `$bgColor` | **string** |             |


### readRaw

```php
public readRaw(): string
```


### read

```php
public read(string $message, string $default = ''): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |
| `$default` | **string** |             |


### choose

```php
public choose(array $options, string $message, string $default = ''): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$options` | **array**  |             |
| `$message` | **string** |             |
| `$default` | **string** |             |


### confirm

```php
public confirm(string $question, mixed $yesAnswers = ['yes', 'y', '1']): bool
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$question`   | **string** |             |
| `$yesAnswers` | **mixed**  |             |


### yellow

```php
public yellow(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### green

```php
public green(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### red

```php
public red(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### blue

```php
public blue(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### cyan

```php
public cyan(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### white

```php
public white(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### colored

```php
public colored(string $bgColor, string $fgColor, string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$bgColor` | **string** |             |
| `$fgColor` | **string** |             |
| `$message` | **string** |             |


### insertCodeToFile

```php
public insertCodeToFile(string $file, string $tag, array $codeLines): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$file`      | **string** |             |
| `$tag`       | **string** |             |
| `$codeLines` | **array**  |             |


### error

```php
public error(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |

