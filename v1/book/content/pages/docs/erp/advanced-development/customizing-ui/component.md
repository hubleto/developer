# Components and Loader.tsx

## Introduction

Components, specifically React Components are used to create the majority of the functionality of Hubleto. The mainly used components in Hubleto are tables and forms created in React, that work with the ADIOS Framework to provide various functionalities.

## Creating a Table Component

This is how a base table component looks like. The component itself describes what model it should be linked to and from what model it should retrieve its data. These few default props is all you need to create a base table component.

###### TableComponent.tsx
```tsx
import React, { Component } from "react";
import HubletoTable, {HubletoTableProps, HubletoTableState} from "../../../../src/core/Components/HubletoForm";

interface TableComponentProps extends HubletoTableProps {}

interface TableComponentState extends HubletoTableState {}

export default class TableComponent extends HubletoTable<TableComponentProps, TableComponentState> {
  static defaultProps = {
    ...Table.defaultProps,
    itemsPerPage: 15,
    formUseModalSimple: true,
    model: "Hubleto/App/App/Models/SubApp",
  };

  props: TableComponentProps;
  state: TableComponentState;

  constructor(props: TableComponentProps) {
    super(props);
    this.state = this.getStateFromProps(props);
  }
}
```

### Form component for a Table component

If you click on any entry in a table component you will open a form. A form can be described in a table component in two ways. You can either not describe what form component to use, which will result in Hubleto to use a basic form that generates the inputs based on the model's description of columns, or you can specify which form component to use.

To specify which form component to use, you can use the `renderForm()` method like in the example below. Within the `renderForm()` method you need to retrieve props from the `getFormProps()` method in order for the form to function properly. Then you need to pass these props to the form component.

###### TableComponent.tsx
```tsx
renderForm(): JSX.Element {
    let formProps: FormProps = this.getFormProps();
    return <FormComponent {...formProps}/>;
  }
```

Before specifying a form to use in a table component, you can also specify the width of the form, like in the example below. The width is based on CSS classes defined in `Main.twcss`.

```tsx
getFormModalProps() {
  if (getUrlParam('recordId') > 0) {
    return {
      ...super.getFormModalProps(),
      type: 'right'
    }
  } else return {...super.getFormModalProps()}
}
```

For more insight on the table component please visit the ADIOS documentation's [Table component](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx).

## Creating a Form Component

This is how a base form component looks like. The component itself describes what model it should be linked to and from what model it should retrieve its data. After this you can specify other aspects of the form component. For example you can specify how a title of a record will generate based on a value or you can specify how the buttons will change based on the editing state.

###### FormComponent.tsx
```tsx
import React, { Component } from 'react';
import HubletoForm, {HubletoFormProps, HubletoFormState} from "../../../../src/core/Components/HubletoForm";

export interface FormComponentProps extends HubletoFormProps {}

export interface FormComponentState extends HubletoFormState {}

export default class FormComponent<P, S> extends HubletoForm<FormComponentProps,FormComponentState> {
  static defaultProps: any = {
    ...Form.defaultProps,
    model: 'Hubleto/App/App/Models/App',
  };

  props: FormComponentProps;
  state: FormComponentState;

  renderContent(): JSX.Element {
    return (
      <>
      /* rest of the code, columns, ect. */
      </>
    );
  }
}
```

The `renderContent()` method is the main method used in rendering the content of the form. Within the method you can describe how the form component will look like using HTML tags or various React components, like ADIOS input components. For more explanation on how to build a form component please visit the [advanced form creation](./forms).

## Registering a Component to be used in a View

You can register a React component to use in a View in the Loader.tsx file of an app. Below is an example of the registered table components of the Customer app.

You can name the imported components however you want, but you still need to follow the tag writing convention that was described on the [View page](./view).

###### Customers/Loader.tsx
```tsx
import CustomersTableCustomers from "./Components/TableCustomers"
import CustomersTableActivities from "./Components/TableActivities"

globalThis.main.registerReactComponent('CustomersTableCustomers', CustomersTableCustomers);
globalThis.main.registerReactComponent('CustomersTableActivities', CustomersTableActivities);
```
