# Model Country

namespace CeremonyCrmApp\Modules\Core\Settings\Models\Country

List of countries existing in the system.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                   |
| :--------------------------------------------------------------------------------------- | :---------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Country::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | countries               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name            |

## Data Scructure

| Column | Title | ADIOS Type                                                                 | Length | Required |
| ------ | ----- | -------------------------------------------------------------------------- | :----: | -------- |
| id     | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Name  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| code   | Code  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |   5    | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| code | UNIQUE  |       code ASC |

## Relations

This model does not contain any relations.
