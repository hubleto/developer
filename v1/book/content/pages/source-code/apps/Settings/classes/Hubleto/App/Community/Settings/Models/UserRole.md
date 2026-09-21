
# \Hubleto\App\Community\Settings\Models\UserRole
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant             | Visibility | Type | Value                                                                                                                                                                                                                                  |
|----------------------|------------|------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `ROLE_ADMINISTRATOR` | public     |      | 1                                                                                                                                                                                                                                      |
| `ROLE_CHIEF_OFFICER` | public     |      | 2                                                                                                                                                                                                                                      |
| `ROLE_MANAGER`       | public     |      | 3                                                                                                                                                                                                                                      |
| `ROLE_EMPLOYEE`      | public     |      | 4                                                                                                                                                                                                                                      |
| `ROLE_ASSISTANT`     | public     |      | 5                                                                                                                                                                                                                                      |
| `ROLE_EXTERNAL`      | public     |      | 6                                                                                                                                                                                                                                      |
| `USER_ROLES`         | public     |      | [self::ROLE_ADMINISTRATOR => 'ADMINISTRATOR', self::ROLE_CHIEF_OFFICER => 'CHIEF_OFFICER', self::ROLE_MANAGER => 'MANAGER', self::ROLE_EMPLOYEE => 'EMPLOYEE', self::ROLE_ASSISTANT => 'ASSISTANT', self::ROLE_EXTERNAL => 'EXTERNAL'] |

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

