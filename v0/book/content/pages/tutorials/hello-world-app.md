# Hello World app

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

## Install required dependencies

Before we start, check if you have necessary tools in plase. In your environment, you should have installed following:

  * webserver (Apache or Nginx)
  * PHP
  * MariaDB or MySQL

When you'll be ready, continue with the following steps.

## Create the app

{% include 'components/step-by-step.twig' with {'steps': {
  '1': {
    'title': 'Download and unzip latest Hubleto',
    'description': markdown('Download latest Hubleto at https://www.hubleto.com/en/download and unzip it into your project\'s folder.'),
  },
  '2': {
    'title': 'Init the project',
    'description': markdown('Init the project by running command on the right in your project\'s root folder.'),
    'example': markdown('
```
php hubleto init
```
'),
  },
  '3': {
    'title': 'Create the app',
    'description': markdown('Creating Hubleto app is as easy as running following command on the right in your project\'s root folder.'),
    'example': markdown('
```
php hubleto app create \\Hubleto\\App\\Custom\\MyApp
```
'),
  },
}} %}

## Start developing Hubleto apps

Now you're ready to develop your own Hubleto apps.

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
