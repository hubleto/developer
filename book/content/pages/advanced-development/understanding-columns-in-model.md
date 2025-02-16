# Understanding columns in model

Concept of columns in model is very important. This guide explains why.

> **This page is under development. Visit us later.**




With this setup, you will create a model with:

  * two *varchar* columns
  * no relations

We have used following properties and methods:

| Property or Method | Description                                                                                                                           |
| ------------------ | ------------------------------------------------------------------------------------------------------------------------------------- |
| **string $table**  | Name of the table in SQL database.                                                                                                    |
| **$eloquentClass** | Reference to the class representing the *Eloquent* object                                                                             |
| **columns()**      | Definition of *columns* (a.k.a attributes) of the model, including data-related information (e.g. *varchar*) and UI-related information (e.g., *title*). |

Table: Properties and methods used in the example.

### Definition of columns

At this moment, we have to slow down a bit. Definition of *columns* in Hubleto model is crucial part of development of models. This is because many other functionalities, including rendering of some core UI components like [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx), [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) or [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx) heavily use definition of *columns* in the model.

Columns are defined using the `columns()` method. In the example above, whe defined two columns: *first_name* and *last_name*. Both columns have their `type` which is the most important attribute of the columns. The *type* determines:

  * what will be the SQL data type of the column;
  * how the column will be displayed in a [Table](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx) or [Form](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) components;
  * how the [Input](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx) for the column will look like.

For the list of default types of columns, check the `Columns` folder in `Adios` framework: https://github.com/wai-blue/adios/tree/main/src/Core/Db/Columns.

Each column then can have various additional attributes. Some examples are listed below. For the full list of available attributes see [documentation of Adios framework](https://github.com/wai-blue/adios/tree/main/docs/pages).

| Attribute             | Applies to     | Description                                                            |
| --------------------- | -------------- | ---------------------------------------------------------------------- |
| string **$title**     | All data types | Used in table header and form inputs                                   |
| boolean **$required** | All data types | Whether the column is required to have any value when saving the form. |
| boolean **$show**     | All data types | Whether to show the column in tables and forms.                        |
| array **$enumValues** | varchar, int   | If provided, the input will be renderd as a `select`.                  |
| string **$model**     | lookup         | Reference to a related model (its class) in an 1:N relation.           |
| boolean **$readonly** | All data types | Whethe the input for the column should render as readonly.             |

Table: List of most commonly used attributes of columns.

### Render table with form

Now, having the columns defined, we want to create a UI with a table to manage data in this model. For this, we will use pre-built data-grid component from Adios framework: [Table.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Table.tsx). This component then automatically uses other components to render forms and inputs: [Form.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Form.tsx) and [Input.tsx](https://github.com/wai-blue/adios/blob/main/src/Components/Input.tsx).

To render the table, you need to:

  * add routing
  * create controller and view
  * install SQL
  * add a button to publish your new addressbook
