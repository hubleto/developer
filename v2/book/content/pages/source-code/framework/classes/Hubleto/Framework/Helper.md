
Various helper functions.

# \Hubleto\Framework\Helper
<table class='table-default dense'>
</table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ loadUrlError
```php
public static $loadUrlError
```


* This property is **static**.


## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ deleteTags

Function serves as a delete funtion for the Tag Input

```php
public deleteTags(array $recordTagsIds, mixed $mCrossTag, string $lookupColumnName, int $lookupId): void
```

#### Parameters

| Parameter           | Type       | Description                                      |
|---------------------|------------|--------------------------------------------------|
| `$recordTagsIds`    | **array**  |                                                  |
| `$mCrossTag`        | **mixed**  |                                                  |
| `$lookupColumnName` | **string** | Name of the lookup column in the cross tag model |
| `$lookupId`         | **int**    | The id of the lookup                             |


### ƒ minifyHtml

Minifies HTML

```php
public static minifyHtml(string $html): string
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$html`   | **string** | Input HTML  |

#### Return Value

Minified HTML


### ƒ loadUrl

Load content of remote URL using PHP's CURL library.

```php
public static loadUrl(string $url, array $post = []): string
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description                                      |
|-----------|------------|--------------------------------------------------|
| `$url`    | **string** | URL to be loaded                                 |
| `$post`   | **array**  | Array of POST values to be posted to the request |

#### Return Value

Loaded content of remote URL


### ƒ rmspecialchars

Removes special characters from string

```php
public static rmspecialchars(string $string): string
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description     |
|-----------|------------|-----------------|
| `$string` | **string** | Original string |

#### Return Value

String with removed special characters


### ƒ rmdiacritic

Removes punctuation characters from string

```php
public static rmdiacritic(string $string): string
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description     |
|-----------|------------|-----------------|
| `$string` | **string** | Original string |

#### Return Value

String with removed punctuation characters


### ƒ str2url

Convert string with to URL-compatible string

```php
public static str2url(string $string, bool $replaceSlashes = TRUE): string
```

* This method is **static**.
#### Parameters

| Parameter         | Type       | Description                                    |
|-------------------|------------|------------------------------------------------|
| `$string`         | **string** | Original string                                |
| `$replaceSlashes` | **bool**   | If TRUE, slashes are replaced with hyphenation |

#### Return Value

URL-compatible string


### ƒ str2uid

```php
public static str2uid(mixed $string, mixed $replaceSlashes = TRUE): mixed
```

* This method is **static**.
#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$string`         | **mixed** |             |
| `$replaceSlashes` | **mixed** |             |


### ƒ generateUuidV4

```php
public static generateUuidV4(): string
```

* This method is **static**.

### ƒ randomPassword

Generates random password

```php
public static randomPassword(): string
```

* This method is **static**.
#### Return Value

Generated random password


### ƒ scanDirRecursively

```php
public static scanDirRecursively(mixed $dir): array
```

* This method is **static**.
#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$dir`    | **mixed** |             |


### ƒ capitalizeFirstLetter

```php
public static capitalizeFirstLetter(string $s): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$s`      | **string** |             |


### ƒ kebabToCamel

```php
public static kebabToCamel(string $s): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$s`      | **string** |             |


### ƒ kebabToPascal

```php
public static kebabToPascal(string $s): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$s`      | **string** |             |


### ƒ camelToKebab

```php
public static camelToKebab(string $s): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$s`      | **string** |             |


### ƒ pascalToKebab

```php
public static pascalToKebab(string $s): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$s`      | **string** |             |


### ƒ pluck

```php
public static pluck(string $key, array $data): array
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$key`    | **string** |             |
| `$data`   | **array**  |             |


### ƒ keyBy

```php
public static keyBy(string $key, array $data): array
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$key`    | **string** |             |
| `$data`   | **array**  |             |


### ƒ groupBy

```php
public static groupBy(string $key, array $data): array
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$key`    | **string** |             |
| `$data`   | **array**  |             |


### ƒ encrypt

```php
public static encrypt(string $value, string $seed = '', mixed $force = false): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$value`  | **string** |             |
| `$seed`   | **string** |             |
| `$force`  | **mixed**  |             |


### ƒ decrypt

```php
public static decrypt(string $value, string $seed = '', mixed $force = false): mixed
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$value`  | **string** |             |
| `$seed`   | **string** |             |
| `$force`  | **mixed**  |             |

