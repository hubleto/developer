# Model Core/Settings/Label

## Introduction

Label for a Lead or a Deal entry

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | FALSE          |
| table           | labels         |
| lookupSqlValue  | {%TABLE%}.name |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| name | UNIQUE  |                |
