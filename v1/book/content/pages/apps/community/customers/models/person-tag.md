# Model PersonTag

namespace Hubleto\App\Customers\Models\PersonTag

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
| id_tag    | [Modules\Core\Settings\Models\Tag](../../settings/models/tag) | 1:N      | Cascade  | Restrict |
| id_person | [Modules\Core\Customers\Models\Person](person)              | 1:N      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                 |
| -------- | ---------- | -------------------------------- |
| TAG      | BELONGS_TO | Tag::class, 'id_tag', 'id'       |
| PERSON   | BELONGS_TO | Person::class, 'id_person', 'id' |
