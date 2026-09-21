# Model Currency

namespace Hubleto\App\Settings\Models\Currency

List of currencies existing in the system

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                                          |
| :--------------------------------------------------------------------------------------- | :--------------------------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Currency::class                       |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | currencies                                     |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | CONCAT([TABLE].name ," ","(",[TABLE].code,")") |

## Data Scructure

| Column | Title           | ADIOS Type                                                                 | Length | Required |
| ------ | --------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID              | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Currency name   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| code   | Currency code   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| symbol | Currency symbol | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| name | UNIQUE  |       name ASC |
| code | UNIQUE  |                |

## Relations

This model does not contain any relations.
