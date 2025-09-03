
# \Hubleto\Framework\Interfaces\HookManagerInterface

## Methods

### init

```php
public init(): void
```


### log

```php
public log(string $msg): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$msg`    | **string** |             |


### addHook

```php
public addHook(string $hookClass): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$hookClass` | **string** |             |


### getHooks

```php
public getHooks(): array
```


### run

```php
public run(string $trigger, array $args): void
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$trigger` | **string** |             |
| `$args`    | **array**  |             |

