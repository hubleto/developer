# Model Core/Customers/Contact

## Introduction

List of contact information for a person

## Properties

| Property        | Value         |
| :-------------- | :------------ |
| isJunctionTable | FALSE         |
| table           | contacts      |
| lookupSqlValue  | [TABLE].value |

## Data Scructure

| Column    | Title        | ADIOS Type | Length | Required | Additional parameters                                                                                                 |
| --------- | ------------ | ---------- | ------ | -------- | --------------------------------------------------------------------------------------------------------------------- |
| id        | ID           | int        |        | TRUE     |                                                                                                                       |
| id_person | Person       | lookup     |        | TRUE     |                                                                                                                       |
| type      | Contact type | varchar    |        | TRUE     | enum_values: [email => Email, phone_number => Phone Number, website => Website, linkedid => LinkedIn, fax => Fax,...] |
| value     | Value        | varchar    |        | TRUE     |                                                                                                                       |

## Foreign Keys

| Column     | Model                                             | Relation | OnUpdate | OnDelete |
| ---------- | ------------------------------------------------- | -------- | -------- | -------- |
| id_country | [Modules\Core\Customers\Models\Person](person.md../modules/core/customers/models/Person.md) | 1:1      | Cascade  | Restrict |

### Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
