# Dependency injection

Hubleto uses dependency injection design pattern to maximize flexibility

...

# Customize Hubleto with dependency injection

Having dependency injection implemented, customization of Hubleto has got much easier.

Now, if you want to add custom functionality to almost any class (e.g. model or controller), you only need to configure dependencies in your `ConfigEnv.php` file:

###### ./ConfigEnv.php
```
  // ... other env settings
  $config['dependencies'] = [
    '
  ];
  // ... other env settings
```