# Model Core/Settings/Pipeline

## Introduction

Pipeline that can be chosen for a Deal

## Constants

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | FALSE          |
| table           | pipelines      |
| lookupSqlValue  | {%TABLE%}.name |

## Data Scructure

| Column      | Title       | ADIOS Type | Length | Required |
| ----------- | ----------- | ---------- | ------ | -------- |
| id          | ID          | int        |        | TRUE     |
| name        | Name        | varchar    |        | TRUE     |
| description | Description | text       |        | FALSE    |

## Additional Relations

| Model                                                   | Eloquent Type | Foreign Key | Local Key |
| ------------------------------------------------------- | ------------- | ----------- | --------- |
| [Modules\Core\Settings\PipelineStage](PipelineStage.md) | Has Many      | id_pipeline | id        |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| name | UNIQUE  |                |
