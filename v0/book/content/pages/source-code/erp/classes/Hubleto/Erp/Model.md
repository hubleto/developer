
Core implementation of model.

# \Hubleto\Erp\Model
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../Framework/Model">Model</a></td></tr></table>


## Constants

| Constant                          | Visibility | Type | Value                                                                                      |
|-----------------------------------|------------|------|--------------------------------------------------------------------------------------------|
| `COLUMN_ID_CUSTOMER_DEFAULT_ICON` | public     |      | 'fas fa-address-card bg-yellow-50 rounded text-yellow-600 p-2 mr-2 w-10 text-center block' |
| `COLUMN_ID_SUPPLIER_DEFAULT_ICON` | public     |      | 'fas fa-truck bg-lime-50 rounded text-lime-600 p-2 mr-2 w-10 text-center block'            |
| `COLUMN_CONTACT_DEFAULT_ICON`     | public     |      | 'fas fa-id-badge bg-yellow-50 rounded text-yellow-600 p-2 mr-2 w-10 text-center block'     |
| `COLUMN_IDENTIFIER_DEFUALT_ICON`  | public     |      | 'fas fa-pen bg-blue-50 rounded text-blue-600 p-2 mr-2 w-10 text-center block'              |
| `COLUMN_NAME_DEFAULT_ICON`        | public     |      | 'fas fa-a bg-sky-50 rounded text-sky-600 p-2 mr-2 w-10 text-center block'                  |
| `COLUMN_EMAIL_DEFAULT_ICON`       | public     |      | 'fas fa-envelope bg-sky-50 rounded text-sky-600 p-2 mr-2 w-10 text-center block'           |
| `COLUMN_PHONE_DEFAULT_ICON`       | public     |      | 'fas fa-phone bg-sky-50 rounded text-sky-600 p-2 mr-2 w-10 text-center block'              |
| `COLUMN_ADDRESS_DEFAULT_ICON`     | public     |      | 'fas fa-location-dot bg-green-50 rounded text-green-600 p-2 mr-2 w-10 text-center block'   |
| `COLUMN_COLOR_DEFAULT_ICON`       | public     |      | 'fas fa-palette bg-violet-50 rounded text-violet-600 p-2 mr-2 w-10 text-center block'      |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ disableAuditLog
```php
public bool $disableAuditLog
```



## Methods

### ƒ describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### ƒ getPermissions

[Description for getPermissions]

```php
public getPermissions(array $record): array
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$record` | **array** |             |


### ƒ getAiAssistantContext

[Description for getAiAssistantContext]

```php
public getAiAssistantContext(int $sensitivityLevel, int $recordId): array
```

#### Parameters

| Parameter           | Type    | Description |
|---------------------|---------|-------------|
| `$sensitivityLevel` | **int** |             |
| `$recordId`         | **int** |             |


### ƒ getDocumentPreviewVars

Loads data for Document->getPreviewVars()

```php
public getDocumentPreviewVars(int $recordId, array $relations = []): array
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$recordId`  | **int**   |             |
| `$relations` | **array** |             |


### ƒ getDocumentDefaultTemplate

[Description for getDocumentDefaultTemplate]

```php
public getDocumentDefaultTemplate(array $vars = []): string
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$vars`   | **array** |             |

