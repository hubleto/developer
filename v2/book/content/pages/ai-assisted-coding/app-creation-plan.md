# Prompt for app creation constraints

Below you will find sample prompt to develop a plan to create an app.

When creating Hubleto app with AI support, it is always good to split this process at least into these steps:

  1. Create the development plan. The output can be a markdown file specifying how the app will be created. The plan also should contain decissions, risks, constraints, data structure, arithmetic and other details of app creation.
  2. Review the plan and re-iterate step 1 with more specific instructions.
  3. Once you are satisfied with the plan, use [this prompt](app-creation-constraints) to generate the app's code.

```
Act as a software architect and project manager.

Create plan to generate a code for Hubleto app.

Output the plan in a markdown format.

Read carefully constraints in https://developer.hubleto.eu/v2/ai-assisted-coding/app-creation-constraints.

Study carefully https://github.com/hubleto/erp/tree/main/apps codebase.

Plan shall contain at least following:

  * overall introduction with description of the new app's functionality
  * general decissions taken by you
  * risks and their mitigations
  * facts that shape the whole design
  * analysis of functionality implemented in community version
  * integration of the new app with community apps
  * data structure (models, record managers and migrations) for the new app
  * services exposed by the new app
  * routes (e.g. CRUD and API), controllers, views and React components in the new app
  * outline of the Loader class
  * event listeners, if applicable
  * demo data
  * file and folder structure of the new app
  * suggested patches to community version of Hubleto
  * implemntation plan

The specification of the new app will follow in the next prompt.
```

> Note: When you paste this prompt into AI model, it will most probably ask you to provide the specification of your new app.