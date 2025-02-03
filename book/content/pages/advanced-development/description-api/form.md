# 'Description' API - Forms

Describes how forms behave for a certain model.

## Source code

For the complete list of properties, check https://github.com/wai-blue/adios/blob/main/src/Core/Description/Form.php.

## UI

| Property                               | Type   | Description                                             |
| -------------------------------------- | ------ | ------------------------------------------------------- |
| `$description->ui['title']`            | String | Title of the table.                                     |
| `$description->ui['subTitle']`         | String | Subtitle of the table.                                  |
| `$description->ui['saveButtonText']`   | String | Text to be shown in the button to save existing record. |
| `$description->ui['addButtonText']`    | String | Text to be shown in the button to create new record.    |
| `$description->ui['copyButtonText']`   | String | Text to be shown in the button to copy record.          |
| `$description->ui['deleteButtonText']` | String | Text to be shown in the button to delete record.        |
| `$description->ui['headerClassName']`  | String | CSS class of the form's header.                         |

## Permissions

| Property                                   | Type    | Description                                     |
| ------------------------------------------ | ------- | ----------------------------------------------- |
| `$description->upermissionsi['canCreate']` | Boolean | If set to true, the user can create new record. |
| `$description->upermissionsi['canRead']`   | Boolean | If set to true, the user can read record.       |
| `$description->permissions['canUpdate']`   | Boolean | If set to true, the user can update record.     |
| `$description->permissions['canDelete']`   | Boolean | If set to true, the user can delete record.     |

## Columns

Property `$description->columns` is an array of objects of `ADIOS\Core\Db\Column` class. Each object represents a definition of a column to be shown in the table. By default, all columns in the model are populated in this property:

`$description->columns = $model->columns()`

## DefaultValues

Property `$description->defaultValues` is an array of default values to be used when creating a record.
