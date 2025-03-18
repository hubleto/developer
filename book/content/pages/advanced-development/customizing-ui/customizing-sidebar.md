# Customizing sidebar

You can customize sidebar in many ways.

By default, your app receives a `sidebarOrder` at value `500` during the installation. This is configured in the `\HubletoMain\Core\App` class, in the `DEFAULT_INSTALLATION_CONFIG` constant:

###### ./src/core/App.php

```php
  const DEFAULT_INSTALLATION_CONFIG = [
    'sidebarOrder' => 500,
  ];
```

The `sidebarOrder` is a parameter used to prioritize apps in your sidebar. To change this value, you have basically two options:

- change the DEFAULT_INSTALLATION_CONFIG, or
- dynamically set the `sidebarOrder` config value.

## DEFAULT_INSTALLATION_CONFIG

To change the DEFAULT_INSTALLATION_CONFIG, open your app's `Loader.php` and add following lines at the begginning of your app's class:

###### ./src/apps/external/MyCompany/MyApp/Loader.php

```php
  const DEFAULT_INSTALLATION_CONFIG = [
    'sidebarOrder' => ANY_VALUE,
  ];
```

## Dynamically set `sidebarOrder`

To set the `sidebarOrder` value dynamically you can use your app's `setConfigAsInteger()` method during the _init_ phase. To do this, add following line into `init()` method of your app's class:

###### ./src/apps/external/MyCompany/MyApp/Loader.php

```php
  public function init(): void
  {
    parent::init();
    $this->setConfigAsInteger('sidebarOrder', 0); // this will set your sidebarOrder
  }

```

> If the order is set to 0, the link won't be shown

> Note that the button of the app in the sidebar will redirect to the URL that is set in `rootUrlSlug` parameter in the `manifest.yaml` file of your app.

## Level 2 Sidebar

You can specify a new level 2 link through the sidebar class' method `addLink()` in the `init()` method of the `Loader` class.

### Example of a new level 2 sidebar navigation link

###### ./src/apps/external/MyCompany/MyApp/Loader.php

```php
$this->sidebar->addLink($url, $title, $fontAwesomeIconCssClass);
```

`url` - URL that was specified in the router

`title` - specifies the text that will be on the button of the link

`fontAwesomeIconCssClass` - specifies the FontAwesome CSS icon class that the button will have.

When creating the second level of the sidebar navigation, you need to correctly specify for which URL will the second level links be shown to. In the example below, we specify that two links will be available in the Customer Views.

### Example of adding level 2 links

###### ./src/apps/external/MyCompany/MyApp/Loader.php

```php
if (str_starts_with($this->main->requestedUri, 'customers')) { //specifying the url that the second level links can be shown in
  $this->sidebar->addHeading1($this->translate('Customers'));
  $this->sidebar->addLink('customers/companies', $this->translate('Companies'), 'fas fa-building');
  $this->sidebar->addLink('customers/persons', $this->translate('Contact Persons'), 'fas fa-users');
}
```

> The sidebar order for the native Hubleto apps is by default set in `HubletoMain\Installer\Installer` class.
