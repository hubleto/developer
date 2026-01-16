# External apps

Apps developed by Hubleto contributors.

External apps are those developed externally by Hubleto contributors and are published as a `composer` package. External apps can be easily reused across different projects. Event apps from different contributors can be bundled into Hubleto installation. All this is thanks to composer package manager.

## Publishing external app

Simply put, every Hubleto contributor can develop its own app and publish it as a composer package. Then, this app can be used in any Hubleto installation, as long as it is installed by the composer into the `vendor` folder.

```bash
composer require vendor-name/app-name
```

###### Command to install the external app into your Hubleto installation

There are only few mandatory rules which should met when publishing the external app:

  * App's namespace must be `Hubleto\App\External\VENDOR_NAME\APP_NAME` where `VENDOR_NAME` is the name of the vendor publishing the app, and `APP_NAME` is the name of the app itself.
  * App must contain at least valid `manifest.yaml` file and a `Loader.php` class.
  * App must be installable with `composer` (must be registered as a package in https://packagist.org).

## Setting up a development environment

The easiest setup of the development environment is described below. We will use following properties in this guide:

  * vendor name is `hubleto-developer` or `HubletoDeveloper`
  * app name is `hello-world-app` or `HelloWorldApp`
  * app source code is in `/var/www/html/hubleto-developer/hello-world-app` folder
  * app namespace is `Hubleto\App\External\HubletoDeveloper\HelloWorldApp`
  * Hubleto installation folder is `/var/www/html/my-hubleto`

Follow these steps to setup the development environment for external apps:

### 1. Install your Hubleto installation

```bash
cd /var/www/html/my-hubleto
composer create-project hubleto/erp-project .
php hubleto init
```

### 2. Create app's scaffolding

```bash
cd /var/www/html/hello-world-app
mkdir src
vim src/manifest.yaml # put valid manifest.yaml content here
vim src/Loader.php # put valid Loader.php class here
vim composer.json # tell composer how your app will be installed. You must set at least the `autoload`.`psr-4` parameter. See sample composer.json file below
vim README.md # describe your app here
```

```json
{
    "name": "hubleto-developer/hello-world-app",
    "license": "MIT",
    "description": "Hello world Hubleto!",
    "autoload": {
        "psr-4": {
            "Hubleto\\App\\External\\HubletoDeveloper\\HelloWorldApp\\": "src"
        }
    }
}
```
###### Sample `composer.json` file

### 3. Add app into your Hubleto installation

This activity has several steps. The goal is to add your app into `vendor` folder of your Hubleto installation folder.

#### 3.1 Prepare composer.json

In your Hubleto installation folder (we used `/var/www/html/my-hubleto` at the beginning) modify the `composer.json` file and add following entry into `repositories`:

```json
{
    "repositories": {
        "hubleto-developer/hello-world-app": {
            "type": "path",
            "url": "/var/www/html/hello-world-app"
        }
    }
}
```

#### 3.2 Add your app to the `vendor` folder

Now you will add your app to the `vendor` folder of your Hubleto installation. The app will be added as a symbolic link, which means that any change in `/var/www/html/hello-world-app` will be immediately reflected in `/var/www/html/my-hubleto/vendor/vendor-name/hello-world-app`.

```bash
cd /var/www/html/my-hubleto
composer require hubleto-developer/hello-world-app
```

#### 3.3 Install the app into Hubleto

Your folder structure and development environment is ready now. You can install the app directly into the Hubleto so that it will become accessible in the Hubleto's UI.

```bash
cd /var/www/html/my-hubleto
php hubleto app install Hubleto/App/External/HubletoDeveloper/HelloWorldApp
```

Now, if everything went correctly, you should be able to access your app in the Hubleto UI.