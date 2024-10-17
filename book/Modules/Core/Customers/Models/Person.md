# Model Core/Customers/Person

## Introduction

List of contact persons existing in the system

## Constants

## Properties

| Property        | Value                                                  |
| :-------------- | :----------------------------------------------------- |
| isJunctionTable | FALSE                                                  |
| table           | persons                                                |
| lookupSqlValue  | concat({%TABLE%}.first_name, ' ', {%TABLE%}.last_name) |

## Data Scructure

| Column     | Title      | ADIOS Type | Length | Required |
| ---------- | ---------- | ---------- | ------ | -------- |
| id         | ID         | int        |        | TRUE     |
| first_name | First Name | varchar    |        | TRUE     |
| last_name  | Last Name  | varchar    |        | TRUE     |
| id_company | Company    | lookup     |        | TRUE     |
| is_primary | Is Primary | boolean    |        | TRUE     |
| note       | Note       | text       |        | FALSE    |
| is_active  | Active     | boolean    |        | TRUE     |

### Foreign Keys

| Column     | Model                                               | Relation | OnUpdate | OnDelete |
| ---------- | --------------------------------------------------- | -------- | -------- | -------- |
| id_company | [Modules\Core\Customers\Models\Company](Company.md) | 1:1      | Cascade  | Restrict |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
