# Model Core/Settings/RolePermission

namespace CeremonyCrmApp\Modules\Core\Settings\Models\RolePermission

An table for assigning permissions to a role

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                          |
| :--------------------------------------------------------------------------------------- | :----------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\RolePermission::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | role_permissions               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id_permission          |

## Data Scructure

| Column        | Title      | ADIOS Type                                                               | Length | Required |
| ------------- | ---------- | ------------------------------------------------------------------------ | ------ | -------- |
| id            | ID         | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_permission | Permission | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_role       | Roles      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column        | Model                                                    | Relation | OnUpdate | OnDelete |
| ------------- | -------------------------------------------------------- | -------- | -------- | -------- |
| id_permission | [Modules\Core\Settings\Models\Permission](permission.md) | 1:1      | Cascade  | Cascade  |
| id_role       | [Modules\Core\Settings\Models\Role](user-role.md)        | 1:1      | Cascade  | Cascade  |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation   | Type       | Other parameters                         |
| ---------- | ---------- | ---------------------------------------- |
| ROLE       | BELONGS_TO | UserRole::class, 'id_role', 'id'         |
| PERMISSION | BELONGS_TO | Permission::class, 'id_permission', 'id' |
