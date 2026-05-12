
# \Hubleto\App\Community\Calendar\Manager
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ calendars
```php
protected array<string,\Hubleto\Erp\Calendar> $calendars
```



## Methods

### ƒ addCalendar

```php
public addCalendar(\Hubleto\Framework\Interfaces\AppInterface $app, string $source, string $calendarClass): void
```

#### Parameters

| Parameter        | Type                                           | Description |
|------------------|------------------------------------------------|-------------|
| `$app`           | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$source`        | **string**                                     |             |
| `$calendarClass` | **string**                                     |             |


### ƒ getCalendars

[Description for getCalendars]

```php
public getCalendars(): array
```


### ƒ getCalendarsSorted

[Description for getCalendarsSorted]

```php
public getCalendarsSorted(): array
```


### ƒ getCalendar

[Description for getCalendar]

```php
public getCalendar(string $calendarClass): \Hubleto\Erp\Calendar
```

#### Parameters

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$calendarClass` | **string** |             |

