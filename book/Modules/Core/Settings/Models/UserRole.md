# Model Core/Settings/UserRole

## Introduction

A list of roles assignable to a user.

## Constants

| Constant Name      | Value                                                |
| ------------------ | ---------------------------------------------------- |
| USER_ROLES         | _An array containing all the roles mentioned bellow_ |
| ROLE_ADMINISTRATOR | ADMINISTRATOR                                        |

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | FALSE          |
| table           | user_roles     |
| lookupSqlValue  | {%TABLE%}.role |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| role   | Role  | varchar    |        | TRUE     |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
