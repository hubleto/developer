
# \Hubleto\Framework\Interfaces\SessionManagerInterface

## Methods

### getSalt

```php
public getSalt(): string
```


### start

```php
public start(bool $persist, array $options = []): void
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$persist` | **bool**  |             |
| `$options` | **array** |             |


### stop

```php
public stop(): void
```


### set

```php
public set(string $path, mixed $value, string $key = ''): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |
| `$key`    | **string** |             |


### get

```php
public get(string $path = '', string $key = ''): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$key`    | **string** |             |


### push

```php
public push(string $path, mixed $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **mixed**  |             |


### isset

```php
public isset(string $path): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### unset

```php
public unset(string $path): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### clear

```php
public clear(): void
```

