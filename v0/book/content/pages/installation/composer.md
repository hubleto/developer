# Installation using PHP's Composer

Installation takes only a few minutes and it's super easy.

## Prerequisities

To install Hubleto, you will need:

  * PHP 8.4+
  * MySQL or MariaDB
  * any webserver (e.g. Apache or nginx) (Read [this note](nginx) if you are using nginx.)

| <img src="{{ bookRootUrl }}/content/assets/images/linux-logo.png" style="width:2em;padding:0;border:0;" />                          | <img src="{{ bookRootUrl }}/content/assets/images/windows-logo.png" style="width:2em;padding:0;border:0;" />                               |
| ----------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
| For Linux developers, the easiest way to get all this is to install **LAMP server**.   It is available here: https://ampps.com/lamp | For Windows developers, the easiest way to get all this is to install **XAMPP server**. It is available here: https://www.apachefriends.org |

There are two types of installations:

  * installation of the production-ready ERP
  * installation of the development environment

## Production-ready ERP

This installation is suitable when you are deploying Hubleto to your customer and you expect to customize it only with [custom Apps](../apps) and you do not need to develop custom *React components*.

| Step               | Command                                         |
| ------------------ | ----------------------------------------------- |
| Create the project | `composer create-project hubleto/erp-project .` |
| Initialize ERP     | `php hubleto init`                              |
Table: Steps to install production-ready Hubleto ERP using `composer`

> **PRO TIP**: Read about [initialization configuration file](init-config) to streamline the installation process without any user prompt.

### Development environment

If you want to develop [external apps](../apps) or you want to contribute to the development of [community apps](../apps) and you want tyour apps to contain *React components*, you must do additional steps to your production-ready installation.

Watch this video to learn how to configure the development environment.

<iframe width="560" height="315" src="https://www.youtube.com/embed/xgzfHUWl-TM?si=bVSb1GMwduJTi-7J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
