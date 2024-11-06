# Model User

namespace CeremonyCrmApp\Modules\Core\Settings\Models\User

A list of user in the system.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                |
| :--------------------------------------------------------------------------------------- | :------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\User::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | users                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].email        |

## Data Scructure

| Column            | Title          | ADIOS Type                                                                 | Length | Required |
| ----------------- | -------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id                | ID             | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| first_name        | First Name     | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| middle_name       | Middle Name    | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| last_name         | Last Name      | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| email             | Email          | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| language          | Language       | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_active_profile | Active profile | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column            | Model                                                | Relation | OnUpdate | OnDelete |
| ----------------- | ---------------------------------------------------- | -------- | -------- | -------- |
| id_active_profile | [Modules\Core\Settings\Models\Profile](profile.md) | 1:1      | Cascade  | Cascade  |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

TODO