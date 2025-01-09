# Hubleto

Developer's guide

## Introduction

Hubleto is an open source PHP-based platform focusing on ERP and CRM, a.k.a business applications. It does not matter if your if you're developing a CRM or an ERP, it is always only about the set of applications that your project will be using.

You can:

  1. Freely use existing Hubleto apps (see https://github.com/wai-blue/hubleto/tree/main/apps) without any responsibility to contribute to the project. See [download and installation guide](download-and-install).
  2. Create your apps withtout contributing to the project. See this guide [how to create first app](create-first-app).
  3. Become a contributor.
  4. Become a local implementation partner.

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
