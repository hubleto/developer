# Model LeadLabel

namespace HubletoApp\Leads\Models\LeadLabel

Labels given to a Lead

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                     |
| :--------------------------------------------------------------------------------------- | :------------------------ |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\LeadLabel::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | lead_labels               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id                |

## Data Scructure

| Column   | Title | ADIOS Type                                                               | Length | Required |
| -------- | ----- | ------------------------------------------------------------------------ | ------ | -------- |
| id_lead  | Lead  | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_label | Label | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column   | Model                                                                     | Relation | OnUpdate | OnDelete |
| -------- | ------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_lead  | [Modules\Sales\Leads\Models\Lead](lead)                                   | 1:1      | Cascade  | Restrict |
| id_label | [Modules\Core\Settings\Models\Label](../../../core/settings/models/label) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters              |
| -------- | ---------- | ----------------------------- |
| LEAD     | BELONGS_TO | Lead::class, 'id_lead','id'   |
| LABEL    | BELONGS_TO | Label::class, 'id_label','id' |
