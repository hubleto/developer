
# \Hubleto\App\Community\Deals\Models\RecordManagers\Deal
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### PIPELINE

```php
public PIPELINE(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Pipeline\Models\RecordManagers\Pipeline,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### PIPELINE_STEP

```php
public PIPELINE_STEP(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Pipeline\Models\RecordManagers\PipelineStep,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### LEAD

```php
public LEAD(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Leads\Models\RecordManagers\Lead,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\User,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Settings\Models\RecordManagers\User,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### CURRENCY

```php
public CURRENCY(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### HISTORY

```php
public HISTORY(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealHistory,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### TAGS

```php
public TAGS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealTag,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### PRODUCTS

```php
public PRODUCTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealProduct,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### TASKS

```php
public TASKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealTask,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### ACTIVITIES

```php
public ACTIVITIES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealActivity,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### DOCUMENTS

```php
public DOCUMENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\DealDocument,\Hubleto\App\Community\Deals\Models\RecordManagers\Deal>
```


### LEADS

```php
public LEADS(): \Hubleto\App\Community\Deals\Models\RecordManagers\hasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\LeadDocument,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
```


### TEMPLATE_QUOTATION

```php
public TEMPLATE_QUOTATION(): \Hubleto\App\Community\Deals\Models\RecordManagers\hasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Currency,\Hubleto\App\Community\Leads\Models\RecordManagers\Lead>
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


### addOrderByToQuery

[Description for addOrderByToQuery]

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### addFulltextSearchToQuery

[Description for addFulltextSearchToQuery]

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### addColumnSearchToQuery

[Description for addColumnSearchToQuery]

```php
public addColumnSearchToQuery(mixed $query, array $columnSearch): mixed
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$query`        | **mixed** |             |
| `$columnSearch` | **array** |             |

