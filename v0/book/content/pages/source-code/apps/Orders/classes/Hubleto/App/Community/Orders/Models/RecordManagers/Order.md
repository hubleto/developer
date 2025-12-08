
# \Hubleto\App\Community\Orders\Models\RecordManagers\Order
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### ACTIVITIES

```php
public ACTIVITIES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderActivity,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### PRODUCTS

```php
public PRODUCTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderProduct,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### DOCUMENTS

```php
public DOCUMENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderDocument,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### DEALS

```php
public DEALS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderDeal,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### PROJECTS

```php
public PROJECTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectOrder,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### HISTORY

```php
public HISTORY(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\History,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### CURRENCY

```php
public CURRENCY(): \Hubleto\App\Community\Orders\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### TEMPLATE

```php
public TEMPLATE(): \Hubleto\App\Community\Orders\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### prepareReadQuery

```php
public prepareReadQuery(mixed $query = null, int $level): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$query`  | **mixed** |             |
| `$level`  | **int**   |             |

