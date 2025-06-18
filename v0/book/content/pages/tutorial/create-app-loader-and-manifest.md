# Create app loader and manifest

An app is a basic functional element of Hubleto. Every functionality available in Hubleto is thus built using apps.

<div class="youtube-video">
  <iframe src="https://www.youtube.com/embed/EDwpRQBVIuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

## Where are apps stored?

There are three types of Hubleto apps: community, premium, external or custom. See [this page](../apps) to learn more about their differences.

*Community* apps are stored in `./apps/community`. To create them, it's enough to create an app folder here. *External* and *premium* apps are stored in their own repositories and they will need to have a repository configured. To learn how to configure app repositories, check [advanced app development tutorial](../advanced-development).

> In this tutorial, we will be creating a **custom app**. We will use `MyCompany` as the vendor name and `MyApp` as the application name.

So, our app will be located in `./apps/custom/MyApp` folder. We will always use paths relative to your Hubleto's root folder.

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

Now, you can install this empty app into your project. Do this by running the `php hubleto app install` command as follows:

```
php hubleto app install \HubletoApp\Custom\MyApp
```

> **VISUAL_CHECK** | Now, when you open the Hubleto in your browser your app should show up somewhere in the left sidebar.
> <img src="{{ bookRootUrl }}/content/assets/images/my-app-in-sidebar.png" />

