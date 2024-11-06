# Model ActivityType

namespace CeremonyCrmApp\Modules\Core\Settings\Models\ActivityType

List of assignable types for Activities. Activity types are closely tied to the Calendar. Activity with a type that has `calendar_visibility` set to `true` will be shown in the Calendar. The color of the activity type will be reflected on the activity in the weekly and daily view of the calendar or on a all day activity.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                        |
| :--------------------------------------------------------------------------------------- | :--------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\ActivityType::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | activity_types               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name                 |

## Data Scructure

| Column              | Title             | ADIOS Type                                                                 | Length | Required |
| ------------------- | ----------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id                  | ID                | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name                | Type Name         | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| color               | Color             | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| calendar_visibility | Shown in Calendar | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| icon                | Icon              | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

This model does not contain any relations.
