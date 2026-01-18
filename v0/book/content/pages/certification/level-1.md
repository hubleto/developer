# Level 1

Become a certified Hubleto developer.

The first level of certification ensures that the certified developer knows basics about Hubleto
development process, its architecture, built-in functionality and most commonly used software
design patterns like, e.g. routing, controllers or views.

> You will learn how to:
> 
>   * prepare the development environment
>   * deploy Hubleto to customer's server
>   * create custom apps
>   * define models, views and controllers
>   * install custom app with default data

## Introduction

This document contains a training material for Hubleto Certified Developer training. It is a source of questions and answers for the certification programme.

To get a Level 1 certification, you shall pass the certification programme. Here you will find training materials and resources pass this programme.

## Prerequisities

You shall have the following knowledge:

  * At least junior level of PHP, Javascript, SQL, HTML and CSS.
  * Optionally, junior level of React / Typescript \- this is required only if a developer is going to implement react-based functionality.
  * Experience with `composer` \- PHP’s package manager and `npm` \- Javascript’s package manager.
  * Experience with setting up a local development environment \- a webserver (Apache or Nginx) with PHP and SQL database (MariaDB or MySQL).
  * Good understanding of the MVC software design pattern.

Having this knowledge, a developer shall be able to configure his local development environment as described in [this guide](../getting-started).

## Resources

Before starting, check out these additional resources:

* [https://www.hubleto.com](https://www.hubleto.com)  
* [https://github.com/hubleto](https://github.com/hubleto)  
* [https://developer.hubleto.com](https://developer.hubleto.com)  
* [https://help.hubleto.com](https://help.hubleto.com)  
* [https://community.hubleto.com](https://community.hubleto.com)  
* [https://www.linkedin.com/company/hubleto](https://www.linkedin.com/company/hubleto)  
* [https://www.reddit.com/r/hubleto/](https://www.reddit.com/r/hubleto/)
* [https://github.com/mrgopes/hubleto-car-rental](https://github.com/mrgopes/hubleto-car-rental)

> **Webinar**
> 
> Watch this webinar to get the Hubleto vibe.
> <iframe width="373" height="210" src="https://www.youtube.com/embed/9agAiqGtqmI?> si=7R88l7M2eTpfIhcE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
> Presentations from the webinar: [Introduction to Hubleto.pdf](../downloads/webinar-introduction-to-hubleto/Introduction%20to%20Hubleto.pdf), [How to setup dev env.pdf](../downloads/webinar-introduction-to-hubleto/How%20to%20setup%20dev%20env.pdf), [Overview of Hubleto apps.pdf](../downloads/webinar-introduction-to-hubleto/Overview%20of%20Hubleto%20apps.pdf).

## Lessons

Take following lessons to learn step-by-step topics covered by the Level 1 certification.

| Lesson                   | &nbsp;                                           |
| ------------------------ | ------------------------------------------------ |
| About Hubleto            | [Start lesson](level-1/about-hubleto)            |
| Starting the development | [Start lesson](level-1/starting-the-development) |
| Hubleto Core             | [Start lesson](level-1/hubleto-core)             |
| Hubleto Apps             | [Start lesson](level-1/hubleto-apps)             |
| Recapitulation           | [Start lesson](level-1/recapitulation)           |

## Webinars

We occassionally organize free webinars explaining Level 1 certification topics in a more detail and with practical examples. Webinars are divided into 9 sessions as describedn below. Follow our social media (website, LinkedIn, Reddit, ...) to get the actual webinars schedule.

**Webinar #1: Introduction to Hubleto	"- What is Hubleto**
  - Install production ready Hubleto using Composer.
  - Overivew of community apps.

**Webinar #2: Custom App Development - backend basics	"- Create custom CarRental app**
  - Overview of Model and RecordManager concepts.
  - Create models (Car, RentalHistory) and their RecordManagers.
  - Overview of 1:N relations.

**Webinar #3 Custom App Development - frontend basics**
  - Overview of previous developments in custom CarRental app.
  - Overview of DescriptionAPI with practical example (describeTable).
  - Create controllers and views (Cars, RentalHistories).
  - Use built-in React UI components (<app-table>) in views.

**Webinar #4: Custom App Development - fully functional CarRental app**
  - Overview of previous developments in custom CarRental app.
  - Recapitulation of backend programming.
  - Recapitulation of frontend programming.
  - Feedback from developers.

**Webinar #5: ReactUi basics**
  - Overview of ReactUi library.
  - Using ReactUi in Twig.
  - Most commonlty used properties of <app-table>.
  - Customizing table and form look&feel using DescriptionAPI.

**Webinar #6: Models and their RecordManagers**
  - Overview of Model and RecordManager concepts.
  - Definition of relations.
  - Built-in record-manipulation API (record/save, record/delete, ...).
  - Practical examples for belongsTo and hasMany relations.
  - Customizing prepareReadQuery().

**Webinar #7: Description API**
  - Overview of Description API, it's purpose and basic principles.
  - Configuration options for tables (describeTable).
  - Configuration options for forms (describeForm).
  - Configuration options for inputs (describeInput).

**Webinar #8: Callbacks in models**
  - Overview of available callbacks.
  - Practical example with CarRental app.

**Webinar #9: Finalilzation of Level 1 certification**
  - What we have learned?
  - Feedback from developers.
  - How to get the Level 1 certificate.