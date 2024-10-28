# Model Core/Customers/Company

## Introduction

List of companies existing in the system.

## Properties

| Property        | Value          |
| :-------------- | :------------- |
| isJunctionTable | FALSE          |
| table           | companies      |
| lookupSqlValue  | [TABLE].name |

## Data Scructure

| Column        | Title         | ADIOS Type | Length | Required |
| ------------- | ------------- | ---------- | ------ | -------- |
| id            | ID            | int        |        | TRUE     |
| name          | Company Name  | varchar    |        | TRUE     |
| street_line_1 | Street line 1 | varchar    |        | FALSE     |
| street_line_2 | Street line 2 | varchar    |        | FALSE    |
| region        | Region        | varchar    |        | FALSE     |
| city          | City          | varchar    |        | FALSE     |
| id_country    | Country       | lookup     |        | FALSE     |
| postal_code   | Postal code   | varchar    |        | FALSE     |
| vat_id        | Vat ID        | varchar    |        | FALSE    |
| company_id    | Company ID    | varchar    |        | FALSE    |
| tax_id        | Tax ID        | varchar    |        | FALSE    |
| note          | Note          | text       |        | FALSE    |
| is_active     | Active        | boolean    |        | FALSE    |
| date_created  | Date Created  | date       |        | TRUE     |

## ADIOS parameters

## Foreign Keys

| Column     | Model                                                                    | Relation | OnUpdate | OnDelete |
| ---------- | ------------------------------------------------------------------------ | -------- | -------- | -------- |
| id_country | [Modules\Core\Settings\Models\Country](../../Settings/Models/Country.mds/models/Country.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name       |  Type   | Column + Order |
| :--------- | :-----: | -------------: |
| id         | PRIMARY |         id ASC |
| company_id | UNIQUE  | company_id ASC |
