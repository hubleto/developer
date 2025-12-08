
# \Hubleto\Erp\Api\TableImportCsv
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Controllers/ApiController">\Hubleto\Erp\Controllers\ApiController</a></td></tr></table>


## Methods

### renderJson

```php
public renderJson(): array
```


## Inherited methods

### __construct

```php
public __construct(): mixed
```


### activeUserHasPermission

```php
public activeUserHasPermission(): bool
```


### validateInputs

Executed after the init() phase.

```php
public validateInputs(): bool
```

Validates inputs used for the TWIG template.

return bool True if inputs are valid, otherwise false.


### init

Executed at the end of the constructor.

```php
public init(): void
```

**Throws:**

Should throw an exception on error.
- [`Exception`](../../../Exception)


### prepareView

Used to set parametere for the view renderer.

```php
public prepareView(): void
```


### setView

```php
public setView(string $view): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |


### getBreadcrumbs

```php
public getBreadcrumbs(): array
```


### response

```php
public response(): array
```


### renderJson

```php
public renderJson(): array
```

