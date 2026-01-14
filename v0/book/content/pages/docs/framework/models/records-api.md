# Records API

There is a concept of so-called **records**. They represent a set of data related to a single item (or a *record*) uniquely identified by its `id` column.

Records can be manipulated using CRUD (Create, Read, Update, Delete). Moreover, records are extensively used in UI Tables and Forms.

## Endpoints

To enable CRUD operations with records, a default API endpoints, provided by the Hubeto framework, are available. Full list and functionality can be understood from the [Router.php](https://github.com/hubleto/framework/blob/main/src/Router.php). Table below shortly summarizes these endpoints

| Endpoint                                                                                                                  | Functionality                                                                                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| [api/record/get](https://github.com/hubleto/framework/blob/main/src/Controllers/Api/Record/Get.php)                       | Reads a single record of a given `model` and with given `id`.                                                                                                                        |
| [api/record/load-table-data](https://github.com/hubleto/framework/blob/main/src/Controllers/Api/Record/LoadTableData.php) | Loads list of records shown in the table.                                                                                                                                            |
| [api/record/lookup](https://github.com/hubleto/framework/blob/main/src/Controllers/Api/Record/Lookup.php)                 | Loads values to be listed in *autocomplete* (lookup) inputs.                                                                                                                         |
| [api/record/save](https://github.com/hubleto/framework/blob/main/src/Controllers/Api/Record/Save.php)                     | Creates or updates the record of a given `model` and with given `id`. If ID <= 0, it will create a new record and return the ID of the created record. Otherwise updates the record. |
| [api/record/delete](https://github.com/hubleto/framework/blob/main/src/Controllers/Api/Record/Delete.php)                 | Deletes a record of a given `model` and with given `id`.                                                                                                                             |
*Table: Endpoints for CRUD manipulation of records.*

> *Note:* All operations with records are protected with permission manager. The operation is not performed, if permissions are not granted.

## Example

For example, when a form to create a record (e.g., when adding a customer) is opened and *Add* button is clicked, the form calls a request to `api/record/save` to create a record. Similarly, a table calls `api/record/load-table-data` to retrieve the list of records to be shown.

