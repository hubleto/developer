# Manifest

Each Hubleto app must provide its `manifest.yaml` file containg basic description of the app.

Information from manifest are used in many places, e.g.:

  * during the app installation
  * in the Hubleto main settings panel
  * in the list of apps in the app store
  * when rendering Hubleto's main sidebar

The manifest is stored in `manifest.yaml` file in the app's root folder. Sample manifest looks like this:

```yaml
namespace: \HubletoApp\Custom\MyFirstApp
appType: custom
sidebarGroup: supply-chain
rootUrlSlug: myfirstapp
name: My First App
icon: fas fa-home
author:
  name: "My Company"
  nick: "my.company"
highlight: A sample app's manifest
```

Here we explain particular items of the manifest.

## namespace (required)

Specifies the namespace of the app. Must be the same as the namespace of the apps `Loader.php` file.

Example:

```yaml
namespace: \HubletoApp\Custom\MyFirstApp
```

## appType (required)

Specifies the type of the app. Can be `community`, `custom` or `external`.

Example:

```yaml
appType: custom
```

## sidebarGroup (optional)

Specifies the sidebar group under which the app's entry button will be displayed. List of default sidebar groups is [here](https://github.com/hubleto/apps/blob/main/src/Desktop/Controllers/Desktop.php).

Example:

```yaml
sidebarGroup: e-commerce
```

## rootUrlSlug (required)

Specifies the URL slug used to access app's resources (controllers). By default all app's routes must begin with this slug.

Example: 

```yaml
rootUrlSlug: my-first-app
```

## name (required)

Short name of the app as it appears e.g. in the main sidebar. May be used elsewhere to identify the app to the user.

Example:

```yaml
name: My First App
```

## icon (required)

Short nifame of the app as it appears e.g. in the main sidebar. May be used elsewhere to identify the app to the user.

Free FontAwecome icon set is used to render the icon, so *fontawesome* notation of the CSS class must be used. Visit http://fontawesome.com/v6/search to search for available icons.

Example:

```yaml
icon: fas fa-home
```

## author (optional)

Identifies the author of the app. Both author's full name (may be a company name or a name of an individual developer) and nick must be specified.

Example:
```yaml
author:
  name: "My Company"
  nick: "my.company"
```

## highlight (optional)

A short description of the app. A *highlight* saying why users should want your app.

Example:
```yaml
highlight: A sample app's manifest
```
