# Calendar

namespace HubletoApp\Community\Calendar

## Introduction

The Calendar app allows you to create new calendars inside various apps allowing you to show all the activities together in one main calendar of the Calendar app. You can do so by utilizing the Calendar Manager that comes with the Calendar app. The activities are still divided between separate Activity models, so the entries for the activities won't mix. This will also allow you to see specific activities, for example to see activities of a specific customer inside a Customer form.

The Calendar app by itself creates a single View that shows a Calendar component, where all the activities from the different calendars are loaded into.

## Creating a calendar

There are few steps you need to take to successfully create a calendar:

- create an Activity model and Eloquent class for the app and a relation between the models
- create a Calendar class
- register the new Calendar class for the Calendar Manager
- create an API to get the Activity data
- create a Form component for the new Activity model
- insert the the Calendar component inside a Form Component

### Create an Activity model and Eloquent class

The new Activity model needs to have at least the lookup column for the model the Activity model was created for. Other then this, you also need to create the relation for the lookup column in both the Activity model and the Eloquent class and the lookup model and lookup eloquent class.

Check out the examples in the Deal app.

- [Deal model](https://github.com/hubleto/main/blob/main/apps/community/Deals/Models/Deal.php) and [Eloquent class](https://github.com/hubleto/main/blob/main/apps/community/Deals/Models/RecordManagers/Deal.php)
- [DealActivity model](https://github.com/hubleto/main/blob/main/apps/community/Deals/Models/DealActivity.php) and [Eloquent class](https://github.com/hubleto/main/blob/main/apps/community/Deals/Models/RecordManagers/DealActivity.php)

> Don't forget to install the model

### Create a Calendar class

You have to create a new Calendar class file inside the your App's folder. This is the base file:

###### .\apps\external\MyApp\Calendar.php

```php
<?php

namespace HubletoApp\External\MyApp;

class Calendar extends \HubletoMain\Core\Calendar {

  public function loadEvents(): array {
    $event = []

    return $events;
  }
}
```

This is where you create your custom logic to retrieve the activities from the newly created Activity model. You have to set up a way to retrieve all the activities and the activities for a specific entry, for example a specific Customer.

Bare in mind that this class will always receive two parameters:

- `start` - a start timestamp to search from
- `end` - a end timestamp to search to

You can always add more parameters to the class, check the next chapters on how. For the Community apps we pass a lookup ID as the parameter to search for the activities of a specific entry of a model.

From this method you need to return an array of data structured for the FullCalendar library. Each found activity needs to be saved as a key-pair entry. For example:

###### .\apps\external\MyApp\Calendar.php

```php
[
  0 => [
    "title" => "Meeting",
    "start" => "01-01-1999 16:00:00",
  ],
  1 => [
    "title" => "Call",
    "start" => "05-11-1999 16:00:00",
  ]
]
```

Other key-pairs can be found in the FullCalendar library documentation.

## Register the calendar

In the Loader class of your app in the `init()` method you need to register your calendar with the Calendar Manager. This will then allow the main Calendar component to retrieve the data of your newly created Calendar class.

###### .\apps\external\MyApp\Loader.php

```php
/** @var \HubletoApp\Community\Calendar\Manager $calendarManager */
$calendarManager = $this->main->load(\HubletoApp\Community\Calendar\Manager::class);
$calendarManager->addCalendar($this, Calendar::class);
```

## Create an API for events

Create a new API in the `Controller\Api` folder of your app. This will retrieve the data of your calendar.

###### .\apps\external\MyApp\Controllers\Api\GetCalendarEvents.php

```php
<?php

namespace HubletoApp\External\MyApp\Controllers\Api;

class GetCalendarEvents extends \HubletoMain\Core\Controller {

  public function renderJson(): array
  {
    return (array) $this->main
      ->calendarManager->getCalendar(\HubletoApp\External\MyApp\Calendar::class)
      ->loadEvents()
    ;
  }
}
```

You also need to create a new route in the router of the `init()` method.

###### .\apps\external\MyApp\Loader.php

```php
$this->main->router->httpGet([
  '/^my-app\/get-calendar-events\/?$/' => Controllers\Api\GetCalendarEvents::class,
]);
```

## Create a Form component for the Activity model

Follow the standard Form creation in [Form component](./../../advanced-development/customizing-ui/forms.md) documentation.

## Add Calendar component to a Form Component

You can add a Calendar component to any Form component in Hubleto by importing the `Calendar/Components/Calendar` component.
For the Calendar component you need to specify a number of props:

- `eventsEndpoint` - the endpoint the Calendar component should retrieve the data from
- `onDateClick` - a callback after clicking on a date cell
- `onEventClick` - a callback after clicking on an activity

Optional props you can specify:

- `onCreateCallback` - a callback after the creation of an activity
- `views` - different views of a calendar (monthly, weekly, ect.) specified by the FullCalendar library (default: day, week and month view)
- `readonly` - sets the activities as readonly and disables/enables the creation of new activities

As we mentioned in the previous chapters you can add more parameters to the event retrieval API. You can do so by adding a parameter to the end of the `eventsEndpoint` URL.

For the example below, we filled all the props:

###### .\apps\external\MyApp\Components\FormMyApp.tsx

```tsx
<Calendar
  readonly={false}
  views={"timeGridDay,timeGridWeek,dayGridMonth,listYear"}
  eventsEndpoint={globalThis.main.config.rewriteBase +"my-app/get-calendar-events?idCustomer=" +R.id}
  onCreateCallback={}
  onDateClick={(date, time, info) => {}}
  onEventClick={(info) => {}}
></Calendar>
```

`onDateClick` and `onEventClick` is primarily used to open an Activity form that you created for either a new entry or to open an existing entry.

`onDateClick` passes the **date** and the **time** for the date cell that was clicked. This can be, for example, used to pre-set the date or time values in the Activity form for a new entry.

`onEventClick` is used to retrieve the information of an activity to open an Activity form of an existing entry. An of an entry ID can be received by accessing `info.event.id`.

After creating an Activity form, opening a form can be done by managing a state after clicking on either an event or a date cell. Don't forget to use a negative value of the ID for the new entry.