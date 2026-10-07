
# \Hubleto\App\Community\Invoices\Services\PriceCalculator
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
public calculateVat(float $fullPrice, float $vatPercent): float
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$fullPrice`  | **float** |             |
| `$vatPercent` | **float** |             |


### ƒ calculateDiscountedPrice

```php
public calculateDiscountedPrice(float $fullPrice, float $discountPercent): float
```

#### Parameters

| Parameter          | Type      | Description |
|--------------------|-----------|-------------|
| `$fullPrice`       | **float** |             |
| `$discountPercent` | **float** |             |


### ƒ calculatePriceExcludingVat

[Description for calculatePriceExcludingVat]

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

[Description for calculatePriceIncludingVat]

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

