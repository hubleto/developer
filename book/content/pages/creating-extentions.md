# Creating your own Extention

## Introduction

In Ceremory CRM you can find multiple packages that contain groups of modules that provide funcionality to the CRM.
Modules follow the MVC structure with additional controllers helping you build extentions more easily. You can check out how [Controllers](../assets/images/Ceremony_deals.jpg), [Views](../assets/images/Ceremony_deals.jpg) and [Models](../assets/images/Ceremony_deals.jpg) work with the provided links to the ADIOS framework.

## Pre-requisites

The only pre-requisite is that you create a repository for your extention and publish it to be availible for Composer to install.

## File structure

This is an example file structure of an extention.

```
src
├── Models
│   └── Eloquent
├── Controllers
│   └── Home.php
├── Views
│   └── Home.twig
├── Loader.php
└── composer.json
```

### Glosary

**Models** - Contains models that define your data structures

**Models/Eloquent** - Contains classes that define the relations of models

**Controllers** - Contains controllers defining the behaviour of models

**Views** - Contains Twig files with HTML structures

**Loader.php** - A class that defines routing, permissions of models and installation of models

## Next steps

- Create a composer.json file for your extention:
### composer.json example

```json
{
  "name": "organization-name/extention-name",
  "description": "Descritption of your extention",
  "type": "library",
  "license": "MIT",
  "autoload": {
    "psr-4": {
      "CeremonyCrmApp\\Extensions\\OrganizationName\\ExtentionClassName\\": "src/"
    }
  },
  "minimum-stability": "dev"
}
```

- Create a Home View and Controller in your extention. This serves as a dashboard to your extention. This View and Controller is required.
- Check out [Loader](loader)
- Check out [Model](model)
- Check out [Controllers](controllers)
- Check out [Views](views)

You can also check out the example extention [here](https://github.com/wai-blue/crmn-ext-hello-world).