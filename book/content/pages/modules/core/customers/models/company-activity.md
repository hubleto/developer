# Model CompanyActivity

namespace HubletoApp\Customers\Models\CompanyActivity

List of activities connected to the Company model.

## Constants

This model does not define constants.

## Properties

| Property                                                                               | Value                           |
| :------------------------------------------------------------------------------------- | :------------------------------ |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass) | Eloquent\CompanyActivity::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                 | company_activities              |

## Data Scructure

| Column      | Title    | ADIOS Type                                                               | Length | Required |
| ----------- | -------- | ------------------------------------------------------------------------ | ------ | -------- |
| id          | ID       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_company  | Company  | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_activity | Activity | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column      | Model                                              | Relation | OnUpdate | OnDelete |
| ----------- | -------------------------------------------------- | -------- | -------- | -------- |
| id_company  | [Modules\Core\Customers\Models\Company](company)   | 1:1      | Cascade  | Restrict |
| id_activity | [Modules\Core\Customers\Models\Activity](activity) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                    |
| -------- | ---------- | ----------------------------------- |
| COMPANY  | BELONGS_TO | Company::class, 'id_company', 'id'  |
| ACTIVITY | BELONGS_TO | Activity::class, 'id_activity', 'id' |

_Read more about [working with relations](../../database-relations)_
