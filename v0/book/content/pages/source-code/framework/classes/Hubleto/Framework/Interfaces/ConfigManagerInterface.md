
# \Hubleto\Framework\Interfaces\ConfigManagerInterface

## Methods

### ƒ forApp

```php
public forApp(string $appClass): mixed
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$appClass` | **string** |             |


### ƒ setPrefix

```php
public setPrefix(string $prefix): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$prefix` | **string** |             |


### ƒ setConfig

```php
public setConfig(array $configData): mixed
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$configData` | **array** |             |


### ƒ empty

```php
public empty(string $path): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### ƒ get

```php
public get(string $path = '', mixed $default = null): mixed
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$path`    | **string** |             |
| `$default` | **mixed**  |             |


### ƒ getAsString

```php
public getAsString(string $path, string $defaultValue = ''): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### ƒ getAsInteger

```php
public getAsInteger(string $path, int $defaultValue): int
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### ƒ getAsFloat

```php
public getAsFloat(string $path, float $defaultValue): float
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### ƒ getAsBool

```php
public getAsBool(string $path, bool $defaultValue = false): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### ƒ getAsArray

```php
public getAsArray(string $path, array $defaultValue = []): array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### ƒ set

```php
public set(string $path, mixed $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |


### ƒ save

```php
public save(string $path, string $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ saveForUser

```php
public saveForUser(string $path, string $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ delete

```php
public delete(mixed $path): void
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$path`   | **mixed** |             |


### ƒ init

```php
public init(): void
```


### ƒ filterByUser

```php
public filterByUser(): void
```

