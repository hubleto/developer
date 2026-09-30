# Description API

The *Description API* is how a model tells the UI what to render. Instead of writing columns, labels, input types and buttons in React, you describe them in PHP. `Table.tsx` and `Form.tsx` load the description from the backend and render themselves.

| Method in the model                     | Returns                                   | Used for                                                                  |
| --------------------------------------- | ----------------------------------------- | ------------------------------------------------------------------------- |
| `describeColumns(): array`              | array of `Column` objects                 | The database schema and the base of all other descriptions.               |
| `describeInput(string $col): Input`     | `Hubleto\Framework\Description\Input`     | How one column is edited in a form (type, title, React component, hint).  |
| `describeTable(): Table`                | `Hubleto\Framework\Description\Table`     | How the table looks: columns, filters, buttons, permissions.              |
| `describeForm(): Form`                  | `Hubleto\Framework\Description\Form`      | How the form looks: inputs, default values, buttons, permissions.         |
Description methods of a model.

## How the pieces fit together

###### Description flow

```
describeColumns()  ──►  $model->columns  ──┬──►  describeInput($col)  ──┬──►  describeForm()   ──►  api/form-describe-and-load   ──►  Form.tsx
                                           │                           │
                                           └───────────────────────────┴──►  describeTable()  ──►  api/table-describe-and-load  ──►  Table.tsx
```

  1. `describeColumns()` is called once, in the model's constructor. The result is stored in `$model->columns`.
  2. `describeInput($columnName)` converts one column into an input description (`$column->describeInput()`).
  3. `describeTable()` takes the visible columns and the inputs of all columns.
  4. `describeForm()` takes the inputs of all columns except `id`, and their default values.
  5. The generic endpoints return the description together with the data. The React components merge it with the description passed in their props (`descriptionSource`).

Each level can be customized by overriding the method in your model. Always call the parent method first and modify its result:

###### The typical override pattern

```php
public function describeTable(): \Hubleto\Framework\Description\Table
{
  $description = parent::describeTable();
  $description->ui['addButtonText'] = $this->translate('Add Deal');
  return $description;
}
```

## Pages in this chapter

| Page                                                                         | Summary                                                                           |
| ---------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| [describeColumns()](description-api/describe-columns)                        | Defining columns, their types and properties.                                     |
| [describeTable()](description-api/describe-table)                            | Table UI, filters, visible columns, permissions.                                  |
| [describeForm()](description-api/describe-form)                              | Form UI, default values, inputs, relations.                                       |
| [describeInput()](description-api/describe-input)                            | Customizing the input of a single column.                                         |
| [loadDescriptionAndData() in Table.tsx](description-api/table-load-description-and-data) | How the table loads its description and data in one request.          |
| [loadDescriptionAndData() in Form.tsx](description-api/form-load-description-and-data)   | How the form loads its description and record in one request.         |
Pages in the Description API chapter.

> **NOTE** In the current version of Hubleto, the per-column method is called `describeInput(string $columnName)` (singular). There is no `describeInputs()` method. All inputs are collected by `describeForm()` and `describeTable()`.

## Example: what the table receives

A real response of `api/table-describe-and-load` for the `Contacts\Models\Tag` model (shortened):

###### GET api/table-describe-and-load?model=Hubleto/App/Community/Contacts/Models/Tag&itemsPerPage=3&page=1

```json
{
  "description": {
    "ui": {
      "title": "Contact Tags",
      "addButtonText": "Add Contact Tag",
      "showHeader": true,
      "showFooter": false,
      "showFulltextSearch": true,
      "showAddButton": true,
      "moreActions": {
        "export-csv": { "title": "Export to CSV", "icon": "fas fa-download", "type": "stateChange", "state": "showExportCsvScreen", "value": true },
        "import-csv": { "title": "Import from CSV", "icon": "fas fa-upload", "type": "stateChange", "state": "showImportCsvScreen", "value": true }
      }
    },
    "permissions": { "canRead": true, "canCreate": true, "canUpdate": true, "canDelete": true },
    "columns": {
      "name": { "type": "varchar", "title": "Name", "required": true, "byteSize": 255, "textAlign": "left" },
      "color": { "type": "color", "title": "Color", "required": true, "byteSize": 14, "textAlign": "center" }
    },
    "inputs": {
      "name": { "type": "varchar", "title": "Name", "required": true },
      "color": { "type": "color", "title": "Color", "required": true }
    }
  },
  "data": {
    "current_page": 1,
    "per_page": 3,
    "total": 6,
    "records": [
      { "id": 1, "name": "IT manager", "color": "#D33115", "_LOOKUP": "IT manager", "_PERMISSIONS": [true, true, true, true] },
      { "id": 2, "name": "CEO", "color": "#4caf50", "_LOOKUP": "CEO", "_PERMISSIONS": [true, true, true, true] },
      { "id": 3, "name": "Desicion Maker", "color": "#fcc203", "_LOOKUP": "Desicion Maker", "_PERMISSIONS": [true, true, true, true] }
    ]
  }
}
```

It is produced by this model:

###### apps/Contacts/Models/Tag.php

```php
class Tag extends \Hubleto\Erp\Model
{
  public string $table = 'contact_tags';
  public string $recordManagerClass = RecordManagers\Tag::class;
  public ?string $lookupSqlValue = '{{ '{%' }}TABLE{{ '%}' }}.name';
  public ?string $lookupUrlAdd = 'contacts/tags/add';
  public ?string $lookupUrlDetail = 'contacts/tags/{{ '{%' }}ID{{ '%}' }}';

  public function describeColumns(): array
  {
    return array_merge(parent::describeColumns(), [
      'name' => (new Varchar($this, $this->translate('Name')))->setRequired(),
      'color' => (new Color($this, $this->translate('Color')))->setRequired(),
    ]);
  }

  public function describeTable(): \Hubleto\Framework\Description\Table
  {
    $description = parent::describeTable();

    $description->ui['title'] = $this->translate('Contact Tags');
    $description->ui['addButtonText'] = $this->translate('Add Contact Tag');
    $description->ui['showHeader'] = true;
    $description->ui['showFulltextSearch'] = true;
    $description->ui['showFooter'] = false;

    return $description;
  }
}
```
