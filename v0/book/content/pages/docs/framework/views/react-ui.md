# Hubleto React UI

Hubleto React UI is a powerful, feature rich UI library for data management apps.

Most of the time, the starting point of almost each Hubleto app is the data management functionality. This means following:

  1. You first define the app's model (or models).
  2. For each model you create the UI for managing the data - tables and forms.
  3. Now, having the UI for data management, you start working on advanced features.

To make the 2nd point - development of UI for management of data - the most effective, Hubleto React UI comes very handy. It contains many react-based components as described in the table below.

## Installation

The library is freely available and can be installed with the node package manager by calling `npm install @hubleto/react-ui`. However, it is packed in the *javascript assets* when you create your Hubleto ERP project with composer:

```bash
composer create-project hubleto/erp-project .
```

## Components

| Component        | Description                                                          |
| ---------------- | -------------------------------------------------------------------- |
| Table.tsx        | Basic data-grid functionality. Built upon Primereact's DataTable     |
| TableExteded.tsx | Extended functionality built upon the Table.tsx                      |
| Form.tsx         | Basic functionality to render forms.                                 |
| FormExtended.tsx | Extended functionalit built upon the Form.tsx                        |
| Input.tsx        | A core component for building input field of a different data types. |
| Varchar.tsx      | A 'varchar' type input filed, built on the Input.tsx                 |

There are other types of input fields implemented (similarly to *varchar*), for example: Boolean.tsx, Color.tsx, DateTime.tsx, EnumValues.tsx, File.tsx, Hyperlink.tsx, Image.tsx, Int.tsx, JsonKeyValue.tsx, Lookup.tsx, Mailto.tsx, Password.tsx, Table.tsx, Tel.tsx, Textarea.tsx, TextareaWithHtmlPreview.tsx, UserSelect.tsx.

Full list of components, as well as the whole source code is available [here](https://github.com/hubleto/react-ui).

## How to use React UI in the Twig views

To use any of the Hubleto React UI's components in your app's views (in the `.twig` files), you need first to register this component in the app's javascript (typescript) loader module. Following example is from the [Contacts app](https://github.com/hubleto/erp/blob/main/apps/Contacts/Loader.tsx):

###### erp/apps/Contact/Loader.tsx
```javascript
import App from '@hubleto/react-ui/core/App'
import TableContacts from "./Components/TableContacts"

class ContactsApp extends App {
  init() {
    super.init();
    globalThis.hubleto.registerReactComponent('AppContactsTableContacts', TableContacts);
  }
}
```
###### Registration of the Hubleto React UI component

This piece of code, especially the `globalThis.hubleto.registerReactComponent()` method registers the `TableContacts` component (implemented in `./Components/TableContacts.tsx` file) using the tag 'AppContactsTableContacts'.

When registered, you may use this component using a properly named *HTML* tag in your *Twig* file. In this case it would look like following:

###### erp/apps/Contacts/Views/Contacts.twig
```html
<h1 class="app-main-title">{{ '{{' }} translate('Contacts') {{ '}}' }}</h1>

<hblreact-app-contacts-table-contacts
  string:tag="table-contacts"
  int:record-id="{{ '{{' }} viewParams.recordId {{ '}}' }}"
></hblreact-app-contacts-table-contact>
```
###### Using the Hubleto React UI component in the Twig view

In this example, a `<hblreact-app-contacts-table-contacts>` is used. Let's explain it:

  * the *hblreact* says that this tag will be converted to the React UI component
  * the rest, in our case *app-contacts-table-contacts* is converted from the tag used in the `registerReactComponent` - from PascalCase to snake-case.

## Passing react `props` to your component

Each React component needs `props` during its initialization phase. In Hubleto React UI, the HTML attributes are converted to react props. In the example below, the `TableContacts.tsx` component will receive following *props*:

  * `tag`, type string, value `table-contacts`
  * `recordId`, type integer, value passed from the `viewParams.recordId`