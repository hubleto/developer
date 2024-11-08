# Model LeadService

namespace CeremonyCrmApp\Modules\Sales\Leads\Models\LeadService

A list of services attached to a Lead

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                       |
| :--------------------------------------------------------------------------------------- | :-------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\LeadService::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | lead_services               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id_service          |

## Data Scructure

| Column     | Title        | ADIOS Type                                                               | Length | Required |
| ---------- | ------------ | ------------------------------------------------------------------------ | ------ | -------- |
| id         | ID           | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_lead    | Lead         | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
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
| LEAD     | BELONGS_TO | Lead::class, 'id_lead','id'       |
| SERVICE  | BELONGS_TO | Service::class, 'id_service','id' |
