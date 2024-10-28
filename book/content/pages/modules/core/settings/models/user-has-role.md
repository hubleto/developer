# Model Core/Settings/UserHasRole

## Introduction

An table for assigning roles to a user

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | TRUE           |
| table           | user_has_roles |
| lookupSqlValue  | [TABLE].id   |

## Data Scructure

| Column  | Title | ADIOS Type | Length | Required |
| ------- | ----- | ---------- | ------ | -------- |
| id      | ID    | int        |        | TRUE     |
| id_user | User  | lookup     |        | TRUE     |
| id_role | Roles | lookup     |        | TRUE     |

### Foreign Keys

| Column  | Model                                            | Relation | OnUpdate | OnDelete |
| ------- | ------------------------------------------------ | -------- | -------- | -------- |
| id_user | [Modules\Core\Settings\Models\User](../../settings/models/User.md    | 1:1      | Cascade  | Cascade  |
| id_role | [Modules\Core\Settings\Models\Role](user-role.mdngs/models/UserRole.md| 1:1      | Cascade  | Cascade  |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
