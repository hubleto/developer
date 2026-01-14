# Models

Hubleto models are split into two classes:

  * the model itself (extending from `Hubleto\Framework\Model`), and
  * the record manager (extending from `Hubleto\Framework\RecordManager`)

The reason is the separation of the definition of the models behaviour and database engine used to manipulate data in the database.

## Building components of a model

To get the most out of the models, following concepts shall be configured:

| Component                                                                                                                                                                                                              | How it is implemented                 |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------- |
| A record manager class linking the model with its *record manager*.                                                                                                                                                     | In the `$recordManagerClass` property |
| Relations of the model. *Note: If you are using `EloquentRecordManager`, the same relations shall be implemented as methods in the model's record manager.*                                                            | In the `$relations` property.         |
| Description of model's columns (or *attributes*). This comprises type of the column (`Integer`, `Varchar`, `Json`, `Image`, ...), as well as many other properties like *title* used in table headers or input lables) | Using `describeColumns()` method.     |
| A description of the table (data grid), containing UI configuration and parmissions.                                                                                                                                   | Using `describeTable()` method.       |
| A description of the form to create or update a record, containing UI configuration and permissions                                                                                                                    | Using `describeForm()` method.        |

*Table: Description of fundamental building components of the model.*

Optionally, there are other components like:

  * configuration of models behaviour in lookups (`$lookupSqlValue`, `$lookupUrlAdd`, `$lookupUrlDetail`), or
  * many callbacks (`onBeforeCreate`, `onAfterCreate`, ...), or 
  * methods for modification of read queries (`prepareReadQuery`, `prepareLookupQuery`).

More details can be found in the next chapters.

## Example

Below is an example of a simple model with following features:

  * uses an `EloquentRecordManager`
  * has a relationship (specified both in the model and its record manager)
  * contains various types of columns, including `Lookup`, `Enum` and `Image`
  * describes UI for its *Table*

*Note: Example model is taken from the CarRental app and its full implementation can be found at https://github.com/mrgopes/hubleto-car-rental.*

###### custom/apps/CarRental/Models/Car.php
```php
namespace Hubleto\App\Custom\CarRental\Models;

use Hubleto\Erp\Model;
use Hubleto\Framework\Db\Column;
use Hubleto\Framework\Description;

class Car extends Model {
  public string $table = 'cars';
  public string $recordManagerClass = RecordManagers\Car::class;

  public array $relations = [
    "HISTORY" => [ self::HAS_MANY, RentalHistory::class, "id_car" ]
  ];

  public function describeColumns(): array
  {
    return array_merge(parent::describeColumns(), [
      "manufacturer" => (new Column\Varchar($this, "Manufacturer"))->setRequired(),
      "model" => (new Column\Varchar($this, "Model")),
      "licence_plate" => (new Column\Varchar($this, "Licence plate")),
      "fuel" => (new Column\Integer($this, "Fuel"))->setEnumValues([
        1 => "Gasoline",
        2 => "Diesel",
      ]),
      "gearbox" => (new Column\Integer($this, "Gearbox"))->setEnumValues([
        1 => "Automatic",
        2 => "Manual",
      ]),
      "seats" => (new Column\Integer($this, "Number of seats")),
      "price_per_day" => (new Column\Decimal($this, "Base price per day")),
      "color" => (new Column\Color($this, "Color")),
      "picture" => (new Column\Image($this, "Picture")),
      "availability" => (new Column\Boolean($this, "Availability"))->setDefaultValue(1),
    ]);
  }

  public function describeTable(): Description\Table
  {
    $description = parent::describeTable();
    $description->ui['addButtonText'] = 'Add new car';
    $description->ui['showFulltextSearch'] = true;
    return $description;
  }

}
```

###### custom/apps/CarRental/Models/RecordManagers/Car.php
```php
namespace Hubleto\App\Custom\CarRental\Models\RecordManagers;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends \Hubleto\Erp\RecordManager
{
  public $table = 'cars';

  /** @return HasMany<RentalHistory, covariant RentalHistory> */
  public function HISTORY(): HasMany
  {
    return $this->hasMany(RentalHistory::class, 'id_car');
  }
}
```

## See also

| Page                                          | What it is about                                                                                     |
| --------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| [Record manager](models/record-manager)       | Describes the principles of a *record manager*.                                                      |
| [Records API](models/records-api)             | Explains the *records API* used for CRUD operations with records.                                    |
| [Description API](models/description-api)     | Explains the *description API* used to configure the UI and permissions of tables, forms and inputs. |
| [Relations](models/relations)                 | Explains how the relations (belongs to, has one, has many, ...) are configured and handled.          |
| [Enums and Lookups](models/enums-and-lookups) | Provides more detailed explanation on how 1:N relations are handled.                                 |
| [Callbacks](models/callbacks)                 | Lists all available callbacks.                                                                       |


