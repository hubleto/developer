# Model Service

namespace CeremonyCrmApp\Modules\Core\Services\Models\Service

List of services/products available in the system.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                   |
| :--------------------------------------------------------------------------------------- | :---------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Service::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | services                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name            |

## Data Scructure

| Column      | Title       | ADIOS Type                                                                 | Length | Required |
| ----------- | ----------- | -------------------------------------------------------------------------- | ------ | -------- |
| id          | ID          | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name        | Name        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| price       | Unit Price  | [float](https://docs.wai.blue/adios-framework/models/attributes#float)     |        | TRUE     |
| unit        | Unit        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| description | Description | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_currency | Currency    | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column      | Model                                                                      | Relation | OnUpdate | OnDelete |
| ----------- | -------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_currency | [Modules\Core\Settings\Models\Currency](../../settings/models/currency) | 1:1      | Cascade  | SET NULL |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type    | Other parameters                     |
| -------- | ------- | ------------------------------------ |
| CURRENCY | HAS_ONE | Currency::class, 'id', 'id_currency' |
