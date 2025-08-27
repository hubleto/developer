# Dynamic routes

Define routes that contain dynamic variables.

In this tutorial, you'll learn how to create *dynamic routes*. For example, you want to this route:

```https://localhost/my-hubleto/my-app/customers/123/sync```

to be forwarded to this controller:

```\HubletoApp\Custom\MyApp\Customers\Sync```.

This controller then will set the view showing the form to update the customer with `ID = 123`.

## How to define dynamic route

To define any route, you need to create routing table of your app using `$this->getRouter()->httpGet()` method.

This method takes an array of routes as the only argument. The array of routes is a key-value pair, where key is the regular expression for the route and a value is the class of the controller to be activated.

For example, regular expression `/^my-app\/customers\/(\d+)\/sync\/?$/` will capture the above URL and you can forward it to the `Sync.php` controller followingly:

###### ./apps/custom/MyApp/Loader.php
```php
<?php
namespace Hubleto\App\Custom\MyApp;
class Loader extends \Hubleto\Erp\Core\App {
  public function init(): void {
    $this->getRouter()->httpGet([ '/^my-app\/customers\/(\d+)\/sync\/?$/' => Controllers\Customers\Sync::class ]);
  }
}
```

However, the controller will not be able to request the ID of the customer. However, thanks to [named groups](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Regular_expressions/Named_capturing_group) in regular expressions, you may specify what variables will be 'encoded' in the route.

So, regular expression `/^my-app\/customers\/(?<idCustomer>\d+)\/sync\/?$/` will be parsed and `idCustomer` route variable will be extracted. So, by modifying previous example followingly:

###### ./apps/custom/MyApp/Loader.php
```php
<?php
namespace Hubleto\App\Custom\MyApp;
class Loader extends \Hubleto\Erp\Core\App {
  public function init(): void {
    $this->getRouter()->httpGet([ '/^my-app\/customers\/(?<idCustomer>\d+)\/sync\/?$/' => Controllers\Customers\Sync::class ]);
  }
}
```

in your controller you can use:

```php
$idCustomer = $this->getRouter()->routeVarAsInteger('idCustomer')
```

to store the $idCustomer variable which can be then forwarded to the view:

```php
$this->viewParams['idCustomer'] = $idCustomer
```

and used there:

```
Hi {{ '{{' }} viewParams.name {{ '}}' }},
are you sure you want to synchronize customer
with <b>ID = {{ '{{' }} viewParams.idCustomer {{ '}}' }}</b>
```