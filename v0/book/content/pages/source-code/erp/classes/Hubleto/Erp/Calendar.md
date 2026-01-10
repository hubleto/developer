
# \Hubleto\Erp\Calendar
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Core">Core</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ calendarConfig
```php
public array{"title": string, "formComponent": string} $calendarConfig
```

Specifies what Activity Form component will be opened and what title should be used for a new button in the `FormActivitySelector.tsx` component




<div class="mt-2">&nbsp;</div>
### ☍ app
```php
protected \Hubleto\Framework\Interfaces\AppInterface $app
```




<div class="mt-2">&nbsp;</div>
### ☍ color
```php
protected string $color
```



## Methods

### ƒ setApp

```php
public setApp(\Hubleto\Framework\Interfaces\AppInterface $app): void
```

#### Parameters

| Parameter | Type                                           | Description |
|-----------|------------------------------------------------|-------------|
| `$app`    | **\Hubleto\Framework\Interfaces\AppInterface** |             |


### ƒ getApp

```php
public getApp(): \Hubleto\Framework\Interfaces\AppInterface
```


### ƒ setColor

```php
public setColor(string $color): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$color`  | **string** |             |


### ƒ getColor

```php
public getColor(): string
```


### ƒ loadEvent

Loads specified event info.

```php
public loadEvent(int $id): array
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |


### ƒ loadEvents

Loads event from calendar between dateStart and dateEnd.

```php
public loadEvents(string $dateStart, string $dateEnd, array $filter = []): array
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$dateStart` | **string** |             |
| `$dateEnd`   | **string** |             |
| `$filter`    | **array**  |             |


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

