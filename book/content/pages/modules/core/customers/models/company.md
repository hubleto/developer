# Model Company

namespace CeremonyCrmApp\Modules\Core\Customers\Models\Company

List of companies existing in the system.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                   |
| :--------------------------------------------------------------------------------------- | :---------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Company::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | companies               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].name            |

## Data Scructure

| Column        | Title         | ADIOS Type                                                                 | Length | Required |
| ------------- | ------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id            | ID            | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| name          | Company Name  | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| street_line_1 | Street line 1 | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| street_line_2 | Street line 2 | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| region        | Region        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| city          | City          | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| id_country    | Country       | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | FALSE    |
| postal_code   | Postal code   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| vat_id        | Vat ID        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| company_id    | Company ID    | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| tax_id        | Tax ID        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| note          | Note          | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | FALSE    |
| is_active     | Active        | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | FALSE    |
| date_created  | Date Created  | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | TRUE     |

## Foreign Keys

| Column     | Model                                                                    | Relation | OnUpdate | OnDelete |
| ---------- | ------------------------------------------------------------------------ | -------- | -------- | -------- |
| id_country | [Modules\Core\Settings\Models\Country](../../settings/models/country.md) | 1:1      | Cascade  | Restrict |

## Indexes

| Name       |  Type   | Column + Order |
| :--------- | :-----: | -------------: |
| id         | PRIMARY |         id ASC |
| company_id | UNIQUE  | company_id ASC |

## Relations

TODO
