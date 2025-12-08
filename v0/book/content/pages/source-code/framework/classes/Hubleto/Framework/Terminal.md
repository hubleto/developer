
# \Hubleto\Framework\Terminal
<table class='table-default dense'>
<tr><td>Implements</td><td>  <a href="./Interfaces/TerminalInterface">\Hubleto\Framework\Interfaces\TerminalInterface</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ output
```php
public mixed $output
```



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


### ƒ echo

```php
public echo(string $string): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$string` | **string** |             |


### ƒ color

Print special strings setting a specified color

```php
public color(string $fgColor, string $bgColor = 'default'): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$fgColor` | **string** |             |
| `$bgColor` | **string** |             |


### ƒ readRaw

Read input from terminal/console

```php
public readRaw(): string
```


### ƒ read

Read input from terminal/console and return $default is none is entered.

```php
public read(string $message, string $default = ''): string
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |
| `$default` | **string** |             |


### ƒ choose

Get user selection from pre-defined options using terminal/console.

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

Ask for user confirmation

```php
public confirm(string $question, array $yesAnswers = ['yes', 'y', '1']): bool
```

#### Parameters

| Parameter     | Type       | Description                                 |
|---------------|------------|---------------------------------------------|
| `$question`   | **string** |                                             |
| `$yesAnswers` | **array**  | Possible answers representing confirmation. |


### ƒ yellow

Print message in terminal in yellow color

```php
public yellow(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ green

Print message in terminal in green color

```php
public green(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ red

Print message in terminal in red color

```php
public red(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ error

```php
public error(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ blue

Print message in terminal in blue color

```php
public blue(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ cyan

Print message in terminal in cyan color

```php
public cyan(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ white

Print message in terminal in white color

```php
public white(string $message): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$message` | **string** |             |


### ƒ colored

Print message in terminal in specified color

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

[Description for insertCodeToFile]

```php
public insertCodeToFile(string $file, string $tag, array $codeLines): bool
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$file`      | **string** |             |
| `$tag`       | **string** |             |
| `$codeLines` | **array**  |             |

