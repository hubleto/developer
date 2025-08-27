# Model Lead

namespace Hubleto\App\Leads\Models\Lead

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
| price               | Price               | [float](https://docs.wai.blue/adios-framework/models/attributes#float)     |        | FALSE    |
| date_expected_close | Expected close date | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | FALSE    |
| date_created        | Date Created        | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | FALSE    |
| note                | Note                | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | FALSE    |
| source_channel      | Source Channel      | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| is_archived         | Archived            | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | TRUE     |
| id_company          | Company             | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | FALSE    |
| id_person           | Contact Person      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | FALSE    |
| id_currency         | Currency            | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_user             | Assigned User       | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_status           | Status              | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |

## Foreign Keys

| Column      | Model                                                                                | Relation | OnUpdate | OnDelete |
| ----------- | ------------------------------------------------------------------------------------ | -------- | -------- | -------- |
| id_company  | [Modules\Core\Customers\Models\Company](../../../core/customers/models/company)      | 1:1      | Cascade  | Restrict |
| id_person   | [Modules\Core\Customers\Models\Person](../../../core/customers/models/person)        | 1:1      | Cascade  | Restrict |
| id_currency | [Modules\Core\Settins\Models\Currency](../../../core/settings/models/currency)       | 1:1      | Cascade  | Restrict |
| id_user     | [Modules\Core\Settings\Models\User](../../../core/settings/models/user)              | 1:1      | Cascade  | Restrict |
| id_status   | [Modules\Core\Settings\Models\LeadStatus](../../../core/settings/models/lead-status) | 1:1      | Restrict | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation   | Type       | Other parameters                     |
| ---------- | ---------- | ------------------------------------ |
| DEAL       | BELONGS_TO | Deal::class, 'id_lead','id'          |
| COMPANY    | BELONGS_TO | Company::class, 'id_company', 'id'   |
| USER       | BELONGS_TO | User::class, 'id_user', 'id'         |
| PERSON     | HAS_ONE    | Person::class, 'id', 'id_person'     |
| CURRENCY   | HAS_ONE    | Currency::class, 'id', 'id_currency' |
| STATUS     | HAS_ONE    | LeadStatus::class, 'id', 'id_status' |
| HISTORY    | HAS_MANY   | DealHistory::class, 'id_lead', 'id'  |
| LABELS     | HAS_MANY   | DealLabel::class, 'id_lead', 'id'    |
| ACTIVITIES | HAS_MANY   | LeadActivity::class, 'id_lead', 'id' |
| SERVICES   | HAS_MANY   | LeadService::class, 'id_lead', 'id'  |
