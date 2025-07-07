# Using Material UI

## Introduction

Material UI (MUI) is a popular React component library based on Google’s Material Design. It helps developers quickly build modern, responsive, and accessible UIs with a consistent look and feel.

Although Hubleto comes with its own set of UI components built on some other UI libraries (e.g., Primereact), integration MUI with a wide range of customizable components can be very useful for developers who are used to work with it.

Here we show how to integrate MUI into a Hubleto app.

## Install MUI

First, let's install MUI library into our Hubleto.

As per https://www.npmjs.com/package/@mui/material, in the Hubleto's source folder (folder where a `package.json` file is located) run:

###### Folder with package.json
```
npm install @mui/material @emotion/react @emotion/styled
```

## Integrate MUI into Hubleto app

Now, having all libraries in place, let's integrate all them together. Follow instructions below.

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Create Hubleto app',
    'description': 'Run this command in your project\'s folder to create a very basic app.',
    'example': markdown('`php hubleto create app HubletoApp\\Custom\\Mui`'),
  },
  '2': {
    'title': 'Create a UI component',
    'description': markdown('Create file `apps/Mui/Components/MuiTest.tsx` with the following content.'),
    'example': markdown('
```js
import React, { Component } from "react"
import { InputLabel, Input } from "@mui/material";

export default class MuiTest extends Component {
  render(): JSX.Element {
    return <>
      <InputLabel>Sample MUI input</InputLabel>
      <Input defaultValue={10}></Input>
    </>;
  }
}
```
'),
  },
  '3': {
    'title': 'Register UI component',
    'description': markdown('Add following lines into `apps/Mui/Loader.tsx`.'),
    'example': markdown('
```js
import MuiTest from "./Components/MuiTest";
globalThis.main.registerReactComponent("MuiTest", MuiTest);
```
'),
  },
  '4': {
    'title': 'Use the new component in view',
    'description': markdown('Add following lines into `apps/Mui/Views/Home.twig`'),
    'example': markdown('
```html
<app-mui-test></app-mui-test>
```
'),
  },
}} %}

## Compile and test

Now everything should be ready. You just need to compile with `npm run build-js` and test on `http://localhost/my-hubleto/mui` (change this URL according to your Hubleto's configuration).

You should see an input from Material UI library.