
# \Hubleto\App\Community\Deals\Models\RecordManagers\Deal
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
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW

```php
public WORKFLOW(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\Workflow,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ WORKFLOW_STEP

```php
public WORKFLOW_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Workflow\Models\RecordManagers\WorkflowStep,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ LEAD

```php
public LEAD(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Leads\Models\RecordManagers\Lead,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ CURRENCY

```php
public CURRENCY(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ HISTORY

```php
public HISTORY(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealHistory,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ TAGS

```php
public TAGS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealTag,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ ITEMS

```php
public ITEMS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\Item,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealTask,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ ACTIVITIES

```php
public ACTIVITIES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealActivity,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ DOCUMENTS

```php
public DOCUMENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealDocument,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ƒ LEADS

```php
public LEADS(): \Hubleto\App\Community\Deals\Models\RecordManagers\hasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ TEMPLATE_QUOTATION

```php
public TEMPLATE_QUOTATION(): \Hubleto\App\Community\Deals\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ TEMPLATE

```php
public TEMPLATE(): \Hubleto\App\Community\Deals\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### ƒ DOCUMENT

```php
public DOCUMENT(): \Hubleto\App\Community\Deals\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
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

