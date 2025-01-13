# Core development

Read this guide to setup your Hubleto development environment.

If you want to contribute to the Hubleto core (not only developing apps), follow these instructions to setup your development environment.

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

## Tell composer to use your new json file

For Linux users run: `./composer-dev.sh update`.

For Windows users run: `./composer-dev.bat update`.

## Re-compile Javascript and CSS

Run `npm run build`.