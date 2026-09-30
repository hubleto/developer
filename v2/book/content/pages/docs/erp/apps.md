# Apps

Apps are packages containing most of Hubleto's functionality.

A Hubleto app is a self-contained bundle that covers one business goal: `Customers`, `Contacts`, `Deals`, `Orders`, `Projects`, `Tasks`, `HrLeave` and many others. Each app has its own models, controllers, views, React components, translations and integrations with other apps. All apps are placed in a single folder, so they are easy to reuse.

> **NOTE** This is the developer's documentation. It is based on the source code of the community apps in [hubleto/erp/apps](https://github.com/hubleto/erp/tree/main/apps). All code samples in this chapter are taken from these apps or are simplified versions of them. If you want to read about apps from the user's perspective, read [this](https://help.hubleto.eu/v2/en/apps/community).

## Chapters

| Chapter                                              | What you will learn                                                                                     |
| ---------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| [Introduction](apps/introduction)                     | Namespaces, folder structure, `manifest.yaml`, `Loader.php` and `Loader.tsx`.                           |
| [Design principles](apps/design-principles)           | How to design models, record managers, migrations, React components, Twig views, controllers and listeners. |
| [Description API](apps/description-api)               | How `describeColumns()`, `describeTable()`, `describeForm()` and `describeInput()` drive the UI.          |
| [Routing](apps/routing)                               | How to register CRUD routes and other routes.                                                           |
| [Translations](apps/translations)                     | How to translate React components, PHP classes and Twig views.                                          |
| [Integrations](apps/integrations)                     | How to plug your app into Calendar, Workflow, Settings, Dashboards, search, sidebar and more.           |
| [Installation](apps/installation)                     | How `installApp()` creates tables and how `generateDemoData()` fills them.                              |
| [Command-line tool](apps/command-line-tool)           | How to use `php hubleto` to initialize a project and generate apps, models and MVC code.                 |
Chapters of the developer's guide for Hubleto apps.

## The shortest way to your first app

```bash
cd /path/to/your/hubleto
php hubleto create app MyFirstApp          # creates src/apps/MyFirstApp and installs it
php hubleto create model MyFirstApp Book   # adds the Book model, record manager and migration
php hubleto create mvc MyFirstApp Book     # adds table, form, controller, view and route
npm run build                              # compiles Loader.tsx and the React components
```

Then open `https://your-hubleto/myfirstapp` in your browser. The details are in the [Command-line tool](apps/command-line-tool) chapter.

## Anatomy of an app in one picture

###### How the parts of an app work together

```
  Browser                         PHP (Hubleto\Erp + Hubleto\Framework)
  -------                         -------------------------------------
  GET /deals/5  ────────────────► Router ──(Loader::init() registered 'deals' CRUD routes)──► Controllers\Deals
                                                                                                │ prepareView()
                                                                                                ▼
                                  Views/Deals.twig  ◄── viewParams (recordId = 5, filters, ...)
                                        │
  <hblreact-deals-table-deals> ◄────────┘  (HTML tag rendered by Twig)
        │
        ▼ Loader.tsx registered 'DealsTableDeals'
  TableDeals.tsx (React) ── api/table-describe-and-load ──► Models\Deal::describeTable() + RecordManagers\Deal::loadTableData()
        │ click row
        ▼
  FormDeal.tsx (React) ──── api/form-describe-and-load ───► Models\Deal::describeForm() + loadFormData(5)
```
