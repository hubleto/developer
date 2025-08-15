# Install

Use Hubleto for your projects.

Installation takes only a few minutes and it's super easy.

<iframe width="560" height="315" src="https://www.youtube.com/embed/xgzfHUWl-TM?si=bVSb1GMwduJTi-7J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

## Prerequisities

To run Hubleto, you will need:

  * PHP 8.4+
  * MySQL or MariaDB
  * any webserver (e.g. Apache or nginx) (Read [this note](nginx) if you are using nginx.)

| <img src="{{ bookRootUrl }}/content/assets/images/linux-logo.png" style="width:2em;padding:0;border:0;" />                          | <img src="{{ bookRootUrl }}/content/assets/images/windows-logo.png" style="width:2em;padding:0;border:0;" />                               |
| ----------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
| For Linux developers, the easiest way to get all this is to install **LAMP server**.   It is available here: https://ampps.com/lamp | For Windows developers, the easiest way to get all this is to install **XAMPP server**. It is available here: https://www.apachefriends.org |

## Composer

The easiest way is to install using `composer create-project`. There are two types of installations:

  * installation of the production-ready ERP
  * installation of the development environment

### Production-ready ERP

| Step               | Command                                 |
| ------------------ | --------------------------------------- |
| Create the project | `composer create-project hubleto/erp .` |
| Initialize ERP     | `php hubleto init`                      |
Table: Steps to install production-ready Hubleto ERP using `composer`

### Development environment

Instructions to prepare the development environment are at https://github.com/hubleto/erp.

## Download .zip package

Zip package contains production-ready Hubleto ERP.

| Step                     | Command                                  |
| ------------------------ | ---------------------------------------- |
| Download Hubleto CE      | https://www.hubleto.com/en/download      |
| Unzip downloaded package | `unzip hubleto-[RELEASE_VERSION]-ce.zip` |
| Initialize project       | `php hubleto init`                       |
Table: Steps to install Hubleto from .zip package
