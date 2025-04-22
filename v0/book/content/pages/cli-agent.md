# CLI agent

Use `php hubleto` CLI agent to automate many activities.

Hubleto comes with a CLI agent - a script to automate some project administrator activities.

To run the agent execute following command in your terminal: `php hubleto` or `php hubleto help` to list all available commands.

## Available commands

```txt
| Command                             | Description                                                                  |
| ----------------------------------- | ---------------------------------------------------------------------------- |
| help                                | Prints this help                                                             |
| init                                | Shortcut to `project init` command.                                          |
|                                     |                                                                              |
| project init                        | Init empty Hubleto project. Config file must be in YAML.                     |
|                                     |                                                                              |
| app create <appNamespace>           | Create app in a given namespace.                                             |
| app disable <appNamespace>          | Disable app. This will not delete app's data.                                |
| app install <appNamespace> [force]  | Install specified app. If force set to true, app will be reinstalled.        |
| app test <appNamespace> <testName>  | Run one test. ONLY FOR DEVELOPMENT! MAY MODIFY YOUR DATA.                    |
| app test <appNamespace>             | Run all tests in <appNamespace>. ONLY FOR DEVELOPMENT! MAY MODIFY YOUR DATA. |
| app reset-all                       | Re-install all apps their 'factory' state.                                   |
| app list                            | List all installed apps.                                                     |
|                                     |                                                                              |
| create model <appNamespace> <model> | Creates an empty model into a specified app.                                 |
|                                     |                                                                              |
| debug router [routeToDebug]         | List all routes or print route information.                                  |

Examples:
  php hubleto help
  php hubleto project init
  php hubleto app create \HubletoApp\Custom\MyFirstApp
  php hubleto app install \HubletoApp\Custom\MyFirstApp force
  php hubleto project generate-demo-data
```

## Create 'Hello world' app

Create your first Hubleto app with just few terminal commands.

First, **download the [latest Hubleto release](https://www.hubleto.com/en/install)** and then run following commands in your terminal.

###### Init the project
```bash
php hubleto init
```

###### Create the app
```bash
php hubleto app create "HubletoApp\Custom\HelloWorldApp"
```

###### Install it
```bash
php hubleto app install "HubletoApp\Custom\HelloWorldApp"
```

###### Add a model
```bash
php hubleto create model "HubletoApp\Custom\HelloWorldApp" "TodoItem"
```