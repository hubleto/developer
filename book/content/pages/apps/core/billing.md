# App Billing

namespace HubletoApp\Billing

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus, orci sit amet dictum aliquet, nisl nulla condimentum est, congue venenatis leo velit ut massa. Vivamus vitae risus sapien. Maecenas metus quam, mattis vel sapien vel, vulputate tempor ante. Praesent elementum laoreet luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam nisl mi, venenatis at dui at, gravida commodo magna.

## Models

| Model                                                                                             |
| ------------------------------------------------------------------------------------------------- |
| [Models/BillingAccount](billing/models/billing-account)                |
| [Models/BillingAccountService](billing/models/billing-account-service) |

## Routes, Controllers & Views

| Route regular expression | Default Controller & View                                                                                                    | Description                           |
| ------------------------ | ---------------------------------------------------------------------------------------------------------------------------- | ------------------------------------- |
| ^billing$                | [Controllers/BillingAccounts](billing/controllers/billing-accounts)<br/>[Views/BillingAccounts](billing/views/billing-accounts) | Displays the list of billing accounts |

*Read more about [customizing routes](../../routing)*

## Components (React)

| Component                                                                    |
| ---------------------------------------------------------------------------- |
| [TableBillingAccountServices.tsx](components/table-billing-account-services) |

*Read more about [development of custom UI components](../../custom-ui-components)*

## Settings

| Path            | Data type | Default value | Description                |
| --------------- | --------- | ------------- | -------------------------- |
| DefaultCurrency | char      | EUR           | `??? where it is used ???` |

## Permissions

| Permission                                    | Sales manager | Accountant |
| --------------------------------------------- | :-----------: | :--------: |
| Modules/Core/Documents/Models/Document:Create |       x       |            |
| Modules/Core/Documents/Models/Document:Read   |       x       |            |
| Modules/Core/Documents/Models/Document:Update |       x       |            |
| Modules/Core/Documents/Models/Document:Delete |       x       |            |
| Modules/Core/Documents/Controllers/Document   |       x       |            |

*Read more about [permission management](../../permissions)*
