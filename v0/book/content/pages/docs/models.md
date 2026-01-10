# Models

Hubleto models are split into two classes:

  * the model itself (extending from `Hubleto\Framework\Model`), and
  * the record manager (extending from `Hubleto\Framework\RecordManager`)

The reason is the separation of the definition of the models behaviour and database engine used to manipulate data in the database.

## Building components of a model

To get the most out of the models, following concepts shall be configured:

| Component                                                                                                                                                                                                              | How it is implemented                 |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------- |
| A record manager class linking the model with its *record manager*.                                                                                                                                                     | In the `$recordManagerClass` property |
| Relations of the model. *Note: If you are using `EloquentRecordManager`, the same relations shall be implemented as methods in the model's record manager.*                                                            | In the `$relations` property.         |
| Description of model's columns (or *attributes*). This comprises type of the column (`Integer`, `Varchar`, `Json`, `Image`, ...), as well as many other properties like *title* used in table headers or input lables) | Using `describeColumns()` method.     |
| A description of the table (data grid), containing UI configuration and parmissions.                                                                                                                                   | Using `describeTable()` method.       |
| A description of the form to create or update a record, containing UI configuration and permissions                                                                                                                    | Using `describeForm()` method.        |

*Table: Description of fundamental building components of the model.*

Optionally, there are other components like:

  * configuration of models behaviour in lookups (`$lookupSqlValue`, `$lookupUrlAdd`, `$lookupUrlDetail`), or
  * many callbacks (`onBeforeCreate`, `onAfterCreate`, ...), or 
  * methods for modification of read queries (`prepareReadQuery`, `prepareLookupQuery`).

More details can be found in the pages listed below.

## See also

| Page                                          | What it is about                                                                                     |
| --------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| [Record manager](models/record-manager)       | Describes the principles of a *record manager*.                                                      |
| [Records API](models/records-api)             | Explains the *records API* used for CRUD operations with records.                                    |
| [Description API](models/description-api)     | Explains the *description API* used to configure the UI and permissions of tables, forms and inputs. |
| [Relations](models/relations)                 | Explains how the relations (belongs to, has one, has many, ...) are configured and handled.          |
| [Enums and Lookups](models/enums-and-lookups) | Provides more detailed explanation on how 1:N relations are handled.                                 |
| [Callbacks](models/callbacks)                 | Lists all available callbacks.                                                                       |


