# Design principles

This chapter describes how the community apps are designed. Follow the same principles in your apps. Your code will then look familiar to other Hubleto developers, and it will work with the CLI generators, the Description API and the integrations.

The principles in one list:

  * **The model is the single source of truth.** Columns, labels, validation, enum values, lookups and default UI settings are defined once in the model (`describeColumns()`). Tables and forms are generated from it.
  * **Thin controllers.** A controller that renders a table only sets the view. React loads the data through the generic `api/...` endpoints.
  * **Query logic belongs to the record manager.** Filtering by URL parameters, fulltext search, sorting and lookups are implemented in the record manager.
  * **Schema changes are migrations.** Every change of a table is a new `Model_NNNN.php` migration.
  * **Loose coupling between apps.** Apps talk to each other through managers (`Calendar\Manager`, `Workflow\Manager`, `Dashboards\Manager`), events, extendibles and `FormCustomizer`, not by editing each other's code.
  * **Everything user-facing is translated** with `$this->translate()`, `translate()` in Twig or `T.translate()` in React.

## Pages in this chapter

| Page                                                                        | Summary                                                                                     |
| --------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| [Models, record managers and migrations](design-principles/models)          | How to split data logic between the model, the record manager and migrations.               |
| [React components: tables and forms](design-principles/react-components)    | How to build `Table*.tsx` and `Form*.tsx` functional components.                            |
| [Twig views](design-principles/twig-views)                                  | What belongs in a view, available variables, views for boards.                              |
| [API controllers and Cron controllers](design-principles/api-and-cron-controllers) | JSON endpoints and scheduled jobs.                                                   |
| [Event listeners](design-principles/event-listeners)                        | Reacting to model and controller events without coupling.                                   |
| [Using the hblreact HTML tag](design-principles/hblreact-tag)               | How Twig views render React components and pass typed props.                                |
Pages in the Design principles chapter.

## A complete CRUD feature in five files

This is the typical set of files for one entity, taken from the Contacts app:

###### Files for the Contact entity

```
Models/Contact.php                     # columns, relations, describeTable(), describeForm(), callbacks
Models/RecordManagers/Contact.php      # Eloquent relations, filters, fulltext search, lookups
Models/Migrations/Contact_0001.php     # CREATE TABLE and foreign keys
Controllers/Contacts.php               # sets the view
Views/Contacts.twig                    # renders <hblreact-contacts-table-contacts>
Components/FC/TableContacts.tsx        # table (list of records)
Components/FC/FormContact.tsx          # form (one record)
```

###### Controllers/Contacts.php: the controller only sets the view

```php
<?php

namespace Hubleto\App\Community\Contacts\Controllers;

class Contacts extends \Hubleto\Erp\Controller
{
  public function prepareView(): void
  {
    parent::prepareView();
    $this->setView('@Hubleto:App:Community:Contacts/Contacts.twig');
  }
}
```

###### Views/Contacts.twig: the view only renders the React table

```twig
<hblreact-contacts-table-contacts
  string:tag="table-contacts"
  int:record-id="{{ '{{' }} viewParams.recordId {{ '}}' }}"
  string:fulltext-search='{{ '{{' }} viewParams.q {{ '}}' }}'
  json:column-search='{{ '{{' }} viewParams.search|json_encode {{ '}}' }}'
  json:filters='{{ '{{' }} viewParams.filters|json_encode {{ '}}' }}'
  string:form-active-tab-uid='{{ '{{' }} viewParams.tab {{ '}}' }}'
></hblreact-contacts-table-contacts>
```

The table then asks the backend for its description and data, using the model name:

###### Request sent by TableContacts.tsx

```
GET api/table-describe-and-load?model=Hubleto/App/Community/Contacts/Models/Contact&page=1&itemsPerPage=35&...
  → Contact::describeTable()                      (columns, filters, UI settings)
  → RecordManagers\Contact::loadTableData(...)    (records of the current page)
```
