
# \Hubleto\Framework\Interfaces\LocaleInterface

## Methods

### getDateShortFormat

```php
public getDateShortFormat(): string
```


### getDateLongFormat

```php
public getDateLongFormat(): string
```


### getDatetimeFormat

```php
public getDatetimeFormat(): string
```


### getTimeFormat

```php
public getTimeFormat(bool $addSeconds = true): string
```

**Parameters:**

| Parameter     | Type     | Description |
|---------------|----------|-------------|
| `$addSeconds` | **bool** |             |


### getCurrencySymbol

```php
public getCurrencySymbol(): string
```


### getCurrencyIsoCode

```php
public getCurrencyIsoCode(): string
```


### getAll

```php
public getAll(string $keyBy = ""): array
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$keyBy`  | **string** |             |


### formatCurrency

```php
public formatCurrency(string|float $value, string $symbol = ''): string
```

**Parameters:**

| Parameter | Type              | Description |
|-----------|-------------------|-------------|
| `$value`  | **string\|float** |             |
| `$symbol` | **string**        |             |


### formatDateShort

```php
public formatDateShort(string|int $dateOrTimestamp): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### formatDateLong

```php
public formatDateLong(string|int $dateOrTimestamp): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### formatDatetime

```php
public formatDatetime(string|int $datetimeOrTimestamp): string
```

**Parameters:**

| Parameter              | Type            | Description |
|------------------------|-----------------|-------------|
| `$datetimeOrTimestamp` | **string\|int** |             |


### formatTime

```php
public formatTime(string|int $timeOrTimestamp, bool $addSeconds = true): string
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$timeOrTimestamp` | **string\|int** |             |
| `$addSeconds`      | **bool**        |             |

