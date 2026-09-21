
# \Hubleto\Erp\Controller
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Controller">Controller</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ disableLogUsage
```php
public bool $disableLogUsage
```




<div class="mt-2">&nbsp;</div>
### ☍ permittedForAllUsers
```php
public bool $permittedForAllUsers
```




<div class="mt-2">&nbsp;</div>
### ☍ appNamespace
```php
public string $appNamespace
```




<div class="mt-2">&nbsp;</div>
### ☍ hubletoApp
```php
public null|\Hubleto\Framework\Interfaces\AppInterface $hubletoApp
```



## Methods

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
- [`Exception`](../../Exception)


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

