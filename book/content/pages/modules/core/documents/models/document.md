# Model Core/Documents/Document

## Introduction

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| table           | documents    |
| lookupSqlValue  | [TABLE].id |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |
| file   | File  | file       |        | TRUE     |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
