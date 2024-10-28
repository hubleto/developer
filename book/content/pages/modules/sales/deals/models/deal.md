# Model Sales/Deals/Deal

## Introduction

List of created Deals

## Properties

| Property        | Value           |
| :-------------- | :-------------- |
| isJunctionTable | FALSE           |
| table           | deals           |
| lookupSqlValue  | [TABLE].title |

## Data Scructure

| Column              | Title               | ADIOS Type | Length | Required |
| ------------------- | ------------------- | ---------- | ------ | -------- |
| id                  | ID                  | int        |        | TRUE     |
| title               | Deal Title          | varchar    |        | TRUE     |
| id_person           | Contact Person      | lookup     |        | TRUE     |
| id_pipeline_stage   | Pipeline Stage      | lookup     |        | TRUE     |
| id_company          | Company             | lookup     |        | TRUE     |
| id_currency         | Currency            | lookup     |        | TRUE     |
| id_user             | Owner               | lookup     |        | TRUE     |
| id_lead             | Lead                | lookup     |        | TRUE     |
| date_expected_close | Expected close date | date       |        | FALSE    |
| value               | Price value         | float      |        | FALSE    |
| source_channel      | Source Channel      | varchar    |        | FALSE    |
| is_archived         | Archived            | boolean    |        | TRUE     |
| note                | Note                | text       |        | FALSE    |

## ADIOS parameters

## Foreign Keys

| Column            | Model                                                                      | Relation | OnUpdate | OnDelete |
| ----------------- | -------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_contact_person | [Modules\Core\Customers\Models\Person](Person.md../modules/sales/deals/models/Person.md)                          | 1:1      | Cascade  | Restrict |
| id_company        | [Modules\Core\Customers\Models\Company](Company.md./modules/sales/deals/models/Company.md)                        | 1:1      | Cascade  | Restrict |
| id_status         | [Modules\Core\Settins\Models\Status](Status.md../modules/sales/deals/models/Status.md)                            | 1:1      | Cascade  | Restrict |
| id_currency       | [Modules\Core\Settins\Models\Currency](Currency.md/modules/sales/deals/models/Currency.md)                        | 1:1      | Cascade  | Restrict |
| id_lead           | [Modules\Sales\Leads\Models\Leads](Status.md../modules/sales/deals/models/Status.md)                              | 1:1      | Cascade  | Restrict |
| id_user           | [Modules\Core\Settings\Models\User](../../../Core/Settings/Models/User.mdels/user.md) | 1:1      | Cascade  | Restrict |

## Additional Relations

| Model                                                         | Eloquent Type | Foreign Key | Local Key |
| ------------------------------------------------------------- | ------------- | ----------- | --------- |
| [Modules\Sales\Leads\Models\Lead](../../Leads/Models/Lead.mdleads/models/Lead.md) | Has One       | id_lead     | id        |
| [Modules\Sales\Leads\Models\History](history.md./modules/sales/deals/models/History.md)              | Has Many      | id_deal     | id        |
| [Modules\Sales\Leads\Models\LeadLabel](LeadLabel.mdmodules/sales/deals/models/LeadLabel.md)          | Has Many      | id_deal     | id        |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
