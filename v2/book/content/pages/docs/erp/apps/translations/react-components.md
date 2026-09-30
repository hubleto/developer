# Translating React components using const T = Translator and T.translate

## The pattern

Every functional component in the community apps creates one `Translator` object at the top of the file and names it `T`:

###### apps/Deals/Components/FC/FormDeal.tsx

```tsx
import Translator from '@hubleto/react-ui/core/Translator';

const componentName = 'FormDeal'; // must be the same as the exported const
const parentApp = 'Hubleto/App/Community/Deals';
const T = new Translator(parentApp + '/Loader', 'Components/' + componentName);
```

Then every text in the component goes through `T.translate()`:

###### apps/Deals/Components/FC/FormDeal.tsx (parts)

```tsx
<Input title={T.translate("Lead")}>
  ...
</Input>

<span className='text'>{T.translate('Select parent lead')}</span>

<span className='text'>{T.translate('Price is calculated from items.')}</span>

tabs={{ '{{' }}
  default: {title: <b>{T.translate('Deal')}</b>, content: () => <TabDefault {...props} />},
  items: {title: T.translate('Items'), content: () => <TabItems {...props} />},
  documents: {title: T.translate('Documents'), content: () => <TabDocuments {...props} />},
{{ '}}' }}
```

## The Translator class

###### @hubleto/react-ui/core/Translator.tsx

```tsx
export default class Translator {
  context: string;
  contextInner: string;

  constructor(context: string, contextInner: string) {
    this.context = context;
    this.contextInner = contextInner;
  }

  translate(orig: string, context?: string, contextInner?: string, vars?: any): string {
    context = (context ?? this.context).replaceAll('/', '\\');
    contextInner = (contextInner ?? this.contextInner).replaceAll('/', '\\');

    try {
      return globalThis.hubleto.translate(orig, context, contextInner, vars);
    } catch (e) {
      return orig;
    }
  };
}
```

| Constructor argument | Value                                           | Resolves to                                               |
| -------------------- | ----------------------------------------------- | --------------------------------------------------------- |
| `context`            | `parentApp + '/Loader'`                         | `hubleto-app-community-deals-loader` (the dictionary file) |
| `contextInner`       | `'Components/' + componentName`                 | `Components\FormDeal` (the key in the dictionary)          |
Translator arguments.

`globalThis.hubleto.translate()` converts the context to lower case with dashes, looks up the text in the dictionary and replaces the variables. The dictionary for the user's language is embedded in the desktop page by the `Desktop` controller, so **no extra request** is needed.

## Signature of translate()

```tsx
T.translate(orig: string, context?: string, contextInner?: string, vars?: any): string
```

| Argument       | Description                                                      |
| -------------- | ---------------------------------------------------------------- |
| `orig`         | English text.                                                    |
| `context`      | Optional. Overrides the context of the translator.               |
| `contextInner` | Optional. Overrides the inner context.                           |
| `vars`         | Optional. Values for `{{ '{{' }} name {{ '}}' }}` placeholders.                  |
Arguments of `translate()`.

## Examples

### Simple text

```tsx
<button className='btn btn-small btn-transparent' onClick={() => setShowMiddleNameInput(true)}>
  <span className='text'>{T.translate('Add middle name')}</span>
</button>
```

### Text with a variable

```tsx
const message = T.translate('{{ '{{' }} count {{ '}}' }} deals without future plan', undefined, undefined, { count: dealsCount });
```

### Text in another app's context

The Deals app adds a tab to the lead form. The tab title reuses the translation of the Deals app name from its manifest:

###### apps/Deals/Loader.tsx

```tsx
title: globalThis.hubleto.translate('Deals', 'Hubleto\\App\\Community\\Deals\\Loader', 'manifest'),
```

### Titles and labels passed as props

Translate before you pass the text. Components don't translate their props:

```tsx
<Divider>{T.translate('Contacts')}</Divider>

<Form
  title={{ '{{' }}fields: ['first_name', 'middle_name', 'last_name'], sub: T.translate('Contact'){{ '}}' }}
  ...
/>
```

## What you don't have to translate in React

Labels of inputs and column headers come from the model's `describeColumns()`, already translated by PHP (`$this->translate('First name')`). So `<Input field='first_name' />` shows a translated label without any code in React.

## Rules

  * Create **one** `T` per file, at module level, not inside the component function.
  * Keep `componentName` equal to the name of the exported component. The inner context and `FormCustomizer` depend on it.
  * Use `parentApp + '/Loader'` as the context, so the component's texts go to the app's dictionary.
  * Don't concatenate translated pieces (`T.translate('Created') + ' ' + T.translate('by')`). Translate the whole sentence with variables.

## Legacy class components

Class components (`components/cc/...`) set `translationContext` and `translationContextInner` properties and call `this.translate()`:

###### Class component generated by php hubleto create mvc

```tsx
export default class FormBook<P, S> extends FormExtended<FormBookProps, FormBookState> {
  translationContext: string = 'Hubleto\\App\\Custom\\MyFirstApp';
  translationContextInner: string = 'Components\\FormBook';

  renderTitle(): React.JSX.Element {
    return <small>{this.translate('Book')}</small>;
  }
}
```
