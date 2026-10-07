
# \Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Recipient
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ belongsToEmail

```php
public belongsToEmail(mixed $related, mixed $foreignKey = null, mixed $ownerKey = null, mixed $relation = null): mixed
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$related`    | **mixed** |             |
| `$foreignKey` | **mixed** |             |
| `$ownerKey`   | **mixed** |             |
| `$relation`   | **mixed** |             |


### ƒ CAMPAIGN

```php
public CAMPAIGN(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Tag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ EMAIL

```php
public EMAIL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Tag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ MAIL

```php
public MAIL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ STATUS

```php
public STATUS(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Tag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ CLICKS

```php
public CLICKS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Customer>
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

