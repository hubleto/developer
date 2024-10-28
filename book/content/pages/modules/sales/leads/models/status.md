# Model Sales/Leads/Status

## Introduction

A status for a Lead

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | FALSE          |
| table           | lead_statuses  |
| lookupSqlValue  | [TABLE].name |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |
| order  | Order | int        |        | TRUE     |
| color  | Color | color      |        | FALSE    |

## Indexes

| Name  |  Type   | Column + Order |
| :---- | :-----: | -------------: |
| order |   N/A   |      order ASC |
| id    | PRIMARY |         id ASC |
