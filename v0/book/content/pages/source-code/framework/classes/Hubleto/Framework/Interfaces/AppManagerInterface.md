
# \Hubleto\Framework\Interfaces\AppManagerInterface

## Methods

### init

```php
public init(): void
```


### sanitizeAppNamespace

```php
public sanitizeAppNamespace(string $appNamespace): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### validateAppNamespace

```php
public validateAppNamespace(string $appNamespace): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### onBeforeRender

```php
public onBeforeRender(): void
```


### getAppNamespaceForConfig

```php
public getAppNamespaceForConfig(string $appNamespace): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### getAvailableApps

```php
public getAvailableApps(): array
```


### getInstalledAppNamespaces

```php
public getInstalledAppNamespaces(): array
```


### createAppInstance

```php
public createAppInstance(string $appNamespace): \Hubleto\Framework\Interfaces\AppInterface
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### getEnabledApps

```php
public getEnabledApps(): array
```


### getDisabledApps

```php
public getDisabledApps(): array
```


### getInstalledApps

```php
public getInstalledApps(): array
```


### getActivatedApp

```php
public getActivatedApp(): null|\Hubleto\Framework\Interfaces\AppInterface
```


### getApp

```php
public getApp(string $appNamespace): null|\Hubleto\Framework\Interfaces\AppInterface
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### isAppInstalled

```php
public isAppInstalled(string $appNamespace): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### isAppEnabled

```php
public isAppEnabled(string $appNamespace): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### installApp

```php
public installApp(int $round, string $appNamespace, array $appConfig = [], bool $forceInstall = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$round`        | **int**    |             |
| `$appNamespace` | **string** |             |
| `$appConfig`    | **array**  |             |
| `$forceInstall` | **bool**   |             |


### disableApp

```php
public disableApp(string $appNamespace): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### enableApp

```php
public enableApp(string $appNamespace): void
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### canAppDangerouslyInjectDesktopHtmlContent

```php
public canAppDangerouslyInjectDesktopHtmlContent(string $appNamespace): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |

