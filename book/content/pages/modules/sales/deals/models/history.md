# Model Sales/Deals/History

## Introduction

History for each of created Deals

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| table           | deal_history |
| lookupSqlValue  | [TABLE].id |

## Data Scructure

| Column      | Title       | ADIOS Type | Length | Required |
| ----------- | ----------- | ---------- | ------ | -------- |
| id          | ID          | int        |        | TRUE     |
| id_deal     | Deal        | lookup     |        | TRUE     |
| change_date | Change date | timestamp  |        | TRUE     |
| notes       | Notes       | text       |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column  | Model                                      | Relation | OnUpdate | OnDelete |
| ------- | ------------------------------------------ | -------- | -------- | -------- |
| id_lead | [Modules\Sales\Deals\Models\Deal](Deal.md./../modules/sales/deals/models/deal.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
