# HR Community Apps

Following set of prompts was used to generate first version of all HR* community apps.

## Prompt 1

```
Read https://developer.hubleto.eu/v2
Read `src/apps` folder and learn how models, record managers, views, controllers and app loader are created.
Research functionality implemented in modern human resources management CRM systems.
Do not duplicate models and controllers in existing apps in `src/apps` folder, but o the best to integrate these features to new apps. For example, integrate calendar.
Create apps that cover human resources functionality.
All new apps names must start with `Hr`.
```

## Prompt 2

```
add first migrations to all models in hr* apps
```

## Prompt 3

```
add describeTable() and describeForm() to each model in hr* apps
```

## Prompt 4

```
create Form tsx component for each model in hr* apps
```

## Prompt 5

```
add renderSecondSidebar() into Loader of each hr* app
```

## Prompt 6

```
remove "app-main-title" and "nav" from all views in hr* apps
```

## Prompt 7

```
remove description ui title from all describeTable() in all hr* apps
```

## Prompt 8

```
Research what sidebar badge numbers are reasonable and add Counter class service and getSidebarBadgeNumber() to all hr* apps.
```

## Prompt 9

```
Read `src/apps` to learn how integration with `Workflows` app works.
A model needs to have `id_workflow` and `id_workflow_step` columns.
A workflow must be integrated using `$workflowManager->addWorkflowGroup` in app's Loader.
Create workflow groups and integrate models with workflow where appropriate in all hr* apps.
Update Models and RecordManagers. Create second Migration for each model.
```

## Prompt 10

```
modify Workflow Loader installApp() and include recordCreate for all workflows and steps in all hr* apps
```

## Prompt 11

```
create generateDemoData() in Loader classes of all hr* apps with relevant demo data for each app
```

## Prompt 12

```
add all hr* apps into CommandInit packages into group 'human-resources'
```

## Prompt 13

```
add more generateDemoData() in Loader classes of all hr* apps with relevant demo data for each app
```

## Prompt 14

```
In HrEmployees app convert `Employment status`, `Employment type` and `Work location` to Lookup columns.
Add for each new Lookup column: Model, RecordManager, Migration.
Include each new column in Loader installApp().
Modify generateDemoData() to include each new column.
Add Table and Form tsx components for each new model.
Add buttons in renderSecondSidebar() for each new Model.
```

## Prompt 15

```
In HrRecruitment JobOpenings convert `Opened`, `Employment type` and `Work location` to Lookup columns.
In HrRecruitment Applications remove `Stage` and `Status`.
In HrLeave Requests remove `Status`.
In HrAttendance Records remove `Status`.
Add for each new Lookup column: Model, RecordManager, Migration.
Include each new column in Loader installApp().
Modify generateDemoData() to include each new column.
Add Table and Form tsx components for each new model.
Add buttons in renderSecondSidebar() for each new Model.
```
