
# \Hubleto\App\Community\Calendar\Controllers\Api\GetCalendarEvents
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/Controllers/ApiController">ApiController</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ dateStart
```php
public string $dateStart
```




<div class="mt-2">&nbsp;</div>
### ☍ dateEnd
```php
public string $dateEnd
```



## Methods

### ƒ __construct

```php
public __construct(): mixed
```


### ƒ renderJson

[Description for renderJson]

```php
public renderJson(): array
```


### ƒ loadEventsFromMultipleCalendars

[Description for loadEventsFromMultipleCalendars]

```php
public loadEventsFromMultipleCalendars(string $dateStart, string $dateEnd, array $filter = [], array|null $sources = null): array
```

#### Parameters

| Parameter    | Type            | Description |
|--------------|-----------------|-------------|
| `$dateStart` | **string**      |             |
| `$dateEnd`   | **string**      |             |
| `$filter`    | **array**       |             |
| `$sources`   | **array\|null** |             |

