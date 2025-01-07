# Model UserRole

namespace HubletoApp\Settings\Models\UserRole

A list of roles assignable to a user.

## Constants

| Constant Name      | Value                                                |
| ------------------ | ---------------------------------------------------- |
| USER_ROLES         | _An array containing all the roles mentioned bellow_ |
| ROLE_ADMINISTRATOR | ADMINISTRATOR                                        |

## Properties

| Property                                                                                 | Value                    |
| :--------------------------------------------------------------------------------------- | :----------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\UserRole::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | user_roles               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].role             |

## Data Scructure

| Column | Title | ADIOS Type                                                                 | Length | Required |
| ------ | ----- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| role   | Role  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation    | Type     | Other parameters                       |
| ----------- | -------- | -------------------------------------- |
| PERMISSIONS | HAS_MANY | RolePermission::class, 'id_role', 'id' |
