# Loader.tsx file

`Loader.tsx` is the frontend entry point of the app. It is optional. You need it when the app has React components (tables, forms, custom UI) or when it extends the UI of other apps.

It has three jobs:

  1. **Register React components** so Twig views can render them with the [`hblreact` tag](../design-principles/hblreact-tag).
  2. **Register the app** in the global `hubleto` object.
  3. **Extend other apps' forms** with tabs and buttons (optional).

###### apps/Contacts/Loader.tsx

```tsx
import App from '@hubleto/react-ui/core/App'
import TableContacts from "./Components/FC/TableContacts"

class ContactsApp extends App {
  init() {
    super.init();

    // register react components
    globalThis.hubleto.registerReactComponent('ContactsTableContacts', TableContacts);
  }
}

// register app
globalThis.hubleto.registerApp('Hubleto/App/Community/Contacts', new ContactsApp());
```

## How Loader.tsx gets into the browser

You don't import `Loader.tsx` anywhere. The project's `webpack.config.js` looks for a `Loader.tsx` file in every app folder and adds it to the bundle:

###### webpack.config.js of a Hubleto project (part)

```js
function findHubletoAppsInRepository(folder) {
  let apps = [];
  fs.readdirSync(folder).forEach(function(app) {
    const loaderEntry = folder + '/' + app + '/Loader';
    if (fs.existsSync(loaderEntry + '.tsx')) {
      apps.push(loaderEntry);
    }
  });
  return apps;
}

module.exports = (env, arg) => {
  return {
    entry: {
      main: [
        path.resolve(__dirname, 'vendor/hubleto/assets/src/Main'),
        ...findHubletoAppsInRepository(path.resolve(__dirname, 'vendor/hubleto/erp/apps')),
        ...findHubletoAppsInRepository(path.resolve(__dirname, 'src/apps')),
      ],
    },
    // ...
  };
};
```

After you change `Loader.tsx` or any component, rebuild the assets:

```bash
npm run build        # development build of JS and CSS
npm run watch-js     # rebuild JS automatically on every change
npm run build:prod   # production build
```

## Registering React components

`globalThis.hubleto.registerReactComponent(name, component)` stores the component under a PascalCase name. By convention the name is **app short name + component name**:

| Registered name              | Component file                          | HTML tag in Twig                              |
| ---------------------------- | --------------------------------------- | --------------------------------------------- |
| `ContactsTableContacts`      | `Components/FC/TableContacts.tsx`       | `<hblreact-contacts-table-contacts>`          |
| `DealsTableDeals`            | `Components/FC/TableDeals.tsx`          | `<hblreact-deals-table-deals>`                |
| `HrLeaveTableLeaveRequests`  | `Components/FC/TableLeaveRequests.tsx`  | `<hblreact-hr-leave-table-leave-requests>`    |
| `DealCalendarActivityForm`   | `Components/FC/DealCalendarActivityForm.tsx` | used by the Calendar app (`formComponent`) |
Registered names and their HTML tags.

The HTML tag is the kebab-case form of the registered name. Hubleto converts it back with `kebabToPascal()` when rendering.

###### apps/HrLeave/Loader.tsx

```tsx
import App from '@hubleto/react-ui/core/App'
import TableLeaves from './Components/FC/TableLeaves'
import TableLeaveRequests from './Components/FC/TableLeaveRequests'
import TableLeaveTypes from './Components/FC/TableLeaveTypes'

class HrLeaveApp extends App {
  init() {
    super.init();
    globalThis.hubleto.registerReactComponent('HrLeaveTableLeaves', TableLeaves);
    globalThis.hubleto.registerReactComponent('HrLeaveTableLeaveRequests', TableLeaveRequests);
    globalThis.hubleto.registerReactComponent('HrLeaveTableLeaveTypes', TableLeaveTypes);
  }
}

globalThis.hubleto.registerApp('Hubleto/App/Community/HrLeave', new HrLeaveApp());
```

Components are registered for two reasons:

  * to be rendered from Twig views (`<hblreact-...>`),
  * to be referenced by name from PHP, e.g. the `formComponent` of a calendar (`'formComponent' => 'DealCalendarActivityForm'`) or `setReactComponent('InputHyperlink')` on a column.

## Registering the app

`globalThis.hubleto.registerApp(namespace, instance)` stores the app object. The namespace uses **forward slashes**. Other apps and components can then get the app object with `globalThis.hubleto.getApp('Hubleto/App/Community/Leads')`.

The `App` base class (`@hubleto/react-ui/core/App`) is small:

###### @hubleto/react-ui/core/App.tsx

```tsx
export default class App {
  type: AppType;
  namespace: string;

  formHeaderButtons: Array<any> = [];
  customFormTabs: Array<FormTab> = [];

  init() { }

  addCustomFormTab(tab: FormTab) {
    tab.isCustom = true;
    this.customFormTabs.push(tab);
  }

  getCustomFormTabs() {
    return this.customFormTabs;
  }
}
```

## Extending forms of other apps

`Loader.tsx` is the place where one app adds UI to another app. The component names used here (`FormLead`, `FormDeal`, `FormOrder`, `FormMail`) are the `componentName` constants of the target forms.

### Adding a button to another app's form header

The Orders app adds a *Create order* button to the deal form:

###### apps/Orders/Loader.tsx (part)

```tsx
FormCustomizer.addFormHeaderExtraButton(
  'FormDeal',
  (form: FormMeta) => { return form.id <= 0 ? false : {
    title: 'Create order',
    icon: 'fas fa-money-check-dollar',
    onClick: (form: FormMeta) => {
      request.get(
        'orders/api/create-from-deal',
        {idDeal: form.id},
        (data: any) => {
          if (data.status == "success") {
            globalThis.window.open(globalThis.hubleto.config.projectUrl + '/orders/' + data.idOrder);
          }
        }
      );
    }
  {{ '}}' }}
)
```

Return `false` from the mount function to hide the button, e.g. when the record is not saved yet (`form.id <= 0`). `FormCustomizer.addFormFooterExtraButton()` works the same way for the footer.

### Adding a tab to another app's form

The Projects app adds a *Projects* tab to the order form:

###### apps/Projects/Loader.tsx (part)

```tsx
FormCustomizer.addTab(
  'FormOrder',
  'projects',
  (form: FormMeta) => { return form.id <= 0 ? false : {
    title: 'Projects',
    content: (form: FormMeta) => {
      return <TableProjects
        tag={"table_project_order"}
        parentForm={form}
        description={{ '{{' }}ui: {showHeader:false{{ '}}' }}}
        descriptionSource='both'
        uid={form.uid + "_table_project_order"}
        junctionTitle='Order'
        junctionModel='Hubleto/App/Community/Projects/Models/ProjectOrder'
        junctionSourceColumn='id_order'
        junctionSourceRecordId={form.id}
        junctionDestinationColumn='id_project'
      />;
    }
  {{ '}}' }}
);
```

The `junction*` props tell the table to show only projects linked to this order through the `ProjectOrder` junction model.

### Adding a custom tab through the app object

The Deals app adds a tab to the lead form using the Leads app object:

###### apps/Deals/Loader.tsx (part)

```tsx
globalThis.hubleto.getApp('Hubleto/App/Community/Leads').addCustomFormTab({
  uid: 'deals',
  title: globalThis.hubleto.translate('Deals', 'Hubleto\\App\\Community\\Deals\\Loader', 'manifest'),
  onRender: (form: any) => {
    return <TableDeals
      tag={"table_lead_deal"}
      parentForm={form}
      uid={form.props.uid + "_table_lead_deal"}
      junctionTitle='Deal'
      junctionModel='Hubleto/App/Community/Deals/Models/DealLead'
      junctionSourceColumn='id_lead'
      junctionSourceRecordId={form.state.record.id}
      junctionDestinationColumn='id_deal'
    />;
  },
});
```

> **NOTE** Prefer `FormCustomizer.addTab()` for new code. `addCustomFormTab()` works with the older class-based form API (`form.props`, `form.state`).

## Loader.tsx generated by the CLI

The generated file contains instructions and markers. `php hubleto create mvc` inserts the import and registration lines at the markers:

###### src/apps/MyFirstApp/Loader.tsx (generated)

```tsx
// How to add any React Component to be usable in Twig templates as '<hblreact-*></hblreact-*>' HTML tag.
// -> Replace 'MyModel' with the name of your model in the examples below

// 1. import the component
// import TableMyModel from "./Components/TableMyModel"

// 2. Register the React Component into Hubleto framework
// globalThis.hubleto.registerReactComponent('MyFirstAppTableMyModel', TableMyModel);

// 3. Use the component in any of your Twig views:
// <hblreact-myfirstapp-table-my-model string:some-property="some-value"></hblreact-myfirstapp-table-my-model>

//@hubleto-cli:imports

//@hubleto-cli:register-components
```

After `php hubleto create mvc MyFirstApp Book`:

```tsx
//@hubleto-cli:imports
import TableBooks from './Components/TableBooks';

//@hubleto-cli:register-components
globalThis.hubleto.registerReactComponent('MyFirstAppTableBooks', TableBooks);
```
