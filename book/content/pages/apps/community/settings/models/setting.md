# Model Setting

namespace HubletoApp\Settings\Models\Setting

A list of custom settings

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                   |
| :--------------------------------------------------------------------------------------- | :---------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Setting::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | settings                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].key             |

## Data Scructure

| Column  | Title | ADIOS Type                                                                 | Length | Required |
| ------- | ----- | -------------------------------------------------------------------------- | ------ | -------- |
| id      | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| key     | Key   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| value   | Value | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | TRUE     |
| id_user | User  | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

### Foreign Keys

| Column  | Model                                     | Relation | OnUpdate | OnDelete |
| ------- | ----------------------------------------- | -------- | -------- | -------- |
| id_user | [Modules\Core\Settings\Models\User](user) | 1:1      | Cascade  | Cascade  |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

TODO
