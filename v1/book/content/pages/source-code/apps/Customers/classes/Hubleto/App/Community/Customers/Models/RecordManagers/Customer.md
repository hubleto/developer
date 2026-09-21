
# \Hubleto\App\Community\Customers\Models\RecordManagers\Customer
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ CONTACTS

```php
public CONTACTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ COUNTRY

```php
public COUNTRY(): \Illuminate\Database\Eloquent\Relations\HasOne<\Hubleto\App\Community\Settings\Models\RecordManagers\Country,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ ACTIVITIES

```php
public ACTIVITIES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Customers\Models\RecordManagers\CustomerActivity,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ DOCUMENTS

```php
public DOCUMENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Customers\Models\RecordManagers\CustomerDocument,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ TAGS

```php
public TAGS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Customers\Models\RecordManagers\CustomerTag,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ LEADS

```php
public LEADS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Leads\Models\RecordManagers\Lead,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ DEALS

```php
public DEALS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Deals\Models\RecordManagers\Deal,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ OWNER

```php
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Customers\Models\RecordManagers\Customer>
```


### ƒ prepareReadQuery

```php
public prepareReadQuery(mixed $query = null, int $level, array|null $includeRelations = null): mixed
```

#### Parameters

| Parameter           | Type            | Description |
|---------------------|-----------------|-------------|
| `$query`            | **mixed**       |             |
| `$level`            | **int**         |             |
| `$includeRelations` | **array\|null** |             |


### ƒ addOrderByToQuery

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

#### Parameters

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### ƒ addFulltextSearchToQuery

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |

