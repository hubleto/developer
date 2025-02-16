# Create app loader and manifest

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

An app is a custom class which extends from [`\HubletoMain\Core\App`](https://github.com/wai-blue/hubleto/blob/main/src/core/App.php) class. Most simple implementation of the app is shown below.

<div class="youtube-video">
  <iframe src="https://www.youtube.com/embed/EDwpRQBVIuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

## Where are apps stored?

There are three types of Hubleto apps: community, enterprise or external.

Community apps are stored in `./apps/community`. External and enterprise apps are stored in their own repositories.

By default, a repository for external apps is in `./apps/external`. For the beginning, we will use this folder to put our app in. If you want to learn how to configure external app repositories, check [advanced app development tutorial](../advanced-development).

> In this tutorial, we will be creating an **external app**. We will use `MyCompany` as the vendor name and `MyApp` as the application name.

So, our app will be located in `./apps/external/MyCompany/MyApp` folder. We will always use paths relative to your Hubleto's root folder.

## Create app loader

To start, create `./apps/external/MyCompany/MyApp/Loader.php` with the following content:

###### ./apps/external/MyCompany/MyApp/Loader.php
```php
<?php
namespace HubletoApp\External\MyCompany\MyApp;
class Loader extends \HubletoMain\Core\App { }
```

## Create app manifest

Each app must provide its manifest. This is stored in `manifest.yaml` file in the same folder where app's loader is stored. Create `./apps/external/MyCompany/MyApp/manifest.yaml` with the following content:

###### ./apps/external/MyCompany/MyApp/manifest.yaml
```yaml
namespace: HubletoApp\External\MyCompany\MyApp
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

Now, you can install this empty app into your project. Do this by running the `php hubleto app install` command as follows:

```
php hubleto app install \HubletoApp\External\MyCompany\MyApp\Loader
```

> **VISUAL_CHECK** | Now, when you open the Hubleto in your browser your app should show up somewhere in the left sidebar.
> <img src="{{ bookRootUrl }}/content/assets/images/my-app-in-sidebar.png" />

