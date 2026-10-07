
# \Hubleto\App\Community\Mail\Models\RecordManagers\Mail
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ ACCOUNT

```php
public ACCOUNT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Mail\Models\RecordManagers\User,\Hubleto\App\Community\Mail\Models\RecordManagers\Customer>
```


### ƒ MAILBOX

```php
public MAILBOX(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Mail\Models\RecordManagers\User,\Hubleto\App\Community\Mail\Models\RecordManagers\Customer>
```


### ƒ ATTACHMENTS

```php
public ATTACHMENTS(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Mail\Models\RecordManagers\User,\Hubleto\App\Community\Mail\Models\RecordManagers\Customer>
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

