# Model Core/Customers/Address

## Introduction

List of addresses belonging to a Person.

## Properties

| Property        | Value                                                                                |
| :-------------- | :----------------------------------------------------------------------------------- |
| isJunctionTable | FALSE                                                                                |
| table           | addresses                                                                            |
| lookupSqlValue  | concat([TABLE].street_line_1, ', ', [TABLE].street_line_2, ', ', [TABLE].city) |

## Data Scructure

| Column        | Title         | ADIOS Type | Length | Required |
| ------------- | ------------- | ---------- | ------ | -------- |
| id            | ID            | int        |        | TRUE     |
| id_person     | Person        | lookup     |        | TRUE     |
| street_line_1 | Street Line 1 | varchar    |        | TRUE     |
| street_line_2 | Street Line 2 | varchar    |        | FALSE    |
| postal_code   | Postal code   | varchar    |        | TRUE     |
| region        | Region        | varchar    |        | TRUE     |
| city          | City          | varchar    |        | TRUE     |
| id_country    | Country       | lookup     |        | TRUE     |

## Foreign Keys

| Column     | Model                                                                    | Relation | OnUpdate | OnDelete |
| ---------- | ------------------------------------------------------------------------ | -------- | -------- | -------- |
| id_person  | [Modules\Core\Customers\Models\Person](person.md../modules/core/customers/models/Person.md)                        | 1:1      | Cascade  | Restrict |
| id_country | [Modules\Core\Settings\Models\Country](../../Settings/Models/Country.mds/models/Country.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
