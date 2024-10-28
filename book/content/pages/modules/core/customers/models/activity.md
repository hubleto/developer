# Model Core/Customers/Activity

## Introduction

List of activities. Activity only exist with a Company entry.

## Constants

## Properties

| Property        | Value             |
| :-------------- | :---------------- |
| isJunctionTable | FALSE             |
| table           | activities        |
| lookupSqlValue  | [TABLE].subject |

## Data Scructure

| Column           | Title            | ADIOS Type | Length | Required |
| ---------------- | ---------------- | ---------- | ------ | -------- |
| id               | ID               | int        |        | TRUE     |
| subject          | Activity subject | varchar    |        | TRUE     |
| date_start       | Start Date       | date       |        | FALSE    |
| time_start       | Start Time       | time       |        | FALSE    |
| date_end         | End Date         | date       |        | FALSE    |
| time_end         | End Time         | time       |        | FALSE    |
| all_day          | All day          | boolean    |        | FALSE    |
| completed        | Completed        | boolean    |        | FALSE    |
| id_activity_type | Activity type    | lookup     |        | TRUE     |
| id_company       | Company          | lookup     |        | TRUE     |
| id_user          | Created by       | lookup     |        | TRUE     |

## Foreign Keys

| Column           | Model                                                                          | Relation | OnUpdate | OnDelete |
| ---------------- | ------------------------------------------------------------------------------ | -------- | -------- | -------- |
| id_company       | [Modules\Core\Customers\Models\Company](company.md./modules/core/customers/models/Company.md)                            | 1:1      | Cascade  | Restrict |
| id_activity_type | [Modules\Core\Customers\Models\Company](../../Settings/Models/ActivityType.mdels/ActivityType.md) | 1:1      | Cascade  | Restrict |
| id_user          | [Modules\Core\Settings\Models\User](../../Settings/Models/User.mdings/models/User.md)             | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
