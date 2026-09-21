
# \Hubleto\Framework\Interfaces\EventManagerInterface

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


### ƒ addEventListener

```php
public addEventListener(string $event, \Hubleto\Framework\Interfaces\EventListenerInterface $listener): void
```

#### Parameters

| Parameter   | Type                                                     | Description |
|-------------|----------------------------------------------------------|-------------|
| `$event`    | **string**                                               |             |
| `$listener` | **\Hubleto\Framework\Interfaces\EventListenerInterface** |             |


### ƒ getEventListeners

```php
public getEventListeners(): array
```


### ƒ fire

```php
public fire(string $event, array $args): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$event`  | **string** |             |
| `$args`   | **array**  |             |

