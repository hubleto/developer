
# \Hubleto\Framework\Interfaces\LocaleInterface

## Methods

### ƒ getAvailableLanguages

```php
public getAvailableLanguages(): array
```


### ƒ getTimezones

```php
public getTimezones(): array
```


### ƒ getTimezone

```php
public getTimezone(): string
```


### ƒ getDateShortFormat

```php
public getDateShortFormat(): string
```


### ƒ getDateLongFormat

```php
public getDateLongFormat(): string
```


### ƒ getDatetimeFormat

```php
public getDatetimeFormat(): string
```


### ƒ getTimeFormat

```php
public getTimeFormat(bool $addSeconds = true): string
```

#### Parameters

| Parameter     | Type     | Description |
|---------------|----------|-------------|
| `$addSeconds` | **bool** |             |


### ƒ getCurrencySymbol

```php
public getCurrencySymbol(): string
```


### ƒ getCurrencyIsoCode

```php
public getCurrencyIsoCode(): string
```


### ƒ getAll

```php
public getAll(string $keyBy = ""): array
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$keyBy`  | **string** |             |


### ƒ formatCurrency

```php
public formatCurrency(string|float $value, string $symbol = ''): string
```

#### Parameters

| Parameter | Type              | Description |
|-----------|-------------------|-------------|
| `$value`  | **string\|float** |             |
| `$symbol` | **string**        |             |


### ƒ formatDateShort

```php
public formatDateShort(string|int $dateOrTimestamp): string
```

#### Parameters

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### ƒ formatDateLong

```php
public formatDateLong(string|int $dateOrTimestamp): string
```

#### Parameters

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$dateOrTimestamp` | **string\|int** |             |


### ƒ formatDatetime

```php
public formatDatetime(string|int $datetimeOrTimestamp): string
```

#### Parameters

| Parameter              | Type            | Description |
|------------------------|-----------------|-------------|
| `$datetimeOrTimestamp` | **string\|int** |             |


### ƒ formatTime

```php
public formatTime(string|int $timeOrTimestamp, bool $addSeconds = true): string
```

#### Parameters

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$timeOrTimestamp` | **string\|int** |             |
| `$addSeconds`      | **bool**        |             |

