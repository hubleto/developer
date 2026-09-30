# Design principles for React components, especially tables and forms

The UI of Hubleto apps is built with React components from [`@hubleto/react-ui`](https://github.com/hubleto/react-ui). The two most important components are:

  * **`Table`** (`@hubleto/react-ui/components/fc/Table`): a data grid with search, filters, sorting, paging, CSV export/import and a form in a modal.
  * **`Form`** (`@hubleto/react-ui/components/fc/Form`): a form for one record with tabs, validation, save/delete buttons and a workflow selector.

Both components are **driven by the backend**. They load their description (columns, inputs, UI settings, permissions) from the model's [Description API](../description-api), so a minimal table or form needs almost no code.

## Principles

  1. **Write functional components** and put them in `Components/FC/`. Class components (`components/cc/...`) are the legacy style. 161 of 169 components in the community apps are functional.
  2. **One table and one form per model**: `Table<Plural>.tsx` and `Form<Singular>.tsx`.
  3. **Wrap, don't reimplement.** Your component wraps the generic `Table` or `Form` and sets only what is specific: the model, the URL slug, custom cells, tabs.
  4. **Declare `componentName` and `parentApp` constants.** They are used for translations, `FormCustomizer` and customizations of columns.
  5. **Always spread `{...props}` last**, so parents (a Twig view, another form) can override anything.
  6. **Define columns, labels and inputs in the model**, not in the component. Customize rendering only where the default is not enough.
  7. **Translate texts** with a `Translator` instance (`T.translate()`).

## Table component

###### apps/Deals/Components/FC/TableDeals.tsx

```tsx
import React from 'react'
import Translator from '@hubleto/react-ui/core/Translator';
import Table from '@hubleto/react-ui/components/fc/Table';
import { TableMeta, TableProps } from '@hubleto/react-ui/components/fc/TableInterfaces';
import FormDeal, { FormDealProps } from './FormDeal';

interface TableDealsProps extends TableProps {
  idCustomer?: number,
}

const componentName = 'TableDeals'; // must be the same as the exported const
const parentApp = 'Hubleto/App/Community/Deals';
const T = new Translator(parentApp + '/Loader', 'Components/' + componentName);

const TableDeals = (props: TableDealsProps) => {
  return <Table
    componentName={componentName}
    parentApp={parentApp}
    model={parentApp + '/Models/Deal'}
    endpointParams={{ '{{' }}idCustomer: props.idCustomer{{ '}}' }}
    baseUrlSlug='deals'
    formModalProps={{ '{{' }}type: 'right wide'{{ '}}' }}
    formDefaultValues={{ '{{' }}id_customer: props.idCustomer{{ '}}' }}
    getRowClassName={(table: TableMeta, rowData: any): string => {
      return rowData.is_closed ? 'bg-slate-300' : table.getDefaultRowClassName(rowData);
    {{ '}}' }}
    renderForm={(table: TableMeta): React.JSX.Element => {
      return <FormDeal {...table.getDefaultFormProps()}/>;
    {{ '}}' }}
    {...props}
  ></Table>
}

export default TableDeals;
```

### Most used Table props

| Prop                   | Description                                                                                   | Example                                   |
| ---------------------- | --------------------------------------------------------------------------------------------- | ----------------------------------------- |
| `model`                | Model with forward slashes. The backend describes and loads data for this model.              | `parentApp + '/Models/Deal'`              |
| `componentName`        | Name of the component (for translations and customizations).                                  | `'TableDeals'`                            |
| `parentApp`            | App namespace with forward slashes.                                                           | `'Hubleto/App/Community/Deals'`           |
| `baseUrlSlug`          | URL of the list. The URL changes to `<slug>/<id>` when a record is opened.                    | `'deals'`                                 |
| `endpointParams`       | Extra parameters sent to the backend. Read them in the record manager (URL filters).          | `{idCustomer: props.idCustomer}`          |
| `formDefaultValues`    | Default values of a new record created from this table.                                       | `{id_customer: props.idCustomer}`         |
| `formModalProps`       | Props of the modal with the form.                                                             | `{type: 'right wide'}`                    |
| `tag`                  | Unique tag of the table. Enables per-user column configuration.                               | `'table-deals'`                           |
| `recordId`             | ID of the record to open immediately (`-1` opens an empty form).                              | `{{ '{{' }} viewParams.recordId {{ '}}' }}` in Twig       |
| `parentForm`           | Form containing this table (for nested tables).                                               | `form` from `FormMetaContext`             |
| `junctionModel`, `junctionSourceColumn`, `junctionDestinationColumn`, `junctionSourceRecordId` | Show only records linked through an M:N junction table. | see *Nested tables* below |
| `description`, `descriptionSource` | Override (parts of) the description. `'both'` merges props with the backend description. | `{ui: {showHeader: false{{ '}}' }}`, `'both'` |
Most used Table props.

### Customizing the table

Every part of the table can be replaced with a `render*` prop. Inside, you can call the default implementation through the `TableMeta` object (`table.renderDefault*()`), so you only change what you need.

| Render prop                      | Default implementation                  |
| -------------------------------- | --------------------------------------- |
| `renderCell`                     | `table.renderDefaultCell(...)`          |
| `renderForm`                     | `table.renderDefaultForm()`             |
| `renderContent`                  | `table.renderDefaultContent()`          |
| `renderHeader`, `renderFooter`   | `table.renderDefaultHeader()`, `table.renderDefaultFooter()` |
| `renderActionsColumn`            | `table.renderDefaultActionsColumn(row)` |
| `renderAddButton`                | `table.renderDefaultAddButton()`        |
| `renderFilter`, `renderSidebarFilter` | `table.renderDefaultFilter()`, ... |
| `getRowClassName`                | `table.getDefaultRowClassName(rowData)` |
Render props and their defaults.

###### Custom cell rendering (apps/Contacts/Components/FC/TableContacts.tsx, part)

```tsx
renderCell={(table: TableMeta, columnName: string, column: any, data: any, options: any) => {
  if (columnName == "virt_tags") {
    return data.TAGS.map((tag, key) => {
      return <div key={key} className="text-nowrap mr-2">
        <i style={{ '{{' }}color: tag.TAG?.color{{ '}}' }} className="fas fa-tag mr-2"></i>
        {tag.TAG?.name}
      </div>;
    });
  } else {
    return table.renderDefaultCell(columnName, column, data, options);
  }
{{ '}}' }}
```

###### Alternative layout: records as cards (TableContacts.tsx, simplified)

```tsx
renderContent={(table: TableMeta) => {
  if (!props.showAsCards) {
    return table.renderDefaultContent();
  }

  if (!table.data) {
    return <Spinner />;
  }

  return <>
    {table.renderDefaultFormModal()}
    <div className="md:grid md:grid-cols-2 gap-2 mt-1">
      {Object.keys(table.data.records).map((key) => {
        const contact = table.data.records[key];
        return <button key={key} className="btn btn-transparent w-full"
          onClick={() => { table.setRecordId(contact.id); {{ '}}' }}
        >
          <span className="text">{contact.first_name} {contact.last_name}</span>
        </button>;
      })}
    </div>
    {table.renderDefaultAddButton()}
  </>;
{{ '}}' }}
```

### Useful event props

`onAfterLoadDescription`, `onAfterLoadData`, `onRowClick`, `onAddClick`, `onFilterChange`, `onOrderByChange`, `onPaginationChange`. Each receives the `TableMeta` object as the first argument. `table.reload()` reloads the description and the data.

## Form component

A form component wraps the generic `Form` and defines the tabs. The content of each tab is a small component that reads the form state from the `FormMetaContext` and uses the `Input` component for fields.

###### apps/Contacts/Components/FC/FormContact.tsx (shortened)

```tsx
import React, { useState } from 'react';
import Translator from '@hubleto/react-ui/core/Translator';
import { FormProps } from '@hubleto/react-ui/components/fc/FormInterfaces';
import Form, { FormMetaContext } from '@hubleto/react-ui/components/fc/Form';
import Input from '@hubleto/react-ui/components/fc/FormComponents/Input';
import { useRecordField } from '@hubleto/react-ui/components/fc/FormRecordStore';

export interface FormContactProps extends FormProps {}

const componentName = 'FormContact'; // must be the same as the exported const
const parentApp = 'Hubleto/App/Community/Contacts';
const T = new Translator(parentApp + '/Loader', 'Components/' + componentName);

/** TabDefault */
const TabDefault = (props: FormContactProps) => {
  const form = React.useContext(FormMetaContext);
  const middleName: string = useRecordField('middle_name', '');
  const [showMiddleNameInput, setShowMiddleNameInput] = useState(middleName != '');

  return <div className='flex-dyn'>
    <div className="flex-1">
      <Input field='salutation' />
      <Input field='first_name' customInputProps={{ '{{' }}cssClass: 'text-[2em]'{{ '}}' }} />
      {showMiddleNameInput
        ? <Input field='middle_name' />
        : <button className='btn btn-small btn-transparent' onClick={() => setShowMiddleNameInput(true)}>
            <span className='text'>{T.translate('Add middle name')}</span>
          </button>
      }
      <Input field='last_name' customInputProps={{ '{{' }}cssClass: 'text-[2em]'{{ '}}' }} />
    </div>
    <div className="flex-1">
      <Input field='id_customer' />
      <Input field='note' />
    </div>
  </div>;
}

/** FormContact */
const FormContact = (props: FormContactProps) => {
  return <Form
    componentName={componentName}
    parentApp={parentApp}
    model={parentApp + '/Models/Contact'}
    urlSlug='contacts'
    endpointParams={{ '{{' }}saveRelations: ['VALUES', 'TAGS']{{ '}}' }}
    title={{ '{{' }}fields: ['first_name', 'middle_name', 'last_name'], sub: T.translate('Contact'){{ '}}' }}
    tabs={{ '{{' }}default: {content: () => <TabDefault {...props} />{{ '}}' }}}
    {...props}
  ></Form>;
}

export default FormContact;
```

### Most used Form props

| Prop                | Description                                                                          | Example                                                 |
| ------------------- | ------------------------------------------------------------------------------------ | ------------------------------------------------------- |
| `model`             | Model with forward slashes.                                                          | `parentApp + '/Models/Contact'`                         |
| `componentName`     | Name of the form. Other apps use it in `FormCustomizer`.                             | `'FormContact'`                                         |
| `parentApp`         | App namespace with forward slashes.                                                  | `'Hubleto/App/Community/Contacts'`                      |
| `urlSlug`           | URL of the record: `<urlSlug>/<id>` or `<urlSlug>/add`.                              | `'contacts'`                                            |
| `endpointParams`    | Extra parameters for the backend. `saveRelations` lists relations saved with the record. | `{saveRelations: ['VALUES', 'TAGS']}`               |
| `title`             | Title built from fields, with a subtitle.                                            | `{fields: ['identifier', 'title'], sub: T.translate('Deal')}` |
| `tabs`              | Object `uid => {title, icon, content}`. `default` is the first tab.                  | see below                                               |
| `id`                | Record ID (`-1` = new record). Set by the parent table.                              |                                                         |
| `onAfterSaveRecord`, `onAfterRecordLoaded`, `onChange`, `onBeforeSaveRecord` | Callbacks receiving the `FormMeta` object. |                                    |
Most used Form props.

### Tabs

###### Tabs of apps/Deals/Components/FC/FormDeal.tsx

```tsx
tabs={{ '{{' }}
  default: {title: <b>{T.translate('Deal')}</b>, content: () => <TabDefault {...props} />},
  items: {title: T.translate('Items'), content: () => <TabItems {...props} />},
  documents: {title: T.translate('Documents'), content: () => <TabDocuments {...props} />},
  calendar: {title: T.translate('Calendar'), content: () => <TabCalendar {...props} />},
  tasks: {title: T.translate('Tasks'), content: () => <TabTasks {...props} />},
  history: {icon: 'fas fa-clock-rotate-left', content: () => <TabHistory {...props} />},
{{ '}}' }}
```

The active tab is kept in the URL (`?tab=items`), so it survives a page reload.

### Reading and changing the record

| Tool                                        | Use                                                                   |
| ------------------------------------------- | --------------------------------------------------------------------- |
| `React.useContext(FormMetaContext)`         | Access to the form: `form.id`, `form.readonly`, `form.changeField()`, `form.changeRecord()`, `form.saveRecord()`, `form.reload()`. |
| `useRecordField('field', defaultValue)`     | Subscribe to one field. The component re-renders only when this field changes. |
| `<Input field='name' />`                    | Standard input for a column, rendered from the input description (type, title, required, enum values, lookup, ...). |
| `<Input field='name' renderOnlyInputField />` | Only the input, without the label.                                  |
| `<Input field='name' customInputProps={{ '{{' }}...{{ '}}' }} />` | Extra props for the input, e.g. `cssClass`, `yesText`.         |
| `<Input title='...'>...</Input>`            | A labelled wrapper for any custom content.                            |
Form tools.

###### Changing related records (FormContact.tsx, simplified)

```tsx
const VALUES: Array<any> = useRecordField('VALUES', []);

const addContactValue = () => {
  const newValues = [...VALUES];
  newValues.push({
    id: -1,
    id_contact: { _useMasterRecordId_: true }, // filled with the contact's ID when saved
    type: 'email',
  });
  form.changeRecord({VALUES: newValues});
};
```

`id: -1` marks a new related record, `_toBeDeleted_: true` marks a record for deletion and `_useMasterRecordId_` is replaced by the ID of the saved main record. The relation must be listed in `endpointParams.saveRelations`.

### Nested tables

A tab often shows a related table. Pass the form as `parentForm` and filter the table with a URL parameter or a junction model:

###### 1:N relation (FormDeal.tsx, TabItems)

```tsx
const TabItems = (props: FormDealProps) => {
  const form = React.useContext(FormMetaContext);

  return <TableItems
    uid={props.uid + "_table_deal_items"}
    tag={"deal_items"}
    parentForm={form}
    idDeal={form.id}
    descriptionSource='both'
  ></TableItems>;
}
```

###### M:N relation through a junction model (FormDeal.tsx, TabTasks)

```tsx
const TabTasks = (props: FormDealProps) => {
  const form = React.useContext(FormMetaContext);

  return <TableTasks
    tag={"table_deal_task"}
    parentForm={form}
    uid={props.uid + "_table_deal_task"}
    junctionTitle='Deal'
    junctionModel='Hubleto/App/Community/Deals/Models/DealTask'
    junctionSourceColumn='id_deal'
    junctionSourceRecordId={form.id}
    junctionDestinationColumn='id_task'
  />;
}
```

Components of other apps are imported with the `@hubleto/apps` alias, e.g. `import TableTasks from '@hubleto/apps/Tasks/Components/FC/TableTasks'`.

### Workflow selector

If the form's model has the columns `id_workflow` and `id_workflow_step`, the form shows the workflow selector in its header automatically. See [Workflow integration](../integrations/workflow).

## Legacy class components

Older components and the `php hubleto create mvc` templates use class components (`TableExtended`, `FormExtended` from `@hubleto/react-ui/components/cc/...`). They work, but new code should use the functional style. The file `refactoring-guide.md` in `hubleto/react-ui` describes how to convert them.

###### Class-based table generated by the CLI (shortened)

```tsx
import TableExtended, { TableExtendedProps, TableExtendedState } from '@hubleto/react-ui/components/cc/TableExtended';

export default class TableBooks extends TableExtended<TableBooksProps, TableBooksState> {
  static defaultProps = {
    ...TableExtended.defaultProps,
    formUseModalSimple: true,
    model: 'Hubleto/App/Custom/MyFirstApp/Models/Book',
  }

  renderForm(): React.JSX.Element {
    let formProps = this.getFormProps();
    return <FormBook {...formProps}/>;
  }
}
```
