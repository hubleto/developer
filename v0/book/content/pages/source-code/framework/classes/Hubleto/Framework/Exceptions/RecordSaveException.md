
Used to display warning to the user if any problem with saving a form using Components/Form
action occurs. Thrown by model's recordValidate() method.

# \Hubleto\Framework\Exceptions\RecordSaveException
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="./Exception">\Hubleto\Framework\Exceptions\Exception</a></td></tr></table>


## Constants

| Constant | Visibility | Type | Value |
|----------|------------|------|-------|
| `CODE`   | public     |      | 87335 |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ invalidInputs
```php
public array $invalidInputs
```



## Methods

### ƒ __construct

```php
public __construct(string $message, array $invalidInputs = [], mixed $previous = null): mixed
```

#### Parameters

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$message`       | **string** |             |
| `$invalidInputs` | **array**  |             |
| `$previous`      | **mixed**  |             |


### ƒ getExtraParams

```php
public getExtraParams(): array
```


## Inherited methods

### ƒ getExtraParams

```php
public getExtraParams(): array
```


### ƒ getResponseArray

```php
public getResponseArray(): array
```

