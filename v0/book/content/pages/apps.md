# Apps

Use left sidebar to navigate through documentation of existing apps.

There are following types of apps in Hubleto:

| App type            | Namespace                | Description / When to use                                                                            |
| ------------------- | ------------------------ | ---------------------------------------------------------------------------------------------------- |
| **Community apps**  | `\Hubleto\App\Community`  | Apps freely available in the Github repository. Download them and use freely.                        |
| **Custom apps**     | `\HubletoApp\Custom`     | Use custom apps if you are developing a custom project and do not plan to re-use your app elsewhere. |
| **External apps**   | `\HubletoApp\External`   | External apps are developed by external companies and are planned to be re-used in many projects.    |

<img src="book/content/assets/images/app-management.jpg" />
###### Screenshot from the app manager in Hubleto

## Create app with CLI agent

Creating a new app is very easy. For example, to create an app that will be used in your project, simply run following code in your terminal (you must be inside a Hubleto project root folder):

```bash
php hubleto app create HubletoApp\Custom\MyFirstApp
```

If you want to learn more, check [this page](docs/apps).

## Source code documentation

Source code documentation for community apps is available [here](source-code/apps).

## User guide

User guides for community apps are available at https://help.hubleto.com.