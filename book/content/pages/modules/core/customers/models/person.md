# Model Person

namespace CeremonyCrmApp\Modules\Core\Customers\Models\Person

List of contact persons existing in the system

## Constants

This model does not define constants.

## Properties

| Property                                                                                 | Value                                              |
| :--------------------------------------------------------------------------------------- | :------------------------------------------------- |
| [eloquentClass](https://docs.wai.blue/adios-framework/models/properties#eloquentClass)   | Eloquent\Contact::Person                           |
| [table](https://docs.wai.blue/adios-framework/models/properties#table)                   | persons                                            |
| [lookupSqlValue](https://docs.wai.blue/adios-framework/models/properties#lookupSqlValue) | concat([TABLE].first_name, ' ', [TABLE].last_name) |

## Properties

| Property        | Value                                              |
| :-------------- | :------------------------------------------------- |
| isJunctionTable | FALSE                                              |
| table           | persons                                            |
| lookupSqlValue  | concat([TABLE].first_name, ' ', [TABLE].last_name) |

## Data Scructure

| Column       | Title        | ADIOS Type                                                                 | Length | Required |
| ------------ | ------------ | -------------------------------------------------------------------------- | ------ | -------- |
| id           | ID           | [int](https://docs.wai.blue/adios-framework/models/attributes#int)         |        | TRUE     |
| first_name   | First Name   | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| last_name    | Last Name    | [varchar](https://docs.wai.blue/adios-framework/models/attributes#varchar) |        | TRUE     |
| is_main      | Main Contact | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | FALSE    |
| note         | Note         | [text](https://docs.wai.blue/adios-framework/models/attributes#text)       |        | FALSE    |
| date_created | Date Created | [date](https://docs.wai.blue/adios-framework/models/attributes#date)       |        | TRUE     |
| is_active    | Active       | [boolean](https://docs.wai.blue/adios-framework/models/attributes#boolean) |        | TRUE     |
| id_company   | Company      | [lookup](https://docs.wai.blue/adios-framework/models/attributes#lookup)   |        | FALSE    |

## Foreign Keys

| Column     | Model                                            | Relation | OnUpdate | OnDelete |
| ---------- | ------------------------------------------------ | -------- | -------- | -------- |
| id_company | [Modules\Core\Customers\Models\Company](company) | 1:1      | Cascade  | Restrict |

## Indexes

Only [default indexes](https://docs.wai.blue/adios-framework/default-indexes) are used.

## Relations

| Relation  | Type       | Other parameters                    |
| --------- | ---------- | ----------------------------------- |
| COMPANY   | BELONGS_TO | Company::class, 'id_company'        |
| CONTACTS  | HAS_MANY   | Contact::class, 'id_person', 'id'   |
| ADDRESSES | HAS_MANY   | Address::class, 'id_person', 'id'   |
| TAGS      | HAS_MANY   | PersonTag::class, 'id_person', 'id' |
