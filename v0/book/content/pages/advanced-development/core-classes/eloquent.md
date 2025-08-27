# Hubleto\Erp\Core\ModelEloquent

## Introduction

The Eloquent class defines the relations of a model.

## Parameters

| parameter | Description                            | type   |
| --------- | -------------------------------------- | ------ |
| table     | The name of the table in your database | string |

.

## Creating relations

Relations are defined using Eloquent. Relations created must have their name in uppercase. The names of the relations need to match with the names of the relations in the Model class. Relations can be modified similarly to Eloquent query builder, for example adding `order()` or `where()` methods.

```php
public function COMPANY(): BelongsTo {
  return $this->belongsTo(Company::class, 'id_company');
}
```

Check out [Eloquent Relations](https://laravel.com/docs/11.x/eloquent-relationships) to learn more about Eloquent relations.

## Changing the record query

The overridable method `prepareReadQuery()` allows you to modify the database query for retrieving records of the model. The query can be modified using Eloquent's query building. For example, you can change the retrieval of records based on set parameters.

###### .\apps\community\Deals\Components\TableDeals.tsx

```php
public function prepareReadQuery(): mixed
{
  $query = parent::prepareReadQuery();

  $main = \ADIOS\Core\Helper::getGlobalApp();

  if ($main->getRouter()->urlParamAsBool("showArchive")) {
    $query = $query->where("deals.is_archived", 1);
  } else {
    $query = $query->where("deals.is_archived", 0);
  }

  return $query;
}
```

In this example, we are looking for the `showArchive` parameter that is set in the endpoint parameters of the `TableDeals.tsx`. Based on the parameter, we change the retrieved records to be only those that are either archived or not.

## Next up

- Check out the [Controller](controller) class
