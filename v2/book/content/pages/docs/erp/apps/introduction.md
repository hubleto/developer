# Introduction

This chapter explains what a Hubleto app is made of. After reading it, you will be able to open any app in [hubleto/erp/apps](https://github.com/hubleto/erp/tree/main/apps) and know where to look for things.

Every Hubleto app is built on two PHP layers:

  * **`Hubleto\Framework`** is a low-level MVC framework. It provides routing, models, record managers, migrations, controllers, Twig rendering, translations, events and dependency injection.
  * **`Hubleto\Erp`** is the ERP layer on top of the framework. It adds ERP-specific base classes (`App`, `Model`, `RecordManager`, `Controller`, `ApiController`, `Cron`, `Calendar`) and the community apps.

Each app must have a [`manifest.yaml`](introduction/manifest-yaml) file and a [`Loader.php`](introduction/loader-php) class. Most apps also have a [`Loader.tsx`](introduction/loader-tsx) file for their React components.

###### Minimal app

```
MyApp/
├─ Loader.php        # required: backend entry point of the app
├─ Loader.tsx        # optional: frontend entry point (React components)
└─ manifest.yaml     # required: identification of the app
```

## Pages in this chapter

| Page                                                                          | Summary                                                                                        |
| ----------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| [About Hubleto\Framework and Hubleto\Erp namespaces](introduction/namespaces) | Which classes live in which namespace, what to extend and how app namespaces are built.        |
| [App file and folder structure](introduction/file-and-folder-structure)       | Where to put models, controllers, views, components, listeners, crons and integration classes. |
| [manifest.yaml file and its structure](introduction/manifest-yaml)            | All keys of the manifest, which are required and how Hubleto uses them.                        |
| [Loader.php class](introduction/loader-php)                                   | The backend entry point: `init()`, `installApp()` and all methods you can override.            |
| [Loader.tsx file](introduction/loader-tsx)                                    | The frontend entry point: registering React components and extending other apps' forms.        |
Pages in the Introduction chapter.

## Quick example

The `Contacts` app is a good first example. It is small, but it uses most of the concepts:

###### apps/Contacts/manifest.yaml

```yaml
namespace: Hubleto\App\Community\Contacts
appType: community
sidebarGroup: crm
rootUrlSlug: contacts
name: Contacts
icon: fas fa-user
author:
  company: "wai.blue"
highlight: Default customer management and addressbook.
tags:
  - customers
  - contacts
```

###### apps/Contacts/Loader.php (shortened)

```php
<?php

namespace Hubleto\App\Community\Contacts;

class Loader extends \Hubleto\Erp\App
{
  public function init(): void
  {
    parent::init();

    $this->router()->get([
      '/^contacts\/?$/' => Controllers\Contacts::class,
      '/^contacts\/tags\/?$/' => Controllers\Tags::class,
    ]);
  }

  public function installApp(int $round): void
  {
    if ($round == 1) {
      $this->getModel(Models\Contact::class)->upgradeSchema();
    }
  }
}
```

###### apps/Contacts/Loader.tsx

```tsx
import App from '@hubleto/react-ui/core/App'
import TableContacts from "./Components/FC/TableContacts"

class ContactsApp extends App {
  init() {
    super.init();
    globalThis.hubleto.registerReactComponent('ContactsTableContacts', TableContacts);
  }
}

globalThis.hubleto.registerApp('Hubleto/App/Community/Contacts', new ContactsApp());
```
