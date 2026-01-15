# Views

Views are used to design the UI and UX of your Hubleto app.

In Hubleto app, a view is implemented in a `Twig` template. Each view is stored in a separate `.twig` file stored in the `Views` folder of the application. Below is the example of the folder structure of `CarRental` app containing a view listing all cars, called `Cars.twig`.

```
custom/
├─ apps/
│  ├─ custom/
│  │  ├─ AppPrototype/
│  │  │  ├─ Controllers/
│  │  │  │  └─ Cars.php
│  │  │  ├─ Views/
│  │  │  │  └─ Cars.twig
```
###### Location of the Cars.twig view file

## Activation of the view

The view is always activated by some controller (this is the principle of MVC architecture). In Hubleto, this activation is done by controller's `setView()` method of inside the `prepareView()`:

###### Controllers/Cars.php
```php
class Cars extends \Hubleto\Framework\Controller {
  public function prepareView(): void {
    $this->setView('@Hubleto:App:Custom:CarRental/Cars.twig');
  }
}
```
###### Invoking view 'Cars.twig' by calling the `setView()` method

> **Note:** It is a good practise to name the views same as their controllers. In this example, we are using `Cars.php` for the controller and `Cars.twig` for the view.

## Passing parameters to the view

Often you need to pass some parameters (variables) to your view. This is done by including keys into controller's `$this->viewParams` property. This is the associative array where array key represents the name of the parameter (variable) and value represents its value.

For example, to add a current date as the parameter to be used in your view, simply include following line into the controller's `prepareView()` method:

###### Controllers/Cars.php
```php
class Cars extends \Hubleto\Framework\Controller {
  public function prepareView(): void {
    $this->viewParams['today'] = date('Y-m-d');
    $this->setView('@Hubleto:App:Custom:CarRental/Cars.twig');
  }
}
```
###### Setting the `today` parameter to be used in the view

## Accessing view parameters in the twig file

All view parameters set in the controller's `prepareView()` method are accesible via `{{ '{{' }} viewParams {{ '}}' }}` variable in the view's twig file. For example, to retrieve the current date set in the previous example, you should put following in your view's twig file:

###### Views/Cars.twig
```html
<p>Today is {{ '{{' }} viewParams.today {{ '}}' }}.</p>
```
###### Using the `today` parameter in the view
