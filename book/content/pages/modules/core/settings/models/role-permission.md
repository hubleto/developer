# Model Core/Settings/RolePermission

## Introduction

An table for assigning roles to a user

## Properties

| Property        | Value                   |
| :-------------- | :---------------------- |
| isJunctionTable | TRUE                    |
| table           | role_permissions        |
| lookupSqlValue  | [TABLE].id_permission |

## Data Scructure

| Column        | Title      | ADIOS Type | Length | Required |
| ------------- | ---------- | ---------- | ------ | -------- |
| id            | ID         | int        |        | TRUE     |
| id_permission | Permission | lookup     |        | TRUE     |
| id_role       | Roles      | lookup     |        | TRUE     |

### Foreign Keys

| Column        | Model                                                    | Relation | OnUpdate | OnDelete |
| ------------- | -------------------------------------------------------- | -------- | -------- | -------- |
| id_permission | [Modules\Core\Settings\Models\Permission](permission.md) | 1:1      | Cascade  | Cascade  |
| id_role       | [Modules\Core\Settings\Models\Role](UserRole.md)         | 1:1      | Cascade  | Cascade  |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
