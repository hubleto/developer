# Apps

Use left sidebar to navigate through documentation of existing apps.

There are following types of apps in Hubleto:

| App type            | Namespace                | Description / When to use                                                                            |
| ------------------- | ------------------------ | ---------------------------------------------------------------------------------------------------- |
| **Community apps**  | `\HubletoApp\Community`  | Apps freely available in the Github repository. Download them and use freely.                        |
| **Custom apps**     | `\HubletoApp\Custom`     | Use custom apps if you are developing a custom project and do not plan to re-use your app elsewhere. |
| **External apps**   | `\HubletoApp\External`   | External apps are developed by external companies and are planned to be re-used in many projects.    |
| **Enterprise apps** | `\HubletoApp\Enterprise` | Hubleto team develops enterprise apps as the paid and more complex version of community apps.        |

## Create app using `php hubleto` CLI agent

Creating a new app is very easy. For example, to create an app that will be used in your project, simply run following code in your terminal (you must be inside a Hubleto project root folder):

```bash
php hubleto app create HubletoApp\Custom\MyFirstApp
```

If you want to learn more, check [this page](create-first-app).