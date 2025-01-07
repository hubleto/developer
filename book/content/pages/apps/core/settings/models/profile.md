# Model Profile

namespace HubletoApp\Settings\Models\Profile

A list of profiles created for the company

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                   |
| :--------------------------------------------------------------------------------------- | :---------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Profile::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | profiles                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].company         |

## Data Scructure

| Column  | Title   | ADIOS Type                                                                 | Length | Required |
| ------- | ------- | -------------------------------------------------------------------------- | ------ | -------- |
| id      | ID      | int                                                                        |        | TRUE     |
| company | Company | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) | 250    | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

This model does not contain any relations.
