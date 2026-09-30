# manifest.yaml file and its structure

Each Hubleto app must have a `manifest.yaml` file in its root folder. The manifest identifies the app. Hubleto reads it:

  * when looking for available apps (`AppManager::getAvailableApps()`),
  * when constructing the app's `Loader` (`Hubleto\Framework\App::__construct()` parses it into `$this->manifest`),
  * when installing the app (dependencies in `requires`),
  * when rendering the main sidebar, the app list in Settings and the global search results.

###### apps/Deals/manifest.yaml

```yaml
namespace: Hubleto\App\Community\Deals
appType: community
sidebarGroup: sales
rootUrlSlug: deals
name: Deals
icon: fas fa-handshake
author:
  name: "Richard Ondrejka"
  nick: "rindo"
  company: "wai.blue"
  github: "https://github.com/rindo789"
  linkedin: "https://www.linkedin.com/in/richard-ondrejka/"
highlight: Deal management. From deal to purchase.
tags:
  - workflow
  - sales
  - leads
  - deals
requires:
  - Hubleto\App\Community\Customers
  - Hubleto\App\Community\Calendar
  - Hubleto\App\Community\Leads
```

## Overview of keys

| Key            | Required | Type             | Description                                                                          |
| -------------- | -------- | ---------------- | ------------------------------------------------------------------------------------ |
| `namespace`    | yes      | string           | PHP namespace of the app. Must start with `Hubleto\App`.                             |
| `appType`      | yes      | string           | `community`, `custom`, `external` or `enterprise`.                                   |
| `rootUrlSlug`  | yes      | string           | URL slug of the app. All app's routes should start with it.                          |
| `name`         | yes      | string           | Short name shown in the sidebar and elsewhere. Translated automatically.             |
| `highlight`    | yes      | string           | One-sentence description of the app. Translated automatically.                       |
| `icon`         | yes      | string           | FontAwesome CSS class, e.g. `fas fa-handshake`.                                      |
| `sidebarGroup` | no       | string           | Sidebar group(s) the app belongs to. Comma-separated list is allowed.                |
| `author`       | no       | map              | `name`, `nick`, `company`, `github`, `linkedin`.                                     |
| `tags`         | no       | list of strings  | Keywords, e.g. for the app store.                                                    |
| `requires`     | no       | list of strings  | Namespaces of apps that must be installed first.                                     |
| `created`      | no       | string           | Date of creation. Added by `php hubleto create app`.                                 |
Keys of `manifest.yaml`.

Missing required keys throw an exception when the app is constructed:

###### From Hubleto\Framework\App::validateManifest()

```php
public function validateManifest()
{
  $missing = [];
  if (empty($this->manifest['namespace'])) $missing[] = 'namespace';
  if (empty($this->manifest['appType'])) $missing[] = 'appType';
  if (empty($this->manifest['rootUrlSlug'])) $missing[] = 'rootUrlSlug';
  if (empty($this->manifest['name'])) $missing[] = 'name';
  if (empty($this->manifest['highlight'])) $missing[] = 'highlight';
  if (empty($this->manifest['icon'])) $missing[] = 'icon';

  if (count($missing) > 0) {
    throw new \Exception("{$this->fullName}: Some properties are missing in manifest (" . join(", ", $missing) . ").");
  }

  if (!str_starts_with($this->manifest['namespace'], 'Hubleto\\App')) {
    throw new \Exception("{$this->fullName}: Namespace must start with 'Hubleto\\App'.");
  }
}
```

## namespace (required)

The PHP namespace of the app. It must be the same as the namespace of the app's `Loader.php` class. See [namespaces](namespaces) for the rules.

```yaml
namespace: Hubleto\App\Community\Contacts     # community app
namespace: Hubleto\App\Custom\MyFirstApp      # custom app in src/apps/MyFirstApp
namespace: Hubleto\App\External\Acme\Fleet    # external app from the Acme vendor
```

> **NOTE** Hubleto loads the app only if `namespace` starts with `Hubleto\App\` and the class `<namespace>\Loader` exists.

## appType (required)

The type of the app. It is shown in the list of installed apps in the Settings app.

```yaml
appType: community
```

## rootUrlSlug (required)

The URL slug of the app. It is used:

  * to build the link to the app in the main sidebar,
  * to activate the app in the UI when the current URL starts with this slug,
  * by `secondSidebarTitle()` to link the title of the second sidebar,
  * by the CLI when generating routes.

All app's routes should start with this slug.

```yaml
rootUrlSlug: hr-leave
```

###### Routes of the HrLeave app start with the root URL slug

```php
$this->router()->crud('hr-leave', Controllers\Leaves::class);
$this->router()->crud('hr-leave/leave-types', Controllers\LeaveTypes::class);
$this->router()->crud('hr-leave/leave-requests', Controllers\LeaveRequests::class);
```

## name (required)

Short name of the app. It is translated in `App::init()` and stored as `nameTranslated`:

```yaml
name: Leave
```

###### From Hubleto\Framework\App::init()

```php
$this->manifest['nameTranslated'] = $this->translate($this->manifest['name'], [], 'manifest');
$this->manifest['highlightTranslated'] = $this->translate($this->manifest['highlight'], [], 'manifest');
```

The translations are stored in the `manifest` section of the app's dictionary:

###### lang/sk/hubleto-app-community-contacts-loader.json (part)

```json
{
  "manifest": {
    "Contacts": "Kontakty",
    "Default customer management and addressbook.": "Adresár a manažment zákazníkov."
  }
}
```

## highlight (required)

A one-sentence description saying why users should want the app.

```yaml
highlight: Manage leave policies, requests, and annual entitlements.
```

## icon (required)

A FontAwesome (free set) CSS class. Search for icons at https://fontawesome.com/search.

```yaml
icon: fas fa-umbrella-beach
```

## sidebarGroup (optional)

The group in the main sidebar under which the app is shown. An app may be in more groups (comma-separated). An app without `sidebarGroup` is shown outside of the groups.

```yaml
sidebarGroup: human-resources
```

Default sidebar groups are defined in `Hubleto\App\Community\Desktop\Loader::getSidebarGroups()`:

| Group                  | Title           | Example apps                                  |
| ---------------------- | --------------- | --------------------------------------------- |
| `crm`                  | CRM             | Customers, Contacts, Calendar, Tasks          |
| `customer-acquisition` | Marketing       | Leads, EmailMarketing                         |
| `sales`                | Sales           | Deals, Orders, Products, Suppliers            |
| `productivity`         | Productivity    | Projects                                      |
| `human-resources`      | Human resources | HrEmployees, HrLeave, HrAttendance            |
| `finance`              | Finance         | Invoices, Cashdesk                            |
| `custom`               | Custom          | apps created by `php hubleto create app`      |
| `maintenance`          | Maintenance     | Settings, Api, AuditLogs                      |
| `help`                 | Help            | Help, About                                   |
Default sidebar groups.

The groups can be changed in the `sidebarGroups` configuration (e.g. `extraConfigEnv` in the init config file).

> **NOTE** The position of the app inside the group is not in the manifest. It is the `sidebarOrder` configuration value set during installation (`App::DEFAULT_INSTALLATION_CONFIG` or the packages in `php hubleto init`). Apps with `sidebarOrder` 0 are not shown in the sidebar.

## author (optional)

Identifies the author.

```yaml
author:
  name: "Richard Ondrejka"
  nick: "rindo"
  company: "wai.blue"
  github: "https://github.com/rindo789"
  linkedin: "https://www.linkedin.com/in/richard-ondrejka/"
```

## tags (optional)

Keywords describing the app.

```yaml
tags:
  - human-resources
  - leave
```

## requires (optional)

A list of app namespaces the app depends on. When the app is installed, `AppManager::installApp()` installs the missing dependencies first, in every installation round.

```yaml
requires:
  - Hubleto\App\Community\Customers
  - Hubleto\App\Community\Calendar
  - Hubleto\App\Community\Leads
```

###### From Hubleto\Framework\Services\AppManager::installApp()

```php
$dependencies = (array) ($manifest['requires'] ?? []);

foreach ($dependencies as $dependencyAppNamespace) {
  $dependencyAppNamespace = (string) $dependencyAppNamespace;
  if (!$this->isAppInstalled($dependencyAppNamespace)) {
    $this->installApp($round, $dependencyAppNamespace, [], $forceInstall);
  }
}

$app->installApp($round);
```

## Manifest generated by the CLI

`php hubleto create app MyFirstApp` generates this manifest:

###### src/apps/MyFirstApp/manifest.yaml

```yaml
namespace: Hubleto\App\Custom\MyFirstApp
appType: custom
monthlyPricePerUser: 0
sidebarGroup: custom
rootUrlSlug: myfirstapp
name: MyFirstApp
icon: fas fa-home
author:
  name: "Hubleto CLI Agent"
  nick: "hubleto.cli"
highlight: App generated by Hubleto CLI agent.
created: 2026-09-30 12:00:00
```

## Using the manifest in code

The parsed manifest is available as the `$manifest` property of the app's loader:

```php
// In the Loader
$slug = $this->manifest['rootUrlSlug'];

// In another class
$dealsApp = $this->appManager()->getApp(\Hubleto\App\Community\Deals\Loader::class);
$icon = $dealsApp->manifest['icon'];
```

```twig
{{ '{#' }} In a Twig view: 'hubleto' gives access to the services {{ '#}' }}
{{ '{%' }} set activatedApp = hubleto.appManager().getActivatedApp() {{ '%}' }}
<i class="{{ '{{' }} activatedApp.manifest.icon {{ '}}' }}"></i> {{ '{{' }} activatedApp.manifest.nameTranslated {{ '}}' }}
```
