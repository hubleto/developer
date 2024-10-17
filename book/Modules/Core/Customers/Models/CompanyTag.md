# Model Core/Customers/CompanyTag

## Introduction

List of assigned tags to a Company

## Properties

| Property        | Value            |
| :-------------- | :--------------- |
| isJunctionTable | FALSE            |
| table           | company_tags     |
| lookupSqlValue  | {%TABLE%}.id_tag |

## Data Scructure

| Column     | Title   | ADIOS Type | Length | Required |
| ---------- | ------- | ---------- | ------ | -------- |
| id         | ID      | int        |        | TRUE     |
| id_tag     | Tag     | lookup     |        | TRUE     |
| id_company | Company | lookup     |        | TRUE     |

### Foreign Keys

| Column     | Model                                                            | Relation | OnUpdate | OnDelete |
| ---------- | ---------------------------------------------------------------- | -------- | -------- | -------- |
| id_company | [Modules\Core\Customers\Models\Company](Company.md)              | 1:N      | Cascade  | Restrict |
| id_tag     | [Modules\Core\Settings\Models\Tag](../../Settings/Models/Tag.md) | 1:N      | Cascade  | Restrict |

### Indexes

| Name   |  Type   | Column + Order |
| :----- | :-----: | -------------: |
| id_tag | PRIMARY |         id ASC |
