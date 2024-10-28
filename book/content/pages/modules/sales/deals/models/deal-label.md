# Model Sales/Deals/DealLabel

## Introduction

Labels given to a Lead

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| table         | deal_labels  |
| lookupSqlValue  | [TABLE].id |

## Data Scructure

| Column   | Title | ADIOS Type | Length | Required |
| -------- | ----- | ---------- | ------ | -------- |
| id_deal  | Deal  | lookup     |        | TRUE     |
| id_label | Label | lookup     |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column   | Model                                                                        | Relation | OnUpdate | OnDelete |
| -------- | ---------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_deal  | [Modules\Sales\Deals\Models\Deal](./deal.md)                                   | 1:1      | Cascade  | Restrict |
| id_label | [Modules\Core\Settings\Models\Label](../../../core/settings/models/label.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name | Type | Column + Order |
| :--- | :--: | -------------: |
