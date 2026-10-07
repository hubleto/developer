
# \Hubleto\App\Community\Cashdesk\Models\ReceiptItem
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant              | Visibility | Type | Value                                                                                                                                                                                                                                                                               |
|-----------------------|------------|------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `TYPE_RECEIPT`        | public     |      | 1                                                                                                                                                                                                                                                                                   |
| `TYPE_SHIPMENT`       | public     |      | 2                                                                                                                                                                                                                                                                                   |
| `TYPE_TRANSFER_IN`    | public     |      | 3                                                                                                                                                                                                                                                                                   |
| `TYPE_TRANSFER_OUT`   | public     |      | 4                                                                                                                                                                                                                                                                                   |
| `TYPE_ADJUSTMENT_IN`  | public     |      | 5                                                                                                                                                                                                                                                                                   |
| `TYPE_ADJUSTMENT_OUT` | public     |      | 6                                                                                                                                                                                                                                                                                   |
| `TYPE_RETURN`         | public     |      | 7                                                                                                                                                                                                                                                                                   |
| `TYPES`               | public     |      | [self::TYPE_RECEIPT => 'Receipt', self::TYPE_SHIPMENT => 'Shipment', self::TYPE_TRANSFER_IN => 'Transfer In', self::TYPE_TRANSFER_OUT => 'Transfer Out', self::TYPE_ADJUSTMENT_IN => 'Adjustment In', self::TYPE_ADJUSTMENT_OUT => 'Adjustment Out', self::TYPE_RETURN => 'Return'] |

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
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ describeColumns

```php
public describeColumns(): array
```


### ƒ describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```

