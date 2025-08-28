# Getting started

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

| Step               | Command                                         |
| ------------------ | ----------------------------------------------- |
| Create the project | `composer create-project hubleto/erp-project .` |
| Initialize ERP     | `php hubleto init`                              |
Table: Steps to install production-ready Hubleto ERP using `composer`

### Development environment

Instructions to prepare the development environment are at https://github.com/hubleto/erp.

## Docker

There also is a Docker image ready for installation, which already contains the webserver and MySQL database, so it's a quick installation on any machine, as long as Docker is already running. 

  * installation of the production-ready ERP
  * not suited for development purposes

### Showcase build

You only need to run the command `docker run -d -p 8080:80 mrgopes/hubleto-webapp` to set up a demo build of Hubleto. You can log in with the credentials `admin@example.com` and password `changeme` at `http://localhost:8080/`.

### Production-ready build

To make your Hubleto installation ready for production and real use, please also specify the following arguments:

| Variable           | Description                                     |
| ------------------ | ----------------------------------------------- |
| `url`             | The URL at which your installation will run, default is `http://localhost:8080/`  |
Table: Special arguments only for installing Hubleto using `docker`

If you have your own database and do not wish to use the packaged one, define the following arguments: `dbHost`, `dbPort`, `dbUser`, `dbPassword`, `dbName`, `dbCodepage`.

Also do not forget to specify your account details `accountName`, `adminName`, `adminFamilyName`, `adminNick`, `adminEmail`, `adminPassword`, `demoData`.

Specify all arguments as if you were defining the initialization config (except `url`), see [php hubleto init](cli/init).

The `-p 8080:80` specifies, that the container should run on port `8080`. If your port `80` is not being used, we advise you to use `-p 80:80` instead. Otherwise, you can use e.g. NGINX to forward traffic from a specific route to this port, however, in that case don't forget to set the `url` argument accordingly. 

Example installation command with default values for all arguments:
<pre><code>
docker run -d -p 8080:80 \
  -e url="http://localhost:8080/"
  -e dbHost="127.0.0.1" \
  -e dbPort="3306" \
  -e dbUser="hubleto" \
  -e dbPassword="hubleto" \
  -e dbName="hubleto" \
  -e dbCodepage="utf8mb4" \
  -e accountName="Admin User" \
  -e adminName="admin" \
  -e adminFamilyName="admin" \
  -e adminNick="admin" \
  -e adminEmail="admin@example.com" \
  -e adminPassword="changeme" \
  -e demoData="false" \
  mrgopes/hubleto-webapp
</code></pre>

> Note: if you want to use the default value for an argument, you can also simply leave it out.


## Download .zip package

Zip package contains production-ready Hubleto ERP.

| Step                     | Command                                  |
| ------------------------ | ---------------------------------------- |
| Download Hubleto CE      | https://www.hubleto.com/en/download      |
| Unzip downloaded package | `unzip hubleto-[RELEASE_VERSION]-ce.zip` |
| Initialize project       | `php hubleto init`                       |
Table: Steps to install Hubleto from .zip package
