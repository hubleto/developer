# Model BillingAccount

namespace CeremonyCrmApp\Modules\Core\Billing\Models\BillingAccount

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus, orci sit amet dictum aliquet, nisl nulla condimentum est, congue venenatis leo velit ut massa. Vivamus vitae risus sapien. Maecenas metus quam, mattis vel sapien vel, vulputate tempor ante.

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                          |
| :--------------------------------------------------------------------------------------- | :----------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\BillingAccount::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | billing_accounts               |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | [TABLE].description            |

## Attributes

| Column      | Title       | ADIOS Type                                                                 | Length | Required |
| ----------- | ----------- | -------------------------------------------------------------------------- | ------ | -------- |
| id          | ID          | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| id_company  | Company     | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | TRUE     |
| description | Description | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |

## Foreign Keys

Only [default foreign keys](https://docs.wai.blue/adios-framework/default-foreign-keys) are used.

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                                         |
| -------- | ---------- | -------------------------------------------------------- |
| SERVICES | HAS_MANY   | BillingAccountService::class, 'id_billing_account', 'id' |
| COMPANY  | BELONGS_TO | Company::class, 'id_company', 'id'                       |

*Read more about [working with relations](../../database-relations)*

## Overrides

| Method        | Description                                                                                                                       |
| ------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| tableDescribe | Definition of default UI parameters for [TableBillingAccountServices.tsx](../components/table-billing-account-services) component |

