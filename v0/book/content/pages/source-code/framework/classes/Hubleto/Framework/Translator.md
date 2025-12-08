
Default translator for Hubleto project.

# \Hubleto\Framework\Translator
<table class='table-default dense'>
<tr><td>Implements</td><td>  <a href="./Interfaces/TranslatorInterface">\Hubleto\Framework\Interfaces\TranslatorInterface</a></td></tr></table>


## Properties

### service

`public \Hubleto\Framework\Core $service`


### dictionary

`public array $dictionary`


## Methods

### getDictionaryFilename

[Description for getDictionaryFilename]

```php
public getDictionaryFilename(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context): string
```

**Parameters:**

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |
| `$context`  | **string**                                      |             |


### addToDictionary

[Description for addToDictionary]

```php
public addToDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context, string $contextInner, string $string): void
```

**Parameters:**

| Parameter       | Type                                            | Description |
|-----------------|-------------------------------------------------|-------------|
| `$core`         | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language`     | **string**                                      |             |
| `$context`      | **string**                                      |             |
| `$contextInner` | **string**                                      |             |
| `$string`       | **string**                                      |             |


### loadDictionary

[Description for loadDictionary]

```php
public loadDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context): void
```

**Parameters:**

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |
| `$context`  | **string**                                      |             |


### loadFullDictionary

[Description for loadFullDictionary]

```php
public loadFullDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language): array
```

**Parameters:**

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |


### translate

[Description for translate]

```php
public translate(\Hubleto\Framework\Interfaces\CoreInterface $service, string $string, array $vars = [], string $context = ''): string
```

**Parameters:**

| Parameter  | Type                                            | Description |
|------------|-------------------------------------------------|-------------|
| `$service` | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$string`  | **string**                                      |             |
| `$vars`    | **array**                                       |             |
| `$context` | **string**                                      |             |

