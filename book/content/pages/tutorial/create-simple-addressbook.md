# Create simple addressbook

We'll create a simple addressbook.

In the previous tutorials we created Hubleto application named `MyApp` containing:

  * one route in the router
  * one controller activated by this route
  * one view set by the controller

Now we'll learn how to **create models, database relations and how to create CRUD-like user interface just in few lines of HTML code**.

Once done, your app will contain a simple addressbook for managing contacts and users responsible for these contact. It will look like this:

<img src="{{ bookRootUrl }}/content/assets/images/my-app-contacts.png">

This table and form were rendered just by creating this simple view:

```html
<app-table string:model="HubletoApp/External/MyCompany/MyApp/Models/Contact"></app-table>
```

Only a single line of HTML code and you get full-featured tables and forms to manage your data.

Cool, isn't it?

## Add model for contacts

So, let's start learning. Go to the next tutorial and [learn how to create a model for contacts](add-model-for-contacts).