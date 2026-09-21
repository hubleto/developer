# Installation configuration

Configure your installation in a `.yaml` file.

The installation script of Hubleto requires a set of several variables to be provided as an input.

These variables can be provided in two ways:

  1. Typed in manually in `php hubleto init` command.
  2. Storedin a `.yaml` file and provided as an argument, example `php hubleto init my-hubleto.yaml`

## Configuration file

An installation configuration file is in `.yaml` format. You can find some examples at `https://github.com/hubleto/erp-project`.

Minimial set of variables with their explanation is shown below.

If any of the variables are missing in the configuration file (e.g. your database password), the installer script asks for it.

```yaml
### Project location
rewriteBase: /my-hubleto/
projectUrl: http://localhost/my-hubleto
srcUrl: http://localhost/my-hubleto/vendor/hubleto/erp
assetsUrl: http://localhost/my-hubleto/vendor/hubleto/assets

### Database connection
dbHost: localhost
dbUser: hbl_user
dbPassword: hbl_user_secret_password
dbName: my_hubleto
dbCodepage: utf8mb4

### Initial account access
accountFullName: My Hubleto
adminName: John
adminFamilyName: Developer
adminNick: johndev
adminEmail: dev@example.com
adminPassword: dev
packagesToInstall: crm,marketing,sales,projects,retail,e-commerce,finance,developer

### Miscellaneous
generateDemoData: true
noPrompt: true
```