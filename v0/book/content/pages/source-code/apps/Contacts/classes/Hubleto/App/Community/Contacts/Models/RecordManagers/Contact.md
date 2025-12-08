
# \Hubleto\App\Community\Contacts\Models\RecordManagers\Contact
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### CUSTOMER

```php
public CUSTOMER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Customers\Models\RecordManagers\Customer,\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact>
```


### VALUES

```php
public VALUES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact>
```


### TAGS

```php
public TAGS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Contacts\Models\RecordManagers\ContactTag,\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact>
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


### addOrderByToQuery

```php
public addOrderByToQuery(mixed $query, array $orderBy): mixed
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$query`   | **mixed** |             |
| `$orderBy` | **array** |             |


### addFulltextSearchToQuery

```php
public addFulltextSearchToQuery(mixed $query, string $fulltextSearch): mixed
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$query`          | **mixed**  |             |
| `$fulltextSearch` | **string** |             |


### prepareLookupQuery

```php
public prepareLookupQuery(string $search): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$search` | **string** |             |


### prepareLookupData

```php
public prepareLookupData(array $dataRaw): array
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$dataRaw` | **array** |             |

