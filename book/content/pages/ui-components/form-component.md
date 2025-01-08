# Form Component

## Introduction

With a Form Component you can create CRUD functionality over an entry of a model. Using various methods of the Form Component you can update the data of an entry on demand without the need to refresh the whole page. A Form Component allows you to place input elements, tables and various other components to maximize the customizability of the form.

## Accessing the data of an entry

In the Form component you can access the data of an entry with `this.state.record`. Most of the Form components in Hubleto saves record data into another variable `R`, which is used throughout the forms for accessing data or updating the record state with it.

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
{this.inputWrapper("name", { readonly: true })}
```

However, this method of adding input elements has limitations. With this type of input elements you **cannot create event callbacks or calls to other functions**. This is possible with the next method of adding input elements.

### Form Input and Input Components

The other method of creating input elements is to use the [ADIOS input components](adios/input) wrapped in a `FormInput` component. This is a way to manually  create input elements **without the description of the column from the model**. You are creating an input element from scratch, therefore you need to describe what the data will show, create, update and/or delete.

First, you need to add the `FormInput` component which will serve as a wrapper for the input element. The wrapper styles the input elements and also adds a label for the input elements. Adding a `required` prop to the `FormInput` will also add a red asterisk left of the label. This will **not** add the back-end requirement check to the input.

After choosing an [ADIOS input](adios/input) component to use, you need to give it props from the `getDefaultInputProps()` method.

```tsx
<Varchar {...this.getDefaultInputProps()} />
```

Different [ADIOS input](adios/input) components will have different required props to correctly function, but the two main ones are `value` and `onChange`.

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

For the example below we used the API endpoint `customers/get-company-contacts` specified in Loader.php of the Customer module. We also added the `customEndpointParams` prop that will pass the ID of the company as a parameter to the API endpoint, which will be then available to use in the endpoint. Check out how to create an [API endpoint](../controller#Creating%20an%20API%20Controller).


TODO: Twig mi nepovili dať dve {} za sebou

```tsx
<FormInput title={"Contact Person"}>
  <Lookup
    {...this.getDefaultInputProps()}
    model="HubletoApp/Customers/Models/Person"
    customEndpointParams={ id_company: R.id_company }
    readonly={R.is_archived}
    endpoint={`customers/get-company-contacts`}
    value={R.id_person}
    onChange={(value: any) => {
      this.updateRecord( id_person: value );
    }}
  ></Lookup>
</FormInput>
```

### Tags Input

After creating a Tag model for a specific model, you can create a Tag input element using the ADIOS Tag component. This displays the tags names created in the Tag model and displays them in the input using the cross-table for the specified model and the Tag model.

For the Tag Input component you need to specify the `model` the tags were created in, `targetColumn` specifying the ID of the connected model's entry, `sourceColumn` specifying the ID of the Tag and `colorColumn` specifying the column for the color for the displayed tags in the model they were created in.

```tsx
<FormInput title="Tags">
  <InputTags2
    {...this.getDefaultInputProps()}
    value={this.state.record.TAGS}
    model="HubletoApp/Settings/Models/Tag"
    targetColumn="id_company"
    sourceColumn="id_tag"
    colorColumn="color"
    onChange={(value: any) => {
      this.updateRecord({ TAGS: value });
    }}
  />
</FormInput>
```

## Adding Table components of other models

You can add Table components, that were created for other models into Form components. Firstly, you need to import your desired Table component into the Form component. After this, you need to specify some props:

- `uid` - generated UID
- `showHeader` - a boolean that shows/hides the header of the table with a title and buttons
- `showFooter` - a boolean that shows/hides the footer of the table
- `descriptionSource` - specifies which description source to use (both, props)
- `description` - a description of a table
- `date` - date for the table
- `parentForm` - the form component in which the table is located in
- `readonly` - a boolean disabling/enabling the deletion and creation of new entries
- `onRowClick` - a callback for clicking on an entry in the table
- `onChange` - a callback for changing a value in the inputs of the Table component
- `onDeleteSelectionChange` - a callback for selecting an entry for deletion

```tsx
<TablePersons
  uid={this.props.uid + "_table_persons"}
  showHeader={false}
  showFooter={false}
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

*Example of a Table component inside a Form component*

### Description prop of a Table component

The `description` prop similarly describes the table as the `tableDescribe()` method of the Model classes. See the example above.

You don't have to add the `description` prop or the `descriptionSource` prop to the Table component. If you don't add these, the Table component will be generated as specified in the Model class description. Note that this will display all the columns that are specified in the Model class of the Table component and may result in unexpected display errors.

If you want to choose which columns to display, change the UI or change permissions, you can specify the `description` prop. You also have to add the `descriptionSource` prop and set its value to `props` or `both`, if you want to merge the descriptions of the Model class and the `description` prop.

For the Table component you have to specify the `onChange` prop and the `onDeleteSelectionChange` prop with the `updateRecord` method. You have to specify the `onDeleteSelectionChange` prop too, because when you select an *existing* entry for deletion, the entry will gain a deletion flag in the record data.

## Opening forms of the added Table components

There are various ways to open forms by clicking on an entry in a Table component inside a Form component. You can either reroute the user to the form using URLs, open the form by using a method of the Table class or use states to open a Form component.

### Opening entry forms with a Table class method

By passing a Table class to `onRowClick` prop in a Table component, you can use the Table class's method `openForm()` to quickly open a form of that model. You need to pass the row ID to the `openForm()` method for the correct entry to open.

```tsx
onRowClick={(table: TableDeals, row: any) => {
  table.openForm(row.id);
}}
```

When you save or delete an entry with the newly opened form, it will not update the data that was previously in the table immediately. You have to specify in the `onSaveCallback` or `onDeleteCallback` in the Table component that it should reload the form to update the data. You firstly need to add a `parentForm` prop to the Table component you are using in a Form component, like this `parentForm={this}` or like in the Table component example above. After this, in the Table component's `getFormProps()` method specify the callbacks:

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