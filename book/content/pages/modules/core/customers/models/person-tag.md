# Model PersonTag

namespace CeremonyCrmApp\Modules\Core\Customers\Models\PersonTag

List of assigned tags to a Person

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                     |
| :--------------------------------------------------------------------------------------- | :------------------------ |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\PersonTag::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | person_tags               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id                |

## Data Scructure

| Column    | Title  | ADIOS Type | Length | Required |
| --------- | ------ | ---------- | ------ | -------- |
| id        | ID     | int        |        | TRUE     |
| id_tag    | Tag    | lookup     |        | TRUE     |
| id_person | Person | lookup     |        | TRUE     |

## Foreign Keys

| Column    | Model                                                            | Relation | OnUpdate | OnDelete |
| --------- | ---------------------------------------------------------------- | -------- | -------- | -------- |
| id_person | [Modules\Core\Customers\Models\Person](./person.md)              | 1:N      | Cascade  | Restrict |
| id_tag    | [Modules\Core\Settings\Models\Tag](../../settings/models/Tag.md) | 1:N      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

TODO

