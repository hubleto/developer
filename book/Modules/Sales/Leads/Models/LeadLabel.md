# Model Sales/Leads/LeadLabel

## Introduction

Označenie ktorý môže mať lead, slúžiace na prioritizáciu (hot, warm, cold)

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| sqlName         | lead_labels  |
| lookupSqlValue  | {%TABLE%}.id |

## Data Scructure

| Column   | Title | ADIOS Type | Length | Required |
| -------- | ----- | ---------- | ------ | -------- |
| id_lead  | Lead  | lookup     |        | TRUE     |
| id_label | Label | lookup     |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column   | Model                                             | Relation | OnUpdate | OnDelete |
| -------- | ------------------------------------------------- | -------- | -------- | -------- |
| id_lead  | [Modules\Sales\Leads\Models\Lead.md](Lead.md)        | 1:1      | Cascade  | Restrict |
| id_label | [Modules\Sales\Leads\Models\Lead\Label](Label.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
