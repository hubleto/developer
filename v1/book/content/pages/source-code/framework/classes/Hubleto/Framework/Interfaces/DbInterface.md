
# \Hubleto\Framework\Interfaces\DbInterface

## Methods

### ƒ init

```php
public init(): mixed
```


### ƒ connect

```php
public connect(): mixed
```


### ƒ debugQuery

```php
public debugQuery(mixed $query, mixed $data = []): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |
| `$data`   | **mixed** |             |


### ƒ execute

```php
public execute(string $query, array $data = []): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$query`  | **string** |             |
| `$data`   | **array**  |             |


### ƒ fetchAll

```php
public fetchAll(string $query, array $data = []): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$query`  | **string** |             |
| `$data`   | **array**  |             |


### ƒ fetchFirst

```php
public fetchFirst(string $query, array $data = []): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$query`  | **string** |             |
| `$data`   | **array**  |             |


### ƒ startTransaction

```php
public startTransaction(): void
```


### ƒ commit

```php
public commit(): void
```


### ƒ rollback

```php
public rollback(): void
```

