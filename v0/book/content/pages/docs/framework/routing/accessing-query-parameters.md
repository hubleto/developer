# Accessing query parameters

In your controller, you often need to access parameters from the URL query or from the POST payload.

Let's have following URL: `contacts?idContact=1234`

On this URL, we want to display details of the contact with *ID = 1234*. So, we need to:

  1. define a route for this URL,
  2. create a controller for this route,
  3. get the value of `idContact`,
  4. load the contact details from the database, and
  5. pass the contact details to our view to show the contact.

To define the route, the `httpGet()` method of the [router](defining-routes) shall be used. To learn how, read [this guide](defining-routes). The other steps are implemented in the controller.

## urlParamAs...()

To get the value of the `idContact` parameter in your controller, you should use the method called `urlParamAsInteger()` which is accessible via the router. The syntax is following:

```php
$idContact = $this->router()->urlParamAsInteger('idContact');
```

This method takes a name of the parameter as the argument and returns its sanitized value. Optionally, it can take a *deafult value* as a second argument which will be used if the desired parameter is not set.

There are also similar methods avaialable:

| Method                                                                   | Description                         |
| ------------------------------------------------------------------------ | ----------------------------------- |
| `urlParamAsString(string $paramName, string $defaultValue = ''): string` | Fetch the URL parameter as string.  |
| `urlParamAsInteger(string $paramName, int $defaultValue): int`           | Fetch the URL parameter as integer. |
| `urlParamAsFloat(string $paramName, float $defaultValue = 0): float`     | Fetch the URL parameter as float.   |
| `urlParamAsBool(string $paramName, bool $defaultValue = false): bool`    | Fetch the URL parameter as bool.    |
| `urlParamAsArray(string $paramName, array $defaultValue = []): array`    | Fetch the URL parameter as array.   |
###### Table: List of methods to fetch URL parameters

Full list of these methods is in [RouterInterface.php](https://github.com/hubleto/framework/blob/main/src/Interfaces/RouterInterface.php).

## Real example

Example implementation of the `ContactDetail` controller which takes the `idContact` parameter from the URL is following:

###### Hubleto/App/Custom/Addressbook/Controllers/ContactDetail.php
```php
namespace Hubleto\App\Custom\Addressbook\Controllers;
class ContactDetail extends \Hubleto\Erp\Controller {
  public function prepareView(): void {
    $idContact = $this->router()->urlParamAsInteger('idContact');
    // Load your contact with ID = $idContact
    $this->setView('@Hubleto:App:Custom:Addressbook:ContactDetail.twig');
  }
}
```

