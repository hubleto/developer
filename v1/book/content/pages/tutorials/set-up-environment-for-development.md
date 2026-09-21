# Set up development environment

In this tutorial, we'll guide you through setting up Hubleto for Core development.

Before you begin, ensure you have:
1. A web server and database compatible with Hubleto (see [here](../getting-started#Prerequisities))
2. `git`, `composer`, and `npm` installed

> We'll use the following repositories: `hubleto/erp`, `hubleto/erp-project`, `hubleto/framework`, `hubleto/assets`, and `hubleto/react-ui`. Depending on your workflow, you may prefer to use your own forks. For this tutorial, we'll assume `/var/www/` is your web server root.

## Recommended Directory Structure

We recommend organizing your directories as follows:

```
/var/www/hubleto
├── assets
├── erp
├── erp-project
├── external_apps
├── framework
└── react-ui
```
Here, `/var/www/` is your web server root, and `hubleto` is a directory you create within it. Each subdirectory contains the following repositories:

1. **assets** (`hubleto/assets`): Contains built JavaScript and CSS assets for Hubleto.
2. **erp** (`hubleto/erp`): Hosts apps and uses `hubleto/framework` for ERP functionality.
3. **erp-project** (`hubleto/erp-project`): A production-ready wrapper for `hubleto/erp`.
4. **external-apps**: For any custom or third-party apps you develop or integrate. Setup instructions are provided later.
5. **framework** (`hubleto/framework`): The core of Hubleto.
6. **react-ui** (`hubleto/react-ui`): Houses React components used by the framework.

## Initializing Repositories

### erp-project

After cloning `hubleto/erp-project` into `erp-project`, run:
```
./bin/use-local-repositories.sh /var/www/hubleto
```
This configures the project to use your local repositories.

### erp & framework

No special configuration is required for these directories.

### assets

After cloning `hubleto/assets`, run `npm install` in this directory.

### react-ui

Similarly, after cloning `hubleto/react-ui`, run `npm install` in this directory.

## Building Assets

Once all repositories are initialized, you can build your CSS and JavaScript assets by running `npm run` in the `assets` directory.

## Preparing Your Hubleto Development Instance

To initialize your Hubleto instance, run `php hubleto init` in the `erp-project` directory, or use a predefined configuration file.

## Developing Apps

When creating new Hubleto apps, place them in the `external-apps` directory. Be sure to specify them in your init config file:

```
extraConfigEnv:
    appRepositories:
        - "/var/www/html/external_apps"
```

### Community Apps

Community apps are automatically detected and do not need to be specified in your config. To set them up for installation, add the following to your init config:

```
appsToInstall:
     Hubleto\App\Community\Bookkeeping: []
```

Here, `Bookkeeping` refers to a folder (and app) within the `/apps` directory of the `erp` repository.
