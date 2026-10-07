
# \Hubleto\App\Community\AuditLogs\Logger
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Methods

### ƒ log

[Description for log]

```php
public log(int $type, string $context, string $model, int $recordId, string $message, int $priority): array
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$type`     | **int**    |             |
| `$context`  | **string** |             |
| `$model`    | **string** |             |
| `$recordId` | **int**    |             |
| `$message`  | **string** |             |
| `$priority` | **int**    |             |


### ƒ logCreate

[Description for logCreate]

```php
public logCreate(string $context, string $model, int $recordId, string $message = '', int $priority): void
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$context`  | **string** |             |
| `$model`    | **string** |             |
| `$recordId` | **int**    |             |
| `$message`  | **string** |             |
| `$priority` | **int**    |             |


### ƒ logUpdate

[Description for logUpdate]

```php
public logUpdate(string $context, string $model, int $recordId, string $message = '', int $priority): void
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$context`  | **string** |             |
| `$model`    | **string** |             |
| `$recordId` | **int**    |             |
| `$message`  | **string** |             |
| `$priority` | **int**    |             |


### ƒ logDelete

[Description for logDelete]

```php
public logDelete(string $context, string $model, int $recordId, string $message = '', int $priority): void
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$context`  | **string** |             |
| `$model`    | **string** |             |
| `$recordId` | **int**    |             |
| `$message`  | **string** |             |
| `$priority` | **int**    |             |

