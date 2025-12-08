
# \Hubleto\App\Community\Campaigns\Lib
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Framework/Core">Core</a></td></tr></table>


## Methods

### getMailPreview

[Description for getMailPreview]

```php
public static getMailPreview(array $campaign, array $recipient): string
```

* This method is **static**.
**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$campaign`  | **array** |             |
| `$recipient` | **array** |             |


### replaceVariables

[Description for replaceVariables]

```php
public static replaceVariables(string $body, array $vars): string
```

* This method is **static**.
**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$body`   | **string** |             |
| `$vars`   | **array**  |             |


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

[Description for routeLinksThroughCampaignTracker]

```php
public static routeLinksThroughCampaignTracker(array $campaign, array $recipient, string $body): string
```

* This method is **static**.
**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$campaign`  | **array**  |             |
| `$recipient` | **array**  |             |
| `$body`      | **string** |             |

