# Model Core/Customers/Activity

## Introduction

List of activities. Activity only exist with a Company entry.

## Constants

## Properties

| Property        | Value             |
| :-------------- | :---------------- |
| isJunctionTable | FALSE             |
| table           | activities        |
| lookupSqlValue  | {%TABLE%}.subject |

## Data Scructure

| Column           | Title            | ADIOS Type | Length | Required | Additonal |
| ---------------- | ---------------- | ---------- | ------ | -------- | --------- |
| id               | ID               | int        |        | TRUE     |           |
| id_activity_type | Activity type    | lookup     |        | TRUE     |           |
| id_company       | Company          | lookup     |        | TRUE     |           |
| id_user          | Created by       | lookup     |        | TRUE     |           |
| subject          | Activity subject | varchar    |        | TRUE     |           |
| due_date         | Due date         |            |        | TRUE     |           |
| due_time         | Due time         |            |        | TRUE     |           |
| duration         | Duration         | varchar    |        | FALSE    |           |
| completed        | Completed        | boolean    |        | FALSE    |           |

## ADIOS parameters

## Foreign Keys

| Column | Model | Relation | OnUpdate | OnDelete |
| ------ | ----- | -------- | -------- | -------- |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
