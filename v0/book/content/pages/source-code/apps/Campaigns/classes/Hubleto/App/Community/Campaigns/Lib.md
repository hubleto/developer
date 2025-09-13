
# \Hubleto\App\Community\Campaigns\Lib
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/Core">Core</a></td></tr></table>


## Methods

### getMailPreview

[Description for getMailPreview]

```php
public static getMailPreview(array $campaign, array $contact): string
```

* This method is **static**.
**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$campaign` | **array** |             |
| `$contact`  | **array** |             |


### addUtmVariablesToEmailLinks

[Description for addUtmVariablesToEmailLinks]

```php
public static addUtmVariablesToEmailLinks(string $body, string $utmSource, string $utmCampaign, string $utmTerm, string $utmContent): string
```

* This method is **static**.
**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$body`        | **string** |             |
| `$utmSource`   | **string** |             |
| `$utmCampaign` | **string** |             |
| `$utmTerm`     | **string** |             |
| `$utmContent`  | **string** |             |


### routeLinksThroughCampaignTracker

```php
public static routeLinksThroughCampaignTracker(array $campaign, array $contact, string $body): string
```

* This method is **static**.
**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$campaign` | **array**  |             |
| `$contact`  | **array**  |             |
| `$body`     | **string** |             |

