
# \Hubleto\App\Community\Mail\Models\RecordManagers\Account
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
public OWNER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Mail\Models\RecordManagers\Deal>
```


### ƒ MANAGER

```php
public MANAGER(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Auth\Models\RecordManagers\User,\Hubleto\App\Community\Mail\Models\RecordManagers\Lead>
```


### ƒ MAILBOXES

```php
public MAILBOXES(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\Mail\Models\RecordManagers\DealTask,\Hubleto\App\Community\Mail\Models\RecordManagers\Deal>
```

