# Model DealStatus

namespace CeremonyCrmApp\Modules\Core\Settings\Models\DeaStatus

A status for a Deal

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                      |
| :--------------------------------------------------------------------------------------- | :------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\DealStatus::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | deal_statuses              |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name               |

## Data Scructure

| Column | Title | ADIOS Type                                                                 | Length | Required |
| ------ | ----- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Name  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| order  | Order | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| color  | Color | [color](https://docs.wai.blue/adios-framework/models/attributes#color)     |        | FALSE    |

## Indexes

| Name  |  Type   | Column + Order |
| :---- | :-----: | -------------: |
| order |   N/A   |      order ASC |
| id    | PRIMARY |         id ASC |

## Foreign Keys

This model does not contain any foreing keys

## Relations

This model does not contain any relations.
