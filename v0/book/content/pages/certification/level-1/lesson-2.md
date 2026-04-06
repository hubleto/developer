# Lesson 2: Overview of Hubleto features

<i class="fas fa-medal mr-2"></i> Developer Certification Level 1

## Introduction

In this lesson, you will get a comprehensive overview of Hubleto's built-in features and applications. Understanding the existing ecosystem is crucial before building custom apps. You'll learn about the core app categories, how to manage users and settings, the basics of the Hubleto User Interface, and how the App Manager controls the platform.

> You will learn about:
>
>   * Core app categories: CRM, Marketing, Sales, Productivity, Finance, Maintenance, and Help.
>   * Platform configuration: Managing Users, Settings, and customizing themes.
>   * UI basics: Navigating the sidebar, working with Data Grid tables, Record Forms, localization, and Global Search.
>   * App Manager: How Hubleto installs and manages community and custom apps.

## Hubleto Core Apps Overview

Hubleto is not just an empty framework; it is shipped with a rich set of built-in business applications, logically grouped into main categories within the navigation sidebar:

*   **CRM:** Core applications for managing business relationships, including Customers, Contacts, standard Calendar, and central Document storage.
*   **Marketing & Sales:** Manage outgoing communications through Campaigns and Leads. Convert leads into standard Deals, build product catalogs, and track Orders.
*   **Projects & Productivity:** Organize your workload with Tasks, Issue tracking, Worksheets (timesheets), and overall Project management.
*   **Supply Chain & Finance:** Oversee Inventory across multiple Warehouses, and manage billing through Invoices.
*   **Maintenance:** Tools to configure the platform, manage system notifications, and run background tasks.

As a developer, your custom apps will seamlessly integrate into these existing categories or exist in custom namespaces.

## UI Basics

Hubleto's frontend is built with React, providing a fast, single-page application feel with a standardized interface.

### The Sidebar
The main navigation is grouped logically. Administrators can also add custom links. Your custom apps will register here during the `Loader` initialization phase.

### Data Grids (Tables)
When you open an app (e.g., `Customers`), you usually see a **Data Grid**. 
*   **Inline Search:** Every column has a filter search field just below the header.
*   **Sorting:** Click any column header to toggle ascending/descending sorting.
*   **Actions:** Action buttons (Delete, Edit, or custom actions) are typically located on the far right of each row.

### Record Forms
Clicking on a record in a Data Grid opens the **Record Form**. This is a powerful, centralized view for a single entity.
*   **Tabs:** Forms display the main record data, but they also have Tabs to show related 1:N data (e.g., viewing a Customer will show Tabs for their specific Invoices or Contacts).
*   **Workflow Pipeline:** If an app uses stages (like Deals or Tasks), a visual pipeline appears at the top.
*   **Magic Wand (AI):** The bottom toolbar includes a Magic Wand icon that opens the Hubleto AI Assistant with the complete context of the opened record.

### Global Search & Localization
*   **Global Search:** Located at the top left, this omni-search bar allows you to search across the entire platform. Advanced users can use *App Selectors* (e.g., `>deals`) to scope the search.
*   **Localization & Themes:** Clicking your user avatar in the top right allows you to change the platform's language and toggle UI themes (Light/Dark mode).

## Platform Configuration & Users

In the **Maintenance > Settings** app, administrators can configure core platform behaviors.

*   **Users:** Manage who has access to the platform.
*   **Roles & Permissions:** Hubleto uses a robust Role-Based Access Control system. Each module can restrict Read, Write, Update, or Delete access.

## App Manager

Hubleto operates on a highly modular architecture. Everything is an App.
The **App Manager** (found in the Settings app) is the heart of this system. It displays all installed components across three tiers:
1.  **Community Apps:** Free, open-source apps provided by the core Hubleto team (like CRM or Calendar).
2.  **Enterprise Apps:** Paid or specialized modules.
3.  **Custom Apps:** Apps you build specifically for your Hubleto instance (like the `CarRental` app you will build in Lesson 3).

The App Manager allows administrators to install, upgrade, or uninstall these modules on the fly.

---

## Study material

| Resource                                                                                                                      | Description                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| [Features](../../features) | Overview of Hubleto's main features and capabilities. |
| [Apps](../../apps) | Details about the Hubleto App ecosystem (Community, Enterprise, and Custom). |
| [App Manager](../../advanced-development/core-architecture) | Understanding how Hubleto's core architecture manages apps. |
| [User Guide: Features Overview](https://help.hubleto.eu/v0/en/features-overview) | Detailed user documentation on Global Search, Data Grids, and Record Forms. |

## Videos

<iframe width="560" height="315" src="https://www.youtube.com/embed/TAAEUhiyyAE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

## Do you have any question?

Do you have any questions or comments? Leave us a message in the community portal.

<a class="btn" href="https://community.hubleto.eu/d/35-qa-developer-certification-level-1"><span class="text">Go to community.hubleto.eu</span></a>

If you are new here, learn more about [developer certification programme](../../certification).
