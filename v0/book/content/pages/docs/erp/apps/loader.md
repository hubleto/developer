# Loader

Each app must have a loader class.

Every time Hubleto needs to initialize the app, it will instantiate its `Loader.php` class and calls its `init()` method. Thus, each app must have a loader class.

## Loader.php

A loader class is in the `Loader.php` file in the app's root folder. For example, if you have a [custom](types) app called `MyFirstApp`, the loader class will be in

```
/path/to/your/hubleto/src/apps/MyFirstApp/Loader.php
```

App's loader is a class implementing interface [AppInterface](https://github.com/hubleto/framework/blob/main/src/Interfaces/AppInterface.php) and extending from default Hubleto [App class](https://github.com/hubleto/erp/blob/main/src/App.php).

It must implement at least following methods:

| Method            | Description                                                                                                      |
| ----------------- | ---------------------------------------------------------------------------------------------------------------- |
| `init()`          | Called when Hubleto loads the app.                                                                               |
| `installTables()` | Calls when Hubleto installs the app's models. This method is not required if the app does not contain any model. |
Minimal set of methods to be implemented in the app's loader class.

Let's explain the methods in detail.

## init()

The `init()` method does the initialization of the app when it is loaded by Hubleto. This initialization phase may consist of:

  * defining [routes](../routing)
  * configuring app's menu
  * registering app's calendar manager
  * registering app's settings
  * registering app's context help
  * and more ...

There are many examples of how these initialization steps can be implemented, most valuable resource for examples is the [github repository of community apps](https://github.com/hubleto/erp/apps).

## installTables()

The `installTables()` method installs all app's models into an SQL database engine. The installation is not automatic, which means that all models defined in the app must be manually added to this method in a proper order.

> **NOTE** Wrong order during installation of models could raise exception when creating foreign keys in the database.
