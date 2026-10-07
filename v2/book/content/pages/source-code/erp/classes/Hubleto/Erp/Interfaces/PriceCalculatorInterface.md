
# \Hubleto\Erp\Interfaces\PriceCalculatorInterface

## Methods

### ƒ calculateFullPrice

Calculate full price based on unit price and amount.

```php
public calculateFullPrice(float $unitPrice, float $amount): float
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$unitPrice` | **float** |             |
| `$amount`    | **float** |             |


### ƒ calculateVat

Calculate VAT based on full price and VAT percent.

```php
public calculateVat(float $fullPrice, float $vatPercent): float
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$fullPrice`  | **float** |             |
| `$vatPercent` | **float** |             |


### ƒ calculateDiscountedPrice

Calculate discount based on full price and discount percent.

```php
public calculateDiscountedPrice(float $fullPrice, float $discountPercent): float
```

#### Parameters

| Parameter          | Type      | Description |
|--------------------|-----------|-------------|
| `$fullPrice`       | **float** |             |
| `$discountPercent` | **float** |             |


### ƒ calculatePriceExcludingVat

Calculate price excluding VAT based on unit price, amount and optionally discount percent.

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

Calculate price including VAT based on unit price, amount and optionally discount percent and VAT percent.

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

