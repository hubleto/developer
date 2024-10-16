# Model Sales/Deals/DealLabel

## Introduction

Označenie ktorý môže mať deal, slúžiace na prioritizáciu (hot, warm, cold)

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| sqlName         | deal_labels  |
| lookupSqlValue  | {%TABLE%}.id |

## Data Scructure

| Column   | Title | ADIOS Type | Length | Required |
| -------- | ----- | ---------- | ------ | -------- |
| id_deal  | Deal  | lookup     |        | TRUE     |
| id_label | Label | lookup     |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column   | Model                                        | Relation | OnUpdate | OnDelete |
| -------- | -------------------------------------------- | -------- | -------- | -------- |
| id_deal  | [Modules\Sales\Deals\Models\Deal](Deal.md)   | 1:1      | Cascade  | Restrict |
| id_label | [Modules\Sales\Deals\Models\Label](Label.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
