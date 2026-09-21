
# \Hubleto\Framework\Interfaces\TranslatorInterface

## Methods

### ƒ getDictionaryFilename

```php
public getDictionaryFilename(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context): string
```

#### Parameters

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |
| `$context`  | **string**                                      |             |


### ƒ addToDictionary

```php
public addToDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context, string $contextInner, string $string): mixed
```

#### Parameters

| Parameter       | Type                                            | Description |
|-----------------|-------------------------------------------------|-------------|
| `$core`         | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language`     | **string**                                      |             |
| `$context`      | **string**                                      |             |
| `$contextInner` | **string**                                      |             |
| `$string`       | **string**                                      |             |


### ƒ loadDictionary

```php
public loadDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language, string $context): void
```

#### Parameters

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |
| `$context`  | **string**                                      |             |


### ƒ loadFullDictionary

```php
public loadFullDictionary(\Hubleto\Framework\Interfaces\CoreInterface $core, string $language): array
```

#### Parameters

| Parameter   | Type                                            | Description |
|-------------|-------------------------------------------------|-------------|
| `$core`     | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$language` | **string**                                      |             |


### ƒ translate

```php
public translate(\Hubleto\Framework\Interfaces\CoreInterface $service, string $string, array $vars = [], string $contextInner = ''): string
```

#### Parameters

| Parameter       | Type                                            | Description |
|-----------------|-------------------------------------------------|-------------|
| `$service`      | **\Hubleto\Framework\Interfaces\CoreInterface** |             |
| `$string`       | **string**                                      |             |
| `$vars`         | **array**                                       |             |
| `$contextInner` | **string**                                      |             |

