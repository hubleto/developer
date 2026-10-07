
# \Hubleto\App\Community\EmailMarketing\Models\RecordManagers\CampaignSchedule
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public $table
```



## Methods

### ƒ EMAIL

```php
public EMAIL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Tag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ CAMPAIGN

```php
public CAMPAIGN(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Tag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
```


### ƒ RECIPIENTS

```php
public RECIPIENTS(): \Illuminate\Database\Eloquent\Relations\HasMany<\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\Tag,\Hubleto\App\Community\EmailMarketing\Models\RecordManagers\LeadTag>
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

