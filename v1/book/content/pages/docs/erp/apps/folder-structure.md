# Folder structure

An app is a package or bundle located in a single folder. All parts of an app are inside the folders which makes reusing of apps easy.

See below example folder structure of a Hubleto app

###### Example of folder structure of a Hubleto app

```
MyApp/
├─ Components/               # App's react UI components
│  └─ FormContact.tsx
│  └─ TableContacts.tsx
├─ Controllers/              # App's controllers
│  └─ Home.php
├─ Models/                   # App's models and their record managers
│  ├─ RecordManagers
│  │  └─ Contact.php
│  └─ Contact.php
├─ Integrations/             # App's integrations
│  ├─ AppMenu.php
│  ├─ ProductTypes.php
│  └─ Settings.php
├─ Views/                    # App's views
│  └─ Home.twig
├─ Tests/                    # App's tests (PHPUnit)
│  └─ BasicTest.php
├─ Loader.php                # Loader class for the backend
├─ Loader.tsx                # Loaded class for the frontend
└─ manifest.yaml             # App's manifest
```