
# \Hubleto\App\Community\Campaigns\Models\RecordManagers\Recipient
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/RecordManager">RecordManager</a></td></tr></table>


## Properties

### table

`public $table`


## Methods

### belongsToEmail

```php
public belongsToEmail(mixed $related, mixed $foreignKey = null, mixed $ownerKey = null, mixed $relation = null): mixed
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$related`    | **mixed** |             |
| `$foreignKey` | **mixed** |             |
| `$ownerKey`   | **mixed** |             |
| `$relation`   | **mixed** |             |


### CAMPAIGN

```php
public CAMPAIGN(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Campaigns\Models\RecordManagers\Tag,\Hubleto\App\Community\Campaigns\Models\RecordManagers\LeadTag>
```


### CONTACT

```php
public CONTACT(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Campaigns\Models\RecordManagers\LeadTag>
```


### MAIL

```php
public MAIL(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Contacts\Models\RecordManagers\Contact,\Hubleto\App\Community\Campaigns\Models\RecordManagers\LeadTag>
```


### STATUS

```php
public STATUS(): \Illuminate\Database\Eloquent\Relations\BelongsTo<\Hubleto\App\Community\Campaigns\Models\RecordManagers\Tag,\Hubleto\App\Community\Campaigns\Models\RecordManagers\LeadTag>
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

