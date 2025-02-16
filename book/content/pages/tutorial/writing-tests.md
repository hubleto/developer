# Writing tests

Create automated tests to deliver good quality apps.

## Introduction

You should always write tests for your app. Writing unit tests offers several key benefits that contribute to the overall quality, maintainability, and reliability of your app:

  * **Catch Bugs Early:** Unit tests help identify issues early in the development process, often before they become more complex and difficult to fix.
  * **Improve Code Quality:** Writing unit tests encourages you to write modular, clean, and well-structured code. It forces you to think about the design of your functions and methods, leading to better architecture.
  * **Easier Collaboration:** When multiple developers work on a project, unit tests help ensure consistency and reduce the risk of introducing bugs during collaborative development.
  * **Confidence in Code:** Having comprehensive unit tests gives developers confidence that the software behaves as expected, both during development and when new changes are introduced.

Overall, unit testing is an investment that pays off by improving the long-term stability and maintainability of your app.

## How to write tests

To create a test, first create a `Tests` folder in your app's folder. Then, for each test create a separate PHP script. Following previous tutorials, we can add a simple test called `RenderAllRoutes` to our `MyApp` by creating a dedicated file:

###### ./apps/external/MyCompany/MyApp/Tests/RenderAllRoutes.php
```php
namespace HubletoApp\External\MyCompany\MyApp\Tests;
class RenderAllRoutes extends \HubletoMain\Core\AppTest {
  public function run(): void {
    $this->main->render('my-app');
    $this->main->render('my-app/contacts');
  }
}
```

## Running a test

To run a test, use [Hubleto CLI agent](../cli-agent) followingly:

```
php hubleto app test <appName> <testName>
```

You must provide full namespace of your app's loader class.

For example, to run a *RenderAllRoutes* created earlier, run following command:

```
php hubleto app test \HubletoApp\External\MyCompany\MyApp\Loader RenderAllRoutes
```