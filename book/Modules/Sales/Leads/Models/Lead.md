# Model Sales/Leads/Lead

## Introduction

Zoznam vytvorených leadov, ktoré existujú v systéme.

## Constants

## Properties

| Property        | Value            |
| :-------------- | :--------------- |
| isJunctionTable | FALSE            |
| sqlName         | leads            |
| urlBase         | sales/leads/lead |
| lookupSqlValue  | {%TABLE%}.id     |

## Data Scructure

| Column              | Title               | ADIOS Type | Length | Required |
| ------------------- | ------------------- | ---------- | ------ | -------- |
| id                  | ID                  | int        |        | TRUE     |
| title               | Lead Title          | varchar    |        | TRUE     |
| id_contact_person   | Contact Person      | lookup     |        | TRUE     |
| id_company          | Company             | lookup     |        | TRUE     |
| id_status           | Status              | lookup     |        | TRUE     |
| id_currency         | Currency            | lookup     |        | TRUE     |
| id_owner            | Owner               | lookup     |        | TRUE     | *
| date_expected_close | Expected close date | date       |        | FALSE    |
| value               | Price value         | float      |        | FALSE    |
| source_channel      | Source Chanel       | varchar    |        | FALSE    |
| is_archived         | Archived            | boolean    |        | TRUE     |
| note                | Note                | text       |        | FALSE    |

## ADIOS parameters

## Foreign Keys

| Column            | Model                                                       | Relation | OnUpdate | OnDelete |
| ----------------- | ----------------------------------------------------------- | -------- | -------- | -------- |
| id_contact_person | [Modules\Core\Customers\Models\Person](Person.md)           | 1:1      | Cascade  | Restrict |
| id_company        | [Modules\Core\Customers\Models\Company](Company.md)         | 1:1      | Cascade  | Restrict |
| id_status         | [Modules\Sales\Leads\Models\Status](Status.md)              | 1:1      | Cascade  | Restrict |
| id_currency       | [Modules\Sales\Leads\Models\Settings\Currency](Currency.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name       |  Type   | Column + Order |
| :--------- | :-----: | -------------: |
| id         | PRIMARY |         id ASC |
