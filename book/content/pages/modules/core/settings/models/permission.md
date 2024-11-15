# Model Permission

namespace CeremonyCrmApp\Modules\Core\Settings\Models\Permission

A list of available permissions for models and controllers that are in the system.

## Properties

| Property                                                                                 | Value                      |
| :--------------------------------------------------------------------------------------- | :------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Permission::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | permissions                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].alias              |

## Data Scructure

| Column            | Title       | ADIOS Type                                                                 | Length | Required |
| ----------------- | ----------- | -------------------------------------------------------------------------- | ------ | -------- |
| id                | ID          | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| permission_string | Permissions | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| alias             | Alias       | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

This model does not contain any relations.
