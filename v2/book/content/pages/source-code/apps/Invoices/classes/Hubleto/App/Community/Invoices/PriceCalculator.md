
# \Hubleto\App\Community\Invoices\PriceCalculator
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Methods

### ƒ calculateFullPrice

[Description for calculateFullPrice]

```php
public calculateFullPrice(float $unitPrice, float $amount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |


### ƒ calculateVat

[Description for calculateVat]

```php
public calculateVat(float $fullPrice, float $vat): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$fullPrice` | **float** |             |
| `$vat`       | **float** |             |


### ƒ calculateDiscountedPrice

[Description for calculateDiscountedPrice]

```php
public calculateDiscountedPrice(float $fullPrice, float $discount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$fullPrice` | **float** |             |
| `$discount`  | **float** |             |


### ƒ calculatePriceExcludingVat

[Description for calculatePriceExcludingVat]

```php
public calculatePriceExcludingVat(float $unitPrice, float $amount, float $discount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |
| `$discount`  | **float** |             |


### ƒ calculatePriceIncludingVat

[Description for calculatePriceIncludingVat]

```php
public calculatePriceIncludingVat(float $unitPrice, float $amount, float $vat, float $discount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |
| `$vat`       | **float** |             |
| `$discount`  | **float** |             |

