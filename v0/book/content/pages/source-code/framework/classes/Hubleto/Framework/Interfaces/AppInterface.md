
# \Hubleto\Framework\Interfaces\AppInterface

## Methods

### validateManifest

```php
public validateManifest(): mixed
```


### init

```php
public init(): void
```


### onBeforeRender

```php
public onBeforeRender(): void
```


### hook

```php
public hook(string $hook): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$hook`   | **string** |             |


### getRootUrlSlug

```php
public getRootUrlSlug(): string
```


### getNotificationsCount

```php
public getNotificationsCount(): int
```


### installTables

```php
public installTables(int $round): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### getAvailableControllerClasses

```php
public getAvailableControllerClasses(): array
```


### getAvailableModelClasses

```php
public getAvailableModelClasses(): array
```


### installDefaultPermissions

```php
public installDefaultPermissions(): void
```


### assignPermissionsToRoles

```php
public assignPermissionsToRoles(): void
```


### generateDemoData

```php
public generateDemoData(): void
```


### renderSecondSidebar

```php
public renderSecondSidebar(): string
```


### search

```php
public search(array $expressions): array
```

**Parameters:**

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$expressions` | **array** |             |


### addSetting

```php
public addSetting(\Hubleto\Framework\Interfaces\AppInterface $app, array $setting): void
```

**Parameters:**

| Parameter  | Type                                           | Description |
|------------|------------------------------------------------|-------------|
| `$app`     | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$setting` | **array**                                      |             |


### getSettings

```php
public getSettings(): array
```


### getFullConfigPath

```php
public getFullConfigPath(string $path): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### saveConfig

```php
public saveConfig(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### saveConfigForUser

```php
public saveConfigForUser(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### configAsString

```php
public configAsString(string $path, string $defaultValue = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### configAsInteger

```php
public configAsInteger(string $path, int $defaultValue): int
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### configAsFloat

```php
public configAsFloat(string $path, float $defaultValue): float
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### configAsBool

```php
public configAsBool(string $path, bool $defaultValue = false): bool
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### configAsArray

```php
public configAsArray(string $path, array $defaultValue = []): array
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### setConfigAsString

```php
public setConfigAsString(string $path, string $value = ''): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### setConfigAsInteger

```php
public setConfigAsInteger(string $path, int $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **int**    |             |


### setConfigAsFloat

```php
public setConfigAsFloat(string $path, float $value): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **float**  |             |


### setConfigAsBool

```php
public setConfigAsBool(string $path, bool $value = false): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **bool**   |             |


### setConfigAsArray

```php
public setConfigAsArray(string $path, array $value = []): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **array**  |             |


### dangerouslyInjectDesktopHtmlContent

```php
public dangerouslyInjectDesktopHtmlContent(string $where): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$where`  | **string** |             |


### collectExtendibles

```php
public collectExtendibles(string $extendibleName): array
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$extendibleName` | **string** |             |


### addSearchSwitch

```php
public addSearchSwitch(string $switch, string $name): void
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |
| `$name`   | **string** |             |


### canHandleSearchSwith

```php
public canHandleSearchSwith(string $switch): bool
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |

