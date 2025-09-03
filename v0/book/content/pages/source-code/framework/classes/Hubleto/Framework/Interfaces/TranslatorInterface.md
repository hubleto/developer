
# \Hubleto\Framework\Interfaces\TranslatorInterface

## Methods

### getContext

```php
public getContext(): string
```


### setContext

```php
public setContext(string $context): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$context` | **string** |             |


### getDictionaryFilename

```php
public getDictionaryFilename(string $context, string $language = ''): string
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$context`  | **string** |             |
| `$language` | **string** |             |


### addToDictionary

```php
public addToDictionary(string $string, string $context, string $toLanguage): void
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$string`     | **string** |             |
| `$context`    | **string** |             |
| `$toLanguage` | **string** |             |


### loadDictionary

```php
public loadDictionary(string $language = ""): array
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$language` | **string** |             |


### translate

```php
public translate(string $string, array $vars = []): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$string` | **string** |             |
| `$vars`   | **array**  |             |

