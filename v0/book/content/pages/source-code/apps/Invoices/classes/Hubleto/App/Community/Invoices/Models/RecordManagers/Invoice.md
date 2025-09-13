
# \Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### PROFILE

```php
public PROFILE(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\InvoiceProfile,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### ISSUED_BY

```php
public ISSUED_BY(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\User,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### CURRENCY

```php
public CURRENCY(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Invoices\Models\RecordManagers\Deal>
```


### WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Invoices\Models\RecordManagers\Deal>
```


### WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Invoices\Models\RecordManagers\Deal>
```


### TEMPLATE

```php
public TEMPLATE(): \Hubleto\App\Community\Invoices\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Invoices\Models\RecordManagers\Lead>
```


### ITEMS

```php
public ITEMS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Invoices\Models\RecordManagers\InvoiceItem,\Hubleto\App\Community\Invoices\Models\RecordManagers\Invoice>
```


### prepareReadQuery

[Description for prepareReadQuery]

```php
public prepareReadQuery(mixed|null $query = null, int $level): mixed
```

**Parameters:**

| Parameter | Type            | Description |
|-----------|-----------------|-------------|
| `$query`  | **mixed\|null** |             |
| `$level`  | **int**         |             |

