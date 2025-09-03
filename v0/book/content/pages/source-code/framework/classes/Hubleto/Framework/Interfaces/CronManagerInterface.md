
# \Hubleto\Framework\Interfaces\CronManagerInterface

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


### addCron

```php
public addCron(string $cronClass): void
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$cronClass` | **string** |             |


### getCrons

```php
public getCrons(): array
```


### run

```php
public run(): void
```

