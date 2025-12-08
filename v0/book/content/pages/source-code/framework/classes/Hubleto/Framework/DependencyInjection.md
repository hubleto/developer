
Default implementation of dependency injection.

# \Hubleto\Framework\DependencyInjection
<table class='table-default dense'>
</table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ serviceProviders
```php
private static array<string,string> $serviceProviders
```

[Description for $serviceProviders]


* This property is **static**.



<div class="mt-2">&nbsp;</div>
### ☍ services
```php
private static array $services
```


* This property is **static**.


## Methods

### ƒ setServiceProvider

```php
public static setServiceProvider(string $service, string $provider): void
```

* This method is **static**.
#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$service`  | **string** |             |
| `$provider` | **string** |             |


### ƒ setServiceProviders

```php
public static setServiceProviders(array $providers): void
```

* This method is **static**.
#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$providers` | **array** |             |


### ƒ create

```php
public static create(string $service, bool $noSingleton = false): mixed
```

* This method is **static**.
#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$service`     | **string** |             |
| `$noSingleton` | **bool**   |             |

