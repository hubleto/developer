# Apps

Apps are packages containg some functionality.

A Hubleto app is a bundle or package which contains a functionality covering specific goal. For example, there are apps like `Customers`, `Contacts`, `Campaings`, `Deals`, `Projects`, `Tasks` or others.

There are several [types](apps/types) of apps: community, custom or external.

> **NOTE** This is developer's documentation. If you want to read about apps included in the default Hubleto package, read [this](../apps) or [this](https://help.hubleto.com/v0/en/apps/community).

## Create an app

Easiest way to create an app is to run

```
php hubleto create app MyFirstApp
```

in your Hubleto project folder.

More about creating Hubleto apps is [here](apps/how-to-create-app).

## App contents

Each app must have at least a [manifest](apps/manifest) and a [Loader class](apps/loader). Most apps also contain [models](models), [views](views), [controllers](controllers) or [UI components](ui). And, of course, if you want to access some view, you must define [routing](routing).

There is also a concept called [Extendibles](extendibles) used for extending apps by another apps.

## Folder structure

All parts of an app are placed in a well-organized [folder structure](apps/folder-structure).