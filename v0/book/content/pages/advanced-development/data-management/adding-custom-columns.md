# Adding custom columns to existing models

Some models can be extended with custom columns.

## Introduction

In some situations, you may need to exted the existing models from exsiting apps with your own custom columns.

For example, you may want to add the column named `favorite_holiday_destination` into the model for storing data about *customers* (see [Customers app](../../apps/community/customers)) in the addressbook. With this very valuable information, you might be able to attract your potential customer in a unbeatable way, just by knowing what is his favorite holiday destination.

Then, ou want to have only three options of these destinations, let's say `Island`, `New Zaeland` and `Hawaii`.

And, you want to have this information available when you open the addressbook - list of customers.

Given all that, you definitely need to extend the model for *customers* by following column:

| Property       | Value                          |
| -------------- | ------------------------------ |
| name           | favorite_holiday_destination   |
| type           | varchar with enum values       |
| allowed values | Island, New Zaeland and Hawaii |

## Adding a custom column

You can add new column only to the model which has the property `$isExtendableByCustomColumns` set to true. Fortunately, the model for *customers* has this property set to true ([code here](https://github.com/hubleto/erp/blob/main/apps/community/Customers/Models/Customer.php)).

To add a column, you need to:

  1. Extend the Hubleto's config by definition of columns to add. See example below.
  2. Create the column in the database.

### Modify config - add the column

To add the definition of the column into the config, you may either modify `ConfigEnv.php` file or create a row in the `config` table of your Hubleto database. Here we show how to modify the ConfigEnv.php file

###### ./ConfigEnv.php
```
$config['models']['Hubleto\\App\\Community\\Customers\\Models\\Customer']['customColumns'] = [
  'favorite_holiday_destination' => [
    'class' => \ADIOS\Core\Db\Column\Varchar::class,
    'title' => 'Favourite holiday destination',
    'enumValues' => [ 0 => '-- Select a destination --', 1 => 'Island', 2 => 'New Zaeland', 3 => 'Hawaii' ],
  ],
];
```
###### Adding a `favorite_holiday_destination` column to the model for *customers*.

Having this configured, the model for *customers* will also contain the column `favorite_holiday_destination`.

### Create the column in the database

To create the column in the database, you have basically two options:

  1. Manually run an SQL command similar to `alter table customers add favorite_holiday_destination varchar(255)` in your database.
  2. Use the premium [DbUpdater app](../../apps/premium/dbupdater).

## Conclusion

You can extend models with `$isExtendableByCustomColumns` set to true by your custom columns. To do so, you need to extend the Hubleto's config (e.g. in ConfigEnv.php file) and to create the column in the SQL database (e.g. by manually running the SQL command).