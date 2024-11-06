# Model Pipeline

namespace CeremonyCrmApp\Modules\Core\Settings\Models\Pipeline

List of pipelines that can be chosen for a Deal.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                        |
| :--------------------------------------------------------------------------------------- | :--------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\ActivityType::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | Pipeline                     |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name                 |

## Data Scructure

| Column | Title | ADIOS Type                                                                 | Length | Required |
| ------ | ----- | -------------------------------------------------------------------------- | ------ | -------- |
| id     | ID    | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name   | Name  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

This model does not contain any foreing keys

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Model                                                   | Eloquent Type | Foreign Key | Local Key |
| ------------------------------------------------------- | ------------- | ----------- | --------- |
| [Modules\Core\Settings\PipelineStage](pipeline-step.md) | Has Many      | id_pipeline | id        |
