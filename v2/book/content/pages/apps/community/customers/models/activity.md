# Model Activity

namespace Hubleto\App\Customers\Models\Activity

List of activities. Some activies are connected to a model.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                    |
| :--------------------------------------------------------------------------------------- | :----------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Activity::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | activities               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].subject          |

## Data Scructure

| Column           | Title            | ADIOS Type                                                                 | Length | Required |
| ---------------- | ---------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id               | ID               | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| subject          | Activity subject | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| date_start       | Start Date       | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | FALSE    |
| time_start       | Start Time       | [time](https://docs.wai.blue/adios-framework/models/attributes#time)       |        | FALSE    |
| date_end         | End Date         | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | FALSE    |
| time_end         | End Time         | [time](https://docs.wai.blue/adios-framework/models/attributes#time)       |        | FALSE    |
| all_day          | All day          | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | FALSE    |
| completed        | Completed        | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | FALSE    |
| id_activity_type | Activity type    | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_user          | Created by       | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column           | Model                                                                            | Relation | OnUpdate | OnDelete |
| ---------------- | -------------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_activity_type | [Modules\Core\Settings\Models\ActivityType](../../settings/models/activity-type) | 1:1      | Cascade  | Restrict |
| id_user          | [Modules\Core\Settings\Models\User](../../settings/models/user)                  | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation         | Type       | Other parameters                              |
| ---------------- | ---------- | --------------------------------------------- |
| COMPANY_ACTIVITY | HAS_ONE    | CompanyActivity::class, 'id_activity', 'id'   |
| LEAD_ACTIVITY    | HAS_ONE    | CompanyActivity::class, 'id_activity', 'id'   |
| DEAL_ACTIVITY    | HAS_ONE    | CompanyActivity::class, 'id_activity', 'id'   |
| USER             | BELONGS_TO | User::class, 'id_user', 'id'                  |
| ACTIVITY_TYPE    | HAS_ONE    | ActivityType::class, 'id', 'id_activity_type' |

_Read more about [working with relations](../../database-relations)_
