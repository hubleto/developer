
# \Hubleto\Framework\Interfaces\ConfigManagerInterface

## Methods

### setConfig

```php
public setConfig(array $configData): mixed
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$configData` | **array** |             |


### empty

```php
public empty(string $path): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### get

```php
public get(string $path = '', mixed $default = null): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$path`    | **string** |             |
| `$default` | **mixed**  |             |


### getAsString

```php
public getAsString(string $path, string $defaultValue = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### getAsInteger

```php
public getAsInteger(string $path, int $defaultValue): int
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### getAsFloat

```php
public getAsFloat(string $path, float $defaultValue): float
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### getAsBool

```php
public getAsBool(string $path, bool $defaultValue = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### getAsArray

```php
public getAsArray(string $path, array $defaultValue = []): array
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### set

```php
public set(string $path, mixed $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |


### save

```php
public save(string $path, string $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### saveForUser

```php
public saveForUser(string $path, string $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### delete

```php
public delete(mixed $path): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$path`   | **mixed** |             |


### init

```php
public init(): void
```


### filterByUser

```php
public filterByUser(): void
```

