# Model Deal

namespace CeremonyCrmApp\Modules\Sales\Deals\Models\Deal

List of created Deals

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                |
| :--------------------------------------------------------------------------------------- | :------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Deal::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | deals                |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].title        |

## Data Scructure

| Column              | Title               | ADIOS Type                                                                 | Length | Required |
| ------------------- | ------------------- | -------------------------------------------------------------------------- | ------ | -------- |
| id                  | ID                  | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| title               | Deal Title          | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| id_company          | Company             | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_person           | Contact Person      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_lead             | Lead                | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| price               | Price               | [float](https://docs.wai.blue/adios-framework/models/attributes#float)     |        | FALSE    |
| id_currency         | Currency            | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| date_expected_close | Expected close date | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | FALSE    |
| id_user             | Owner               | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_pipeline         | Pipeline            | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| id_pipeline_step    | Current Step        | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| note                | Note                | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | FALSE    |
| source_channel      | Source Channel      | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | FALSE    |
| is_archived         | Archived            | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | TRUE     |

## Foreign Keys

| Column           | Model                                                                                       | Relation | OnUpdate | OnDelete |
| ---------------- | ------------------------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_company       | [Modules\Core\Customers\Models\Company](../../../core/customers/models/company.md)          | 1:1      | Cascade  | Restrict |
| id_person        | [Modules\Core\Customers\Models\Person](../../../core/customers/models/person.md)            | 1:1      | Cascade  | Restrict |
| id_lead          | [Modules\Sales\Leads\Models\Leads](../../leads/models/lead.md)                              | 1:1      | Cascade  | Restrict |
| id_currency      | [Modules\Core\Settins\Models\Currency](../../../core/settings/models/currency.md)           | 1:1      | Cascade  | Restrict |
| id_user          | [Modules\Core\Settings\Models\User](../../../core/settings/models/user.md)                  | 1:1      | Cascade  | Restrict |
| id_pipeline      | [Modules\Core\Settings\Models\Pipeline](../../../core/settings/models/pipeline.md)          | 1:1      | Cascade  | Restrict |
| id_pipeline_step | [Modules\Core\Settings\Models\PipelineStep](../../../core/settings/models/pipeline-step.md) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                     |
| -------- | ---------- | ------------------------------------ |
| LEAD     | BELONGS_TO | Lead::class, 'id_deal','id'          |
| COMPANY  | BELONGS_TO | Company::class, 'id_company', 'id'   |
| USER     | BELONGS_TO | User::class, 'id_user', 'id'         |
| PERSON   | HAS_ONE    | Person::class, 'id', 'id_person'     |
| PIPELINE | HAS_ONE    | Pipeline::class, 'id', 'id_pipeline' |
| CURRENCY | HAS_ONE    | Currency::class, 'id', 'id_currency' |
| HISTORY  | HAS_MANY   | DealHistory::class, 'id_deal', 'id'  |
| LABELS   | HAS_MANY   | DealLabel::class, 'id_deal', 'id'    |
| SERVICES | HAS_MANY   | LeadService::class, 'id_deal', 'id'  |
