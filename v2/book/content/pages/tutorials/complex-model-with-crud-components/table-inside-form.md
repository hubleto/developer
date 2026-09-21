# Table inside form

This tutorial is a followup of [Complex model with CRUD components](../complex-model-with-crud-components) tutorial. You should read and understand this tutorial first.

In this tutorial we will take a closer look how to create a **table inside form**.

For example, let's have two models: `Book` and `Account`. And following relationship:

```
Account belongs to Book
```

This is a `1:N` relationship saying that 1 book can contain N accounts.

## Adding table in `renderContent()`

To represent this relationship in the user interface, very often a **table** is rendered inside a **form**. In our example, you would have a form for the book containing list of accounts in this book. Let's have a look at the code:

```js
renderContent(): JSX.Element {
  const R = this.state.record;
  return <>
    {this.inputWrapper('name')}
    {this.inputWrapper('notes')}
    <TableAccounts
      uid='book_table_accounts'
      idBook={R.id}
    />
  </>;
}
```
###### `renderContent()` method in `FormBook.tsx` containing list of accounts.

What is interesting here?

  * a React component `FormBook` is using another React component `TableAccounts`.
  * a `renderContent()` method is overriden.
  * the `TableAccounts` component contains a property `idBook` and this property is filled with `this.state.record.id` of the `FormBook` component.

Remember, in the [previous tutorial](../complex-model-with-crud-components) we created the `FormBook.tsx` and `TableAccounts.tsx` React components. Adding a simple snippet of code like in the example below will render the list of accounts belonging to the book.

But you need also to do some other modifications:

  * add the `idBook` property into `TableAccounts.tsx`
  * send the value of `idBook` into the `load-table-data` endpoint
  * apply the `idBook` parameter in the `prepareReadQuery()` method of the `Accounts`'s record manager

These modifications will ensure your `idBook` will be properly transferred from the `FormBook` React component into Hubleto backend and then applied when reading only the accounts belonging to the book. Let's see how to do this.

## Add `idBook` in `TableAccounts.tsx`

Apply following changes to your `TableAccounts.tsx` to add the `idBook` property and forward it to Hubleto's endpoint which reads the table data.

1. Add the property into the interface of the `TableAccounts` component

```javascript
interface TableAccountsProps extends TableExtendedProps {
  idBook?: number,
}
```

2. Override the `getEndpointParams()` method

```javascript
  getEndpointParams(): any {
    return {
      ...super.getEndpointParams(),
      idBook: this.props.idBook,
    }
  }
```

## Apply `idBook` in data loading

To properly load the data (the list of accounts belonging only to the specific book), apply following changes in `RecordManagers/Account.php`.

```php
  public function prepareReadQuery(mixed $query = null, int $level = 0, array|null $includeRelations = null): mixed {
    $query = parent::prepareReadQuery($query, $level, $includeRelations);

    $hubleto = \Hubleto\Erp\Loader::getGlobalApp();
    $idBook = $hubleto->router()->urlParamAsInteger("idBook");

    if ($idBook > 0) {
      $query = $query->where($this->table . '.id_book', $idBook);
    }

    return $query;
  }
```
###### Implement filtering in `prepareReadyQuery()` in `RecordManagers/Account.php`

## Conclusion

In this tutorial we have created the user interface listing the accounts belonging to the specific book. We implemented following changes:

  * added the `idBook` property into `TableAccounts.tsx`
  * forwared the `idBook` property to the loading endpoint by overriding the `getEndpointParams()`
  * applied the `idBook` property to filter the list of accounts by overriding the `prepareReadQuery()` method.