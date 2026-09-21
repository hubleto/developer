# Documents

The Documents app allows you to save and see all the documents that were saved throughout all Hubleto apps.

The base Document app allows you to save and read the documents that you saved inside Hubleto. There might be a time where you would want to save a document to a specific entry. The Document app allows you to create cross-tables between the Document model and your connecting model, so that you can easily get to the document, in both the Document app and the connected model's app. After creating an entry for a document through a cross-table you can easily find the **origin entry** where the document was created when you open the document entry through the Document app.

## Creating documents through other apps

The Document model creates a unified way to create cross-tables for the Document model. This allows us to create documents in nearly every app. For this to work we need to:

- create a cross-table model, which will have `id_lookup` and `id_document` lookup columns
- insert a table component of the cross-table model into a form component
  - the table component will open a form of the **Document** model
  - we will pass the cross-table model, the ID of the _origin_ record and a part of the URL to the origin entry as default values to the Document form
  - this will ensure, that after saving a document, a new entry will also be made in the correct cross-table model and ensures that we have a direct URL to the origin entry

### Create a cross-table model

The cross-table model needs to have:

- relations to the origin model and a relation to the Document model
- `id_lookup` and `id_document` lookup columns

This is an example from the `LeadDocument` cross-table model:

###### ./src/apps/community/Leads/Models/LeadDocument.php

```php
class LeadDocument extends \Hubleto\Erp\Core\Model
{
  public string $table = 'lead_documents';
  public string $eloquentClass = Eloquent\LeadDocument::class;

  public array $relations = [
    'LEAD' => [ self::BELONGS_TO, Lead::class, 'id_lookup', 'id' ],
    'DOCUMENT' => [ self::BELONGS_TO, Document::class, 'id_document', 'id' ],
  ];

  public function describeColumns(): array
  {
    return array_merge(parent::describeColumns(), [
      'id_lookup' => (new Lookup($this, $this->translate('Lead'), Lead::class))->setFkOnUpdate('CASCADE')->setFkOnDelete('SET NULL')->setRequired(),
      'id_document' => (new Lookup($this, $this->translate('Document'), Document::class, 'CASCADE'))->setRequired(),
    ]);
  }
}
```

You also need to create an **Eloquent** class for the model.

###### ./src/apps/community/Leads/Models/Eloquent/LeadDocument.php

```php
class LeadDocument extends \Hubleto\Erp\Core\ModelEloquent
{
  public $table = 'lead_documents';

  public function DOCUMENT(): BelongsTo {
    return $this->belongsTo(Document::class, 'id_document', 'id');
  }

  public function LEAD(): BelongsTo {
    return $this->belongsTo(Lead::class, 'id_lookup', 'id');
  }
}
```

> Remember that the column for the origin model needs to be named `id_lookup` otherwise the document entry wont save into the cross-table model.

### Creating a Table component inside a Form component

To see all the documents that belong to the origin entry, you need to create a cross-table Table component. You can use the basic Table component creation. For demonstration, we will use the Lead app and the previous examples.

After creating a cross-table Table component you can now insert in into the Form component. The data for the Table component are from the Document relation that we created in the origin model (the Lead Model). The column and the input description can just be the lookup for the Document model.

To open the Document Form component you need to manage a state to render the Form component on a row click callback. You will have to also manage a state to open up an empty Document Form component.

###### ./src/apps/community/Leads/Components/FormLead.tsx

```tsx
<TableLeadDocuments
  uid={this.props.uid + "_table_lead_document"}
  data={ data R.DOCUMENTS }
  descriptionSource="both"
  description={
    ui {
      showFooter: false,
      showHeader: false,
    },
    column {
      id_document: {
        type: "lookup",
        title: "Document",
        model: "Hubleto/App/Community/Documents/Models/Document",
      },
    },
    inputs {
      id_document: {
        type: "lookup",
        title: "Document",
        model: "Hubleto/App/Community/Documents/Models/Document",
      },
    },
  }
  isUsedAsInput={true}
  readonly={R.is_archived == true ? false : !this.state.isInlineEditing}
  onRowClick={(table: TableLeadDocuments, row: any) => {
    this.setState({ showIdDocument: row.id_document } as FormLeadState);
  }}
/>
```

Our state management for the Document form uses a numerical state that shows the Form component, if the state is something other than zero. The numerical state is also used to initialize the ID of the Form component, which will either open a new Document form or an existing Document entry.

As mentioned above you will now need to pass the values `creatingForModel`, `creatingForId`, `origin_link` as the default values to the Document form.

- `creatingForModel` - a model that the document will also be save into (the cross-table model)
- `creatingForId` - the ID of the origin entry (the Lead)
- `origin_link` - a URL that links to the origin entry (the Lead), preferably use the `window.location.pathname`

You can also set up the callbacks for saving and deleting a Document entry like in the example bellow. the onSave and onDelete callback reloads the origin form and closes the Document form on success.

###### ./src/apps/community/Leads/Components/FormLead.tsx

```tsx
{this.state.showIdDocument != 0 ?
<ModalSimple
  uid='document_form'
  isOpen={true}
  type='right'
>
  <FormDocument
    id={this.state.showIdDocument}
    onClose={() => this.setState({showIdDocument: 0} as FormLeadState)}
    showInModal={true}
    descriptionSource="both"
    description={
      defaultValues: {
        creatingForModel: "Hubleto/App/Community/Leads/Models/LeadDocument",
        creatingForId: this.state.record.id,
        origin_link: window.location.pathname + "?recordId=" + this.state.record.id,
      }
    }
    isInlineEditing={this.state.showIdDocument < 0 ? true : false}
    showInModalSimple={true}
    onSaveCallback={(form: FormDocument<FormDocumentProps, FormDocumentState>, saveResponse: any) => {
      if (saveResponse.status = "success") {
        this.loadRecord();
        this.setState({ showIdDocument: 0 } as FormLeadState)
      }
    }}
    onDeleteCallback={(form: FormDocument<FormDocumentProps, FormDocumentState>, saveResponse: any) => {
      if (saveResponse.status = "success") {
        this.loadRecord();
        this.setState({ showIdDocument: 0 } as FormLeadState)
      }
    }}
  />
</ModalSimple>
: null}
```

With this process you will now be able to add documents from any model's form and see the link to the origin entry in the Document model's form.