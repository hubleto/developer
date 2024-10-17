# Model Core/Customers/PersonTag

## Introduction

List of assigned tags to a Person

## Properties

| Property        | Value                  |
| :-------------- | :--------------------- |
| isJunctionTable | FALSE                  |
| table           | person_tags            |
| lookupSqlValue  | {%TABLE%}.id           |

## Data Scructure

| Column    | Title  | ADIOS Type | Length | Required |
| --------- | ------ | ---------- | ------ | -------- |
| id        | ID     | int        |        | TRUE     |
| id_tag    | Tag    | lookup     |        | TRUE     |
| id_person | Person | lookup     |        | TRUE     |

### Foreign Keys

| Column    | Model                                                            | Relation | OnUpdate | OnDelete |
| --------- | ---------------------------------------------------------------- | -------- | -------- | -------- |
| id_person | [Modules\Core\Customers\Models\Person](Person.md)                | 1:N      | Cascade  | Restrict |
| id_tag    | [Modules\Core\Settings\Models\Tag](../../Settings/Models/Tag.md) | 1:N      | Cascade  | Restrict |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
