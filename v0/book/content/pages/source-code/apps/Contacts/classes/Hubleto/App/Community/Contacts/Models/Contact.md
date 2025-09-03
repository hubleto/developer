
# \Hubleto\App\Community\Contacts\Models\Contact
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Properties

### isExtendableByCustomColumns

`public bool $isExtendableByCustomColumns`


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

```php
public describeColumns(): array
```


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### describeForm

```php
public describeForm(): \Hubleto\Framework\Description\Form
```


### onBeforeCreate

```php
public onBeforeCreate(array $record): array
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

