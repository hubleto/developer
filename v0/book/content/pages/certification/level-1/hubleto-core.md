# Lesson 3: Hubleto Core

## Hubleto Framework

Hubleto ERP is built on top of the `Hubleto Framework` (https://github.com/hubleto/framework).

It's the lightweight framework containing several basic components to create web-based software using an [MVC architecture](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller).

All framework's code is encapsulated in the `Hubleto\Framework` namespace.

Some of the most importants components (classes) are:

  * a DB-engine agnosting database model
  * a core implementation of the controller
  * a router
  * dependency injection
  * entry class called loader

Other usefull components (classes) are:

  * permission manager
  * default authentication provider
  * configuration manager
  * simple logger

Many of these core features are further extended in the ERP project. Therefore, it is important to get familiar first with the framework and only then to continue studying the Hubleto ERP source code. Components extended by Hubleto ERP are listed in [this Github folder](https://github.com/hubleto/erp/tree/main/src).

## User management and authentication 

User management is implemented in several classes, as described in table below.

| Class                                     | Description                                                          |
| ----------------------------------------- | -------------------------------------------------------------------- |
| `Hubleto\App\Community\Auth\Loader`       | Authentification app containing most important authentication logic. |
| `Hubleto\App\Community\Auth\AuthProvider` | Implementation of the authentication mechanism.                      |
| `Hubleto\App\Community\Auth\Models\User`  | Extension of framework's user model.                                 |
Implementation of user management and authentication.

The principles of authenticating the user are simple and can be easily understood from reading the source code.

## Permission management
## Database record management and API
## Table Description API
## Form Description API
