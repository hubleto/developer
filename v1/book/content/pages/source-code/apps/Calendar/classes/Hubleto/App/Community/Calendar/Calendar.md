
# \Hubleto\App\Community\Calendar\Calendar
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Calendar">Calendar</a></td></tr></table>


## Methods

### ƒ getCalendarConfig

```php
public getCalendarConfig(): array
```


### ƒ prepareLoadActivityQuery

```php
public prepareLoadActivityQuery(\Hubleto\App\Community\Calendar\Models\Activity $mActivity, int $id): mixed
```

#### Parameters

| Parameter    | Type                                                | Description |
|--------------|-----------------------------------------------------|-------------|
| `$mActivity` | **\Hubleto\App\Community\Calendar\Models\Activity** |             |
| `$id`        | **int**                                             |             |


### ƒ prepareLoadActivitiesQuery

```php
public prepareLoadActivitiesQuery(\Hubleto\App\Community\Calendar\Models\Activity $mActivity, string $dateStart, string $dateEnd, array $filter = []): mixed
```

#### Parameters

| Parameter    | Type                                                | Description |
|--------------|-----------------------------------------------------|-------------|
| `$mActivity` | **\Hubleto\App\Community\Calendar\Models\Activity** |             |
| `$dateStart` | **string**                                          |             |
| `$dateEnd`   | **string**                                          |             |
| `$filter`    | **array**                                           |             |


### ƒ convertActivitiesToEvents

```php
public convertActivitiesToEvents(string $source, array $activities, \Closure $detailsCallback): array
```

#### Parameters

| Parameter          | Type         | Description |
|--------------------|--------------|-------------|
| `$source`          | **string**   |             |
| `$activities`      | **array**    |             |
| `$detailsCallback` | **\Closure** |             |


### ƒ loadEvent

```php
public loadEvent(int $id): array
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ loadEvents

```php
public loadEvents(string $dateStart, string $dateEnd, array $filter = []): array
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$dateStart` | **string** |             |
| `$dateEnd`   | **string** |             |
| `$filter`    | **array**  |             |

