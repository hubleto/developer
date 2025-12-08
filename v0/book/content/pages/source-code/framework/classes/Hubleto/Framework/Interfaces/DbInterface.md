
# \Hubleto\Framework\Interfaces\DbInterface

## Methods

### init

```php
public init(): mixed
```


### connect

```php
public connect(): mixed
```


### debugQuery

```php
public debugQuery(mixed $query, mixed $data = []): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |
| `$data`   | **mixed** |             |


### execute

```php
public execute(string $query, array $data = []): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$query`  | **string** |             |
| `$data`   | **array**  |             |


### fetchAll

```php
public fetchAll(string $query, array $data = []): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$query`  | **string** |             |
| `$data`   | **array**  |             |


### fetchFirst

```php
public fetchFirst(string $query, array $data = []): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$query`  | **string** |             |
| `$data`   | **array**  |             |


### startTransaction

```php
public startTransaction(): void
```


### commit

```php
public commit(): void
```


### rollback

```php
public rollback(): void
```

