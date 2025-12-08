
# \Hubleto\Framework\Interfaces\TerminalInterface

## Methods

### ƒ setOutput

```php
public setOutput(mixed $output): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$output` | **mixed** |             |


### ƒ isLaunchedFromTerminal

```php
public isLaunchedFromTerminal(): bool
```


### ƒ color

```php
public color(string $fgColor, string $bgColor = 'black'): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$fgColor` | **string** |             |
| `$bgColor` | **string** |             |


### ƒ readRaw

```php
public readRaw(): string
```


### ƒ read

```php
public read(string $message, string $default = ''): string
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |
| `$default` | **string** |             |


### ƒ choose

```php
public choose(array $options, string $message, string $default = ''): string
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$options` | **array**  |             |
| `$message` | **string** |             |
| `$default` | **string** |             |


### ƒ confirm

```php
public confirm(string $question, mixed $yesAnswers = ['yes', 'y', '1']): bool
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$question`   | **string** |             |
| `$yesAnswers` | **mixed**  |             |


### ƒ yellow

```php
public yellow(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ green

```php
public green(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ red

```php
public red(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ blue

```php
public blue(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ cyan

```php
public cyan(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ white

```php
public white(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ colored

```php
public colored(string $bgColor, string $fgColor, string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$bgColor` | **string** |             |
| `$fgColor` | **string** |             |
| `$message` | **string** |             |


### ƒ insertCodeToFile

```php
public insertCodeToFile(string $file, string $tag, array $codeLines): bool
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$file`      | **string** |             |
| `$tag`       | **string** |             |
| `$codeLines` | **array**  |             |


### ƒ error

```php
public error(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |

