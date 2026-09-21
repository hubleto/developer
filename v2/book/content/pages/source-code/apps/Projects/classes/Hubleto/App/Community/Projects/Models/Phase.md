
# \Hubleto\App\Community\Projects\Models\Phase
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant              | Visibility | Type | Value                                                                           |
|-----------------------|------------|------|---------------------------------------------------------------------------------|
| `ENUM_ONE`            | public     |      | 1                                                                               |
| `ENUM_TWO`            | public     |      | 2                                                                               |
| `ENUM_THREE`          | public     |      | 3                                                                               |
| `INTEGER_ENUM_VALUES` | public     |      | [self::ENUM_ONE => 'One', self::ENUM_TWO => 'Two', self::ENUM_THREE => 'Three'] |

## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


## Methods

### describeColumns

```php
public describeColumns(): array
```


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### onBeforeCreate

```php
public onBeforeCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onBeforeUpdate

```php
public onBeforeUpdate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onAfterUpdate

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |


### onAfterCreate

```php
public onAfterCreate(array $savedRecord): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |

