# Create first app

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

## Get prepared

It's realy easy to start developing Hubleto apps but before that check the list below if you have all things ready.

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

## Download Hubleto

Ready? Now, [download and install your Hubleto](download-and-install).

## Init your project

With Hubleto downloaded and all other components (PHP, webserver and SQL engine) ready, init the project by running following command in your project's folder:

```
php hubleto init
```

Carefully follow instructions in the terminal. You might be prompted to perform additional actions.

## Create Hubleto app

Creating Hubleto app is as easy as running following command in your project's root folder:

```
php hubleto app create \HubletoApp\Custom\MyApp
```

Carefully follow instructions in the terminal. You might be prompted to perform additional actions.