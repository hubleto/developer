# Hubleto app folder structure

Folder structure of the Hubleto app is simple and follows the MVC principle.

###### Hubleto folder structure
```
MyApp/
├─ Components/
│  └─ FormContact.tsx
│  └─ TableContacts.tsx
├─ Controllers/
│  └─ Home.php
├─ Models/
│  ├─ RecordManagers
│  │  └─ Contact.php
│  └─ Contact.php
├─ Views/
│  └─ Home.twig
├─ Loader.php
├─ Loader.tsx
└─ manifest.yaml
```

As you can see, there are folders for *models*, *views*, *controllers* and there are also loader scripts, both for PHP (backend) and React (frontend) side.
