# Model Core/Settings/Setting

## Introduction

A list of custom settings

## Properties

| Property        | Value         |
| :-------------- | :------------ |
| isJunctionTable | FALSE         |
| table           | settings      |
| lookupSqlValue  | {%TABLE%}.key |

## Data Scructure

| Column  | Title | ADIOS Type | Length | Required |
| ------- | ----- | ---------- | ------ | -------- |
| id      | ID    | int        |        | TRUE     |
| key     | Key   | varchar    |        | TRUE     |
| value   | Value | text       |        | TRUE     |
| id_user | User  | lookup     |        | TRUE     |

### Foreign Keys

| Column  | Model                                        | Relation | OnUpdate | OnDelete |
| ------- | -------------------------------------------- | -------- | -------- | -------- |
| id_user | [Modules\Core\Settings\Models\User](User.md) | 1:1      | Cascade  | Cascade  |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
