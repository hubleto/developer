
# \Hubleto\App\Community\AuditLogs\Models\AuditLog
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant                 | Visibility | Type | Value                                                                                                         |
|--------------------------|------------|------|---------------------------------------------------------------------------------------------------------------|
| `TYPE_CREATE`            | public     |      | 1                                                                                                             |
| `TYPE_UPDATE`            | public     |      | 2                                                                                                             |
| `TYPE_DELETE`            | public     |      | 3                                                                                                             |
| `ENUM_TYPES`             | public     |      | [self::TYPE_CREATE => 'create', self::TYPE_UPDATE => 'update', self::TYPE_DELETE => 'delete']                 |
| `ENUM_TYPES_CSS_CLASSES` | public     |      | [self::TYPE_CREATE => 'bg-yellow-300', self::TYPE_UPDATE => 'bg-blue-300', self::TYPE_DELETE => 'bg-red-300'] |

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
### ☍ disableAuditLog
```php
public bool $disableAuditLog
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

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```

