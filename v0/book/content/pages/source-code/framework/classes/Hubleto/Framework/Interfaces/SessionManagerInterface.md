
# \Hubleto\Framework\Interfaces\SessionManagerInterface

## Methods

### ƒ getSalt

```php
public getSalt(): string
```


### ƒ start

```php
public start(bool $persist, array $options = []): void
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$persist` | **bool**  |             |
| `$options` | **array** |             |


### ƒ prolongSession

```php
public prolongSession(int $seconds = 2592000): void
```

#### Parameters

| Parameter  | Type    | Description |
|------------|---------|-------------|
| `$seconds` | **int** |             |


### ƒ stop

```php
public stop(): void
```


### ƒ set

```php
public set(string $path, mixed $value, string $key = ''): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |
| `$key`    | **string** |             |


### ƒ get

```php
public get(string $path = '', string $key = ''): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$key`    | **string** |             |


### ƒ push

```php
public push(string $path, mixed $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |


### ƒ isset

```php
public isset(string $path): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### ƒ unset

```php
public unset(string $path): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### ƒ clear

```php
public clear(): void
```

