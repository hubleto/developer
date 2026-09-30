# Translating PHP classes using $this->translate()

## The method

Every class that extends `Hubleto\Framework\Core` (loaders, models, controllers, calendars, crons, event listeners, your helper classes) has a `translate()` method:

###### From Hubleto\Framework\Core

```php
public function translate(string $string, array $vars = [], string $contextInner = ''): string
{
  return $this->translator()->translate($this, $string, $vars, $contextInner);
}
```

| Argument         | Description                                                                |
| ---------------- | -------------------------------------------------------------------------- |
| `$string`        | English text.                                                              |
| `$vars`          | Values for `{{ '{{' }} name {{ '}}' }}` placeholders.                                      |
| `$contextInner`  | Optional. Overrides the inner context, or the whole context as `'context:inner'`. |
Arguments of `translate()`.

## The context is set automatically

Base classes set `$translationContext` and `$translationContextInner` in their constructor, based on the class name. You only call `$this->translate()`:

| Class                                   | `translationContext`                   | `translationContextInner` |
| --------------------------------------- | -------------------------------------- | ------------------------- |
| `Hubleto\App\Community\Deals\Loader`    | `hubleto-app-community-deals-loader`   | `manifest`                |
| `...\Deals\Models\Deal`                 | `hubleto-app-community-deals-loader`   | `Models\Deal`             |
| `...\Deals\Controllers\Deals`           | `hubleto-app-community-deals-loader`   | `Controllers\Deals`       |
| `...\Deals\Controllers\Api\GeneratePdf` | `hubleto-app-community-deals-loader`   | `Controllers\Api\GeneratePdf` |
| `...\Deals\Calendar`                    | `hubleto-app-community-deals-loader`   | `Calendar`                |
Automatic translation contexts.

All texts of one app end up in one dictionary file: `lang/<language>/hubleto-app-community-deals-loader.json`.

## Examples

### In a model: column titles, enum labels

###### apps/Deals/Models/Deal.php

```php
public function describeColumns(): array
{
  return array_merge(parent::describeColumns(), [
    'title' => (new Varchar($this, $this->translate('Title')))->setRequired(),
    'id_customer' => (new Lookup($this, $this->translate('Customer'), Customer::class)),
    'source_channel' => (new Integer($this, $this->translate('Source channel')))
      ->setEnumValues(array_map(fn($v) => $this->translate($v), self::ENUM_SOURCE_CHANNELS)),
  ]);
}

public function describeTable(): \Hubleto\Framework\Description\Table
{
  $description = parent::describeTable();
  $description->ui['addButtonText'] = $this->translate('Add Deal');
  return $description;
}
```

> **TIP** Keep enum labels in English in the constants (`ENUM_SOURCE_CHANNELS`) and translate them when you use them. The constants stay usable in code, and the UI is translated.

### In a loader: settings, boards, calendars, alerts

###### apps/Deals/Loader.php

```php
$settingsApp->addSetting($this, [
  'title' => $this->translate('Deal Tags'),
  'icon' => 'fas fa-tags',
  'url' => 'deals/tags',
]);

$dashboardManager->addBoard($this, $this->translate('Most valuable deals'), 'deals/boards/most-valuable-deals');

// in renderAlerts()
$openDealsWithoutFuturePlan . ' ' . $this->translate('open deals without future plan')
```

### Default data created during installation

###### apps/Contacts/Loader.php

```php
$mCategory->record->recordCreate([ 'name' => $this->translate('Work') ]);
$mCategory->record->recordCreate([ 'name' => $this->translate('Home') ]);
$mCategory->record->recordCreate([ 'name' => $this->translate('Other') ]);
```

`php hubleto init` sets the language of the admin user before the apps are installed (`language` option), so default records are created in the chosen language.

### In a controller: breadcrumbs and messages

###### apps/Deals/Controllers/Settings.php

```php
public function getBreadcrumbs(): array
{
  return array_merge(parent::getBreadcrumbs(), [
    [ 'url' => 'deals', 'content' => $this->translate('Deals') ],
    [ 'url' => 'settings', 'content' => $this->translate('Settings') ],
  ]);
}
```

### With variables

###### From Hubleto\Erp\Controller::setView()

```php
$this->viewParams = [
  'message' => $this->translate(
    "You have no access to {{ '{{' }} appName {{ '}}' }}.",
    ['appName' => $this->hubletoApp->manifest['name'] ?? $this->shortName],
    'Controllers\\AccessForbidden'
  ),
];
```

### In a calendar

###### apps/Deals/Calendar.php

```php
public function getCalendarConfig(): array
{
  return [
    'title' => $this->translate('Deals'),
    'addNewActivityButtonText' => $this->translate('Add new activity linked to deal'),
    // ...
  ];
}
```

## Classes without an automatic context

Helper classes that extend `Hubleto\Erp\Core` directly (`Counter`, `Mailer`, services) have an empty context. Set it yourself:

###### apps/Mail/Mailer.php

```php
class Mailer extends \Hubleto\Erp\Core
{
  public string $translationContext = 'hubleto-app-community-mail-loader';
  public string $translationContextInner = 'Mailer';
  // ...
}
```

Or translate through the app's loader:

```php
$dealsApp = $this->appManager()->getApp(\Hubleto\App\Community\Deals\Loader::class);
$text = $dealsApp->translate('Deal created');
```

## Translating in Twig views

Views use the `translate()` Twig function. The context is the context of the controller that rendered the view:

###### apps/Deals/Views/Boards/MostValuableDeals.twig

```twig
<span class="text">{{ '{{' }} translate('Open deal') {{ '}}' }}</span>
...
<div class="alert alert-info">
  {{ '{{' }} translate('No deals found.') {{ '}}' }}
</div>
```

`translate()` in Twig also accepts an explicit context: `{{ '{{' }} translate('Deals', 'hubleto-app-community-deals-loader', 'manifest') {{ '}}' }}`.

## Rules

  * Translate at the place where the text is created (the model for column titles, the loader for settings titles), not later.
  * Don't translate data (names of customers, user input). Translate only texts written by developers.
  * Don't translate strings used as keys or identifiers (enum keys, config keys, workflow tags).
  * Use `{{ '{{' }} name {{ '}}' }}` variables instead of concatenation.
