# CalendarSync

namespace Hubleto\App\Community\CalendarSync

**Currently supported sources of calendars:**
- Google Calendar
- ICS file URL
- Additions are more than welcome!

## Usage

After installing CalendarSync, it will not be added to the sidebar. Instead, you will find it in the settings. Visit
the settings and look for an item named `Calendar sources`. After clicking the link, you will be greeted with a basic
information overview about the extension. In the left sidebar, you can then select which calendar source you want to
manage. You can either add new ones or select an existing one of that type and edit or delete it. All changes
automatically take effect, just make sure that your sources are marked as active.

## Google Calendar Integration

To use Google Calendar, you have to define an API key in the ConfigEnv.php of your app like so:
```php
$config['google-api-key'] = "..."
```

To get your API key, visit this guide: [support.google.com](https://support.google.com/googleapi/answer/6158862?hl=en) \
And make sure that the API key has access to the calendars you use or that the calendars you use are made public.