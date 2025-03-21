# Reports

The Report app allows you to create reports using a templating mechanism that can be used in every app.

## Creating a report

To create reports, first create a `Reports` folder inside your app folder. After this you can create your own report.
This is the base file for a custom report:

###### ./src/apps/external/MyCompany/MyApp/Reports/MonthlyRevenue.php

```php
namespace HubletoApp\Community\MyApp\Reports;

class MonthlyRevenue extends \HubletoMain\Core\Report {

  protected string $urlSlug = '';
  public string $name = '';
  public string $modelClass = MyModel::class;

  public function getReportConfig(): array
  {
    $config = [];
    $model = new MyModel($this->main);

    return $config;
  }
}
```

### Register report for the report manager

In the `Loader` class of your app you need to register the created report for the report manager. This will ensure that the created report will be show in the Report app.

###### ./src/apps/external/MyCompany/MyApp/Loader.php

```php
$this->main->reportManager->addReport(Reports\MonthlyRevenue::class);
```

### Creating a report template

With the report template you can create reports, that show values using predefined filters. With templates you can set an **operation** that executes on the data, **fields** the data will be filtered with and **groups** to create groups in the data.

Firstly you should specify the URL to your report in the `$urlSlug` variable. Then, name the report with the `$name` variable. The name of the report will be shown in the list of reports in the Report app. After this, specify the `$modelClass` variable with the class of a model you will be getting the data from.

#### Report Configuration

To specify the configuration of your report you will need to fill out the `$config` variable:

#### Fields

To specify the fields that will act as the filter for the data, you need to fill out `$config["searchGroups"]` with an array of field configurations. With the **field options 1 - 5** you need to specify:

- `fieldName` - the name of the field in the model
- `field` - the column configuration taken from the model
- `option` - a field option
- `value` - the filter value

```php
 ["fieldName" => "id_user", "field" => $model->getColumn("id_user"), "option" => 1,  "value" => $this->main->auth->getUser()["id"]],
```

With the **field option 6** you also need to specify `value2`. For example, if you were searching data between two dates:

```php
["fieldName" => "date_created", "field" => $model->getColumn("date_created"), "option" => 6,  "value" => date("Y-m-01"), "value2" => date('Y-m-t')],
```

The complete `$config["searchGroups"]` should look like this:

```php
$config["searchGroups"] = [
  ["fieldName" => "id_user", "field" => $model->getColumn("id_user"), "option" => 1,  "value" => $this->main->auth->getUser()["id"],],
  ["fieldName" => "date_created", "field" => $model->getColumn("date_created"), "option" => 6,  "value" => date("Y-m-01"), "value2" => date('Y-m-t')],
];
```

#### Available field options

- 1 = equals
- 2 = equals not
- 3 = more than
- 4 = less than
- 5 = matches (%LIKE%)
- 6 = between

### Operations over data

To specify the field that you want the result of and how it's retrieved, you need to fill out `$config["returnWith"]` with an array of one field configuration. First you need to specify the operation as an array key, then you create an array that specifies which column of the model you want the result of.

- `field` - the column of the model
- `title` - a label for the result values

```php
$config['returnWith'] = [
  "total" => [
    ["field" => "price", "title" => "Total price of deals"],
  ],
];
```

#### Available operations

- `count` - counts the number of entries that were found
- `average` - averages the specified values
- `total` - sums the specified values

#### Grouping data

To specify how you want to group the data, you need to fill out `$config["groupsBy"]` with an array of one field configuration. You need to specify:

- `field` - the column you want the data to be grouped by
- `title` - the label for the specified group

```php
$config['groupsBy'] = [
  ["field" => "id_customer", "title" => "Customer"],
];
```

## Example of a report template

###### ./src/apps/external/MyCompany/MyApp/Reports/MonthlyRevenue.php

```php
namespace HubletoApp\Community\MyApp\Reports;

class MonthlyRevenue extends \HubletoMain\Core\Report {

  protected string $urlSlug = 'month-revenue';
  public string $name = 'My revenue this month';
  public string $modelClass = MyModel::class;

  public function getReportConfig(): array
  {
    $config = [];
    $model = new MyModel($this->main);

    $config['groupsBy'] = [
      ["field" => "id_customer", "title" => "Customer"],
    ];
    $config['returnWith'] = [
      "total" => [
        ["field" => "price", "title" => "Total price of deals"],
      ],
    ];
    $config["searchGroups"] = [
      ["fieldName" => "id_user", "field" => $model->getColumn("id_user"), "option" => 1,  "value" => $this->main->auth->getUser()["id"]],
      ["fieldName" => "date_created", "field" => $model->getColumn("date_created"), "option" => 6,  "value" => date("Y-m-01"), "value2" => date('Y-m-t')],
    ];

    return $config;
  }
}
```
