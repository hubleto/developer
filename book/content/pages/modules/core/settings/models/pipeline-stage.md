# Model Core/Settings/PipelineStage

## Introduction

Pipeline stages for a specific Pipeline

## Properties

| Property        | Value           |
| :-------------- | :-------------- |
| isJunctionTable | FALSE           |
| table           | pipeline_stages |
| lookupSqlValue  | [TABLE].name  |

## Data Scructure

| Column      | Title    | ADIOS Type | Length | Required |
| ----------- | -------- | ---------- | ------ | -------- |
| id          | ID       | int        |        | TRUE     |
| name        | Name     | varchar    |        | TRUE     |
| id_pipeline | Pipeline | lookup     |        | TRUE     |
| order       | Order    | int        |        | TRUE     |

## Foreign Keys

| Column      | Model                                              | Relation | OnUpdate | OnDelete |
| ----------- | -------------------------------------------------- | -------- | -------- | -------- |
| id_pipeline | [Modules\Sales\Deals\Models\Pipeline](../../settings/models/Pipeline.md| 1:1      | Cascade  | Cascade  |

## Indexes

| Name  |  Type   | Column + Order |
| :---- | :-----: | -------------: |
| order |   N/A   |      order ASC |
| id    | PRIMARY |         id ASC |
