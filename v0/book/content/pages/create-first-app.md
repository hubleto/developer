# Create first app

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

> **NEW FEATURE** | You can now create app with [CLI agent](cli-agent)

> &nbsp;

> Run following command in your project's root folder:

> `php hubleto app create HubletoApp\Custom\MyFirstApp`

> &nbsp;

> **This will create default app with some functional examples.**

An app is a custom class which extends from [`\HubletoMain\Core\App`](https://github.com/hubleto/main/blob/main/src/core/App.php) class. Most simple implementation of the app is shown below.

An app is a basic functional element of Hubleto. And so, every functionality available in Hubleto is built in Hubleto apps.

It's realy easy to start developing Hubleto apps but before that check the list below if you have all things ready.

## What you should know

For programming the backend part of your application, you should have experience with:

  * PHP
  * Model-View-Controller (MVC) architecture principles
  * Object oriented programming (OOP)
  * SQL Databases
  * *composer* PHP package manager (https://getcomposer.org)

For the frontend part, you should have experience with:
  * Javascript, HTML and CSS
  * React (https://react.dev)
  * TWIG templating engine (https://twig.symfony.com)
  * *npm* Node package manager (https://www.npmjs.com)

## Download and install

Ready? Now, [download and install your Hubleto](download-and-install).

## Tutorial: How to create Hubleto app

Do you have your Hubleto running? Great!

Now, start [this tutorial](tutorial/create-app-loader-and-manifest) to learn how to create your first Hubleto app.