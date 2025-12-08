
# \Hubleto\Framework\Interfaces\TranslatorInterface

## Methods

### getDictionaryFilename

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

```php
public addToDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context, string $contextInner, string $string): mixed
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

```php
public loadFullDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language): array
```

**Parameters:**

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |


### translate

```php
public translate(\Hubleto\Framework\Interfaces\CoreInterface $service, string $string, array $vars = [], string $contextInner = ''): string
```

**Parameters:**

| Parameter       | Type                                            | Description |
|-----------------|-------------------------------------------------|-------------|
| `$service`      | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$string`       | **string**                                      |             |
| `$vars`         | **array**                                       |             |
| `$contextInner` | **string**                                      |             |

