# Model Sales/Leads/Status

## Introduction

Status ktorý môže mať lead (new, in progress, closed, lost)

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| sqlName         | lead_status  |
| lookupSqlValue  | {%TABLE%}.id |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |
| order  | Order | int        |        | TRUE     |
| color  | Color | color      |        | TRUE     |

## ADIOS parameters

## Foreign Keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
