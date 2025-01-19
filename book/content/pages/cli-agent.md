# CLI agent

Use `php hubleto` CLI agent to automate some activities.

Hubleto comes with a CLI agent - a script to automate some project administrator activities.

To run the agent execute following command in your terminal: `php hubleto` or `php hubleto help` to list all available commands.

# Available commands

| Command                                       | Description                                                             |
| --------------------------------------------- | ----------------------------------------------------------------------- |
| help                                          | Prints this help                                                        |
| init [configFile]                             | Init empty Hubleto project. Config file must be in YAML.                |
| ----- COMMAND GROUP 'app' --------------      | ----------------------------------------------------------------------- |
| app disable &lt;appClass&gt;                  | Disable app. This will not delete app's data.                           |
| app install &lt;appClass&gt; [forceReinstall] | Install specified app.                                                  |
| app reset-all                                 | Re-install all apps their 'factory' state.                              |
| app show-installed                            | Show all installed apps.                                                |
| ----- COMMAND GROUP 'code' -------------      | ----------------------------------------------------------------------- |
| code generate &lt;template&gt;                | Generate code by given template.                                        |
| code show-templates                           | Show all available templates for *code generate* command.               |
Table: Available commands in Hubleto CLI agent

Examples:
```
php hubleto help
php hubleto init project-config.yaml
php hubleto app install \HubletoApp\Community\Customers\Loader
php hubleto code show-templates
```