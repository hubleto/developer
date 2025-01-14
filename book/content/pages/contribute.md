# Become a contributor

Read this guide to setup your Hubleto development environment.

If you want to contribute to the Hubleto core (not only developing apps), follow these instructions to setup your development environment.

## Fork Hubleto from Github

First, you need to create your own fork of Hubleto (https://github.com/wai-blue/hubleto).

Check this guide on how to create forks: https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/working-with-forks/fork-a-repo

In following steps, we assume you have forked Hubleto to the folder named `hubleto`.

> **IMPORTANT, DO NOT SKIP** To officially become a contributor, you must sign the [Individual Contributor License Agreement (ICLA)](licenses/contributor/individual). See [this article](licenses/contributor/individual) on how to sign. **If you do not sign ICLA, your pull requests will not be accepted.**
> If you are representing a company or a corporation, you also must sign [Corporate Contributor License Agreement (CCLA)](licenses/contributor/corporate).

## Clone ADIOS framework

Hubleto uses [ADIOS framework](https://github.com/wai-blue/adios). Clone it to any folder under your webserver's document root.

```
git clone https://github.com/wai-blue/adios
```

## Create composer-dev.json file

In your Hubleto root folder, create a `composer-dev.json` file:

  * copy `composer.json` to `composer-dev.json`
  * change `wai-blue/adios` version to `@dev`:

```
{
    "name": "wai-blue/hubleto",
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
    "name": "wai-blue/hubleto",
    "require": {
        ...
        "wai-blue/adios": "@dev",
    },
    "repositories": [
        {
            "type": "path",
            "url": "../../github/adios" <-- add your path here
        }
    ]
}
```

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