# CLI agent

Use `php hubleto` CLI agent to automate many activities.

Hubleto comes with a CLI agent - a script to automate some project administrator activities.

To run the agent type

```
php hubleto <command> [arguments]
```

in your Hubleto project root folder.

For example: `php hubleto help` to print all available commands or `php hubleto init` to init your project.

## General commands

| Command | Description                                                                                                          |
| ------- | -------------------------------------------------------------------------------------------------------------------- |
| `help`  | Prints help.                                                                                                         |
| `init`  | Init empty Hubleto project.<br/>You may optionaly provide YAML config file.<br/>See [this guide](cli/init) for more details. |

## App commands

| Command                              | Description                                                                  |
| ------------------------------------ | ---------------------------------------------------------------------------- |
| `app create <appNamespace>`          | Create app in a given namespace.                                             |
| `app disable <appNamespace>`         | Disable app. This will not delete app's data.                                |
| `app install <appNamespace> [force]` | Install specified app. If force set to true, app will be reinstalled.        |
| `app test <appNamespace> <testName>` | Run one test. ONLY FOR DEVELOPMENT! MAY MODIFY YOUR DATA.                    |
| `app test <appNamespace>`            | Run all tests in <appNamespace>. ONLY FOR DEVELOPMENT! MAY MODIFY YOUR DATA. |
| `app reset-all`                      | Re-install all apps their 'factory' state.                                   |
| `app list`                           | List` all installed apps.                                                    |

## Create commands

| Command                                    | Description                                       |
| ------------------------------------------ | ------------------------------------------------- |
| `create model <appNamespace> <model>`      | Creates an empty model into a specified app.      |
| `create controller <appNamespace> <model>` | Creates an empty controller into a specified app. |
| `create view <appNamespace> <model>`       | Creates an empty view into a specified app.       |
| `create mvc <appNamespace> <model>`        | Creates a default MVC for a specified model.      |
| `create api <appNamespace> <endpoint>`     | Creates a sample REST API controller.             |
