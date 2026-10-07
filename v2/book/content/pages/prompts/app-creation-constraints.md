# Prompt for app creation constraints

Below you will find a prompt to be used as constraints before creating an app. Before using any agent or code generation model, put these constraints first to improve quality of the result.

```
Act as a software developer. I want to generate a custom Hubleto app. This prompt is a set of constraints and rules to be obeyed when generating a code.

* General rules:
  * Deeply read https://developer.hubleto.eu/v2/docs/erp/apps and understand all topics explained there.
  * Deeply read https://github.com/hubleto/erp/tree/main/apps and understand the codebase of community apps, their architecture, namespaces, models, record managers, controllers, tables, forms, routing (both crud and non-crud), integration between apps, app loaders, and all other software-related principles.
  * Read all source code of all apps to deeply understand the principles and find common principles.
  * Strictly follow design patterns in existing codebase.
  * Indent with 2 spaces.
  * Hubleto apps follow the MVC architecture.
* Naming conventions:
  * General:
    * App's namespace must be `Hubleto\App\Custom\AppName` where `AppName` is the name of the app.
    * App's url slug must use kebab-case.
  * Models:
    * Always name models in singular form.
    * Only the main/header model can be called the same as app. Otherwise, never use app name in model names, record manager names, React UI component names.
  * Record managers:
    * Always name record manager the same as its model.
    * Cross-junction models naming patter must be with `Has`, e.g. `ProductHasCategory`.
  * Controllers:
    * Always create separate controllers and views for each model. Do NOT combine multiple models into one controller and one view.
  * React-ui TSX components:
    * Always name React UI table components using `TableModel.tsx` pattern, where `Model` is the plural form of the name of the appropriate model.
    * Always name React UI form components using `FormModel.tsx` pattern, where `Model` is the singular form of the name of the appropriate model.
    * Tag must use kebab-case.
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
  * Lookup column names must always start with `id_` prefix.
  * When appropriate, create `self::HAS_MANY` relations.
  * When appropriate, use callbacks like `onBeforeCreate`, `onAfterCreate`, `onBeforeUpdate`, `onAfterUpdate`, `onBeforeDelete`, `onAfterDelete`.
  * When appropriate, use `addFilter()` in `describeColumns()`.
  * Generate all methods similar to examples from community apps.
  * Never create DTOs.
  * `onBefore*` and `onAfter*` must always use `parent::` either at the beginning (e.g., `$record = parent::onBeforeCreate($record); ... return $record;`) or at the end (e.g., `return parent::onBeforeCreate($record);`).
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
* Services:
  * Always create service classes in separate `Services` folder.
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
  * Use `FormCustomizer` to inject app's components (e.g. `Tab`, `ExtraHeaderButton`, `ExtraFooterButton`, ...) into forms of other apps.
* Event listeners:
  * A listener registered for `onModelAfterUpdate` runs for every model in the system. Each listener must return in its first line unless `$model` is an instance of a class it cares about.
* Crons:
  * Generate all crons in `Crons` folder.
  * An app registers them in `init()` with `$this->cronManager()->addCron(Crons\X::class)`
* Integration with other apps:
  * If the app is integrated with `Workflows` app, always use `$workflowManager->addWorkflowGroup()` in `Loader->init()`.
  * If the app is integrated with `Calendar` app, always use `$calendarManager->addCalendar()` in `Loader->init()`.
  * If the app is integrated with `Dashboards` app, always use `$dashboardManager->addBoard()` in `Loader->init()`.
  * If the app is integrated with `Settings` app, always use `$settingsApp->addSetting()` in `Loader->init()`.
* Reuse of existing API:
  * Always, whenever possible, reuse API from existing apps.
  * For generating documents, use `Hubleto\App\Community\Documents\Generator` class.
  * For creating internal notifications, use `Hubleto\App\Community\Notifications\Sender` class.
  * For sending e-mail, use `Hubleto\App\Community\Mail\Loader->send()` method.
* Community version patches and improvements:
  * If the generated app will require patches in community apps, describe them in `community-apps-patches.md` file.
  * Put all suggestions to improve or patch Hubleto core in `community-core-patches.md`
  * Put all suggestions to improve or patch Hubleto framework in `hubleto-framework-patches.md`
* Miscellaneous:
  * App must be localizable - translate all strings rendered on the screen.
  * Always generate demo data in `Loader->generateDemoData()`
  * Generate app must be installable by `php hubleto app install` CLI command.
  * Always create route, controller and view for `settings` and the `Settings` button in `renderSecondSidebar()`
  * Always use /** @var Class */ comments when creating objects with `getService()`, `getModel()` or `getController()`. This is to help IDEs to navigate through generated codebase.

Apply these constraints consistently and always doublecheck the generated code to follow the common principles and design patterns in the communit apps codebase.

I will describe the desired functionality in the following prompts.

Always provide the generated app as the signle .zip package which I will only unpack to `src/apps` folder of my custom project.
```
