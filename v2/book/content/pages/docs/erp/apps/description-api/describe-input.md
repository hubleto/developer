# Model's describeInput() method

## Purpose

`describeInput(string $columnName)` returns the description of the **input for one column**: the input type, title, React component, hint, enum values, default value and more. It returns a `Hubleto\Framework\Description\Input` object.

It is called for every column by `describeForm()` and `describeTable()`. Override it when an input should look or behave differently from what the column definition gives.

> **NOTE** There is no `describeInputs()` method in the current code. The method is `describeInput(string $columnName)`, called once per column. To change several inputs at once, override `describeForm()` and modify `$description->inputs`.

## Default implementation

The model asks the column to describe its input:

###### From Hubleto\Framework\Model

```php
public function describeInput(string $columnName): \Hubleto\Framework\Description\Input
{
  return $this->columns[$columnName]->describeInput();
}
```

`Column::describeInput()` copies the column properties into a new `Input` object: type, title, React component, CSS class, readonly, required, hint, unit, lookup model, default value, enum values, predefined values, input props, icon, decimals and every custom property set by `setProperty()`. `Lookup::describeInput()` also adds the `urlAdd` input prop when the referenced model has `$lookupUrlAdd`.

## When to override describeInput() and when describeColumns()

| Situation                                                        | Where                              |
| ---------------------------------------------------------------- | ---------------------------------- |
| The setting is fixed and belongs to the column                   | `describeColumns()` (column setters) |
| The setting concerns only the input (hint, custom component)     | `describeInput()`                  |
| The value needs data from other services or the database         | `describeInput()` or `describeForm()` |
| Several inputs change together or depend on the record           | `describeForm()`                   |
Where to put input settings.

## Pattern

Call the parent, change the result for the columns you care about, and return it. A `switch` keeps the method readable when more columns are customized:

```php
public function describeInput(string $columnName): \Hubleto\Framework\Description\Input
{
  $description = parent::describeInput($columnName);

  switch ($columnName) {
    case 'shared_folder':
      $description->setReactComponent('InputHyperlink');
      break;
  }

  return $description;
}
```

## Examples

### Hyperlink input with a hint

The *shared folder* of a customer or deal is a URL of an online storage. It should be rendered as a clickable link:

###### apps/Customers/Models/Customer.php (the same code is in apps/Deals/Models/Deal.php)

```php
public function describeInput(string $columnName): Input
{
  $description = parent::describeInput($columnName);

  switch ($columnName) {
    case 'shared_folder':
      $description
        ->setReactComponent('InputHyperlink')
        ->setHint($this->translate('Link to shared folder (online storage) with related documents'));
      break;
  }

  return $description;
}
```

Resulting input description:

```json
"shared_folder": {
  "type": "varchar",
  "title": "Shared folder (online document storage)",
  "reactComponent": "InputHyperlink",
  "hint": "Link to shared folder (online storage) with related documents",
  "cssClass": "text-violet-800"
}
```

### Hyperlink of a document

###### apps/Leads/Models/LeadDocument.php (the same in apps/Deals/Models/DealDocument.php)

```php
public function describeInput(string $columnName): \Hubleto\Framework\Description\Input
{
  $description = parent::describeInput($columnName);

  switch ($columnName) {
    case 'hyperlink':
      $description->setReactComponent('InputHyperlink');
      break;
  }

  return $description;
}
```

### Enum values collected from other apps

A dashboard panel shows a *board*. The list of available boards is only known at runtime, because every app registers its boards in `init()` (see [Dashboards integration](../integrations/dashboards)):

###### apps/Dashboards/Models/Panel.php

```php
public function describeInput(string $columnName): \Hubleto\Framework\Description\Input
{
  $description = parent::describeInput($columnName);

  switch ($columnName) {
    case 'board_url_slug':
      $boards = $this->getService(\Hubleto\App\Community\Dashboards\Manager::class);

      $enumValues = [
        '' => $this->translate('-- Select board to be displayed in panel --'),
      ];
      foreach ($boards->getBoards() as $board) {
        $enumValues[$board['boardUrlSlug']] = $board['app']->manifest['name'] . ': ' . $board['title'];
      }

      $description->setEnumValues($enumValues);
      break;
  }

  return $description;
}
```

## Input setters

| Setter                          | JSON key            | Description                                                |
| ------------------------------- | ------------------- | ---------------------------------------------------------- |
| `setType(string)`               | `type`              | Input type (normally taken from the column).               |
| `setTitle(string)`              | `title`             | Label.                                                     |
| `setReactComponent(string)`     | `reactComponent`    | Name of a registered React input component.                |
| `setReadonly(bool)`             | `readonly`          | Read-only input.                                           |
| `setRequired(bool)`             | `required`          | Required input.                                            |
| `setHint(string)`               | `hint`              | Help text.                                                 |
| `setUnit(string)`               | `unit`              | Unit shown after the value.                                |
| `setDecimals(int)`, `setStep(float)` | `decimals`, `step` | Number formatting.                                    |
| `setIcon(string)`               | `icon`              | Icon.                                                      |
| `setCssClass(string)`           | `cssClass`          | CSS class.                                                 |
| `setEnumValues(array)`          | `enumValues`        | Allowed values.                                            |
| `setEnumCssClasses(array)`      | `enumCssClasses`    | CSS class per enum value.                                  |
| `setPredefinedValues(array)`    | `predefinedValues`  | Suggested values.                                          |
| `setDefaultValue(mixed)`        | `defaultValue`      | Default value.                                             |
| `setLookupModel(string)`        | `model`             | Model of a lookup.                                         |
| `setEndpoint(string)`           | `endpoint`          | Custom endpoint (e.g. for lookups).                        |
| `setCreatable(bool)`            | `creatable`         | Allows creating new values from the input.                 |
| `setInputProps(array)`          | `inputProps`        | Extra props passed to the React input.                     |
| `setProperty(name, value)`      | `<name>`            | Any extra property.                                        |
Setters of `Hubleto\Framework\Description\Input`.

## Available React input components

The input type decides the default component (`InputFactory`). With `setReactComponent()` you can choose one of these registered components, or a component registered by your app in `Loader.tsx`:

| Component                        | Use                                                   | Used in community apps (count) |
| -------------------------------- | ----------------------------------------------------- | ------------------------------ |
| `InputUserSelect`                | Select a user (owner, manager, approver).             | 58                             |
| `InputHyperlink`                 | URL shown as a clickable link.                        | 21                             |
| `InputSharedWith`                | Share a record with users (`shared_with` JSON).       | 7                              |
| `InputWysiwyg`                   | Rich text editor.                                     | 6                              |
| `InputTextareaWithHtmlPreview`   | HTML source with preview.                             | 4                              |
| `InputJsonKeyValue`              | Key/value pairs stored as JSON.                       | 2                              |
| `InputJson`                      | JSON editor.                                          | —                              |
| `InputVarchar`, `InputInt`, `InputLookup`, `InputBoolean`, `InputColor`, `InputDateTime`, `InputImage` | Default inputs of the basic types. | — |
Registered input components.

## Using the input description in React

In a form, `<Input field='shared_folder' />` reads `description.inputs.shared_folder` and renders the right component with the right label, hint and validation. You don't repeat any of this in React:

###### apps/Deals/Components/FC/FormDeal.tsx (part)

```tsx
<Input field='shared_folder' />
<Input field='id_customer' />
<Input field='deal_result' />
```
