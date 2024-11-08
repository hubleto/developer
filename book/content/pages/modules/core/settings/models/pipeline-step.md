# Model PipelineStep

namespace CeremonyCrmApp\Modules\Core\Settings\Models\PipelineStep

List of pipeline stages for specific pipilines.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                        |
| :--------------------------------------------------------------------------------------- | :--------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\PipelineStep::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | pipeline_stages              |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name                 |

## Data Scructure

| Column      | Title    | ADIOS Type                                                                 | Length | Required |
| ----------- | -------- | -------------------------------------------------------------------------- | ------ | -------- |
| id          | ID       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name        | Name     | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_pipeline | Pipeline | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| order       | Order    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |

## Foreign Keys

| Column      | Model                                                | Relation | OnUpdate | OnDelete |
| ----------- | ---------------------------------------------------- | -------- | -------- | -------- |
| id_pipeline | [Modules\Core\Settings\Models\Pipeline](pipeline.md) | 1:1      | Cascade  | Cascade  |

## Indexes

| Name  |  Type   | Column + Order |
| :---- | :-----: | -------------: |
| order |   N/A   |      order ASC |
| id    | PRIMARY |         id ASC |

## Relations

| Relation | Type       | Other parameters                     |
| -------- | ---------- | ------------------------------------ |
| PIPELINE | BELONGS_TO | Pipeline::class, 'id_pipeline', 'id' |
