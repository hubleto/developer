# Model Lead

namespace CeremonyCrmApp\Modules\Sales\Leads\Models\Lead

List of created Leads

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                |
| :--------------------------------------------------------------------------------------- | :------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Lead::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | leads                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].title        |

## Data Scructure

| Column              | Title               | ADIOS Type                                                                 | Length | Required |
| ------------------- | ------------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id                  | ID                  | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| title               | Lead Title          | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_company          | Company             | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_person           | Contact Person      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_lead             | Lead                | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| price               | Price               | [float](https://docs.wai.blue/adios-framework/models/attributes#float)     |        | FALSE    |
| id_currency         | Currency            | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| date_expected_close | Expected close date | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | FALSE    |
| id_user             | Owner               | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_status           | Status              | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| note                | Note                | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | FALSE    |
| source_channel      | Source Channel      | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| is_archived         | Archived            | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | TRUE     |

## Foreign Keys

| Column      | Model                                                                                   | Relation | OnUpdate | OnDelete |
| ----------- | --------------------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_company  | [Modules\Core\Customers\Models\Company](../../../core/customers/models/company.md)      | 1:1      | Cascade  | Restrict |
| id_person   | [Modules\Core\Customers\Models\Person](../../../core/customers/models/person.md)        | 1:1      | Cascade  | Restrict |
| id_lead     | [Modules\Sales\Leads\Models\Leads](../../leads/models/lead.md)                          | 1:1      | Cascade  | Restrict |
| id_currency | [Modules\Core\Settins\Models\Currency](../../../core/settings/models/currency.md)       | 1:1      | Cascade  | Restrict |
| id_user     | [Modules\Core\Settings\Models\User](../../../core/settings/models/user.md)              | 1:1      | Cascade  | Restrict |
| id_status   | [Modules\Core\Settings\Models\LeadStatus](../../../core/settings/models/lead-status.md) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Model                                                         | Eloquent Type | Foreign Key | Local Key |
| ------------------------------------------------------------- | ------------- | ----------- | --------- |
| [Modules\Sales\Leads\Models\Lead](../../leads/models/lead.md) | Has One       | id_lead     | id        |
| [Modules\Sales\Leads\Models\LeadHistory](lead-history.md)     | Has Many      | id_lead     | id        |
| [Modules\Sales\Leads\Models\LeadLabel](lead-label.md)         | Has Many      | id_lead     | id        |

TODO
