# Model LeadHistory

namespace Hubleto\App\Leads\Models\LeadHistory

History for each of created Leads

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                       |
| :--------------------------------------------------------------------------------------- | :-------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\LeadHistory::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | lead_histories              |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].description         |

## Data Scructure

| Column      | Title       | ADIOS Type                                                                 | Length | Required |
| ----------- | ----------- | -------------------------------------------------------------------------- | ------ | -------- |
| id          | ID          | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| change_date | Change date | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | TRUE     |
| description | Description | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_lead     | Lead        | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column  | Model                                   | Relation | OnUpdate | OnDelete |
| ------- | --------------------------------------- | -------- | -------- | -------- |
| id_lead | [Modules\Sales\Leads\Models\Lead](lead) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters            |
| -------- | ---------- | --------------------------- |
| LEAD     | BELONGS_TO | Lead::class, 'id_lead','id' |
