# Hubleto

Developer's guide

## Introduction

Hubleto is an open source PHP-based platform focusing on ERP and CRM, a.k.a business applications. It does not matter if your you're developing a CRM or an ERP, it is always only about the set of applications that your project will be using.

You can:

  1. Freely use existing Hubleto apps (see https://github.com/wai-blue/hubleto/tree/main/apps) without any responsibility to contribute to the project. See [download and installation guide](download-and-install).
  2. Create your apps withtout contributing to the project. See this guide [how to create first app](create-first-app).
  3. Become a contributor.
  4. Become a local implementation partner.

## Why Hubleto

Hubleto provides stable and steadily improved platform with ecosystem to develop, publish and use bussiness applications. See the summary below showing what each interested party gets from Hubleto.

| Developer                                                                     | Local Partner                             | Customer                        |
| ----------------------------------------------------------------------------- | ----------------------------------------- | ------------------------------- |
| DevOps with preinstalled **Node**, **React** and **Tailwind CSS**             | Ready-to-use CRM or ERP                   | Ready-to-use CRM or ERP         |
| Consistent UI design based on [Primereact](https://ww.primereact.org)         | New potential customers                   | Custom solutions                |
| Secure database layer with [Eloquent](https://laravel.com/docs/11.x/eloquent) | Opportunities for consultancy services    | Community of users              |
| Rich set of [default features](default-features)                              | Opportunities for implementation services | Proven and stable solutions     |
| Platform to publish your apps                                                 | Continuous development                    | 24/7 support                    |
| Community support and comprehensive dev guide                                 | Platform to publish your apps             | Large network of local partners |

Summary showing what you get from Hubleto

## Getting started

Follow these simple steps to download Hubleto and setup your local environment.

```
# Clone repo
git clone https://github.com/wai-blue/hubleto.git

# CD into the project's folder
cd hubleto

# Install PHP and JS dependencies
composer install
npm install

# Build everything together
npm run build

# Initialize project
php hubleto init
```
