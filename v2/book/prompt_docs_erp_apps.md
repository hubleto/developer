From https://github.com/hubleto/erp/tree/main/apps deeply learn and understand architecture, design patterns, common practices, namespaces, naming conventions and everything other related to best practices in software development.

Create human-readable documentation for developers explaining:
  * Introduction
    * About Hubleto\Framework and Hubleto\Erp namespaces
    * Hubleto app file and folder structure
    * Hubleto app manifest.yaml file and its structure
    * Hubleto app Loader.php class
    * Hubleto app Loader.tsx file
  * Design principles
    * Design principles for models, including record managers and migrations.
    * Design principles for functional React components in `FC` folders, especially tables and forms.
    * Design principles for special controllers: `ApiController` and `CronController`.
    * Design principles for event listeners.
    * Using `hblreact` HTML tag in Twig views. Examples for rendering tables.
  * Routing
    * Creating CRUD routes using `$router->crud()`.
    * Creating other routes using `$router->get()`, for example for API controllers.
  * Models vs. RecordManagers
    * Model/RecordManager pairing.
    * Relations in both model and record manager.
    * Description API in model.
    * `BelongsTo` and `HasMany` relations in record manager.
    * `prepareReadQuery()` in record manager.
    * `addUrlFiltersToQuery()` in record manager.
    * `prepareLookupData()` in record manager.
  * Description API
    * Model's `describeColumns()` method. Purpose and examples.
    * Model's `describeTable()` method. Purpose and examples.
    * Model's `describeForm()` method. Purpose and examples.
    * Model's `describeInput()` method. Purpose and examples.
    * Initializing tables using `loadDescriptionAndData()` in `Table.tsx`
    * Initializing forms using `loadDescriptionAndRecord()` in `Form.tsx`
    * Adding sidebar filters using `$description->addFilter()` in `describeTable()`
  * Customizing tables and forms
    * List of renderer methods in `TableProps`
    * List of renderer methods in `FormProps`
    * Rendering custom cells in table using `TableProps.renderCell()`
    * Rendering custom footer in table using `TableProps.renderFooter()`
    * Fully custom rendering of table content using `TableProps.renderContent()`
    * Rendering custom header in form using `FormProps.renderHeader()`
    * Rendering custom title in form using `FormProps.renderTitle()`
    * Rendering custom footer in form using `FormProps.renderFooter()`
    * Adding custom tabs in form using `FormProps.tabs`
  * Translations
    * Translating React components using `const T = Translator` and `T.translate`.
    * Translating PHP classes using `$this->translate()`.
  * Integrations
    * Integration with Calendar app using custom `Calendar.php` class and `$calendarManager->addCalendar()`.
    * Integration with Workflow app using custom `Workflow.php` class and `$workflowManager->addWorkflowGroup()`.
    * Integration with Settings app using `$settingsApp->addSetting()`.
    * Integration with Dashboards app using `$dashboardManager->addBoard()`.
    * Creating event listeners in `EventListeners` folder.
    * Registering event listeners using `$eventManager->addEventListener()`.
    * Rendering second sidebar using `Loader::renderSecondSidebar()`.
    * Rendering alerts using `Loader::renderAlerts()`.
    * Integration with top-level fulltext search using `Loader::search()` and `addSearchSwitch()`.
    * Counting badge numbers in sidebar using custom `Counter.php` class and `Loader::getSidebarBadgeNumber()`.
  * Installation
    * Installation of all app's models using `Loader::installApp()`
    * Generating demo data in Loader class using `Loader::generateDemoData()`.
  * Command-line tool
    * Using `php hubleto init`
    * Using `php hubleto create app`
    * Using `php hubleto create model`
    * Using `php hubleto create mvc`
    * Using `php hubleto migrate`

Use examples from as many existing apps as possible.
Create separate page for each above-mentioned topic.
Create 2-level document structure exactly as the structure above.
In 1st-level topics create summary pages with introduction summary and links to all lower-level pages.
Use code snippets as much as possible.
Provide code examples in each section.
Format it as markdown files.
Make it a zip file to download.
Your output will be used in https://github.com/hubleto/developer/tree/main/v2/book/content/pages/docs/erp/apps, align the formatting accordingly.