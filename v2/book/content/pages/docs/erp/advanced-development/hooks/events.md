# Automation hook events

Below is the list of events available for automation hooks.

| Event                         | Arguments                                                           | When it is triggered                                             |
| ----------------------------- | ------------------------------------------------------------------- | ---------------------------------------------------------------- |
| core:permissions-initialized  | Hubleto's main object.                                              | When the permissions have been initialized.                      |
| core:apps-initialized         | Hubleto's main object.                                              | When the apps have been initialized.                             |
| controller:init-start         | Reference to the controller.                                        | When the `init()` method of each controller has started.         |
| controller:prepare-view-start | Reference to the controller.                                        | When the `prepareView()` method of each controller has started.  |
| controller:prepare-view-start | Reference to the controller.                                        | When the `prepareView()` method of each controller has finished. |
| api:render-json               | Reference to the API controller                                     | When the API response has been created.                          |
| router:added-route            | Reference to the router                                             | When a route has been added to the router.                       |
| model:record-updated          | Reference to the model, original record data and saved record data. | When a record has been updated.                                  |

To find the implementation of the hook in the source code, search the `runHook()` method.