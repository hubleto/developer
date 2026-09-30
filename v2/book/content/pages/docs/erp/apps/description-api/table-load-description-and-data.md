# loadDescriptionAndData() in Table.tsx

## Purpose

`loadDescriptionAndData()` is the function in the functional `Table` component (`@hubleto/react-ui/components/fc/Table.tsx`) that loads **the table description and the records in a single HTTP request**. It calls the generic endpoint `api/table-describe-and-load`, which runs the model's `describeTable()` and the record manager's `loadTableData()`.

The older class component (`components/cc/Table.tsx`) used two requests: `loadTableDescription()` and then `loadData()`. The functional component merged them into one.

## When it is called

`Table.tsx` calls `loadDescriptionAndData()`:

  * when the table is mounted,
  * whenever the page, items per page, filters, fulltext search, column search or sorting change,
  * after a record is deleted,
  * after the form in the modal saves a record,
  * when you call `table.reload()` or `table.loadDescriptionAndData()`.

###### From @hubleto/react-ui/components/fc/Table.tsx

```tsx
useEffect(() => { loadDescriptionAndData(); }, [page, itemsPerPage, filterBy, columnSearch, fulltextSearch, filters, orderBy]);
```

Because filters are part of the request, **the description is reloaded with the data**. `describeTable()` can therefore change columns or filters based on the selected filters (see the Invoices example in [describeTable()](describe-table)).

## Source code

###### From @hubleto/react-ui/components/fc/Table.tsx

```tsx
const loadDescriptionAndData = (): void => {
  setLoadingData(true);

  request.get(
    getEndpointUrl('describeTableAndLoadData'),
    getEndpointParams(),
    (result: any) => {
      let loadedDescription = result.description ?? {};
      let loadedData = result.data ?? {};

      setLoadingData(false);

      // process description
      if (descriptionSource != 'props') {
        if (descriptionSource == 'both') {
          loadedDescription = deepObjectMerge(loadedDescription, description);
        }

        setDescription(loadedDescription);
        if (props.onAfterLoadDescription) props.onAfterLoadDescription(myself);
      }

      // process data
      if (props.data) {
        setData(props.data);
      } else {
        setData(loadedData);
      }

      if (props.onAfterLoadData) props.onAfterLoadData(myself);
    }
  );
}
```

Step by step:

  1. The loading indicator is turned on.
  2. `GET` request to the endpoint URL `describeTableAndLoadData` (default `api/table-describe-and-load`) with the parameters from `getEndpointParams()`.
  3. The description from the backend is merged with the `description` prop (if `descriptionSource` is `'both'`), stored in the state, and `onAfterLoadDescription` is called.
  4. The records are stored in the state, unless records were passed in the `data` prop. Then `onAfterLoadData` is called.

## Request parameters

`getEndpointParams()` returns `props.getEndpointParams(table)` if you provide it. Otherwise it returns the defaults below, **merged with `props.endpointParams`**:

###### From Table.tsx, getDefaultEndpointParams() (simplified)

```tsx
return {
  model: model,                       // 'Hubleto/App/Community/Deals/Models/Deal'
  crudController: crudController,
  orderBy: description?.ui?.orderBy ?? { field: 'id', direction: 'desc' },
  page: page ?? 0,
  itemsPerPage: itemsPerPage ?? 35,
  fulltextSearch: fulltextSearch,
  columnSearch: columnSearch,
  filters: filters,                   // filter defaults from description.ui.filters are applied
  tag: tag,
  context: props.context,
  where: props.where,
  view: view,
  __IS_AJAX__: '1',
  junctionModel: props.junctionModel, // and the other junction* props
  ...props.endpointParams,            // your parameters, e.g. {idCustomer: 5}
}
```

## What happens on the backend

###### Hubleto\Framework\Controllers\Api\Table\DescribeAndLoad (simplified)

```php
public function response(): array
{
  $fulltextSearch = $this->router()->urlParamAsString('fulltextSearch');
  $columnSearch = $this->router()->urlParamAsArray('columnSearch');
  $orderBy = $this->router()->urlParamAsArray('orderBy');
  $itemsPerPage = $this->router()->urlParamAsInteger('itemsPerPage', 15);
  $page = $this->router()->urlParamAsInteger('page');
  $dataView = $this->router()->urlParamAsString('dataView');

  $description = $this->model->describeTable()->toArray();

  $data = $this->model->record->loadTableData(
    $fulltextSearch,
    $columnSearch,
    $orderBy,
    $itemsPerPage,
    $page,
    $dataView,
  );

  return [
    "description" => $description,
    "data" => $data,
  ];
}
```

`loadTableData()` in the record manager then runs this chain. Each step can be overridden (see [record managers](../design-principles/models)):

###### From Hubleto\Framework\EloquentRecordManager::loadTableData()

```php
$query = $this->prepareReadQuery(null, 0, $includeRelations);
$query = $this->addUrlFiltersToQuery($query);                     // filters, endpointParams
$query = $this->addFulltextSearchToQuery($query, $fulltextSearch);
$query = $this->addColumnSearchToQuery($query, $columnSearch);
$query = $this->addOrderByToQuery($query, $orderBy);
$tableData = $this->recordReadMany($query, $itemsPerPage, $page);
```

## Response

A real (shortened) response:

```json
{
  "description": {
    "ui": { "title": "Contact Tags", "addButtonText": "Add Contact Tag", "showFulltextSearch": true, "...": "..." },
    "permissions": { "canRead": true, "canCreate": true, "canUpdate": true, "canDelete": true },
    "columns": { "name": { "type": "varchar", "title": "Name" }, "color": { "type": "color", "title": "Color" } },
    "inputs": { "name": { "type": "varchar", "title": "Name", "required": true }, "color": { "...": "..." } }
  },
  "data": {
    "current_page": 1,
    "last_page": 2,
    "per_page": 3,
    "total": 6,
    "records": [
      { "id": 1, "name": "IT manager", "color": "#D33115", "_LOOKUP": "IT manager", "_PERMISSIONS": [true, true, true, true] }
    ]
  }
}
```

Each record contains its relations (as UPPER_CASE keys, e.g. `TAGS`, `CUSTOMER`), `_LOOKUP[<column>]` values for lookups, `_ENUM[<column>]` values for enums and `_PERMISSIONS` (create, read, update, delete).

## Customizing the loading

### Send extra parameters

Use `endpointParams`. Read them in the record manager's `addUrlFiltersToQuery()`:

###### apps/Contacts/Components/FC/TableContacts.tsx

```tsx
<Table
  model={parentApp + '/Models/Contact'}
  endpointParams={{ '{{' }}idCustomer: props.idCustomer{{ '}}' }}
  ...
/>
```

###### apps/Contacts/Models/RecordManagers/Contact.php

```php
if ($hubleto->router()->urlParamAsInteger("idCustomer") > 0) {
  $query = $query->where($this->table . '.id_customer', $hubleto->router()->urlParamAsInteger("idCustomer"));
}
```

### React to loaded data

```tsx
<TableDeals
  onAfterLoadData={(table: TableMeta) => {
    const total = table.data?.total ?? 0;
    console.log('Deals loaded: ' + total);
  {{ '}}' }}
/>
```

### Use a different endpoint

Pass the `endpoint` prop. You can also set a default for the whole project in `globalThis.hubleto.config.defaultTableEndpoint`:

```tsx
<Table
  model='Hubleto/App/Custom/Reports/Models/Summary'
  endpoint={{ '{{' }}
    describeTable: 'api/table/describe',
    loadTableData: 'api/record/load-table-data',
    describeTableAndLoadData: 'reports/api/summary-describe-and-load',
    saveRecord: 'api/record/save',
    deleteRecord: 'api/record/delete',
  {{ '}}' }}
/>
```

The custom endpoint must return the same structure: `{ description: {...}, data: {...} }`.

### Provide data without a request

Pass `data` (and `description` with `descriptionSource='props'`) to render records you already have. The request is still sent, but the `data` prop wins.

### Reload from outside

```tsx
const table = globalThis.hubleto.reactElements['table-deals-uid'];
table.reload();
```

## Legacy class component

The class component loads the description and the data separately:

###### From @hubleto/react-ui/components/cc/Table.tsx

```tsx
componentDidMount() {
  if (this.state?.async) {
    this.loadTableDescription(() => {
      this.loadData();
    });
  }
}
```

`loadTableDescription()` calls `api/table/describe`, and `loadData()` calls `api/record/load-table-data`. You can override `onAfterLoadTableDescription(description)` in a subclass to modify the description. Components generated by `php hubleto create mvc` still use this API.
