# Record manager

Record managers are objects directly linked with models and act most likely as a data source for the models. As a simple analogy, record manager is something like an *ODBC* driver for the Hubleto models.

> **Important:** A model without record manager is not able to provide any data.

## Why we need record managers?

You may ask what's the reason for introducing record managers as it may sound as an unnecessary complication.

The reason is the separation of description model's structure (its columns (or attributes, if you like), permissions and UI configuration) from the actual datasource.

### Example with different data sources

For example, your project may have some models being connected to the SQL database with Laravel Eloquent (there is a `EloquentRecordManager` class for that purpose in Hubleto framework) and some other models connected to its datasource e.g. via some REST API (for that purpose you should have your own record manager class which could be called, e.g. `MyApiRecordManager`).

## Laravel's Eloquent record manager

By default, Hubleto framework implements the `EloquentRecordManager` class which, as its name suggests, uses the Laravel's Eloquent to connect to the SQL database. With this record manager, you may work with your models simply using the Eloquent's API.

For example the code below creates the model for customers and then reads all customers using Eloquent's `get()` method.

```php
$mCustomer = $this->getModel(Models\Customer::class);
$customers = $mCustomer->record->get();
```
