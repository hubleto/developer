# Model Document

namespace CeremonyCrmApp\Modules\Core\Documents\Models\Documents

List of all documents that were uploaded to the system.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                    |
| :--------------------------------------------------------------------------------------- | :----------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Document::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | documents                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name             |

## Data Scructure

| Column | Title         | ADIOS Type                                                                 | Length | Required |
| ------ | ------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID            | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Document Name | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| file   | File          | [file](https://docs.wai.blue/adios-framework/models/attributes#file)       |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

TODO
