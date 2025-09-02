# Defining routes

Routes are defined with `$this->getRouter()->httpGet()` method.

Routes in [Hubleto router](https://github.com/hubleto/framework/blob/main/src/Router.php) are defined by calling router's `httpGet()` method.

This method takes just one argument - a list of routes and their respective controllers.

In one `httpGet()` call you can specify multiple routes (or even all routes for your Hubleto app).

## Example: addressbook

Take a look at this example:

```php
$this->getRouter()->httpGet([
  '/^contacts\/?$/' => Controllers\Contacts::class,
  '/^contacts\/add\/?$/' => ['controller' => Controllers\Contacts::class, 'vars' => ['recordId' => -1]],
  '/^contacts(\/(?<recordId>\d+))?\/?$/' => Controllers\Contacts::class,
  '/^contacts\/import\/?$/' => Controllers\Import::class,
]);
```
###### Definition of routes for the simple addressbook app

This example shows how to define routes for the simple addressbook app. It defines routes for browsing contacts, adding new contact, showing detail of the contact and importing contacts. By the way, these are the routes from the [Contacts app](../apps/community/contacts).

## Route definition

A route is defined by:

  * regular expression matching the request URI
  * controller processing the route
  * additional parameters passed to the controller

The router iterates through all defined routes and once it finds a route matching the regular expression, it forwards the processing of the request to the specified controller. And, if there are additional parameters for the controller configured, the router passes these parameters to the controller.

There are several types of routes, let's explain them one by one.

## Simple static routes

The `contacts\/?` or `contacts\/import\/?` routes are the simplest one. They do not pass any parameters to the controller. Only a controller (e.g., `Controllers\Contacts` or `Controllers\Import`) for this route is specified.

> **NOTE** What does the `\/?` at the end of each route mean? It is a regular expression saying that both `contacts` and `contacts/` will be routed to `Controller\Contacts`.

## Routes with additional parameters

Sometimes you want to use one controller for multiple routes and distinguish the controller's behaviour by adding some parameter. For example, rendering a form for contact may be different when adding a new contact or when displaying details of an existing one.

To simplify your code you may want to use the same controller, but render different views. Additional route parameters may come handy here.

In the example above, both routes `contacts\/add\/?` and `contacts(\/(?<recordId>\d+))?\/?` forward processing to the same controller. However, the route for adding sets an additional parameter `recordId`.

## Parametric routes


A route itself (not URL query parameters) can contain valuable information. For example a route `contacts/1` means that we want to show the details of the contact with *ID = 1*.

An example of such route is `contacts(\/(?<recordId>\d+))?\/`. It is the same as setting a `recordId` parameter described in the previous chapter.

Read more about [parametric routes](routing/parametric-routes).