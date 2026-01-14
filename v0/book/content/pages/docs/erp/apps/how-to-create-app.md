# How to create app

Each app type has a specific process to create.

There are several [types](apps/types) of apps: community, custom or external.

## Custom apps

Let's start with creating a *custom* app. This is the easiest process.

A custom app is located in `./src/apps` folder in your Hubleto project folder. For example, if you installed your Hubleto in `/var/www/html/hubleto`, then your custom apps will be located in `/var/www/html/hubleto/src/apps`.

> **NOTE** Custom apps are project-specific. This means they are created for the single project and if you want to reuse them, you only can make a hard-copy of the original app into a new project. So, contrary to *external* apps, *custom* apps cannot be managed by a package manager (a `composer`).

### Create custom app

To create a custom app, run following commands:

```
cd /path/to/your/hubleto
php hubleto create app MyCustomApp
```

This will create a set of files and folders in `/path/to/your/hubleto/src/apps/MyCustomApp` folder.

Once created, you must [install](how-to-install-app) the app.

## External apps

*External* apps have one significan advantage over *custom* apps - they can be bundled as a package and included into a project using `composer`.

This allows external apps to be easily reused among different Hubleto projects.

However, creating an external app is a bit more complicated. The most straightforward way is following:

| #   | Step                                                                                                                                                                 |
| --- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1   | Create a custom app using `php hubleto create app` command.                                                                                                          |
| 2   | Implement app's functionality and test it inside your Hubleto project.                                                                                               |
| 3   | Once tested, prepare the github repository for your new app.                                                                                                         |
| 4   | Move your app to this repository, under the `src` folder and manually change all namespaces from `HubletoApp\Custom\MyFirstApp` to `HubletoApp\External\MyFirstApp`. |
| 5   | [Publish the app](publish-external-app).                                                                                                                             |
Steps to create external app.

Folder structure of an external app should be similar to this:

###### Example of folder structure for an external app
```
./ # clone of the github repository of your app
│ src/
│ ├─ Components/
│ ├─ Controllers/
│ ├─ Models/
│ ├─ Views/
│ ├─ Loader.php
│ ├─ Loader.tsx
│ └─ manifest.yaml
├─ src/
├─ composer.json
└─ README.md
```

## Community apps

Community apps are bundled with the Hubleto projects. They are located in `vendor/hubleto/erp/apps`.

These apps are developed by the Hubleto contributors. If you want to contribute, <a href="{{ guideRootUrl }}/join-us">join us</a>.