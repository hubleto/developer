# Model CompanyDocument

namespace CeremonyCrmApp\Modules\Core\Customers\Models\CompanyDocument

List of documents connected to the Company model.

## Constants

This model does not define constants.

## Properties

| Property                                                                               | Value                           |
| :------------------------------------------------------------------------------------- | :------------------------------ |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass) | Eloquent\CompanyDocument::class |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                 | company_documents               |

## Data Scructure

| Column      | Title    | ADIOS Type                                                               | Length | Required |
| ----------- | -------- | ------------------------------------------------------------------------ | ------ | -------- |
| id          | ID       | [int](https://docs.wai.blue/adios-framework/models/attributes#int)       |        | TRUE     |
| id_company  | Company  | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |
| id_document | Document | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup) |        | TRUE     |

## Foreign Keys

| Column      | Model                                                                     | Relation | OnUpdate | OnDelete |
| ----------- | ------------------------------------------------------------------------- | -------- | -------- | -------- |
| id_company  | [Modules\Core\Customers\Models\Company](company)                          | 1:1      | Cascade  | Restrict |
| id_document | [Modules\Core\Documents\Models\Document](../../documents/models/document) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation | Type       | Other parameters                    |
| -------- | ---------- | ----------------------------------- |
| COMPANY  | BELONGS_TO | Company::class, 'id_company', 'id'  |
| DOCUMENT | BELONGS_TO | Document::class, 'id_document', 'id' |

_Read more about [working with relations](../../database-relations)_
