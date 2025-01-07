# View

## Introduction

View is a Twig file that rendes a page.

## Creating a View

A View defaultly follows a HTML structure.

A View can be a Twig file. This allows us to access variables that the file can work with, and for example can loop through data, do if statements and many other funcionalities. Please consult the [Twig website](https://twig.symfony.com/doc/) to learn more about Twig.

The View can also render React components that were registered in the Loader.tsx of the module.
To learn how to register a React component to use in a View check out the [Component page](component).

A registered component can be used almost like a HTML tag:

`<app-core-customers-table-companies int:record-id="{ viewParams.recordId }"></app-core-customers-table-companies>`

Note that you have to pass the `record-id` prop for the forms to open with a correct entry.

### The naming convention of a HTML React tag

If the React component in the App.tsx is registered under `TableModuleModel`, than you can create the HTML tag with `<app-table-app-model></app-table-app-model>`.

The HTML React component tag can also pass props to the component. For example, if the component has a prop of an integer type, you have to specify the type, the name and the value of the prop you want to pass to the component: `<app-table-app-model int:new-prop=22></app-table-app-model>`

## Next up

- Check out the [Component](component) class
