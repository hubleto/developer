# Model Sales/Deals/Label

## Introduction

Označenie ktorý môže mať deal, slúžiace na prioritizáciu (hot, warm, cold)

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| sqlName         | labels       |
| lookupSqlValue  | {%TABLE%}.id |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |

## ADIOS parameters

## Foreign Keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
