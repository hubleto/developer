# Using php hubleto init

## Purpose

`php hubleto init` turns a freshly downloaded Hubleto project into a working installation. It:

  1. creates `ConfigEnv.php` and the project files (`index.php`, `boot.php`, `cron.php`, `.htaccess`, folders),
  2. creates the database,
  3. installs the selected apps (three rounds, see [Installation](../installation/install-app)),
  4. creates the default company and the administrator,
  5. optionally generates demo data.

`init` is a shortcut for `php hubleto project init`. It refuses to run if `ConfigEnv.php` already exists:

```
ConfigEnv.php already exists, project has already been initialized.
If you want to re-initialize the project, delte ConfigEnv.php file first.
```

## Interactive mode

Without arguments, `init` asks for every value and suggests defaults:

```bash
php hubleto init
```

```
ConfigEnv.rewriteBase
 0 = /
 1 = /hubleto/
Select one of the options, provide a value or press Enter for '/':
  -> /
ConfigEnv.projectUrl (press Enter for 'http://localhost/'):
ConfigEnv.assetsUrl (press Enter for 'http://localhost//assets'):
ConfigEnv.dbHost (press Enter for 'localhost'):
ConfigEnv.dbUser (user must exist) (press Enter for 'root'):
ConfigEnv.dbPassword:
ConfigEnv.dbName (database will be created, if it not exists) (press Enter for 'my_hubleto'):
ConfigEnv.dbCodepage (press Enter for 'utf8mb4'):
Account.accountFullName (press Enter for 'My Company'):
Account.adminName (press Enter for 'John'):
Account.adminFamilyName (press Enter for 'Smith'):
Account.adminNick (press Enter for 'johny'):
Account.adminEmail (will be used also for login) (press Enter for 'john.smith@example.com'):
Account.adminPassword (leave empty to generate random password):
Account.language (en ,sk ,cs, pl, de, ro, it, es, fr) (press Enter for 'en'):
Account.generateDemoData (type 'yes' or 'no'):
Hubleto will be installed now. Type 'yes' to continue or 'exit' to cancel:
```

Each answer is echoed as `  -> <value>`. The options for `rewriteBase` are built from the folders of the project path.

## Config file mode

For repeatable installations (CI, Docker, development), put the values into a YAML file and pass its path. Values missing in the file are asked interactively.

```bash
php hubleto init init-config.yaml
```

###### init-config.yaml (the file used for the examples in this guide)

```yaml
### Project location
rewriteBase: /
projectUrl: http://localhost:8765
assetsUrl: http://localhost:8765/assets

### Database connection
dbHost: localhost
dbUser: root
dbPassword: "secret"
dbName: hubleto
dbCodepage: utf8mb4

### Initial account access
accountFullName: Hubleto Docs Demo
adminName: Admin
adminFamilyName: Hubleto
adminNick: admin
adminEmail: admin@example.com
adminPassword: hubleto-docs
language: en
packagesToInstall: crm,maintenance,help,customer-acquisition,sales,productivity,human-resources,finance,developer

### Miscellaneous
generateDemoData: true
noPrompt: true
```

Additional arguments after the file name are parsed as YAML and override values from the file:

```bash
php hubleto init init-config.yaml "dbName: hubleto_test" "generateDemoData: false"
```

## Configuration options

| Option                      | Description                                                                          | Default / example                         |
| --------------------------- | ------------------------------------------------------------------------------------ | ----------------------------------------- |
| `rewriteBase`               | URL path of the project. `{{ '{{' }} rewriteBase {{ '}}' }}` in other values is replaced by it.      | `/`, `/hubleto/`                          |
| `projectUrl`                | Full URL of the project.                                                             | `http://localhost/{{ '{{' }} rewriteBase {{ '}}' }}`       |
| `assetsUrl`                 | URL of the assets folder.                                                            | `http://localhost/.../assets`             |
| `projectFolder`, `releaseFolder`, `secureFolder` | Folders. Detected automatically.                                | —                                         |
| `dbHost`, `dbUser`, `dbPassword`, `dbName`, `dbCodepage` | Database connection. The database is created if it doesn't exist. | `localhost`, `root`, —, `my_hubleto`, `utf8mb4` |
| `accountFullName`           | Name of the default company.                                                         | `My Company`                              |
| `adminName`, `adminFamilyName`, `adminNick`, `adminEmail`, `adminPassword` | The administrator. Empty password = random password. | —                        |
| `language`                  | Language of the administrator and of the default data.                               | `en`, `sk`, `cs`, `pl`, `de`, `ro`, `it`, `es`, `fr` |
| `generateDemoData`          | Generate demo data after installation.                                               | `true` / `false`                          |
| `noPrompt`                  | Don't ask for the final confirmation.                                                | `true`                                    |
| `packagesToInstall`         | Comma-separated packages of apps (see below). `crm` is always installed.              | all packages                              |
| `appsToInstall`             | Extra apps with their installation config, `namespace: {sidebarOrder: ...}`.          | —                                         |
| `smtpHost`, `smtpPort`, `smtpEncryption`, `smtpLogin`, `smtpPassword` | SMTP for sending e-mails.                               | —                                         |
| `externalAppsRepositories`, `enterpriseAppsRepository` | Locations of external and enterprise apps.                             | —                                         |
| `defaultConfiguration`      | Name of a default configuration to apply after installation.                         | —                                         |
| `extraConfigEnv`            | Extra values written to `ConfigEnv.php` (theme, logo, sidebar groups, ...).          | see below                                 |
Options of `php hubleto init`.

###### extraConfigEnv example (from the example config of the project)

```yaml
extraConfigEnv:
  uiTheme: green-orange
  logoUrl: assets/custom/images/my-hubleto.png
  appTitle: My Hubleto - Fully customized Hubleto
  sidebarGroups:
    crm:
      title: CRM
      icon: fas fa-id-card-clip
```

## Packages

`packagesToInstall` selects groups of community apps. The list and the `sidebarOrder` of each app are defined in `CommandInit::$packages`:

| Package                | Apps                                                                                         |
| ---------------------- | -------------------------------------------------------------------------------------------- |
| `crm` (always)         | AiAssistent, Desktop, Usage, Mail, Notifications, Documents, Customers, Contacts, Calendar, Dashboards, Workflow, Tasks, Worksheets |
| `maintenance`          | Auth, Crypto, Api, AuditLogs, Settings                                                       |
| `help`                 | Help, About                                                                                  |
| `customer-acquisition` | EmailMarketing, Leads                                                                        |
| `sales`                | Suppliers, Products, Deals, Orders                                                           |
| `productivity`         | Projects                                                                                     |
| `human-resources`      | HrEmployees, HrRecruitment, HrLeave, HrAttendance, HrPerformance                             |
| `finance`              | Invoices                                                                                     |
| `developer`            | Developer, Tools                                                                             |
Packages of apps.

To install exactly the apps you want, use `appsToInstall`:

```yaml
appsToInstall:
  Hubleto\App\Community\Settings: []
  Hubleto\App\Community\Desktop: []
  Hubleto\App\Custom\MyFirstApp:
    sidebarOrder: 300
```

## Output

Real output of `php hubleto init init-config.yaml` (paths shortened):

```
Hubleto CLI agent (release [dev-main]).
For more information about the parameters check https://developer.hubleto.eu/v0/cli/init

Hubleto, Business Application Hub & opensource CRM/ERP

Initializing with following config:
  -> rewriteBase = /
  -> projectFolder = /var/www/html/hubleto
  -> projectUrl = http://localhost:8765
  -> assetsUrl = http://localhost:8765/assets
  -> dbHost = localhost
  -> dbUser = root
  -> dbPassword = ***
  -> dbName = hubleto
  -> accountFullName = Hubleto Docs Demo
  -> adminEmail = admin@example.com
  -> generateDemoData = yes
  -> language = en
  -> packagesToInstall = crm,maintenance,help,customer-acquisition,sales,productivity,human-resources,finance,developer

Hurray. Installing your Hubleto.
  -> Creating folders and files.
  -> Creating database.
  -> Creating base tables.
  -> Installing 35 apps (Community\AiAssistent, Community\Desktop, Community\Usage, ..., Community\Developer, Community\Tools).
    -> Creating tables, round #1.
    -> Creating tables, round #2.
    -> Creating tables, round #3. (Creating foreign keys.)
  -> Adding default company and admin user.
  -> Reinitializing Hubleto after installation.
  -> Generating demo data.

All done! Enjoy Hubleto.

Your Hubleto is ready at http://localhost:8765?user=admin@example.com
Your password is: hubleto-docs

💡  TIPS:
💡  -> Check the developer's guide at https://developer.hubleto.eu.
💡  -> Create your new app.
💡  ->   php hubleto create app MyFirstApp
```

## Tips

  * The database user must exist and have the right to create databases.
  * `init` has no option for the database port. Use a host name or IP address that reaches the database on the default port 3306.
  * `init` overwrites `index.php`, `boot.php`, `cron.php` and `.htaccess` in the project folder.
  * After `init`, build the frontend (`npm install`, `npm run build`) and set up the cron (`* * * * * php /path/to/project/cron.php`).
  * With demo data enabled, the demo users and records are created after the apps are installed. See [Generating demo data](../installation/generate-demo-data).
