# Parametric routes

A SEO-friendly URL can contain valuable information.

A route itself (not URL query parameters like described [here](accessing-query-parameters)) can contain valuable information.

For example a route `contacts/1234` means that we want to show the details of the contact with *ID = 1234*.

> **NOTE**: A non-SEO-friendly URL could look similar to `contacts?idContact=1234`. Accessing such URL query parameters is described [here](accessing-query-parameters).

## Defining route variables in the route pattern

If you want to use SEO-friendly URLs and extract variables from such URLs, you must use regular expressions within definition of the routes.

The simplest example is following:

###### Hubleto/App/Custom/Addressbook/Loader.php
```
class Loader {
  public function init(): void {
    $this->router()->get([
      '/^contact\/(\d+)?\/?$/' => Controllers\ContactDetail::class,
    ])
  }
}
```

In this example, the route is `/^contact\/(\d+)?\/?$/`. Reading the regular expression, this route will match URLs like `contact/1234`, `contact/5678` or similar. The `(\d+)` is the first variable, counting from zero, so the *index* of this variable is '0' (integer zero).

In this case, if you use `$this->router()->routeVarAsInteger(0)` in your controller, you will get the value of this route variable.

But, you also can have named variables.

## Named variables

The only difference in named variables is that they are accessible by some name - a string. For example, we will name the variable `idContact` and so we want to get its value by calling `$this->router()->routeVarAsInteger('idContact')`.

To get this, the route pattern must be following:

```
$this->router()->get([
  '/^contact\/(<idContact>\d+)?\/?$/' => Controllers\ContactDetail::class,
])
```

See the `<idContact>` inside the route pattern. This is a standard regular expression syntax, just search for `regular expression named variables` if you want to learn more.

## routeVarAs...()

As already shown before, to get the value of the `idContact` parameter in your controller, you should use the method called `routeVarAs...()` method which is accessible via the router. This is very similar to [accessing URL query parameters](accessing-query-parameters) encoded in the GET request.

The syntax for named variables is following:

```php
$idContact = $this->router()->routeVarAsInteger('idContact');
```

and for variables indexed by numbers:

```php
$idContact = $this->router()->routeVarAsInteger(0);
```

This method takes a name of the parameter as the argument and returns its sanitized value.

There are also similar methods avaialable:

| Method                                           | Description                         |
| ------------------------------------------------ | ----------------------------------- |
| `routeVarAsString(string|int $varIndex): string` | Fetch the URL parameter as string.  |
| `routeVarAsInteger(string|int $varIndex): int`   | Fetch the URL parameter as integer. |
| `routeVarAsFloat(string|int $varIndex): float`   | Fetch the URL parameter as float.   |
| `routeVarAsBool(string|int $varIndex): bool`     | Fetch the URL parameter as bool.    |
| `routeVarAsArray(string|int $varIndex): array`   | Fetch the URL parameter as array.   |
###### Table: List of methods to get values of route variables

Full list of these methods is in [RouterInterface.php](https://github.com/hubleto/framework/blob/main/src/Interfaces/RouterInterface.php).

## Real example

Example implementation of the `ContactDetail` controller which takes the `idContact` parameter from the URL is following:

###### Hubleto/App/Custom/Addressbook/Controllers/ContactDetail.php
```php
namespace Hubleto\App\Custom\Addressbook\Controllers;
class ContactDetail extends \Hubleto\Erp\Controller {
  public function prepareView(): void {
    $idContact = $this->router()->routeVarAsInteger('idContact');
    // Load your contact with ID = $idContact
    $this->setView('@Hubleto:App:Custom:Addressbook:ContactDetail.twig');
  }
}
```

