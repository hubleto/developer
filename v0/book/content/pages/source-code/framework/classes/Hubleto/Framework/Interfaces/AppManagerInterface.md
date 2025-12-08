
# \Hubleto\Framework\Interfaces\AppManagerInterface

## Methods

### ƒ init

```php
public init(): void
```


### ƒ sanitizeAppNamespace

```php
public sanitizeAppNamespace(string $appNamespace): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ validateAppNamespace

```php
public validateAppNamespace(string $appNamespace): void
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ onBeforeRender

```php
public onBeforeRender(): void
```


### ƒ getAppNamespaceForConfig

```php
public getAppNamespaceForConfig(string $appNamespace): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ getAvailableApps

```php
public getAvailableApps(): array
```


### ƒ getInstalledAppNamespaces

```php
public getInstalledAppNamespaces(): array
```


### ƒ createAppInstance

```php
public createAppInstance(string $appNamespace): \Hubleto\Framework\Interfaces\AppInterface
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ getEnabledApps

```php
public getEnabledApps(): array
```


### ƒ getDisabledApps

```php
public getDisabledApps(): array
```


### ƒ getInstalledApps

```php
public getInstalledApps(): array
```


### ƒ getActivatedApp

```php
public getActivatedApp(): null|\Hubleto\Framework\Interfaces\AppInterface
```


### ƒ getApp

```php
public getApp(string $appNamespace): null|\Hubleto\Framework\Interfaces\AppInterface
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ isAppInstalled

```php
public isAppInstalled(string $appNamespace): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ isAppEnabled

```php
public isAppEnabled(string $appNamespace): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ installApp

```php
public installApp(int $round, string $appNamespace, array $appConfig = [], bool $forceInstall = false): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$round`        | **int**    |             |
| `$appNamespace` | **string** |             |
| `$appConfig`    | **array**  |             |
| `$forceInstall` | **bool**   |             |


### ƒ disableApp

```php
public disableApp(string $appNamespace): void
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ enableApp

```php
public enableApp(string $appNamespace): void
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |


### ƒ canAppDangerouslyInjectDesktopHtmlContent

```php
public canAppDangerouslyInjectDesktopHtmlContent(string $appNamespace): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$appNamespace` | **string** |             |

