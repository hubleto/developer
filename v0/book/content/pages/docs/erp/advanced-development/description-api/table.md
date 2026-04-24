# 'Description' API - Tables

Describes how tables behave for a certain model.

## Source code

For the complete list of properties, check https://github.com/wai-blue/adios/blob/main/src/Controllers/Api/Table/Describe.php.

## UI

| Property                              | Type    | Description                                     |
| ------------------------------------- | ------- | ----------------------------------------------- |
| `$description->ui['title']`           | String  | Title of the table.                             |
| `$description->ui['subTitle']`        | String  | Subtitle of the table.                          |
| `$description->ui['addButtonText']`   | String  | Text to be shown in the button to add a record. |
| `$description->ui['showHeader']`      | Boolean | If set to true, header will be shown.           |
| `$description->ui['showHeaderTitle']` | Boolean | If set to true, header title will be shown.     |
| `$description->ui['showFooter']`      | Boolean | If set to true, footer will be shown.           |
| `$description->ui['showFilter']`      | Boolean | If set to true, filter will be shown.           |

## Permissions

| Property                                   | Type    | Description                                      |
| ------------------------------------------ | ------- | ------------------------------------------------ |
| `$description->upermissionsi['canCreate']` | Boolean | If set to true, the user can create new records. |
| `$description->upermissionsi['canRead']`   | Boolean | If set to true, the user can read records.       |
| `$description->permissions['canUpdate']`   | Boolean | If set to true, the user can update records.     |
| `$description->permissions['canDelete']`   | Boolean | If set to true, the user can delete records.     |

## Columns

Property `$description->columns` is an array of objects of `ADIOS\Core\Db\Column` class. Each object represents a definition of a column to be shown in the table. By default, all columns in the model are populated in this property:

`$description->columns = $model->columns()`
