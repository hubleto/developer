# Model DealLabel

namespace CeremonyCrmApp\Modules\Sales\Deals\Models\DealLabel

Labels given to a Deal

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                     |
| :--------------------------------------------------------------------------------------- | :------------------------ |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\DealLabel::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | deal_labels               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id                |

## Data Scructure

| Column   | Title | ADIOS Type                                                               | Length | Required |
| -------- | ----- | ------------------------------------------------------------------------ | ------ | -------- |
| id_deal  | Deal  | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_label | Label | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column   | Model                                                                        | Relation | OnUpdate | OnDelete |
| -------- | ---------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_deal  | [Modules\Sales\Deals\Models\Deal](./deal.md)                                 | 1:1      | Cascade  | Restrict |
| id_label | [Modules\Core\Settings\Models\Label](../../../core/settings/models/label.md) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

TODO
