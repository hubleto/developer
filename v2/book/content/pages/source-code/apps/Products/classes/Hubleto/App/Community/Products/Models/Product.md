
# \Hubleto\App\Community\Products\Models\Product
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant                       | Visibility | Type | Value                                                                                                                                                                                          |
|--------------------------------|------------|------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `TYPE_CONSUMABLE`              | public     |      | 1                                                                                                                                                                                              |
| `TYPE_STORABLE`                | public     |      | 2                                                                                                                                                                                              |
| `TYPE_SERVICE`                 | public     |      | 3                                                                                                                                                                                              |
| `INVOICING_POLICY_ORDER`       | public     |      | 1                                                                                                                                                                                              |
| `INVOICING_POLICY_DELIVERY`    | public     |      | 2                                                                                                                                                                                              |
| `INVOICING_POLICY_MANUAL`      | public     |      | 99                                                                                                                                                                                             |
| `TYPE_ENUM_VALUES`             | public     |      | [self::TYPE_CONSUMABLE => "Consumable", self::TYPE_STORABLE => "Storable", self::TYPE_SERVICE => "Service"]                                                                                    |
| `INVOICING_POLICY_ENUM_VALUES` | public     |      | [self::INVOICING_POLICY_ORDER => "Order", self::INVOICING_POLICY_DELIVERY => "Delivery", self::INVOICING_POLICY_MANUAL => "Manual"]                                                            |
| `BASE_MEASURE_COUNT`           | public     |      | 1                                                                                                                                                                                              |
| `BASE_MEASURE_MASS`            | public     |      | 2                                                                                                                                                                                              |
| `BASE_MEASURE_VOLUME`          | public     |      | 3                                                                                                                                                                                              |
| `BASE_MEASURE_LENGTH`          | public     |      | 4                                                                                                                                                                                              |
| `BASE_MEASURE_ENUM_VALUES`     | public     |      | [self::BASE_MEASURE_COUNT => "Count (pieces)", self::BASE_MEASURE_MASS => "Mass (weight)", self::BASE_MEASURE_VOLUME => "Volume (capacity)", self::BASE_MEASURE_LENGTH => "Length (distance)"] |
| `BASE_MEASURE_SYMBOLS`         | public     |      | [self::BASE_MEASURE_COUNT => 'pcs', self::BASE_MEASURE_MASS => 'kg', self::BASE_MEASURE_VOLUME => 'l', self::BASE_MEASURE_LENGTH => 'm']                                                       |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlAdd
```php
public ?string $lookupUrlAdd
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlDetail
```php
public ?string $lookupUrlDetail
```




<div class="mt-2">&nbsp;</div>
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ baseMeasureSymbol

```php
public baseMeasureSymbol(?int $measure): string
```

#### Parameters

| Parameter  | Type     | Description |
|------------|----------|-------------|
| `$measure` | **?int** |             |


### ƒ physicalFacts

```php
protected physicalFacts(?float $length, ?float $width, ?float $height, ?float $weight): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$length` | **?float** |             |
| `$width`  | **?float** |             |
| `$height` | **?float** |             |
| `$weight` | **?float** |             |


### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ getAiAssistantContext

[Description for getAiAssistantContext]

```php
public getAiAssistantContext(int $sensitivityLevel, int $recordId): array
```

#### Parameters

| Parameter           | Type    | Description |
|---------------------|---------|-------------|
| `$sensitivityLevel` | **int** |             |
| `$recordId`         | **int** |             |

