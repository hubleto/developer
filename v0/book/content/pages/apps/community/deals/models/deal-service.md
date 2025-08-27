# Model DealService

namespace Hubleto\App\Deals\Models\DealService

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
| unit_price | Unit Price   | [float](https://docs.wai.blue/adios-framework/models/attributes#float)   |        | TRUE     |
| amount     | Amount       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| discount   | Discount (%) | [float](https://docs.wai.blue/adios-framework/models/attributes#float)   |        | FALSE    |
| tax        | Tax (%)      | [float](https://docs.wai.blue/adios-framework/models/attributes#float)   |        | FALSE    |
| id_deal    | Deal         | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_service | Service      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column     | Model                                                                         | Relation | OnUpdate | OnDelete |
| ---------- | ----------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_deal    | [Modules\Sales\Deals\Models\Deal](deal)                                       | 1:1      | Cascade  | Restrict |
| id_service | [Modules\Core\Services\Models\Service](../../../core/services/models/service) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                  |
| -------- | ---------- | --------------------------------- |
| DEAL     | BELONGS_TO | Deal::class, 'id_deal','id'       |
| SERVICE  | BELONGS_TO | Service::class, 'id_service','id' |
