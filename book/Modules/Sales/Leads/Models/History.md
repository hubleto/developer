# Model Sales/Leads/History

## Introduction

History for each of created Leads

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| table           | lead_history |
| lookupSqlValue  | {%TABLE%}.id |

## Data Scructure

| Column      | Title       | ADIOS Type | Length | Required |
| ----------- | ----------- | ---------- | ------ | -------- |
| id          | ID          | int        |        | TRUE     |
| id_lead     | Lead        | lookup     |        | TRUE     |
| change_date | Change date | date       |        | TRUE     |
| description | Description | varchar    |        | TRUE     |

## Foreign Keys

| Column  | Model                                      | Relation | OnUpdate | OnDelete |
| ------- | ------------------------------------------ | -------- | -------- | -------- |
| id_lead | [Modules\Sales\Leads\Models\Lead](Lead.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
