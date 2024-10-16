# Model Core/Settings/Currency

## Introduction

Zoznam mien existujúcich v systéme.

## Constants

## Properties

| Property        | Value                   |
| :-------------- | :---------------------- |
| isJunctionTable | FALSE                   |
| sqlName         | currencies               |
| urlBase         | Leads/Settings/Currency |
| lookupSqlValue  | {%TABLE%}.code          |

## Data Scructure

| Column        | Title           | ADIOS Type | Length | Required |
| ------------- | --------------- | ---------- | ------ | -------- |
| id            | ID              | int        |        | TRUE     |
| name          | Currency name   | varchar    |        | TRUE     |
| code          | Currency code   | varchar    |        | TRUE     |
| symbol        | Currency symbol | varchar    |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column     | Model                                               | Relation | OnUpdate | OnDelete |
| ---------- | --------------------------------------------------- | -------- | -------- | -------- |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| code | UNIQUE  |       code ASC |
