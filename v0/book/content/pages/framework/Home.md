
This is an automatically generated documentation for **Hubleto Framework**.

## Namespaces

### \Hubleto\Framework

#### Classes

| Class                                                                        | Description                                                           |
|------------------------------------------------------------------------------|-----------------------------------------------------------------------|
| [`App`](./classes/Hubleto/Framework/App)                                     | Encapsulation for Hubleto app.                                        |
| [`AppManager`](./classes/Hubleto/Framework/AppManager)                       | Default manager of Hubleto apps used in the Hubleto project.          |
| [`AuthProvider`](./classes/Hubleto/Framework/AuthProvider)                   | Default implementation of authentication provider.                    |
| [`Config`](./classes/Hubleto/Framework/Config)                               | Configuration management for the Hubleto project.                     |
| [`Controller`](./classes/Hubleto/Framework/Controller)                       | Default implementation of Hubleto controller.                         |
| [`Core`](./classes/Hubleto/Framework/Core)                                   | Shortcut to access all services used in the Hubleto project.          |
| [`CronManager`](./classes/Hubleto/Framework/CronManager)                     | Default manager for scheduled jobs (cron) in Hubleto project.         |
| [`Db`](./classes/Hubleto/Framework/Db)                                       | Database abstraction layer.                                           |
| [`DependencyInjection`](./classes/Hubleto/Framework/DependencyInjection)     | Default implementation of dependency injection.                       |
| [`EloquentRecordManager`](./classes/Hubleto/Framework/EloquentRecordManager) | Record manager based on Laravel's Eloquent.                           |
| [`EmailProvider`](./classes/Hubleto/Framework/EmailProvider)                 | Default implementation of email provider.                             |
| [`Env`](./classes/Hubleto/Framework/Env)                                     | Storage for environment-specific configuration.                       |
| [`Extendible`](./classes/Hubleto/Framework/Extendible)                       | Manager for app's extendibles.                                        |
| [`Helper`](./classes/Hubleto/Framework/Helper)                               | Various helper functions.                                             |
| [`HookManager`](./classes/Hubleto/Framework/HookManager)                     | Default manager for hooks in the Hubleto project.                     |
| [`Loader`](./classes/Hubleto/Framework/Loader)                               | Default implementation of bootstrap loader.                           |
| [`Locale`](./classes/Hubleto/Framework/Locale)                               | Methods to support locale in Hubleto project.                         |
| [`Logger`](./classes/Hubleto/Framework/Logger)                               | Default implementation of logger in Hubleto project.                  |
| [`Model`](./classes/Hubleto/Framework/Model)                                 | Default implementation of model for Hubleto project.                  |
| [`PermissionsManager`](./classes/Hubleto/Framework/PermissionsManager)       | Default manager for permissions and user access for Hubleto project.  |
| [`RecordManager`](./classes/Hubleto/Framework/RecordManager)                 | Default record manager for Hubleto projects. Uses Laravel's Eloquent. |
| [`Renderer`](./classes/Hubleto/Framework/Renderer)                           | Default view renderer for Hubleto project.                            |
| [`Router`](./classes/Hubleto/Framework/Router)                               | Default router for Hubleto project.                                   |
| [`SessionManager`](./classes/Hubleto/Framework/SessionManager)               | Default session manager for Hubleto project.                          |
| [`Test`](./classes/Hubleto/Framework/Test)                                   |                                                                       |
| [`Translator`](./classes/Hubleto/Framework/Translator)                       | Default translator for Hubleto project.                               |

### \Hubleto\Framework\Auth

#### Classes

| Class                                                                               | Description |
|-------------------------------------------------------------------------------------|-------------|
| [`KeycloakOAuth2Provider`](./classes/Hubleto/Framework/Auth/KeycloakOAuth2Provider) |             |

### \Hubleto\Framework\Controllers

#### Classes

| Class                                                                    | Description                                   |
|--------------------------------------------------------------------------|-----------------------------------------------|
| [`ApiController`](./classes/Hubleto/Framework/Controllers/ApiController) | Default implementation of Hubleto controller. |
| [`Desktop`](./classes/Hubleto/Framework/Controllers/Desktop)             | Default implementation of Hubleto controller. |
| [`NotFound`](./classes/Hubleto/Framework/Controllers/NotFound)           | Default implementation of Hubleto controller. |
| [`SignIn`](./classes/Hubleto/Framework/Controllers/SignIn)               | Default implementation of Hubleto controller. |

### \Hubleto\Framework\Controllers\Api\Form

#### Classes

| Class                                                                   | Description                                   |
|-------------------------------------------------------------------------|-----------------------------------------------|
| [`Describe`](./classes/Hubleto/Framework/Controllers/Api/Form/Describe) | Default implementation of Hubleto controller. |

### \Hubleto\Framework\Controllers\Api\Record

#### Classes

| Class                                                                             | Description                                   |
|-----------------------------------------------------------------------------------|-----------------------------------------------|
| [`Delete`](./classes/Hubleto/Framework/Controllers/Api/Record/Delete)             | Default implementation of Hubleto controller. |
| [`Get`](./classes/Hubleto/Framework/Controllers/Api/Record/Get)                   | Default implementation of Hubleto controller. |
| [`GetList`](./classes/Hubleto/Framework/Controllers/Api/Record/GetList)           | Default implementation of Hubleto controller. |
| [`Lookup`](./classes/Hubleto/Framework/Controllers/Api/Record/Lookup)             | Default implementation of Hubleto controller. |
| [`Save`](./classes/Hubleto/Framework/Controllers/Api/Record/Save)                 | Default implementation of Hubleto controller. |
| [`SaveJunction`](./classes/Hubleto/Framework/Controllers/Api/Record/SaveJunction) | Default implementation of Hubleto controller. |

### \Hubleto\Framework\Controllers\Api\Table

#### Classes

| Class                                                                    | Description                                   |
|--------------------------------------------------------------------------|-----------------------------------------------|
| [`Describe`](./classes/Hubleto/Framework/Controllers/Api/Table/Describe) | Default implementation of Hubleto controller. |

### \Hubleto\Framework\Controllers\Components\Inputs\FileUpload

#### Classes

| Class                                                                                   | Description                                   |
|-----------------------------------------------------------------------------------------|-----------------------------------------------|
| [`Delete`](./classes/Hubleto/Framework/Controllers/Components/Inputs/FileUpload/Delete) | Default implementation of Hubleto controller. |
| [`Upload`](./classes/Hubleto/Framework/Controllers/Components/Inputs/FileUpload/Upload) | Default implementation of Hubleto controller. |

### \Hubleto\Framework\Controllers\Components\Inputs\Tags

#### Classes

| Class                                                                             | Description                                   |
|-----------------------------------------------------------------------------------|-----------------------------------------------|
| [`Add`](./classes/Hubleto/Framework/Controllers/Components/Inputs/Tags/Add)       | Default implementation of Hubleto controller. |
| [`Data`](./classes/Hubleto/Framework/Controllers/Components/Inputs/Tags/Data)     | Default implementation of Hubleto controller. |
| [`Delete`](./classes/Hubleto/Framework/Controllers/Components/Inputs/Tags/Delete) | Default implementation of Hubleto controller. |

### \Hubleto\Framework\Db

#### Classes

| Class                                             | Description |
|---------------------------------------------------|-------------|
| [`Column`](./classes/Hubleto/Framework/Db/Column) |             |

### \Hubleto\Framework\Db\Column

#### Classes

| Class                                                            | Description |
|------------------------------------------------------------------|-------------|
| [`Boolean`](./classes/Hubleto/Framework/Db/Column/Boolean)       |             |
| [`Color`](./classes/Hubleto/Framework/Db/Column/Color)           |             |
| [`Date`](./classes/Hubleto/Framework/Db/Column/Date)             |             |
| [`DateTime`](./classes/Hubleto/Framework/Db/Column/DateTime)     |             |
| [`Decimal`](./classes/Hubleto/Framework/Db/Column/Decimal)       |             |
| [`File`](./classes/Hubleto/Framework/Db/Column/File)             |             |
| [`Image`](./classes/Hubleto/Framework/Db/Column/Image)           |             |
| [`Integer`](./classes/Hubleto/Framework/Db/Column/Integer)       |             |
| [`Json`](./classes/Hubleto/Framework/Db/Column/Json)             |             |
| [`Lookup`](./classes/Hubleto/Framework/Db/Column/Lookup)         |             |
| [`Password`](./classes/Hubleto/Framework/Db/Column/Password)     |             |
| [`PrimaryKey`](./classes/Hubleto/Framework/Db/Column/PrimaryKey) |             |
| [`Text`](./classes/Hubleto/Framework/Db/Column/Text)             |             |
| [`Time`](./classes/Hubleto/Framework/Db/Column/Time)             |             |
| [`Varchar`](./classes/Hubleto/Framework/Db/Column/Varchar)       |             |
| [`Virtual`](./classes/Hubleto/Framework/Db/Column/Virtual)       |             |
| [`Year`](./classes/Hubleto/Framework/Db/Column/Year)             |             |

### \Hubleto\Framework\Description

#### Classes

| Class                                                                    | Description |
|--------------------------------------------------------------------------|-------------|
| [`Form`](./classes/Hubleto/Framework/Description/Form)                   |             |
| [`Input`](./classes/Hubleto/Framework/Description/Input)                 |             |
| [`InputProperty`](./classes/Hubleto/Framework/Description/InputProperty) |             |
| [`Table`](./classes/Hubleto/Framework/Description/Table)                 |             |

### \Hubleto\Framework\Description\InputProperty

#### Classes

| Class                                                                                | Description |
|--------------------------------------------------------------------------------------|-------------|
| [`Autocomplete`](./classes/Hubleto/Framework/Description/InputProperty/Autocomplete) |             |

### \Hubleto\Framework\Exceptions

#### Classes

| Class                                                                                                   | Description                                                                                                                                           |
|---------------------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------|
| [`ControllerNotFound`](./classes/Hubleto/Framework/Exceptions/ControllerNotFound)                       | Exception thrown when controller has not been found.                                                                                                  |
| [`DBDuplicateEntryException`](./classes/Hubleto/Framework/Exceptions/DBDuplicateEntryException)         | Thrown when a database query execution is blocked by any foreign key constraint.                                                                      |
| [`DBException`](./classes/Hubleto/Framework/Exceptions/DBException)                                     | Thrown when a database query execution occurs (instead of foreign key constraint errors).                                                             |
| [`DBNotConnectedException`](./classes/Hubleto/Framework/Exceptions/DBNotConnectedException)             | Thrown when a database is not connected.                                                                                                              |
| [`GeneralException`](./classes/Hubleto/Framework/Exceptions/GeneralException)                           | General purpose exception.                                                                                                                            |
| [`InvalidToken`](./classes/Hubleto/Framework/Exceptions/InvalidToken)                                   | InvalidToken                                                                                                                                          |
| [`InvalidUidException`](./classes/Hubleto/Framework/Exceptions/InvalidUidException)                     | Thrown by \Hubleto\Framework\checkUid() method.                                                                                                       |
| [`ModelInstallationException`](./classes/Hubleto/Framework/Exceptions/ModelInstallationException)       | Thrown during the installation process of a model.                                                                                                    |
| [`NotEnoughPermissionsException`](./classes/Hubleto/Framework/Exceptions/NotEnoughPermissionsException) | Thrown by the custom implementation of \Hubleto\Framework\checkPermissionsForAction() method.                                                         |
| [`RecordDeleteException`](./classes/Hubleto/Framework/Exceptions/RecordDeleteException)                 | Used to display warning to the user if any problem with saving a form using Components/Form
action occurs. Thrown by model's recordValidate() method. |
| [`RecordSaveException`](./classes/Hubleto/Framework/Exceptions/RecordSaveException)                     | Used to display warning to the user if any problem with saving a form using Components/Form
action occurs. Thrown by model's recordValidate() method. |
| [`TestAssertionFailed`](./classes/Hubleto/Framework/Exceptions/TestAssertionFailed)                     | Thrown when a database query execution is blocked by any foreign key constraint.                                                                      |
| [`TestAssertionFailedException`](./classes/Hubleto/Framework/Exceptions/TestAssertionFailedException)   | Thrown when a test assertion fails.                                                                                                                   |
| [`UnknownView`](./classes/Hubleto/Framework/Exceptions/UnknownView)                                     | Thrown by the custom implementation of \Hubleto\Framework\checkPermissionsForAction() method.                                                         |

### \Hubleto\Framework\Interfaces

#### Interfaces

| Interface                                                                                           | Description                                                       |
|-----------------------------------------------------------------------------------------------------|-------------------------------------------------------------------|
| [`AppInterface`](./classes/Hubleto/Framework/Interfaces/AppInterface)                               |                                                                   |
| [`AppManagerInterface`](./classes/Hubleto/Framework/Interfaces/AppManagerInterface)                 |                                                                   |
| [`CronManagerInterface`](./classes/Hubleto/Framework/Interfaces/CronManagerInterface)               |                                                                   |
| [`EmailProviderInterface`](./classes/Hubleto/Framework/Interfaces/EmailProviderInterface)           |                                                                   |
| [`HookManagerInterface`](./classes/Hubleto/Framework/Interfaces/HookManagerInterface)               |                                                                   |
| [`PermissionsManagerInterface`](./classes/Hubleto/Framework/Interfaces/PermissionsManagerInterface) |                                                                   |
| [`RecordManagerInterface`](./classes/Hubleto/Framework/Interfaces/RecordManagerInterface)           | Record-management
CRUD-like layer for manipulating records (data) |
| [`RouterInterface`](./classes/Hubleto/Framework/Interfaces/RouterInterface)                         |                                                                   |
| [`SessionManagerInterface`](./classes/Hubleto/Framework/Interfaces/SessionManagerInterface)         |                                                                   |
| [`TranslatorInterface`](./classes/Hubleto/Framework/Interfaces/TranslatorInterface)                 |                                                                   |

### \Hubleto\Framework\Models

#### Classes

| Class                                                                 | Description                                                                |
|-----------------------------------------------------------------------|----------------------------------------------------------------------------|
| [`Config`](./classes/Hubleto/Framework/Models/Config)                 | Default implementation of model for Hubleto project.                       |
| [`Model`](./classes/Hubleto/Framework/Models/Model)                   | Default implementation of model for Hubleto project.                       |
| [`RolePermission`](./classes/Hubleto/Framework/Models/RolePermission) | Default implementation of model for Hubleto project.                       |
| [`Token`](./classes/Hubleto/Framework/Models/Token)                   | Model for storing various validation tokens. Stored in 'tokens' SQL table. |
| [`User`](./classes/Hubleto/Framework/Models/User)                     | Default implementation of model for Hubleto project.                       |
| [`UserHasRole`](./classes/Hubleto/Framework/Models/UserHasRole)       | Default implementation of model for Hubleto project.                       |
| [`UserRole`](./classes/Hubleto/Framework/Models/UserRole)             | Model for storing list of user roles. Stored in 'roles' SQL table.         |

### \Hubleto\Framework\Models\RecordManagers

#### Classes

| Class                                                                          | Description                                 |
|--------------------------------------------------------------------------------|---------------------------------------------|
| [`Config`](./classes/Hubleto/Framework/Models/RecordManagers/Config)           | Record manager based on Laravel's Eloquent. |
| [`Token`](./classes/Hubleto/Framework/Models/RecordManagers/Token)             | Record manager based on Laravel's Eloquent. |
| [`User`](./classes/Hubleto/Framework/Models/RecordManagers/User)               | Record manager based on Laravel's Eloquent. |
| [`UserHasRole`](./classes/Hubleto/Framework/Models/RecordManagers/UserHasRole) | Record manager based on Laravel's Eloquent. |
| [`UserRole`](./classes/Hubleto/Framework/Models/RecordManagers/UserRole)       | Record manager based on Laravel's Eloquent. |
