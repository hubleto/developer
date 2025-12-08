
# \Hubleto\App\Community\Campaigns\Models\RecordManagers\Click
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### CAMPAIGN

```php
public CAMPAIGN(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Campaigns\Models\RecordManagers\Tag,\Hubleto\App\Community\Campaigns\Models\RecordManagers\LeadTag>
```


### RECIPIENT

```php
public RECIPIENT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Campaigns\Models\RecordManagers\Tag,\Hubleto\App\Community\Campaigns\Models\RecordManagers\LeadTag>
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

