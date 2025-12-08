
# \Hubleto\Framework\Terminal
<table class='table-default dense'>
<tr><td>Implements</td><td>  <a href="./Interfaces/TerminalInterface">\Hubleto\Framework\Interfaces\TerminalInterface</a></td></tr></table>


## Properties

### output

`public mixed $output`


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


### echo

```php
public echo(string $string): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$string` | **string** |             |


### color

Print special strings setting a specified color

```php
public color(string $fgColor, string $bgColor = 'default'): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$fgColor` | **string** |             |
| `$bgColor` | **string** |             |


### readRaw

Read input from terminal/console

```php
public readRaw(): string
```


### read

Read input from terminal/console and return $default is none is entered.

```php
public read(string $message, string $default = ''): string
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |
| `$default` | **string** |             |


### choose

Get user selection from pre-defined options using terminal/console.

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

Ask for user confirmation

```php
public confirm(string $question, array $yesAnswers = ['yes', 'y', '1']): bool
```

**Parameters:**

| Parameter     | Type       | Description                                 |
|---------------|------------|---------------------------------------------|
| `$question`   | **string** |                                             |
| `$yesAnswers` | **array**  | Possible answers representing confirmation. |


### yellow

Print message in terminal in yellow color

```php
public yellow(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### green

Print message in terminal in green color

```php
public green(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### red

Print message in terminal in red color

```php
public red(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### error

```php
public error(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### blue

Print message in terminal in blue color

```php
public blue(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### cyan

Print message in terminal in cyan color

```php
public cyan(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### white

Print message in terminal in white color

```php
public white(string $message): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### colored

Print message in terminal in specified color

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

[Description for insertCodeToFile]

```php
public insertCodeToFile(string $file, string $tag, array $codeLines): bool
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$file`      | **string** |             |
| `$tag`       | **string** |             |
| `$codeLines` | **array**  |             |

