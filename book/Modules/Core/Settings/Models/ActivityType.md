# Model Core/Settings/ActivityType

## Introduction

List of assignable types for Activities. Activity types are closely tied to the Calendar. Activity with a type that has ```calendar_visibility``` set to ```true``` will be shown in the Calendar. The color of the activity type will be reflected on the activity in the weekly and daily view of the calendar or on a all day activity.

## Properties

| Property       | Value          |
| :------------- | :------------- |
| table          | activity_types |
| lookupSqlValue | {%TABLE%}.name |

## Data Scructure

| Column              | Title             | ADIOS Type | Length | Required |
| ------------------- | ----------------- | ---------- | ------ | -------- |
| id                  | ID                | int        |        | TRUE     |
| name                | Type Name         | varchar    |        | TRUE     |
| color               | Color             | varchar    |        | TRUE     |
| calendar_visibility | Shown in Calendar | varchar    |        | TRUE     |
| icon                | Icon              | varchar    |        | TRUE     |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
