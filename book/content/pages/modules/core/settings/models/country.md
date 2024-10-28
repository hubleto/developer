# Model Core/Settings/Country

## Introduction

List of countries existing in the system.

## Constants

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | FALSE          |
| table           | countries      |
| lookupSqlValue  | [TABLE].name |

## Data Scructure

| Column | Title | ADIOS Type | Length | Required |
| ------ | ----- | ---------- | ------ | -------- |
| id     | ID    | int        |        | TRUE     |
| name   | Name  | varchar    |        | TRUE     |
| code   | Code  | varchar    | 5      | TRUE     |

## ADIOS parameters

## Foreign Keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
| code | UNIQUE  |       code ASC |
