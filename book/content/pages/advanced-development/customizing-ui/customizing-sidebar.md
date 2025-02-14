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

  * change the DEFAULT_INSTALLATION_CONFIG, or
  * dynamically set the `sidebarOrder` config value.

## DEFAULT_INSTALLATION_CONFIG

To change the DEFAULT_INSTALLATION_CONFIG, open your app's `Loader.php` and add following lines at the begginning of your app's class:

###### ./src/apps/external/MyApp/Loader.php
```php
  const DEFAULT_INSTALLATION_CONFIG = [
    'sidebarOrder' => ANY_VALUE,
  ];
```
## Dynamically set `sidebarOrder`

To set the `sidebarOrder` value dynamically you can use your app's `setConfigAsInteger()` method during the *init* phase. To do this, add following line into `init()` method of your app's class:

###### ./src/apps/external/MyApp/Loader.php
```php
  public function init(): void
  {
    parent::init();
    $this->setConfigAsInteger('sidebarOrder', 0); // this will set your sidebarOrder
  }

```