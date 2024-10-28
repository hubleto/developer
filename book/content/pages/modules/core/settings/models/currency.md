# Model Core/Settings/Currency

## Introduction

List of currencies existing in the system

## Properties

| Property        | Value                                              |
| :-------------- | :------------------------------------------------- |
| isJunctionTable | FALSE                                              |
| table           | currencies                                         |
| lookupSqlValue  | CONCAT([TABLE].name ," ","(",[TABLE].code,")") |

## Data Scructure

| Column | Title           | ADIOS Type | Length | Required |
| ------ | --------------- | ---------- | ------ | -------- |
| id     | ID              | int        |        | TRUE     |
| name   | Currency name   | varchar    |        | TRUE     |
| code   | Currency code   | varchar    |        | TRUE     |
| symbol | Currency symbol | varchar    |        | TRUE     |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| name | UNIQUE  |       name ASC |
| code | UNIQUE  |                |
