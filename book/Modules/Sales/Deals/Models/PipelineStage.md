# Model Sales/Deals/PipelineStage

## Introduction

Pipeline stage pre dealy.

## Constants

## Properties

| Property        | Value           |
| :-------------- | :-------------- |
| isJunctionTable | FALSE           |
| sqlName         | pipeline_stages |
| lookupSqlValue  | {%TABLE%}.id    |

## Data Scructure

| Column         | Title    | ADIOS Type | Length | Required |
| -------------- | -------- | ---------- | ------ | -------- |
| id             | ID       | int        |        | TRUE     |
| id_pipeline    | Pipeline | lookup     |        | TRUE     |
| order          | Order    | int        |        | TRUE     |
| is_final_stage | Final    | boolean    |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column      | Model                                              | Relation | OnUpdate | OnDelete |
| ----------- | -------------------------------------------------- | -------- | -------- | -------- |
| id_pipeline | [Modules\Sales\Deals\Models\Pipeline](Pipeline.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
