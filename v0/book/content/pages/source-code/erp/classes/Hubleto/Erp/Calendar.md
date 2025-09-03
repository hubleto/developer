
# \Hubleto\Erp\Calendar
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Core">Core</a></td></tr></table>


## Properties

### calendarConfig

Specifies what Activity Form component will be opened and what title should be used for a new button in the `FormActivitySelector.tsx` component

`public array{"title": string, "formComponent": string} $calendarConfig`


### app

`protected \Hubleto\Framework\Interfaces\AppInterface $app`


### color

`protected string $color`


## Methods

### setApp

```php
public setApp(\Hubleto\Framework\Interfaces\AppInterface $app): void
```

**Parameters:**

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |


### getApp

```php
public getApp(): \Hubleto\Framework\Interfaces\AppInterface
```


### setColor

```php
public setColor(string $color): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$color`  | **string** |             |


### getColor

```php
public getColor(): string
```


### loadEvent

```php
public loadEvent(int $id): array
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### loadEvents

```php
public loadEvents(string $dateStart, string $dateEnd, array $filter = []): array
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$dateStart` | **string** |             |
| `$dateEnd`   | **string** |             |
| `$filter`    | **array**  |             |


### convertActivitiesToEvents

```php
public convertActivitiesToEvents(string $source, array $activities, \Closure $detailsCallback): array
```

**Parameters:**

| Parameter          | Type         | Description |
|--------------------|--------------|-------------|
| `$source`          | **string**   |             |
| `$activities`      | **array**    |             |
| `$detailsCallback` | **\Closure** |             |

