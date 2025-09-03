
# \Hubleto\App\Community\Calendar\Manager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/Core">Core</a></td></tr></table>


## Properties

### calendars

`protected array<string,\Hubleto\Erp\Calendar> $calendars`


## Methods

### addCalendar

```php
public addCalendar(\Hubleto\Framework\Interfaces\AppInterface $app, string $source, string $color, string $calendarClass): void
```

**Parameters:**

| Parameter        | Type                                           | Description |
|------------------|------------------------------------------------|-------------|
| `$app`           | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$source`        | **string**                                     |             |
| `$color`         | **string**                                     |             |
| `$calendarClass` | **string**                                     |             |


### getCalendars

```php
public getCalendars(): array<string,\Hubleto\Erp\Calendar>
```


### getCalendar

```php
public getCalendar(string $calendarClass): \Hubleto\Erp\Calendar
```

**Parameters:**

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$calendarClass` | **string** |             |

