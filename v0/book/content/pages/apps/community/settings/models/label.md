# Model Label

namespace Hubleto\App\Settings\Models\Label

Label for a Lead or a Deal entry

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                 |
| :--------------------------------------------------------------------------------------- | :-------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Label::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | labels                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name          |

## Data Scructure

| Column | Title | ADIOS Type                                                                 | Length | Required |
| ------ | ----- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Name  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| name | UNIQUE  |            N/A |

## Relations

This model does not contain any relations.
