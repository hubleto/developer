
# \Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ SUPPLIER

```php
public SUPPLIER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ PAYMENT_METHOD

```php
public PAYMENT_METHOD(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ PROFILE

```php
public PROFILE(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Invoices\Models\RecordManagers\Profile,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ ISSUED_BY

```php
public ISSUED_BY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ CURRENCY

```php
public CURRENCY(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Invoices\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Invoices\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Invoices\Models\RecordManagers\Deal>
```


### ƒ TEMPLATE

```php
public TEMPLATE(): \Hubleto\App\Community\Invoices\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Invoices\Models\RecordManagers\Lead>
```


### ƒ DOCUMENT

```php
public DOCUMENT(): \Hubleto\App\Community\Invoices\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Invoices\Models\RecordManagers\Lead>
```


### ƒ ITEMS

```php
public ITEMS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Invoices\Models\RecordManagers\Item,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ PAYMENTS

```php
public PAYMENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Invoices\Models\RecordManagers\Item,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ƒ prepareReadQuery

[Description for prepareReadQuery]

```php
public prepareReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): mixed
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |

