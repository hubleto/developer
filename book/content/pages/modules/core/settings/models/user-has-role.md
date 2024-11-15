# Model UserHasRole

namespace CeremonyCrmApp\Modules\Core\Settings\Models\UserHasRole

A list of roles assigned to a user

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                       |
| :--------------------------------------------------------------------------------------- | :-------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\UserHasRole::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | user_has_roles              |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id                  |

## Data Scructure

| Column  | Title | ADIOS Type                                                               | Length | Required |
| ------- | ----- | ------------------------------------------------------------------------ | ------ | -------- |
| id      | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_user | User  | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_role | Roles | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

### Foreign Keys

| Column  | Model                                             | Relation | OnUpdate | OnDelete |
| ------- | ------------------------------------------------- | -------- | -------- | -------- |
| id_user | [Modules\Core\Settings\Models\User](user)      | 1:1      | Cascade  | Cascade  |
| id_role | [Modules\Core\Settings\Models\UserRole](user-role) | 1:1      | Cascade  | Cascade  |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

TODO

