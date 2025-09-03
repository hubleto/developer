
# \Hubleto\App\Community\Calendar\Controllers\Api\GetCalendarEvents
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../../Erp/Controllers/ApiController">ApiController</a></td></tr></table>


## Properties

### dateStart

`public string $dateStart`


### dateEnd

`public string $dateEnd`


## Methods

### __construct

```php
public __construct(): mixed
```


### renderJson

```php
public renderJson(): array
```


### loadEventsFromMultipleCalendars

```php
public loadEventsFromMultipleCalendars(string $dateStart, string $dateEnd, array $filter = [], array|null $sources = null): array
```

**Parameters:**

| Parameter    | Type            | Description |
|--------------|-----------------|-------------|
| `$dateStart` | **string**      |             |
| `$dateEnd`   | **string**      |             |
| `$filter`    | **array**       |             |
| `$sources`   | **array\|null** |             |

