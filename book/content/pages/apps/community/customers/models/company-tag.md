# Model CompanyTag

namespace HubletoApp\Customers\Models\CompanyTag

List of assigned tags to a Company

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                      |
| :--------------------------------------------------------------------------------------- | :------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\CompanyTag::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | company_tags               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].id_tag             |

## Data Scructure

| Column     | Title   | ADIOS Type                                                               | Length | Required |
| ---------- | ------- | ------------------------------------------------------------------------ | ------ | -------- |
| id         | ID      | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_tag     | Tag     | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_company | Company | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column     | Model                                                         | Relation | OnUpdate | OnDelete |
| ---------- | ------------------------------------------------------------- | -------- | -------- | -------- |
| id_tag     | [Modules\Core\Settings\Models\Tag](../../settings/models/tag) | 1:N      | Cascade  | Restrict |
| id_company | [Modules\Core\Customers\Models\Company](./company)            | 1:N      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                   |
| -------- | ---------- | ---------------------------------- |
| TAG      | BELONGS_TO | Tag::class, 'id_tag', 'id'         |
| COMPANY  | BELONGS_TO | Company::class, 'id_company', 'id' |
