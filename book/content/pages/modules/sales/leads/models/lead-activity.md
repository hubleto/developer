# Model LeadActivity

namespace CeremonyCrmApp\Modules\Sales\Leads\Models\LeadActivity

List of activities connected to the Lead model.

## Constants

This model does not define constants.

## Properties

| Property                                                                               | Value                        |
| :------------------------------------------------------------------------------------- | :--------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass) | Eloquent\LeadActivity::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                 | lead_activities              |

## Data Scructure

| Column      | Title    | ADIOS Type                                                               | Length | Required |
| ----------- | -------- | ------------------------------------------------------------------------ | ------ | -------- |
| id          | ID       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_lead     | Lead     | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_activity | Activity | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column      | Model                                                                             | Relation | OnUpdate | OnDelete |
| ----------- | --------------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_lead     | [Modules\Sales\Leads\Models\Lead](lead)                                           | 1:1      | Cascade  | Restrict |
| id_activity | [Modules\Core\Customers\Models\Activity](../../../core/customers/models/activity) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                    |
| -------- | ---------- | ----------------------------------- |
| LEAD     | BELONGS_TO | Lead::class, 'id_lead', 'id'        |
| ACTIVITY | BELONGS_TO | Company::class, 'id_activity', 'id' |

_Read more about [working with relations](../../database-relations)_
