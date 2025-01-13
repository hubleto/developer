# HubletoMain\Core\ModelEloquent

## Introduction

The Eloquent class defines the relations of a model.

## Parameters

| parameter | Description                            | type   |
| --------- | -------------------------------------- | ------ |
| table     | The name of the table in your database | string |

.

## Creating relations

Relations are defined using Eloquent. Relations created must have their name in uppercase. The names of the relations need to match with the names of the relations in the Model class. Relations can be modified similarly to Eloquent query builder, for example adding  `order()` or `where()` methods.

```php
public function COMPANY(): BelongsTo {
  return $this->belongsTo(Company::class, 'id_company');
}
```

Check out [Eloquent Relations](https://laravel.com/docs/11.x/eloquent-relationships) to learn more about Eloquent relations.

## Next up

- Check out the [Controller](controller) class
