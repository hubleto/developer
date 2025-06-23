# Create app loader and manifest

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

<div class="youtube-video">
  <iframe src="https://www.youtube.com/embed/EDwpRQBVIuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

## Folder structure

First let's explain the folder structure of the Hubleto app. It's relatively simple and follows the MVC principle.

###### Hubleto folder structure
```
my-app/
├─ apps/
│  ├─ community/
│  │  ├─ Calendar/
│  │  ├─ Contacts/
│  │  ├─ ...
│  ├─ custom/
│  │  ├─ MyApp/                <-- your app goes here
│  │  │  ├─ Components/        <-- your app's React components
│  │  │  ├─ Controllers/       <-- your app's controllers
│  │  │  ├─ Models/            <-- your app's models
│  │  │  │  ├─ RecordManagers/ <-- your app's record managers
│  │  │  ├─ Views/             <-- your app's views
│  │  │  ├─ Loader.php         <-- your app's PHP loader
│  │  │  ├─ Loader.tsx         <-- your app's React loader
│  │  │  └─ manifest.yaml      <-- your app's manifest
├─ assets/
├─ lang/
├─ src/
├─ upload/
├─ vendor/
├─ .htaccess
├─ ConfigEnv.php
└─ index.php
```

As you can see, there are folders for *models*, *views*, *controllers* and there are also scripts for loading app, both for PHP (backend) and React (frontend) side.

## Prepare the folders

In this tutorial, we will be creating a **custom app** called `MyApp`. So, our app will be located in `./apps/custom/MyApp` folder and its namespace will be `\HubletoApp\Custom\MyApp`.

> **NOTE** | To learn how to configure external app repositories, check [advanced app development tutorial](../advanced-development).

## Create app loader

To start, create `./apps/custom/MyApp/Loader.php` with the following content:

###### ./apps/custom/MyApp/Loader.php
```php
<?php
namespace HubletoApp\Custom\MyApp;
class Loader extends \HubletoMain\Core\App { }
```

> **BE CAREFUL** | The 'Custom' in the namespace should start with capital 'C' (not 'custom'), although the folder where you create the app is called 'custom'.

## Create app manifest

Each app must provide its [manifest](../app-manifest). This is stored in `manifest.yaml` file in the same folder where app's loader is stored. Create `./apps/custom/MyApp/manifest.yaml` with the following content:

###### ./apps/custom/MyApp/manifest.yaml
```yaml
namespace: HubletoApp\Custom\MyApp
rootUrlSlug: my-app
name: My App
icon: fas fa-home
author:
  name: "Mike Superdev"
  nick: "mike.superdev"
  company: "best.devs"
highlight: Very usefull business app.
```

## Install empty app

You have created an empty app `MyApp` which does nothing, but it can already be included in your Hubleto project.

To do so, you must **install this empty app**. Do this by running the `php hubleto app install` command as follows:

```
php hubleto app install \HubletoApp\Custom\MyApp
```

> **VISUAL_CHECK** | Now, when you open the Hubleto in your browser your app should show up somewhere in the left sidebar.
> <img src="{{ bookRootUrl }}/content/assets/images/my-app-in-sidebar.png" />

