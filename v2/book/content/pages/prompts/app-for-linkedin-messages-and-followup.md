# App for Linkedin messages and followups

Before using this prompt, use [App creation constraints](./app-creation-constraints) prompt first.

```
App name: Linkedin messages and followups
App main goal: To simplify and automate marketing activities on Linkedin. To have a clear view of who and how to contact on linkedin.
What app shall do:
  * Connects to Linkedin using OAuth
  * Displays the profile information about the Linkedin user/account to which the app is connected to.
  * Reads all messages and stores them in its own database.
  * Reads profile information about all message senders (linkedin user) and stores them in its own database.
  * Each message can be tagged with custom managed tags, similar to tagging of customers or contacts.
  * Contains a model for managing campaigns. Each campaign should have varchar name and textarea columns for target and goal.
  * Each campaign must be integrated with workflows using id_workflow and id_workflow_step.
  * instalApp must contain sample workflow with sample steps.
  * Each message can be linked with a campaign using a lookup column.
  * Provides table view and form for browsing the messages.
  * Shows sidebar badge with the number of unread messages.
  * Integrates with calendar - each message can have a followup activity planned. The principle is the same as apps like Leads, Deals or Orders integrate with the Calendar.
  * Must provide a feature to respond to each message. The respond is send to the linkedin sender.
  * After responding, the user shall be prompted or notified to add a followup activity.
What app shall not do:
  * There are no constraints about what the app shall not do.
```