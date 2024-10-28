# Model Sales/Leads/Lead

## Introduction

List of created Leads

## Constants

## Properties

| Property        | Value           |
| :-------------- | :-------------- |
| isJunctionTable | FALSE           |
| table           | leads           |
| lookupSqlValue  | [TABLE].title |

## Data Scructure

| Column              | Title               | ADIOS Type | Length | Required |
| ------------------- | ------------------- | ---------- | ------ | -------- |
| id                  | ID                  | int        |        | TRUE     |
| title               | Title               | varchar    |        | TRUE     |
| id_company          | Company             | lookup     |        | TRUE     |
| id_person           | Contact Person      | lookup     |        | TRUE     |
| id_status           | Status              | lookup     |        | TRUE     |
| id_currency         | Currency            | lookup     |        | TRUE     |
| id_user             | Owner               | lookup     |        | TRUE     |
| date_expected_close | Expected close date | date       |        | FALSE    |
| price               | Amount              | float      |        | TRUE     |
| source_channel      | Source Chanel       | varchar    |        | FALSE    |
| note                | Note                | text       |        | FALSE    |
| is_archived         | Archived            | boolean    |        | FALSE    |

## Foreign Keys

| Column            | Model                                                                      | Relation | OnUpdate | OnDelete |
| ----------------- | -------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_contact_person | [Modules\Core\Customers\Models\Person](Person.md../modules/sales/leads/models/Person.md)                          | 1:1      | Cascade  | Restrict |
| id_company        | [Modules\Core\Customers\Models\Company](Company.md./modules/sales/leads/models/Company.md)                        | 1:1      | Cascade  | Restrict |
| id_status         | [Modules\Core\Settings\Models\LeadStatus](./status.md/modules/sales/leads/models/Status.md)                     | 1:1      | Cascade  | Restrict |
| id_currency       | [Modules\Sales\Leads\Models\Settings\Currency](Currency.md/modules/sales/leads/models/Currency.md)                | 1:1      | Cascade  | Restrict |
| id_user           | [Modules\Core\Settings\Models\User](../../../Core/Settings/Models/User.mdels/user.md) | 1:1      | Cascade  | Restrict |

## Additional Relations

| Model                                                  | Eloquent Type | Foreign Key | Local Key |
| ------------------------------------------------------ | ------------- | ----------- | --------- |
| [Modules\Sales\Deals\Deal](../../Deals/Models/Deal.mddeals/models/deal.md) | Has One       | id_lead     | id        |
| [Modules\Sales\Leads\History](History.md./modules/sales/leads/models/history.md)              | Has Many      | id_lead     | id        |
| [Modules\Sales\Leads\LeadLabel](lead-label.mdmodules/sales/leads/models/LeadLabel.md)          | Has Many      | id_lead     | id        |

## Indexes

| Name |  Type   | Column + Order |
| :--- | :-----: | -------------: |
| id   | PRIMARY |         id ASC |
