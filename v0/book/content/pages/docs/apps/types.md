# Types

There are community, custom and external apps.

| App type            | Namespace                | Description / When to use                                                                            |
| ------------------- | ------------------------ | ---------------------------------------------------------------------------------------------------- |
| **Community apps**  | `HubletoApp\Community`  | Apps freely available in the Github repository. Download them and use freely.                        |
| **Custom apps**     | `HubletoApp\Custom`     | Use custom apps if you are developing a custom project and do not plan to re-use your app elsewhere. |
| **External apps**   | `HubletoApp\External`   | External apps are developed by external companies and are planned to be re-used in many projects.    |
Types of Hubleto apps.

Each type of app has its own namespace prefix (e.g., `HubletoApp\Community` for community apps). This is because each type of app has its specific location and so PHP autoloader can easily autoload the app's loader class.

## Locations

Each app type has its specific location. See summary below. Each location is a relative path from your Hubleto project root folder (e.g., `/var/www/html/hubleto`).

| App type           | Namespace              | Location                |
| ------------------ | ---------------------- | ----------------------- |
| **Community apps** | `HubletoApp\Community` | `./vendor/hubleto/apps` |
| **Custom apps**    | `HubletoApp\Custom`    | `./src/apps`            |
| **External apps**  | `HubletoApp\External`  | `./vendor`              |
