
# \Hubleto\App\Community\Leads\Models\Lead
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant                    | Visibility | Type | Value |
|-----------------------------|------------|------|-------|
| `STATUS_NO_INTERACTION_YET` | public     |      | 0     |
| `STATUS_CONTACTED`          | public     |      | 1     |
| `STATUS_IN_PROGRESS`        | public     |      | 2     |
| `STATUS_CLOSED`             | public     |      | 3     |
| `STATUS_CONVERTED_TO_DEAL`  | public     |      | 20    |

## Properties

### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


### lookupUrlDetail

`public ?string $lookupUrlDetail`


### relations

`public array $relations`


## Methods

### describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### describeInput

[Description for describeInput]

```php
public describeInput(string $columnName): \Hubleto\Framework\Description\Input
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$columnName` | **string** |             |


### describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### describeForm

[Description for describeForm]

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### checkOwnership

[Description for checkOwnership]

```php
public checkOwnership(array $record): void
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onBeforeCreate

[Description for onBeforeCreate]

```php
public onBeforeCreate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onBeforeUpdate

[Description for onBeforeUpdate]

```php
public onBeforeUpdate(array $record): array
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |


### onAfterUpdate

[Description for onAfterUpdate]

```php
public onAfterUpdate(array $originalRecord, array $savedRecord): array
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$originalRecord` | **array** |             |
| `$savedRecord`    | **array** |             |

