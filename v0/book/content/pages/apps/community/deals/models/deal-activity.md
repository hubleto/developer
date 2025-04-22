# Model DealActivity

namespace HubletoApp\Deals\Models\DealActivity

List of activities connected to the Deal model.

## Constants

This model does not define constants.

## Properties

| Property                                                                               | Value                        |
| :------------------------------------------------------------------------------------- | :--------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass) | Eloquent\DealActivity::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                 | deal_activities              |

## Data Scructure

| Column      | Title    | ADIOS Type                                                               | Length | Required |
| ----------- | -------- | ------------------------------------------------------------------------ | ------ | -------- |
| id          | ID       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_deal     | Deal     | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_activity | Activity | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column      | Model                                                                             | Relation | OnUpdate | OnDelete |
| ----------- | --------------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_deal     | [Modules\Sales\Deals\Models\Deal](deal)                                           | 1:1      | Cascade  | Restrict |
| id_activity | [Modules\Core\Customers\Models\Activity](../../../core/customers/models/activity) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                    |
| -------- | ---------- | ----------------------------------- |
| DEAL     | BELONGS_TO | Deal::class, 'id_deal', 'id'        |
| ACTIVITY | BELONGS_TO | Company::class, 'id_activity', 'id' |

_Read more about [working with relations](../../database-relations)_
