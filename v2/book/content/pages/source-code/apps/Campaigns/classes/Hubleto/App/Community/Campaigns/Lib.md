
# \Hubleto\App\Community\Campaigns\Lib
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Methods

### ƒ getMailPreview

[Description for getMailPreview]

```php
public static getMailPreview(array $campaign, array $recipient): string
```

* This method is **static**.
#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$campaign`  | **array** |             |
| `$recipient` | **array** |             |


### ƒ getBotDetectorHiddenLink

[Description for getBotDetectorHiddenLink]

```php
public static getBotDetectorHiddenLink(array $campaign, array $recipient): string
```

* This method is **static**.
#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$campaign`  | **array** |             |
| `$recipient` | **array** |             |


### ƒ getUnsubscribeHref

[Description for getUnsubscribeHref]

```php
public static getUnsubscribeHref(array $campaign, array $recipient): string
```

* This method is **static**.
#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$campaign`  | **array** |             |
| `$recipient` | **array** |             |


### ƒ getViewInBrowserHref

[Description for getUnsubscribeUrl]

```php
public static getViewInBrowserHref(array $campaign, array $recipient): string
```

* This method is **static**.
#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$campaign`  | **array** |             |
| `$recipient` | **array** |             |


### ƒ replaceVariables

[Description for replaceVariables]

```php
public static replaceVariables(string $body, array $vars): string
```

* This method is **static**.
#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$body`   | **string** |             |
| `$vars`   | **array**  |             |


### ƒ addUtmVariablesToEmailLinks

[Description for addUtmVariablesToEmailLinks]

```php
public static addUtmVariablesToEmailLinks(string $body, string $utmSource, string $utmCampaign, string $utmTerm, string $utmContent): string
```

* This method is **static**.
#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$body`        | **string** |             |
| `$utmSource`   | **string** |             |
| `$utmCampaign` | **string** |             |
| `$utmTerm`     | **string** |             |
| `$utmContent`  | **string** |             |


### ƒ getClickTrackerUrl

```php
public static getClickTrackerUrl(): string
```

* This method is **static**.

### ƒ routeLinksThroughClickTracker

[Description for routeLinksThroughClickTracker]

```php
public static routeLinksThroughClickTracker(array $campaign, array $recipient, string $body): string
```

* This method is **static**.
#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$campaign`  | **array**  |             |
| `$recipient` | **array**  |             |
| `$body`      | **string** |             |

