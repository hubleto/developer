# Model Core/Settings/Tag

## Introduction

A list of asignable tags for a Company or a Person

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| table           | tags         |
| lookupSqlValue  | [TABLE].id |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |
| color  | Color | color      |        | TRUE     |

### ADIOS parameters

### Foreign Keys

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
