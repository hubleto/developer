# Installation using PHP's Composer

Installation takes only a few minutes and it's super easy.

## Prerequisities

To install Hubleto, you will need:

  * PHP 8.4+
  * MySQL or MariaDB
  * any webserver (e.g. Apache or nginx)

## Production-ready version

Production-ready version is suitable when you want to use Hubleto 'as-is'. Run following commands in any folder accessile by your webserver:

  1. `composer create-project hubleto/erp-project .`
  2. `php hubleto init`

> **PRO TIP**: Read about [initialization configuration file](init-config) to streamline the installation process without any user prompt.

> **Note about Nginx:** Read [this note](nginx) if you are using nginx.

## Customizing with your own apps

If you need to customize Hubleto, you will most probably develop your [custom Apps](../apps). You need to do few more steps to prepare Javascript and Tailwind compilation environment.

Follow [steps described in README.md of hubleto/erp-project](https://github.com/hubleto/erp-project) to prepare the environment.

## Development environment

If you want to develop [external apps](../apps) or you want to contribute to the development of [community apps](../apps) and you want tyour apps to contain *React components*, you must do additional steps to your production-ready installation.

Watch this video to learn how to configure the development environment.

<iframe width="560" height="315" src="https://www.youtube.com/embed/xgzfHUWl-TM?si=bVSb1GMwduJTi-7J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
