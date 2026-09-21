# Model ContactType

namespace Hubleto\App\Settings\Models\ContactType

A list of assignable types for a contact.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value               |
| :--------------------------------------------------------------------------------------- | :------------------ |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\ContactType::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | contact_types                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name        |

## Data Scructure

| Column | Title | ADIOS Type                                                                 | Length | Required |
| ------ | ----- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Name  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

This model does not contain any relations.
