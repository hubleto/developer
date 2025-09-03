
Default implementation of dependency injection.

# \Hubleto\Framework\DependencyInjection
<table class='table-default dense'>
</table>


## Properties

### serviceProviders

[Description for $serviceProviders]

`private static array<string,string> $serviceProviders`

* This property is **static**.


### services

`private static array $services`

* This property is **static**.


## Methods

### setServiceProvider

```php
public static setServiceProvider(string $service, string $provider): void
```

* This method is **static**.
**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$service`  | **string** |             |
| `$provider` | **string** |             |


### setServiceProviders

```php
public static setServiceProviders(array $providers): void
```

* This method is **static**.
**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$providers` | **array** |             |


### create

```php
public static create(string $service, bool $noSingleton = false): mixed
```

* This method is **static**.
**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$service`     | **string** |             |
| `$noSingleton` | **bool**   |             |

