# Model DealService

namespace CeremonyCrmApp\Modules\Sales\Deals\Models\DealService

A list of services attached to a Deal

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                       |
| :--------------------------------------------------------------------------------------- | :-------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\DealService::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | deal_services               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id_service          |

## Data Scructure

| Column     | Title        | ADIOS Type                                                               | Length | Required |
| ---------- | ------------ | ------------------------------------------------------------------------ | ------ | -------- |
| id         | ID           | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_deal    | Deal         | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_service | Service      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| unit_price | Unit Price   | [float](https://docs.wai.blue/adios-framework/models/attributes#float)   |        | TRUE     |
| amount     | Amount       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| discount   | Discount (%) | [float](https://docs.wai.blue/adios-framework/models/attributes#float)   |        | FALSE    |
| tax        | Tax (%)      | [float](https://docs.wai.blue/adios-framework/models/attributes#float)   |        | FALSE    |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                  |
| -------- | ---------- | --------------------------------- |
| DEAL     | BELONGS_TO | Deal::class, 'id_deal','id'       |
| SERVICE  | BELONGS_TO | Service::class, 'id_service','id' |
