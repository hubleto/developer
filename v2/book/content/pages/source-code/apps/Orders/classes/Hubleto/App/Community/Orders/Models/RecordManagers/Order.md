
# \Hubleto\App\Community\Orders\Models\RecordManagers\Order
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### ƒ ACTIVITIES

```php
public ACTIVITIES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderActivity,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Orders\Models\RecordManagers\Deal>
```


### ƒ ITEMS

```php
public ITEMS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\Item,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### ƒ DOCUMENTS

```php
public DOCUMENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderDocument,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### ƒ DEALS

```php
public DEALS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\OrderDeal,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### ƒ PROJECTS

```php
public PROJECTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Projects\Models\RecordManagers\ProjectOrder,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### ƒ HISTORY

```php
public HISTORY(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Orders\Models\RecordManagers\History,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### ƒ CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Orders\Models\RecordManagers\Order>
```


### ƒ SUPPLIER

```php
public SUPPLIER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Orders\Models\RecordManagers\Invoice>
```


### ƒ CURRENCY

```php
public CURRENCY(): \Hubleto\App\Community\Orders\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### ƒ TEMPLATE

```php
public TEMPLATE(): \Hubleto\App\Community\Orders\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### ƒ DOCUMENT

```php
public DOCUMENT(): \Hubleto\App\Community\Orders\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Orders\Models\RecordManagers\Lead>
```


### ƒ prepareSelectsForReadQuery

[Description for prepareSelectsForReadQuery]

```php
public prepareSelectsForReadQuery(mixed|null $query = null, int $level, array|null $includeRelations = null): array
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed\|null** |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


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

