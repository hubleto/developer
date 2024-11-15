# Model DealHistory

namespace CeremonyCrmApp\Modules\Sales\Deals\Models\DealHistory

History for each of created Deals

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                       |
| :--------------------------------------------------------------------------------------- | :-------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\DealHistory::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | deal_histories              |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].description         |

## Data Scructure

| Column      | Title       | ADIOS Type                                                                 | Length | Required |
| ----------- | ----------- | -------------------------------------------------------------------------- | ------ | -------- |
| id          | ID          | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| change_date | Change date | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | TRUE     |
| description | Description | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_deal     | Deal        | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column  | Model                                   | Relation | OnUpdate | OnDelete |
| ------- | --------------------------------------- | -------- | -------- | -------- |
| id_deal | [Modules\Sales\Deals\Models\Deal](deal) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters            |
| -------- | ---------- | --------------------------- |
| DEAL     | BELONGS_TO | Deal::class, 'id_deal','id' |
