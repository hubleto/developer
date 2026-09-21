# Model Company

namespace Hubleto\App\Customers\Models\Company

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
| postal_code   | Postal code   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| vat_id        | Vat ID        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| tax_id        | Tax ID        | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| company_id    | Company ID    | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| note          | Note          | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | FALSE    |
| is_active     | Active        | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | FALSE    |
| date_created  | Date Created  | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | TRUE     |
| id_country    | Country       | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | FALSE    |
| id_user       | Assigned User | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column     | Model                                                                 | Relation | OnUpdate | OnDelete |
| ---------- | --------------------------------------------------------------------- | -------- | -------- | -------- |
| id_country | [Modules\Core\Settings\Models\Country](../../settings/models/country) | 1:1      | Cascade  | Restrict |
| id_user    | [Modules\Core\Settings\Models\User](../../settings/models/user)       | 1:1      | Cascade  | Restrict |

## Indexes

| Name       |  Type   | Column + Order |
| :--------- | :-----: | -------------: |
| id         | PRIMARY |         id ASC |
| var_id     | UNIQUE  | company_id ASC |
| company_id | UNIQUE  | company_id ASC |
| tax_id     | UNIQUE  | company_id ASC |

## Relations

| Relation         | Type       | Other parameters                           |
| ---------------- | ---------- | ------------------------------------------ |
| PERSONS          | HAS_MANY   | Person::class, 'id_company'                |
| COUNTRY          | HAS_ONE    | Country::class, 'id', 'id_country'         |
| USER             | BELONGS_TO | User::class, 'id_user', 'id'               |
| FIRST_CONTACT    | HAS_ONE    | Person::class, 'id_company',               |
| BILLING_ACCOUNTS | HAS_MANY   | BillingAccount::class, 'id_company',       |
| ACTIVITIES       | HAS_MANY   | CompanyActivity::class, 'id_company', id   |
| TAGS             | HAS_MANY   | CompanyTag::class, 'id_company', 'id'      |
| LEADS            | HAS_MANY   | Lead::class, 'id_company', 'id'            |
| DEALS            | HAS_MANY   | Deal::class, 'id_company', 'id'            |
| DOCUMENTS        | HAS_MANY   | CompanyDocument::class, 'id_company', 'id' |
