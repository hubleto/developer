# Translations

Hubleto is multilingual. Every text shown to the user must be translatable, whether it is in PHP, Twig or React. All three use the **same dictionaries** and the same idea of a *translation context*.

## Principles

  1. **Write texts in English in the code.** English is the source language and is never looked up in a dictionary.
  2. **Wrap every user-facing text** in a translate call: `$this->translate()` in PHP, `translate()` in Twig, `T.translate()` in React.
  3. **Translate whole sentences** and use variables for dynamic parts: `translate('You have no access to {{ '{{' }} appName {{ '}}' }}.', ['appName' => ...])`.
  4. **Don't build sentences from pieces.** Word order differs between languages.
  5. **Let the context do its job.** The same English word can have different translations in different contexts (models, controllers, components).

## Dictionaries

Dictionaries are JSON files, one per language and per *context* (usually one per app):

###### Location of dictionaries in hubleto/erp

```
lang/
├─ sk/
│  ├─ hubleto-app-community-contacts-loader.json
│  ├─ hubleto-app-community-deals-loader.json
│  └─ ...
├─ cs/
├─ de/
├─ es/
├─ fr/
├─ pl/
└─ ro/
```

Each file is organized by the *inner context* (the part of the app the text comes from):

###### lang/sk/hubleto-app-community-contacts-loader.json (part)

```json
{
  "manifest": {
    "Contacts": "Kontakty",
    "Default customer management and addressbook.": "Adresár a manažment zákazníkov.",
    "Contact Categories": "Kategórie kontaktov"
  },
  "Models\\Value": {
    "Contact Category": "Kategória",
    "Type": "Typ"
  },
  "Components\\TablePersons": {
    "Start typing to search...": "Hľadať..."
  }
}
```

| Part of the translation context | Example                                       | Comes from                                  |
| ------------------------------- | --------------------------------------------- | ------------------------------------------- |
| context (file name)             | `hubleto-app-community-contacts-loader`       | the app's `Loader` class name, lower case with dashes |
| inner context (JSON key)        | `manifest`, `Models\Contact`, `Controllers\Contacts`, `Components\FormContact`, `Calendar` | the class or component that translates |
Translation context.

## How a text is looked up

  1. Get the user's language. If it is `en`, return the original text.
  2. Load the dictionary file for the context (`lang/<language>/<context>.json`).
  3. Find `dictionary[context][innerContext][text]`.
  4. If found, use it. Otherwise use the original text.
  5. Replace variables `{{ '{{' }} name {{ '}}' }}` with their values.

## Finding missing translations

Set `debugTranslations` to `true` in the configuration. Then:

  * PHP adds missing texts with an empty translation to the dictionary files of all languages,
  * missing texts are shown as `t(context:inner; text)`, and empty translations as `** text **`,
  * React shows untranslated texts as `**text**` and reports them to the backend (`api/dictionary`).

## Pages in this chapter

| Page                                                                                 | Summary                                                            |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------ |
| [Translating React components](translations/react-components)                        | `const T = new Translator(...)` and `T.translate()`.               |
| [Translating PHP classes](translations/php-classes)                                  | `$this->translate()` in loaders, models, controllers, and Twig.    |
Pages in the Translations chapter.

## One text, three places

The Deals app translates *"Deal"* in all three layers. Each uses the Deals dictionary (`hubleto-app-community-deals-loader.json`) with a different inner context:

```php
// PHP model (inner context: Models\Deal)
'title' => (new Varchar($this, $this->translate('Title'))),
```

```twig
{{ '{#' }} Twig view (inner context: Controllers\DealsArchive) {{ '#}' }}
<h1 class="app-main-title">{{ '{{' }} translate('Archived deals') {{ '}}' }}</h1>
```

```tsx
// React component (inner context: Components\FormDeal)
const T = new Translator('Hubleto/App/Community/Deals/Loader', 'Components/FormDeal');
title={{ '{{' }}fields: ['identifier', 'title'], sub: T.translate('Deal'){{ '}}' }}
```
