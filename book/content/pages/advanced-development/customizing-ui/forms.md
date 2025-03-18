# Form Component

## Introduction

With a Form Component you can create CRUD functionality over an entry of a model. Using various methods of the Form Component you can update the data of an entry on demand without the need to refresh the whole page. A Form Component allows you to place input elements, tables and various other components to maximize the customizability of the form.

## Accessing the data of an entry

In the Form component you can access the data of an entry with `this.state.record`. Most of the Form components in Hubleto store record data into another variable `R`, which is used throughout the forms for accessing data or updating the record state with it.

## Adding input elements

There are two main ways to add input elements into a Form component.

### inputWrapper() method

Hubleto uses a wrapper to create basic input elements. Creating an input wrapper with the name of the column in the model will automatically create an input element that corresponds to the input type described in the column.

For example, in the `renderContent()` method of a Company Form component, we use `{this.inputWrapper("name")}` to create a text input element for the name of a company.

```tsx
renderContent(): JSX.Element {
  const R = this.state.record;

  return (
    <>
      {this.inputWrapper("name")}
    </>
  )
}
```

You can also pass some props to the input wrapper method, for example props like `readonly`:

```tsx
{this.inputWrapper("name", { readonly: true });}
```

You can also add an `onChange` event callback as a prop to the `inputWrapper` method. But sometimes you might need to use another method of creating input elements with the `onChange` event callback due to the erroneous state management, like in the examples below.

### Form Input and Input Components

The other method of creating input elements is to use the [ADIOS input components](https://github.com/wai-blue/adios/tree/main/src/Components/Inputs) wrapped in a `FormInput` component. This is a way to manually create input elements **without the description of the column from the model**. You are creating an input element from scratch, therefore you need to describe what the data will show, create, update and/or delete.

First, you need to add the `FormInput` component, which will serve as a wrapper for the input element. The wrapper styles the input elements and also adds a label for the input elements. Adding a `required` prop to the `FormInput` will also add a red asterisk left of the label. This will **not** add the back-end requirement check to the input.

After choosing an [ADIOS input component](https://github.com/wai-blue/adios/tree/main/src/Components/Inputs) to use, you need to give it props from the `getDefaultInputProps()` method.

```tsx
<Varchar {...this.getDefaultInputProps()} />
```

Different [ADIOS input components](https://github.com/wai-blue/adios/tree/main/src/Components/Inputs) will have different required props to correctly function, but the two main ones are `value` and `onChange`.

- `value` is a value that will be inserted and displayed in the input element on form load
- `onChange` is an event callback that will be called every time something in the input changes

The `onChange` event callback needs to always call the `updateRecord()` method to update the record state that houses the record data, otherwise the changed data will not be saved. You need to specify what value in the record object you want to update with the changed value.

```tsx
<FormInput title={"Name"} required={true}>
  <Varchar
    {...this.getDefaultInputProps()}
    value={this.record.name}
    onChange={(value: any) => {
      this.updateRecord({ name: value });
    }}
  />
</FormInput>
```

### Lookup Input

The Lookup inputs are created the same way as the input from the example above. The only other prop you need to add is `model`. In the `model` prop you need to add the full path of a model the Lookup input should be referring to, which will load all the entries of the model into a select input element. The `value` prop needs to be an ID number of the entry in the specified model.

```tsx
<FormInput title={"Contact Person"}>
  <Lookup
    {...this.getDefaultInputProps()}
    model="HubletoApp/Customers/Models/Person"
    value={this.record.id_person}
    onChange={(value: any) => {
      this.updateRecord({ id_person: value });
    }}
  />
</FormInput>
```

Lookup inputs can also get **data from custom endpoints** with optional parameters. This can be used for data filtering. For example, in Hubleto, it is used to filter contact persons in the Lead and Deal forms based on the selected company.

For the example below we used the API endpoint `customers/get-company-contacts` specified in Loader.php of the Customer app. We also added the `customEndpointParams` prop that will pass the ID of the company as a parameter to the API endpoint, which will be then available to use in the endpoint. Check out how to create an [API endpoint](../core-classes/controller#Creating%20an%20API%20Controller).

```tsx
<FormInput title={"Contact Person"}>
  <Lookup
    {...this.getDefaultInputProps()}
    model="HubletoApp/Customers/Models/Person"
    endpoint={`customers/get-company-contacts`}
    customEndpointParams={ id_company: R.id_company }
    readonly={R.is_archived}
    value={R.id_person}
    onChange={(value: any) => {
      this.updateRecord( id_person: value );
    }}
  ></Lookup>
</FormInput>
```

## Adding Table components of other models

You can add Table components, that were created for other models into Form components. Firstly, you need to import your desired Table component into the Form component. After this, you need to specify some props:

- `uid` - generated UID
- `descriptionSource` - specifies which description source to use (both, props)
- `description` - a description of a table
- `data` - data for the table
- `parentForm` - the form component in which the table is located in
- `readonly` - a boolean disabling/enabling the deletion and creation of new entries
- `onRowClick` - a callback for clicking on an entry in the table
- `onChange` - a callback for changing a value in the inputs of the Table component
- `onDeleteSelectionChange` - a callback for selecting an entry for deletion

###### FormComponent.tsx

```tsx
<TablePersons
  uid={this.props.uid + "_table_persons"}
  descriptionSource="props"
  data={ data: R.PERSONS }
  parentForm={this}
  description={
    permissions: {
      canCreate: true,
      canUpdate: true,
      canDelete: true,
      canRead: true,
    },
    ui: {
      addButtonText: globalThis.app.translate('Add contact person'),
    },
    columns: {
      first_name: { type: "varchar", title: globalThis.app.translate("First name") },
      last_name: { type: "varchar", title: globalThis.app.translate("Last name") },
      is_main: { type: "boolean", title: globalThis.app.translate("Main Contact") },
    },
    inputs: {
      first_name: { type: "varchar", title: globalThis.app.translate("First name") },
      last_name: { type: "varchar", title: globalThis.app.translate("Last name") },
      is_main: { type: "boolean", title: globalThis.app.translate("Main Contact") },
    },
  }
  isUsedAsInput={true}
  readonly={false}
  onRowClick={(table: TablePersons, row: any) => {
    this.setState({isInlineEditing: true});
  }}
  onChange={(table: TablePersons) => {
    this.updateRecord({ PERSONS: table.state.data?.data });
  }}
  onDeleteSelectionChange={(table: TablePersons) => {
    this.updateRecord({ PERSONS: table.state.data?.data ?? [] });
  }}
></TablePersons>
```

_Example of a Table component inside a Form component_

### Description prop of a Table component

The `description` prop similarly describes the table as the `tableDescribe()` method of the Model classes. See the example above.

You don't have to add the `description` prop or the `descriptionSource` prop to the Table component. If you don't add these, the Table component will be generated as specified in the Model class description.

> Note that by not adding `description` and the `descriptionSource` prop will display all the columns that are specified in the Model class of the Table component and may result in unexpected display errors.

If you want to choose which columns to display, change the UI or change permissions, you can specify the `description` prop. You also have to add the `descriptionSource` prop and set its value to `props` or `both`, if you want to merge the descriptions of the Model class and the `description` prop.

For the Table component you have to specify the `onChange` prop and the `onDeleteSelectionChange` prop with the `updateRecord` method. You have to specify the `onDeleteSelectionChange` prop too, because when you select an _already existing_ entry for deletion, the entry will gain a deletion flag in the record data.

## Opening forms of the added Table components

There are various ways to open forms by clicking on an entry in a Table component inside a Form component. You can either reroute the user to the form using URLs, open the form by using a method of the Table class or use states to open a Form component.

### Opening entry forms with a Table class method

By passing a Table class to `onRowClick` prop in a Table component, you can use the Table class's method `openForm()` to quickly open a form of that model. You need to pass the row ID to the `openForm()` method for the correct entry to open.

```tsx
onRowClick={(table: TableDeals, row: any) => {
  table.openForm(row.id);
}}
```

When you save or delete an entry with the newly opened form, it will not update the data that was previously in the table immediately. You have to specify in the `onSaveCallback` or `onDeleteCallback` in the **Table component** that it should reload the form to update the data. You firstly need to add a `parentForm` prop to the Table component you are using in a Form component, like this `parentForm={this}` or like in the Table component example above. After this, in the Table component's `getFormProps()` method specify the callbacks:

###### TableComponent.tsx

```tsx
getFormProps(): any {
  var formProps = super.getFormProps();
  return {
    ...super.getFormProps(),
    onSaveCallback: (form: FormPerson<FormPersonProps, FormPersonState>, saveResponse: any) => {
      formProps.onSaveCallback(form, saveResponse);
      if (this.props.parentForm) {
        this.props.parentForm.reload();
      }
    },
    onDeleteCallback: (form: FormPerson<FormPersonProps, FormPersonState>, saveResponse: any) => {
      formProps.onDeleteCallback(form, saveResponse);
      if (this.props.parentForm) {
        this.props.parentForm.reload();
      }
    }
  }
}

```

This code ensures that the form's callbacks use it's original callbacks and our new callbacks with the parent form's reload method.

## Creating a new entry through a Table component in a Form component

You can use two ways to add a new entry through a Table component in a Form component:

### Adding an entry directly through a Table component

You can directly add a new entry through a Table component by creating an event / trigger that will update the record data with an empty entry.

###### Contacts/Components/FormPerson.tsx
```tsx
<a
  role="button"
  onClick={() => {
    if (!R.CONTACTS) R.CONTACTS = [];
    R.CONTACTS.push({
      id: this.state.newEntryId,
      id_person: { _useMasterRecordId_: true },
      type: "email",
    });
    this.setState({ record: R });
    this.setState({ newEntryId: this.state.newEntryId - 1 } as FormPersonState);
  }}
>
  + Add Contact
</a>
```

We created a button that adds a new entry to the record data. We add data to `R.CONTACTS`, which is the data from a relation of the Person model. We ensure that it creates an empty array, if `R.CONTACTS` does not yet exist. After this we push required data to the `R.CONTACTS` array.

> If you are creating entries with this method, ensure that the `id` value is **always a negative number and also different from other _new_ entries**. A negative number flags the entry as to be created. Hubleto will automatically assign an ID number that's next in line. This also ensures that the correct entry will be deleted when the delete button in a table row is pressed.

If you want to add an ID of the currently opened form entry to the record data, use `{ _useMasterRecordId_: true }` and Hubleto will automatically insert the ID into the entry after saving.

> The newly added entries will be saved only after pressing the **save button of the form**

### Opening an empty Form component

Other method to add an entry through a Table component is to open an empty Form component. This allows you to manipulate with more data than the Table component allows you to.

With this method you have to manage a state that will open the empty form.

Firstly, you need to wrap a chosen Form component in a `ModalSimple` component. This will allow you to slightly customize how the form will look upon opening, the `type` prop allows you to change the location or width of the form using CSS classes specified in `Main.twcss`.

Similarly to the Table component you need to specify the `description` and `descriptionSource` of the Form component. The easiest way is to use the description defined in the Model class and adding a description with only default values in the Form component using `descriptionSource="both"`. You also need to add an `id` prop with a negative value to let Hubleto know, that this entry is being created.

Similarly to the Table component, the parent form wont be updated when saving the new entry with the newly opened form. Therefore you need to specify that the parent form should reload it's data using the `onSaveCallback`.

> Don't forget to change the state that opens the form with the `onClose` callback.


###### Customers/Components/FormCompany.tsx
```tsx
{this.state.createNewDeal == true ? (
<ModalSimple
  uid='deal_form'
  isOpen={true}
  type='right'
>
  <FormDeal
    id={-1}
    isInlineEditing={true}
    descriptionSource="both"
    description={
      defaultValues: {
        id_company: R.id,
      }
    }
    showInModal={true}
    onClose={() => { this.setState({ createNewDeal: false } as FormCompanyState); }}
    onSaveCallback={(form: FormDeal<FormDealProps, FormDealState>, saveResponse: any) => {
      if (saveResponse.status = "success") {
        this.loadRecord();
        this.setState({createNewDeal: false} as FormCompanyState)
      }
    }}
  />
</ModalSimple>
): null}
```
