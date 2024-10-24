# Model Core/Settings/Permission

## Introduction

A list of available permissions for models and controllers that are in the system.

## Properties

| Property        | Value                       |
| :-------------- | :-------------------------- |
| isJunctionTable | FALSE                       |
| table           | permissions                 |
| lookupSqlValue  | {%TABLE%}.permission_string |

## Data Scructure

| Column            | Title       | ADIOS Type | Length | Required |
| ----------------- | ----------- | ---------- | ------ | -------- |
| id                | ID          | int        |        | TRUE     |
| permission_string | Permissions | varchar    |        | TRUE     |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
