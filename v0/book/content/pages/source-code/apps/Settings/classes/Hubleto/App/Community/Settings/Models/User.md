
# \Hubleto\App\Community\Settings\Models\User
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Framework/Models/User">User</a></td></tr></table>


## Constants

| Constant             | Visibility | Type | Value                                                                                                                                                                                                                                                                                                                          |
|----------------------|------------|------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `TYPE_NOT_SPECIFIED` | public     |      | 0                                                                                                                                                                                                                                                                                                                              |
| `TYPE_ADMINISTRATOR` | public     |      | 1                                                                                                                                                                                                                                                                                                                              |
| `TYPE_CHIEF_OFFICER` | public     |      | 2                                                                                                                                                                                                                                                                                                                              |
| `TYPE_MANAGER`       | public     |      | 3                                                                                                                                                                                                                                                                                                                              |
| `TYPE_EMPLOYEE`      | public     |      | 4                                                                                                                                                                                                                                                                                                                              |
| `TYPE_ASSISTANT`     | public     |      | 5                                                                                                                                                                                                                                                                                                                              |
| `TYPE_EXTERNAL`      | public     |      | 6                                                                                                                                                                                                                                                                                                                              |
| `TYPE_ENUM_VALUES`   | public     |      | [self::TYPE_NOT_SPECIFIED => 'NOT_SPECIFIED', self::TYPE_ADMINISTRATOR => 'ADMINISTRATOR', self::TYPE_CHIEF_OFFICER => 'Chief Officer (CEO, CFO, CTO, ...)', self::TYPE_MANAGER => 'Manager (Sales, Project, ...)', self::TYPE_EMPLOYEE => 'Employee', self::TYPE_ASSISTANT => 'Assistant', self::TYPE_EXTERNAL => 'External'] |
| `ENUM_LANGUAGES`     | public     |      | ['en' => 'English', 'de' => 'Deutsch', 'fr' => 'Francais', 'es' => 'Español', 'sk' => 'Slovensky', 'cs' => 'Česky', 'pl' => 'Polski', 'ro' => 'Română']                                                                                                                                                                        |

## Properties

### record

`public \Illuminate\Database\Eloquent\Model $record`


### table

`public string $table`


### recordManagerClass

`public string $recordManagerClass`


### lookupSqlValue

`public ?string $lookupSqlValue`


### translationContext

`public string $translationContext`


### permission

`public string $permission`


### rolePermissions

`public array $rolePermissions`


## Methods

### describeColumns

```php
public describeColumns(): array
```


### getQueryForUser

```php
public getQueryForUser(int $idUser): mixed
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idUser` | **int** |             |


### loadUser

```php
public loadUser(int $idUser): array
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$idUser` | **int** |             |


### describeTable

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### describeForm

```php
public describeForm(): \Hubleto\Framework\Description\Form
```

