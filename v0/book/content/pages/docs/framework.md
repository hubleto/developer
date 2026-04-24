# Hubleto Framework

Hubleto Framework is a foundation for the further development of the Hubleto ERP.

Hubleto ERP uses the Hubleto Framework and extends its functionality. We recommend you to learn Hubleto Framework first.

## Highlights

Hubleto Framework follows standard MVC architecture and implements fundamental features to develop any application, not only ERP.

  * secure and flexible routing patterns
  * user management and ACL permissions
  * elementary controllers and views for rendering the app's UI
  * database access using Laravel's Eloquent ORM
  * HTML rendering using Twig
  * app management for easy customizations
  * full-featured CRUD endpoints and UI components

It also supports hybrid HTML-React architecture for creating nice looking and full-featured user interface.

## Code examples

Browse through the code examples below to get the feeling of how it all works.

```php
$this->router()->get([
  '/^accounting\/api\/add-entry-line?$/' => Controllers\Api\AddEntryLine::class,
  '/^accounting\/api\/post-invoice?$/' => Controllers\Api\PostInvoice::class,
  '/^accounting\/books(\/(?<recordId>\d+))?\/?$/' => Controllers\Books::class,
  '/^accounting\/books\/add\/?$/' => [
    'controller' => Controllers\Books::class,
    'vars' => ['recordId' => -1]
  ],
]);
```
###### Adding custom routes for the controller

```php
class Books extends \Hubleto\Erp\Controller {
  public function prepareView(): void {
    parent::prepareView();
    $this->setView('@Hubleto:App:Enterprise:Accounting/Books.twig');
  }
}
```
###### Simple controller to render the list of books

```html
<hblreact-accounting-tree-books
  int:record-id="{{ viewParams.recordId }}"
  string:fulltext-search='{{ viewParams.search }}'
  json:filters='{{ viewParams.filters|json_encode }}'
></hblreact-accounting-tree-books>
```
###### Rendering a table in the view - list of books

```js
export default class TableBooks extends TableExtended {
  static defaultProps = {
    ...TableExtended.defaultProps,
    model: 'Hubleto/App/Enterprise/Accounting/Models/Book',
  }

  constructor(props: TableBooksProps) {
    super(props);
    this.state = this.getStateFromProps(props);
  }

  renderForm(): JSX.Element {
    return <FormBook {...this.getFormProps()}/>;
  }
}
```
###### React component for the list of books

```js
export default class FormBook<P, S> extends FormExtended {
  static defaultProps: any = {
    ...FormExtended.defaultProps,
    model: 'Hubleto/App/Enterprise/Accounting/Models/Book'
  };

  props: FormBookProp;
  state: FormBookState;

  constructor(props: FormBookProp) {
    super(props);
    this.state = this.getStateFromProps(props),
  }

  renderTitle(): JSX.Element {
    return this.state.record.name ?? '-';
  }

  renderContent(): JSX.Element {
    return <>
      {this.inputWrapper('name')}
      {this.inputWrapper('notes')}
      <TableAccounts
        uid='book_table_accounts'
        idBook={this.state.record.id}
      />
    </>;
  }

}
```
###### React component for the book detail

## Documentation

Ready to learn Hubleto Framework? Good choice. Go through these pages and become a CRM/ERP developer.

<div class="grid gap-4 mt-8 md:grid-cols-2">
  <div class="card border-yellow-300">
    <div class="card-header bg-yellow-50">Routing</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/routing" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/routing/defining-routes" class="btn btn-white block"><span class="text">Defining routes</span></a>
      <a href="framework/routing/accessing-route-params" class="btn btn-white block"><span class="text">Accessing route params</span></a>
      <a href="framework/routing/routes-with-variables" class="btn btn-white block"><span class="text">Routes with variables</span></a>
    </div>
  </div>
  <div class="card border-green-300">
    <div class="card-header bg-green-50">Models</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/models" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/models/columns" class="btn btn-white block"><span class="text">Columns</span></a>
      <a href="framework/models/description-api" class="btn btn-white block"><span class="text">Description API</span></a>
      <a href="framework/models/relations" class="btn btn-white block"><span class="text">Relations</span></a>
      <a href="framework/models/record-manager" class="btn btn-white block"><span class="text">Record manager</span></a>
      <a href="framework/models/data-transfer-objects" class="btn btn-white block"><span class="text">Data Transfer Objects (DTO)</span></a>
    </div>
  </div>
  <div class="card border-blue-300">
    <div class="card-header bg-blue-50">Views</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/views" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/views/namespaces" class="btn btn-white block"><span class="text">Namespaces</span></a>
      <a href="framework/views/twig" class="btn btn-white block"><span class="text">Twig</span></a>
    </div>
  </div>
  <div class="card border-stone-300">
    <div class="card-header bg-stone-50">Controllers</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/controllers" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/controllers/html-output" class="btn btn-white block"><span class="text">HTML output</span></a>
      <a href="framework/controllers/json-output" class="btn btn-white block"><span class="text">JSON output</span></a>
    </div>
  </div>
  <div class="card border-stone-300">
    <div class="card-header bg-stone-50">UI</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/ui" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/ui/creating-components" class="btn btn-white block"><span class="text">Creating custom components</span></a>
      <a href="framework/ui/tables" class="btn btn-white block"><span class="text">Tables</span></a>
      <a href="framework/ui/forms" class="btn btn-white block"><span class="text">Forms</span></a>
      <a href="framework/ui/inputs" class="btn btn-white block"><span class="text">Inputs</span></a>
    </div>
  </div>
  <div class="card border-yellow-300">
    <div class="card-header bg-yellow-50">Apps</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/apps" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/apps/folder-structure" class="btn btn-white block"><span class="text">Folder structure</span></a>
      <a href="framework/apps/types" class="btn btn-white block"><span class="text">Types</span></a>
      <a href="framework/apps/manifest" class="btn btn-white block"><span class="text">Manifest</span></a>
      <a href="framework/apps/loader" class="btn btn-white block"><span class="text">Loader</span></a>
    </div>
  </div>
  <div class="card border-stone-300">
    <div class="card-header bg-stone-50">Extendibles</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/extendibles" class="btn btn-white block"><span class="text">Introduction</span></a>
    </div>
  </div>
  <div class="card border-stone-300">
    <div class="card-header bg-stone-50">Testing</div>
    <div class="card-body flex flex-col gap-2">
      <a href="framework/testing" class="btn btn-white block"><span class="text">Introduction</span></a>
      <a href="framework/testing/writing-tests" class="btn btn-white block"><span class="text">Writing tests</span></a>
      <a href="framework/testing/running-tests" class="btn btn-white block"><span class="text">Running tests</span></a>
    </div>
  </div>
</div>
