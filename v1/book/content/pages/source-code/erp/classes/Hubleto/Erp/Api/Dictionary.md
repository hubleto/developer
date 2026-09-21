
# \Hubleto\Erp\Api\Dictionary
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Controllers/ApiController">\Hubleto\Erp\Controllers\ApiController</a></td></tr></table>


## Methods

### ƒ renderJson

```php
public renderJson(): array
```


## Inherited methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ activeUserHasPermission

```php
public activeUserHasPermission(): bool
```


### ƒ validateInputs

Executed after the init() phase.

```php
public validateInputs(): bool
```

Validates inputs used for the TWIG template.

return bool True if inputs are valid, otherwise false.


### ƒ init

Executed at the end of the constructor.

```php
public init(): void
```

#### Throws

Should throw an exception on error.
- [`Exception`](../../../Exception)


### ƒ prepareView

Used to set parametere for the view renderer.

```php
public prepareView(): void
```


### ƒ setView

```php
public setView(string $view): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |


### ƒ getBreadcrumbs

```php
public getBreadcrumbs(): array
```


### ƒ response

```php
public response(): array
```


### ƒ renderJson

```php
public renderJson(): array
```

