# HubletoMain\Core\Controller

_extends \CeremonyCrmApp\Core\Controller extends \ADIOS\Core\Controller_

## Introduction

The Controller class prepares a specified View or acts as an API.

## Creating a View Controller

Primary function of a View Controller is to set a View, a Twig file that will render a page. With this controller you can also set the breadcrumbs that will appear on the top of the screen. View Controllers can define values that will be passed into a Twig file for usage, called `viewParams`.

### Creating breadcrumbs

Using the `getBreadcrumbs()` method you can set the URLs and titles of the breadcrumbs.

```php
public function getBreadcrumbs(): array
  {
    return array_merge(parent::getBreadcrumbs(), [
      [ 'url' => 'customers/companies', 'content' => 'Customers' ],
      [ 'url' => '', 'content' => 'Companies' ],
    ]);
  }
```

`url` - sets the URL of the link. The URL needs to be the same as the route specified in a Loader class. Leaving the `url` as an empty string results in the link being disabled/greyed out.

`content` - title of the breadcrumb

### Setting a View

For the View to be used you need to set the View in the Controller by specifying which Twig file to use, using the `setView()` method. Firstly, you need to call `parent::prepareView()`. This will ensure that the View has all the `viewParams` to properly function.

```php
public function prepareView(): void
  {
    parent::prepareView();
    $this->setView('@mod/Customers/Views/Activity.twig');
  }
```

### Creating `viewParams`

Within the `prepareView()` method you can also specify values that will be passed into the View/Twig file for usage. For example like this: `$this->viewParams["newValue"] = 12;`.

Now the `newValue` is available to use in the View.

Check out [View](view) to see how to use this value.

Within a View Controller you can access submitted form data through `$this->main->params`. For example, you can work with these values to decide what `viewParams` to pass to the View or decide what View to set.

## Creating an API Controller

An API controller has only one method, `renderJson()`. This method returns an array with data that was created with the call of the API Controller.

```php
public function renderJson(): ?array
  {
    /*rest of the script*/

    return $dataArray;
  }
```

### API Controller used for Lookup inputs

In order for the Lookup input to properly display data, the returned data array needs to have the **IDs of the entries as the indexes** of each entry in the array.

When selecting entries from a model using the Eloquent query builder you also need to **select the lookup value as `_LOOKUP` alias**, otherwise the Lookup input will display empty entries.

## Next up

- Check out the [View](view)
