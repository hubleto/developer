
# \Hubleto\App\Community\Products\Services\PriceCalculator
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Core">Core</a></td></tr><tr><td>Implements</td><td>  `PriceCalculatorInterface`</td></tr></table>


## Methods

### ƒ calculateFullPrice

```php
public calculateFullPrice(float $unitPrice, float $amount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |


### ƒ calculateVat

```php
public calculateVat(float $fullPrice, float $vat): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$fullPrice` | **float** |             |
| `$vat`       | **float** |             |


### ƒ calculateDiscountedPrice

```php
public calculateDiscountedPrice(float $fullPrice, float $discount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$fullPrice` | **float** |             |
| `$discount`  | **float** |             |


### ƒ calculatePriceExcludingVat

```php
public calculatePriceExcludingVat(float $unitPrice, float $amount, float $discountPercent): float
```

#### Parameters

| Parameter          | Type      | Description |
|--------------------|-----------|-------------|
| `$unitPrice`       | **float** |             |
| `$amount`          | **float** |             |
| `$discountPercent` | **float** |             |


### ƒ calculatePriceIncludingVat

```php
public calculatePriceIncludingVat(float $unitPrice, float $amount, float $discountPercent, float $vatPercent): float
```

#### Parameters

| Parameter          | Type      | Description |
|--------------------|-----------|-------------|
| `$unitPrice`       | **float** |             |
| `$amount`          | **float** |             |
| `$discountPercent` | **float** |             |
| `$vatPercent`      | **float** |             |


### ƒ calculateFinalPrice

```php
public calculateFinalPrice(array $productPrices): float
```

#### Parameters

| Parameter        | Type      | Description |
|------------------|-----------|-------------|
| `$productPrices` | **array** |             |

