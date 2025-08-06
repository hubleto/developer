# `php hubleto init`

`php hubleto init` is the first Hubleto-CLI command you will use.

Hubleto comes with the powerful [CLI agent](../cli-agent) and one of its commands is for initialization of the Hubleto project folder.

```
php hubleto init
```
###### The command to initialize Hubleto project folder

When launched, Hubleto asks for several parameters (see figure below) and then installs everything to run Hubleto ERP.

<img src="{{ bookRootUrl }}/content/assets/images/cli-init-01.png" />
*Snapshot of the terminal showing `php hubleto init` command*

## Configuration file

You may provide additional argument pointing to the YAML configuration file. Parameters from this configuration file
will be used and will not be prompted by the user. If you will all parameters in the config file, you may
install the Hubleto without being prompted at all.

Full example of this file is at https://github.com/hubleto/erp/blob/main/init-config-example.yaml.

## Configuration parameters

| Parameter         | Type    | Description                                                       |
| ----------------- | ------- | ----------------------------------------------------------------- |
| rewriteBase       | string  | An 'apache-like' RewriteBase of the project's folder.             |
| projectUrl        | string  | Full URL to the project's folder.                                 |
| srcUrl            | string  | Full URL to the `hubleto/main` repository.                        |
| assetsUrl         | string  | Full URL to the folder with assets.                               |
| dbHost            | string  | Database host.                                                    |
| dbUser            | string  | Database user.                                                    |
| dbPassword        | string  | Password for the database user.                                   |
| dbName            | string  | Name of the database to be used.                                  |
| dbCodepage        | string  | A codepage, preferrably `utf8mb4`.                                |
| accountFullName   | string  | Full name of the account, e.g. name of the company.               |
| adminName         | string  | Given name of the project administrator.                          |
| adminFamilyName   | string  | Family name of the project administrator.                         |
| adminNick         | string  | Nick name of the project administrator.                           |
| adminEmail        | string  | Email of the project administrator. Will be used also as a login. |
| adminPassword     | string  | Password to access admin account.                                 |
| packagesToInstall | string  | What packages to install.                                         |
| generateDemoData  | boolean | If true, demo data will be generated.                             |
| noPrompt          | boolean | If true, a prompt to install will be suppressed.                  |
