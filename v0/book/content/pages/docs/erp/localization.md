# Localization

About how localization in Hubleto works.

## Language packs

Language packs are located in the `lang` folder of the public `hubleto/erp` package: https://github.com/hubleto/erp/tree/main/lang.

Each subfolder contains a language pack.

## Structure of the language packs

The structure of the language packs is fairly easy. Each pack contains a set of `.json` files with the following structure:

```json
{
    "manifest": {
        "Calendar": "Kalendár",
        "Free calendar app.": "Bezplatný kalendár.",
        "Reminders": "Pripomienky",
        "Share": "Zdieľať"
    },
    "Controllers\\Calendar": {
        "Calendar": "Kalendár"
    },
    "Models\\Activity": {
        "Subject": "Predmet",
        "Activity type": "Typ",
        "Start date": "Začiatok",
        "Start time": "Čas začiatku",
        "End date": "Koniec",
        "End time": "Čas konca",
        "All day": "Celodenná",
        "Completed": "Ukončená",
        "Created by": "Vytvoril",
        "Meeting minutes (link)": "Zápisnica zo stretnutia (odkaz)",
        "Location": "",
        "Online meeting link": "",
        "Description": "",
        "Recurrence": "",
        "Long meeting minutes (link to external document)": "",
        "Short meeting minutes": ""
    }
}
```
###### Example of a language pack JSON file

The structure has two levels. The first level is called **context** and the second level is a **list of expressions**. Then, each expression has an english version and then a translated version. There is always a context called **manifest**.

The *context* groups the expressions based on where these expressions are used. For example the `Models\\Activity` context contains several expressions used when listing calendar activities or editing an activity.

## How to modify language packs

Recommended way to modify the language pack is following:

  * create a fork of the `hubleto/erp` repository
  * modify language JSON files
  * make a **pull request**

And, that's it. After the pull request will be merged, your language packs will become activated.