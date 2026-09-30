# loadDescriptionAndData() in Form.tsx

## Purpose

The functional `Form` component (`@hubleto/react-ui/components/fc/Form.tsx`) loads **the form description and the record in a single HTTP request**. It calls the generic endpoint `api/form-describe-and-load`, which runs the model's `describeForm()` and the record manager's `loadFormData($id)`.

> **NOTE** In the source code of `Form.tsx`, this function is called `loadDescriptionAndRecord()`. It is the form's counterpart of [`loadDescriptionAndData()` in Table.tsx](table-load-description-and-data). The older class component (`components/cc/Form.tsx`) used two requests instead: `loadFormDescription()` (`api/form/describe`) and `loadRecord()` (`api/record/get`).

## When it is called

The form keeps a `dataLoaded` flag. Whenever it is `false`, the form loads the description and the record:

###### From @hubleto/react-ui/components/fc/Form.tsx

```tsx
useEffect(() => {
  setId(props.id);
  setCreatingRecord(isCreatingRecord(props.id));
  setUpdatingRecord(!isCreatingRecord(props.id));
  setDataLoaded(false);
}, [props.id]);

useEffect(() => {
  if (!dataLoaded) loadDescriptionAndRecord();
  setIsInitialized(dataLoaded);
}, [dataLoaded]);

const reload = (): void => {
  setDataLoaded(false);
}
```

So the form loads:

  * when it is opened,
  * when the `id` prop changes (for example, the user clicks *next record* or opens another row),
  * when you call `form.reload()`.

## Source code (simplified)

###### From @hubleto/react-ui/components/fc/Form.tsx

```tsx
const loadDescriptionAndRecord = (): void => {
  request.post(
    getEndpointUrl('describeFormAndLoadRecord'),
    getEndpointParams(),
    {},
    (result: any) => {
      if (!result) return;

      let loadedDescription = result.description ?? {};
      let loadedRecord = result.record ?? {};

      // 1. description: merge the backend description with the description prop
      let newDescription: any = {};
      if (descriptionSource != 'props') {
        if (descriptionSource == 'both') newDescription = deepObjectMerge(loadedDescription, props.description);
      }
      setDescription(newDescription);

      // 2. record
      if (id == -1) {
        // new record: start with the default values
        const record = newDescription.defaultValues ?? {};
        setOriginalRecord(JSON.parse(JSON.stringify(record)));
        recordStore.setRecord(prev => ({ ...record }));
      } else {
        const record = loadedRecord;
        setOriginalRecord(JSON.parse(JSON.stringify(record)));

        if (id != -1 && !record.id) {
          setLoadRecordError('ERROR: Loading failed.');
        } else {
          // 3. permissions of this record
          let recordPermissions = getPermissions(record);
          setPermissions(recordPermissions);
          if (!recordPermissions.canUpdate && !recordPermissions.canCreate) setReadonly(true);

          recordStore.setRecord(prev => ({ ...record }));
          setReadonly(record.is_closed == 1);

          getCallback('onAfterRecordLoaded')(myself, record);
        }
      }

      setDataLoaded(true);
    },
    (error) => {
      setDataLoaded(true);
      setLoadRecordError(error.data);
    }
  );
}
```

Step by step:

  1. `POST` request to the endpoint URL `describeFormAndLoadRecord` (default `api/form-describe-and-load`).
  2. The backend description is merged with the `description` prop (`descriptionSource='both'`).
  3. **New record** (`id == -1`): the record is initialized with `description.defaultValues`.
  4. **Existing record**: the loaded record is stored. The form computes the permissions from `_PERMISSIONS` and becomes read-only if the user cannot update it or if `is_closed == 1`. Then `onAfterRecordLoaded` is called.
  5. `dataLoaded` is set to `true`, the form is initialized and `onAfterFormInitialized` is called.

## Request parameters

###### From Form.tsx, getEndpointParams()

```tsx
const getEndpointParams = (): object => {
  if (props.getEndpointParams) return props.getEndpointParams(myself);

  return {
    model: model,                                   // 'Hubleto/App/Community/Deals/Models/Deal'
    id: id,                                         // record ID, -1 for a new record
    tag: tag,
    includeRelations: description?.includeRelations,
    __IS_AJAX__: '1',
    ...props.endpointParams                         // e.g. {saveRelations: ['VALUES', 'TAGS']}
  };
}
```

The same parameters (plus `record`) are sent when the form saves the record to `api/record/save`. That is why `saveRelations` is passed in `endpointParams`.

## What happens on the backend

###### Hubleto\Framework\Controllers\Api\Form\DescribeAndLoad (simplified)

```php
public function response(): array
{
  $description = $this->model->describeForm()->toArray();

  $record = [];

  // The ID is encrypted only if 'encryptRecordIds' is enabled in the config.
  $id = (int) \Hubleto\Framework\Helper::decrypt($this->router()->urlParamAsString('id'));

  if ($id > 0) {
    $record = $this->model->record->loadFormData($id);
  }

  return [
    "description" => $description,
    "record" => $record,
  ];
}
```

`loadFormData($id)` reads the record with `prepareReadQuery()` and loads the relations returned by the model's `getRelationsIncludedInLoadFormData()` (all relations by default), up to `getMaxReadLevelForLoadFormData()` levels deep.

## Response

A real response for an existing `Contacts\Models\Tag` record:

###### POST api/form-describe-and-load (model=Hubleto/App/Community/Contacts/Models/Tag, id=1)

```json
{
  "description": {
    "ui": { "showSaveButton": true, "showDeleteButton": true },
    "inputs": {
      "name": { "type": "varchar", "title": "Name", "required": true },
      "color": { "type": "color", "title": "Color", "required": true }
    },
    "permissions": { "canCreate": true, "canRead": true, "canUpdate": true, "canDelete": true }
  },
  "record": {
    "id": "1",
    "name": "IT manager",
    "color": "#D33115",
    "_LOOKUP": "IT manager",
    "_idHash_": "aTZYRW1LajFZQ3pKakNQelZPZ3Iwdz09",
    "_PERMISSIONS": [true, true, true, true],
    "_RELATIONS": []
  }
}
```

## Customizing the loading

### Callbacks

| Prop                                           | Called                                             |
| ---------------------------------------------- | -------------------------------------------------- |
| `onAfterRecordLoaded(form, record)`            | after an existing record is loaded                 |
| `onAfterFormInitialized(form)`                 | after the description and the record are loaded    |
| `onChange(form, changedRecord)`                | after the user changes a field                     |
| `onBeforeSaveRecord(form, record)`             | before saving, can modify the record               |
| `onAfterSaveRecord(form, saveResponse)`        | after saving                                       |
Form callbacks related to loading and saving.

###### Example: prepare UI state after the record is loaded

```tsx
<FormDeal
  onAfterRecordLoaded={(form: FormMeta, record: any) => {
    const isWon = record.deal_result == 1;
    if (isWon) {
      form.setReadonly(true);
    }
  {{ '}}' }}
/>
```

### Extra parameters for the backend

```tsx
<Form
  model={parentApp + '/Models/Contact'}
  endpointParams={{ '{{' }}saveRelations: ['VALUES', 'TAGS']{{ '}}' }}
  ...
/>
```

### Default values from the parent

A table passes its `formDefaultValues` to the form in the `description` prop. They are merged with the backend `defaultValues`, so a new record created from a customer's form already has `id_customer` filled in:

```tsx
<TableDeals idCustomer={customerId} />  // TableDeals sets formDefaultValues={{ '{{' }}id_customer: props.idCustomer{{ '}}' }}
```

### Different endpoint

Pass the `endpoint` prop, or set `globalThis.hubleto.config.defaultFormEndpoint` for the whole project:

```tsx
<Form
  endpoint={{ '{{' }}
    describeForm: 'api/form/describe',
    describeFormAndLoadRecord: 'my-app/api/form-describe-and-load',
    getRecord: 'api/record/get',
    saveRecord: 'api/record/save',
    deleteRecord: 'api/record/delete',
  {{ '}}' }}
/>
```

### Reload

```tsx
const form = React.useContext(FormMetaContext);
form.reload(); // loads the description and the record again
```
