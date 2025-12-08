
# \Hubleto\Framework\Interfaces\HookManagerInterface

## Methods

### ƒ init

```php
public init(): void
```


### ƒ log

```php
public log(string $msg): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$msg`    | **string** |             |


### ƒ addHook

```php
public addHook(string $hookClass): void
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$hookClass` | **string** |             |


### ƒ getHooks

```php
public getHooks(): array
```


### ƒ run

```php
public run(string $trigger, array $args): void
```

#### Parameters

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$trigger` | **string** |             |
| `$args`    | **array**  |             |

