# Download and install

Use Hubleto for your projects.

Installation takes only a few minutes and it's super easy.

## Prerequisities

  * PHP 8.x and composer
  * NodeJS and NPM
  * MySQL or MariaDB
  * any webserver (e.g. Apache or nginx)

## Steps

> **WANT TO CONTRIBUTE?** If you are opensource fan and want to contribute to Hubleto, check [this guide](contribute) to setup your environment.

### Clone Github repository

```
git clone https://github.com/wai-blue/hubleto.git
```

### Install PHP and JS dependencies

```
cd hubleto
composer install
npm install
```

### Build everything together

```
npm run build
```

### Initialize the project

```
php hubleto init
```

> **IMPORTANT** For Nginx users: See [this note](nginx) on how to configure URL rewrite rules for Nginx.

### Use

That's all. Now, follow the instructions of the init script and open the Hubleto in your browser.

