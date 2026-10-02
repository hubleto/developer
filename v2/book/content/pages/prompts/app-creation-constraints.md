# Prompt for app creation constraints

Below you will find a prompt to be used as constraints before creating an app. Before using any agent or code generation model, put these constraints first to improve quality of the result.

```
I want to generate a custom Hubleto app. This prompt is a set of constraints and rules to be obeyed when generating a code.

* Deeply read https://developer.hubleto.eu/v2/docs/erp/apps and understand all topics explained there.
* Deeply read https://github.com/hubleto/erp/tree/main/apps and understand the codebase of community apps, their architecture, namespaces, models, record managers, controllers, tables, forms, routing (both crud and non-crud), integration between apps, app loaders, and all other software-related principles.
* Read all source code of all apps to deeply understand the principles and find common principles.
* Strictly follow design patterns in existing codebase.
* Naming conventions:
  * App's namespace must be `Hubleto\App\Custom\AppName` where `AppName` is the name of the app.
  * App's url slug must use dash case.
  * Never use app name in model names, record manager names, React UI component names.
  * Always name models in singular form.
  * Always name record manager the same as its model.
  * Always create separate controllers and views for each model. Do NOT combine multiple models into one controller and one view.
  * Always name React UI table components using `TableModel.tsx` pattern, where `Model` is the plural form of the name of the appropriate model.
  * Always name React UI form components using `FormModel.tsx` pattern, where `Model` is the singular form of the name of the appropriate model.
* App's Loader class:
  * Always create `init()` in app's Loader class
  * Always create `installApp()` in app's Loader class
  * Always create `renderSecondSidebar()` in app's Loader class
  * Always create `renderAlerts()` in app's Loader class
  * Always create `getSidebarBadgeNumber()` in app's Loader class
  * Generate all methods similar to examples from community apps.
* Models:
  * Always create `$lookupSqlValue` and `$lookupUrlDetail` properties.
  * Always create `describeColumns()` in each model.
  * Always create `describeTable()` in each model.
  * Always create `describeForm()` in each model.
  * Always create `self::BELONGS_TO` relation for each `Lookup` column.
  * When appropriate, create `self::HAS_MANY` relations.
  * When appropriate, use callbacks like `onBeforeCreate`, `onAfterCreate`, `onBeforeUpdate`, `onAfterUpdate`, `onBeforeDelete`, `onAfterDelete`.
  * When appropriate, use `addFilter()` in `describeColumns()`.
  * Generate all methods similar to examples from community apps.
* Controllers:
  * Generate all CRUD controllers directly in `Controllers` folder.
  * Generate all API controllers in `Controllers/Api` folder.
  * Generate all dashboard controllers in `Controllers/Boards` folder.
  * Always translate strings rendered on screen with `$this->translate()`.
* Views:
  * Follow design rules, CSS classes, HTML structure and examples from community apps.
  * Always translate strings rendered on screen with `{{ '{{' }} translate() {{ '}}' }}`.
* Record managers:
  * Always create `prepareReadQuery()`, even if it would only call it's parent.
  * Always create `addUrlFiltersToQuery()`, even if it would only call it's parent.
  * Always create `prepareLookupData()`, even if it would only call it's parent.
  * Generate all methods similar to examples from community apps.
* Routing:
  * Always create routing for each model using `$router->crud()`.
  * Always create routing for API controllers using `$router->get()`.
  * Routes for API controllers must always start with url slug of the app, followed by `api` keyword.
  * Routes for dasbhoard controllers must always start with url slug of the app, followed by `board` keyword.
* React UI components:
  * Create all components in `Components/FC` folder
  * Alwas name table React components (files under Components/TableSomething.tsx) in plural form.
  * Alwas name form React components (files under Components/FormSomething.tsx) in singular form.
  * Always create separate `Table` and `Form` components for each model. Do NOT combine multiple models together.
  * Always create `Loader.tsx` file similar to examples from community apps.
  * In form components, use multiple tabs when appropriate. See examples in community apps.
  * In form components, format input with `customInputProps` and `cssClass` property when appropriate. See examples in community apps.
  * Always translate string rendered on screen with `T.translate`.
* Integration with other apps:
  * If the app is integrated with `Workflows` app, always use `$workflowManager->addWorkflowGroup()` in `Loader->init()`.
  * If the app is integrated with `Calendar` app, always use `$calendarManager->addCalendar()` in `Loader->init()`.
  * If the app is integrated with `Dashboards` app, always use `$dashboardManager->addBoard()` in `Loader->init()`.
  * If the app is integrated with `Settings` app, always use `$settingsApp->addSetting()` in `Loader->init()`.
* Miscellaneous:
  * App must be localizable - translate all strings rendered on the screen.
  * Always generate demo data in `Loader->generateDemoData()`
  * Generate app must be installable by `php hubleto app install` CLI command.

Apply these constraints consistently and always doublecheck the generated code to follow the common principles and design patterns in the communit apps codebase.

I will describe the desired functionality in the following prompts.

Always provide the generated app as the signle .zip package which I will only unpack to `src/apps` folder of my custom project.
```
