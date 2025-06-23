# Create own datagrid (table) component

&nbsp;

Custom data grid (table) components are useful when you want to visualize data from a certain model in a very specific way. Built-in table component provides rich funcionality for displaying, searching, filtering or sorting, but in your project you may have very specific requirements.

## Create .tsx component

To create your own data grid (or table) component based on the default behaviour and further extends it, you must first create a `.tsx` file in your `Components` folder:

###### MyApp/Components/MyCustomTable.tsx
```javascript
import React, { Component } from 'react'
import Table, { TableProps, TableState } from 'adios/Table';

interface MyCustomTableProps extends TableProps {
  // put your custom properties here
}

interface MyCustomTableState extends TableState {
  // put your custom state values here
}

export default class MyCustomTable extends Table<MyCustomTableProps, MyCustomTableState> {
  props: MyCustomTableProps;
  state: MyCustomTableState;
  translationContext: string = 'hubleto.app.external.MyCompany.MyApp.MyCustomTable';
}
```

This will create an empty class prepared for your customizations.

## Register React component

If you will want to use your new table using `<app-my-custom-table>` syntax in your app's view (read [more about MVC principles in Hubleto](../../../tutorial/add-route-controller-and-view)], you need to register your component as a React component.

This is done in your apps's entry .tsx file which is by default `MyApp/Loader.tsx`. Add following lines there:

###### MyApp/Loader.tsx
```javascript
import HubletoMain from "../../../App";
import MyCustomTable from "./Components/MyCustomTable.tsx";

export default class Loader {
  uid: string = 'my-app';
  constructor(app: HubletoMain) {
    app.registerReactComponent('MyCustomTable', MyCustomTable); // <-- add following line
  }
}  
```

After adding this, you need to rebuild whole project: run `npm run build`.

When successfuly rebuilt, you will be able to render your custom table using `<app-my-custom-table>` syntax in any of your views. For example, you could modify `MyApp/Views/Contacts.twig` followingly:

###### MyApp/Views/Contacts.tsx
```html
<app-my-custom-table></app-my-custom-table>
```

## Further customize

There are many ways to customize your table. The best way to understand what customizations are available, read the source code of the [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx) component. You will find there methods like `renderAddButton`, `renderHeader`, `renderFilter`, `cellClassName`, `loadData` and many others.
