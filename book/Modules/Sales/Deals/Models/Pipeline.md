# Model Sales/Deals/Pipeline

## Introduction

Pipeline pre dealy.

## Constants

## Properties

| Property        | Value        |
| :-------------- | :----------- |
| isJunctionTable | FALSE        |
| sqlName         | pipelines    |
| lookupSqlValue  | {%TABLE%}.id |

## Data Scructure

| Column      | Title       | ADIOS Type | Length | Required |
| ----------- | ----------- | ---------- | ------ | -------- |
| id          | ID          | int        |        | TRUE     |
| name        | Name        | varchar    |        | TRUE     |
| description | Description | text       |        | TRUE     |
| color       | Color       | color      |        | TRUE     |

## ADIOS parameters

## Foreign Keys

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
