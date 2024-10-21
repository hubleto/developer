# Model Core/Settings/Profile

## Introduction

A list of profiles created for the company

## Properties

| Property        | Value             |
| :-------------- | :---------------- |
| isJunctionTable | FALSE             |
| table           | profiles          |
| lookupSqlValue  | {%TABLE%}.company |

## Data Scructure

| Column  | Title   | ADIOS Type | Length | Required |
| ------- | ------- | ---------- | ------ | -------- |
| id      | ID      | int        |        | TRUE     |
| company | Company | varchar    |        | TRUE     |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
