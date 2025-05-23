# Become a contributor

Read this guide to setup your Hubleto development environment.

If you want to contribute to the Hubleto core (not only developing apps), follow these instructions to setup your development environment.

## Fork Hubleto from Github

First, you need to create your own fork of Hubleto (https://github.com/hubleto/main).

Check this guide on how to create forks: https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/working-with-forks/fork-a-repo

In following steps, we assume you have forked Hubleto to the folder named `hubleto`.

> **IMPORTANT, DO NOT SKIP** To officially become a contributor, you must sign the [Individual Contributor License Agreement (ICLA)](licenses/contributor/individual). See [this article](licenses/contributor/individual) on how to sign. **If you do not sign ICLA, your pull requests will not be accepted.**
> If you are representing a company or a corporation, you also must sign [Corporate Contributor License Agreement (CCLA)](licenses/contributor/corporate).

## Create composer-dev.json file

In your Hubleto root folder, create a `composer-dev.json` file:

  * copy `composer.json` to `composer-dev.json`
  * change `wai-blue/adios` version to `@dev`:

```
{
    "name": "hubleto/main",
    "require": {
        ...
        "wai-blue/adios": "@dev",    <-- change version to '@dev'
        ...
    }
}
```

  * add a relative path to your ADIOS

```
{
    "name": "hubleto/main",
    "require": {
        ...
        "wai-blue/adios": "@dev",
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/wai-blue/adios.git"
        }
    ]
}
```

> Hubleto is strongly based on the underlying ADIOS Framework. In many cases, it is also beneficial to make a local clone of the [ADIOS Framework](https://github.com/wai-blue/adios), as many changes require updates there. However, for the sake of simplicity, the process of cloning it has been omitted from this guide.

## Initialize Hubleto project

In `hubleto` folder, run following commands to initialize your Hubleto project.

### Linux

```
composer-dev.sh update
npm install
npm run build
php hubleto init
```

### Windows

```
composer-dev.bat update
npm install
npm run build
php hubleto init
```