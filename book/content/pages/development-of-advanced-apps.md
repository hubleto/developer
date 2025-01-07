# Development of advanced apps

## Introduction

In Ceremony CRM you can find multiple folders that contain groups of modules that provide functionality to Ceremony.
Modules follow the MVC structure with additional controllers helping you build modules more easily. You can check out how [Controllers](../assets/images/Ceremony_deals.jpg), [Views](../assets/images/Ceremony_deals.jpg) and [Models](../assets/images/Ceremony_deals.jpg) work with the provided links to the ADIOS framework.

## Pre-requisites

### File structure

This is an example file structure of a module.

```
ModuleName
├── Components
├── Controllers
│   └── API
├── Lang
├── Models
│   └── Eloquent
├── Views
├── Loader.php
└── Loader.tsx
```

### File structure explanation

**Components** - Contains files for form, table or any other React components

**Controllers** - Contains controllers defining the behavior of models and defining a View

**Controllers/API** - Contains controllers that return a JSON response

**Lang** - Contains JSON files with translations

**Models** - Contains models that define your data structures

**Models/Eloquent** - Contains classes that define the relations of models

**Views** - Contains Twig files with HTML structures

**Loader.php** - A class that defines routing, permissions of models and installation of models

**Loader.tsx** - A class that registers React components for use in Views.


## Next steps

- Check out [Loaders](loader) class
- Check out [Models](model) class
- Check out [Eloquent](eloquent) class
- Check out [Controllers](controller) class
- Check out [Views](view)
- Check out [Components](component)

You can also check out the example module [here](https://github.com/wai-blue/crmn-ext-hello-world).