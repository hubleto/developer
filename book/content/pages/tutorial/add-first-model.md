# Add first model

In this tutorial, you learn how to add your first model into your app.

> **TIP** You should know about creating first app. Make sure you have read [this tutorial](../create-first-app).

All app models are stored in two separated files. First, let's try it by an example. The first file is `Models/Contact.php`.

**./apps/MyAppWitModels/Models/Contact.php**
```php
<?php
namespace HubletoApp\MyAppWithModels\Models;

class Contact extends \HubletoMain\Core\Model {
  public string $table = 'contacts';
  public string $eloquentClass = Eloquent\Contact::class;
  public function columns(array $columns = []): array {
    return parent::columns(array_merge($columns, [
      'first_name' => [
        'type' => 'varchar',
        'title' => $this->translate('Type'),
        'required' => true,
      ],
      'last_name' => [
        'type' => 'varchar',
        'title' => $this->translate('Type'),
        'required' => true,
      ],
    ]));
  }
}
```

And the second file is `Models/Eloquent/Contact.php`.

**./apps/MyAppWitModels/Models/Eloquent/Contact.php**
```php
<?php
namespace HubletoApp\MyAppWithModels\Models\Eloquent;
class Contact extends \ADIOS\Core\Model\Eloquent {
  public $table = 'contacts';
}
```

With this setup, you will create a model with:

  * two *varchar* columns 
  * no relations

We have used following properties and methods:

| Property or Method | Description                                                                                                                           |
| ------------------ | ------------------------------------------------------------------------------------------------------------------------------------- |
| **string $table**  | Name of the table in SQL database.                                                                                                    |
| **$eloquentClass** | Reference to the class representing the *Eloquent* object                                                                             |
| **columns()**      | Definition of *columns* (a.k.a attributes) of the model, including data-related information (e.g. *varchar*) and UI-related information (e.g., *title*). |

## Definition of columns (a.k.a. attributes)

At this moment, we have to slow down a bit. Definition of *columns* in Hubleto model is one of the most important things to do. This is because many other functionalitieis, including rendering of some core UI components like Table.tsx [TODO: add link to component], Form.tsx [TODO: add link to component] or Input.tsx [TODO: add link to component] heavily rely on definition of *columns*.