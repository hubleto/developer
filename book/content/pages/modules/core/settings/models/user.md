# Model Core/Settings/User

## Introduction

A list of user in the system.

## Properties

| Property        | Value      |
| :-------------- | :--------- |
| isJunctionTable | FALSE      |
| table           | users      |
| lookupSqlValue  | [TABLE].id |

## Data Scructure

| Column            | Title          | ADIOS Type | Length | Required |
| ----------------- | -------------- | ---------- | ------ | -------- |
| id                | ID             | int        |        | TRUE     |
| first_name        | First Name     | varchar    |        | TRUE     |
| middle_name       | Middle Name    | varchar    |        | TRUE     |
| last_name         | Last Name      | varchar    |        | TRUE     |
| email             | Email          | varchar    |        | TRUE     |
| language          | Language       | varchar    |        | TRUE     |
| id_active_profile | Active profile | lookup     |        | TRUE     |

### Foreign Keys

| Column            | Model                                              | Relation | OnUpdate | OnDelete |
| ----------------- | -------------------------------------------------- | -------- | -------- | -------- |
| id_active_profile | [Modules\Core\Settings\Models\Profile](./Profile.md) | 1:1      | Cascade  | Cascade  |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
