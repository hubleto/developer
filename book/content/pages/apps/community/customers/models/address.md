# Model Address

namespace HubletoApp\Customers\Models\Address

List of addresses belonging to a Person.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                                                                          |
| :--------------------------------------------------------------------------------------- | :----------------------------------------------------------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Address::class                                                        |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | addresses                                                                      |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | concat([TABLE].street_line_1, ', ', [TABLE].street_line_2, ', ', [TABLE].city) |

## Data Scructure

| Column        | Title         | ADIOS Type                                                                 | Length | Required |
| ------------- | ------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id            | ID            | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| street_line_1 | Street Line 1 | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| street_line_2 | Street Line 2 | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| postal_code   | Postal code   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| region        | Region        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| city          | City          | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_person     | Person        | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_country    | Country       | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column     | Model                                                                 | Relation | OnUpdate | OnDelete |
| ---------- | --------------------------------------------------------------------- | -------- | -------- | -------- |
| id_person  | [Modules\Core\Customers\Models\Person](person)                        | 1:1      | Cascade  | Restrict |
| id_country | [Modules\Core\Settings\Models\Country](../../settings/models/country) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                   |
| -------- | ---------- | ---------------------------------- |
| PERSON   | BELONGS_TO | Person::class, 'id_person', 'id'   |
| COUNTRY  | BELONGS_TO | Country::class, 'id', 'id_country' |
