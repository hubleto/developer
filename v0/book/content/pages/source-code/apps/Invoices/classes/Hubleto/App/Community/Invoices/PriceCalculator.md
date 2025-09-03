
# \Hubleto\App\Community\Invoices\PriceCalculator
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/Core">Core</a></td></tr></table>


## Methods

### calculateFullPrice

[Description for calculateFullPrice]

```php
public calculateFullPrice(float $unitPrice, float $amount): float
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |


### calculateVat

[Description for calculateVat]

```php
public calculateVat(float $fullPrice, float $vat): float
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$fullPrice` | **float** |             |
| `$vat`       | **float** |             |


### calculateDiscountedPrice

[Description for calculateDiscountedPrice]

```php
public calculateDiscountedPrice(float $fullPrice, float $discount): float
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$fullPrice` | **float** |             |
| `$discount`  | **float** |             |


### calculatePriceExcludingVat

[Description for calculatePriceExcludingVat]

```php
public calculatePriceExcludingVat(float $unitPrice, float $amount, float $discount): float
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |
| `$discount`  | **float** |             |


### calculatePriceIncludingVat

[Description for calculatePriceIncludingVat]

```php
public calculatePriceIncludingVat(float $unitPrice, float $amount, float $vat, float $discount): float
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |
| `$vat`       | **float** |             |
| `$discount`  | **float** |             |

