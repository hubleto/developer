# Components

## Introduction

Components, specificly React Components are used to create the majority of the funcionality of Ceremony CRM. The mainly used components in Ceremony CRM are tables and forms created in React, that work with the ADIOS Framework to provide various funcionalities.

## Creating a Table Component

This is how a base table component looks like. The component itself describes what model it should be linked to and from what model it should retrieve its data. These few default props is all you need to create a base table component.

```tsx
// TableModule.tsx

import React, { Component } from "react";
import Table, { TableProps, TableState } from "adios/Table";

interface TableModuleProps extends TableProps {}

interface TableModuleState extends TableState {}

export default class TableModule extends Table<
  TableModuleProps,
  TableModuleState
> {
  static defaultProps = {
    ...Table.defaultProps,
    itemsPerPage: 15,
    formUseModalSimple: true,
    model: "CeremonyCrmMod/Module/Models/Module",
  };

  props: TableModuleProps;
  state: TableModuleState;

  constructor(props: TableModuleProps) {
    super(props);
    this.state = this.getStateFromProps(props);
  }
}
```

### Form for a table

If you click on any entry in a table component you will open a form. A form can be described in a table component in two ways. You can either not describe what form component to use, which will result in Ceremony CRM to use a basic form that generates the inputs based on the model's description of columns, or you can specifiy which form component to use.

To specify which form component to use, you can use the `renderForm()` method like in the example below. Within the `renderForm()` method you need to retrieve props from the `getFormProps()` method in order for the form to function properly. Then you need to pass these props to the form component.

```tsx
renderForm(): JSX.Element {
    let formProps: FormProps = this.getFormProps();
    return <FormModule {...formProps}/>;
  }
```

Before specifing a form to use in a table component, you can also specify width of the form, like in the example below. The width is based on CSS classes defined in `App.css`.

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

For more insight on the table component please visit the ADIOS documentation's [Table component](table).

## Creating a Form Component

This is how a base form component looks like. The component itself describes what model it should be linked to and from what model it should retrieve its data. After this you can specify other aspects of the form component. For example you can specify how a title of a record will generate based on a value or you can specify how the buttons will change based on the editing state.

```tsx
import React, { Component } from 'react';
import Form, { FormProps, FormState } from 'adios/Form';
export interface FormModuleProps extends FormProps {}

export interface FormModuleState extends FormState {}

export default class FormModule<P, S> extends Form<FormModuleProps,FormModuleState> {
  static defaultProps: any = {
    ...Form.defaultProps,
    model: 'CeremonyCrmMod/Module/Models/Module',
  };

  props: FormModuleProps;
  state: FormModuleState;

  renderHeaderLeft(): JSX.Element {
    return this.state.isInlineEditing ? this.renderSaveButton() : this.renderEditButton();
  }

  renderHeaderRight(): JSX.Element {
    return <>
      {this.state.isInlineEditing ? this.renderDeleteButton() : null}
      {this.props.showInModal ? this.renderCloseButton() : null}
    </>;
  }

  renderContent(): JSX.Element {
    return (
      <>
      /* rest of the code */
      </>
    );
  }
}
```

The `renderContent()` method is the main method used in rendering the content of the form. Within the method you can describe how the form component will look like using HTML tags or various ADIOS React components, like Input. For more explanation on how build a form please visit the [advanced form creation](form).

## Registering a Component to be used in a View

## Next up

- Check out the [Loader.tsx](react-loader)
