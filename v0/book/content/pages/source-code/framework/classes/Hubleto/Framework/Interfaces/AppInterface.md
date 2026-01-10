
# \Hubleto\Framework\Interfaces\AppInterface

## Methods

### ƒ validateManifest

```php
public validateManifest(): mixed
```


### ƒ init

```php
public init(): void
```


### ƒ onBeforeRender

```php
public onBeforeRender(): void
```


### ƒ hook

```php
public hook(string $hook): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$hook`   | **string** |             |


### ƒ getRootUrlSlug

```php
public getRootUrlSlug(): string
```


### ƒ installTables

```php
public installTables(int $round): void
```

#### Parameters

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$round`  | **int** |             |


### ƒ getAvailableControllerClasses

```php
public getAvailableControllerClasses(): array
```


### ƒ getAvailableModelClasses

```php
public getAvailableModelClasses(): array
```


### ƒ installDefaultPermissions

```php
public installDefaultPermissions(): void
```


### ƒ assignPermissionsToRoles

```php
public assignPermissionsToRoles(): void
```


### ƒ generateDemoData

```php
public generateDemoData(): void
```


### ƒ renderSecondSidebar

```php
public renderSecondSidebar(): string
```


### ƒ search

```php
public search(array $expressions): array
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$expressions` | **array** |             |


### ƒ addSetting

```php
public addSetting(\Hubleto\Framework\Interfaces\AppInterface $app, array $setting): void
```

#### Parameters

| Parameter  | Type                                           | Description |
|------------|------------------------------------------------|-------------|
| `$app`     | **\Hubleto\Framework\Interfaces\AppInterface** |             |
| `$setting` | **array**                                      |             |


### ƒ getSettings

```php
public getSettings(): array
```


### ƒ getFullConfigPath

```php
public getFullConfigPath(string $path): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |


### ƒ saveConfig

```php
public saveConfig(string $path, string $value = ''): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ saveConfigForUser

```php
public saveConfigForUser(string $path, string $value = ''): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ configAsString

```php
public configAsString(string $path, string $defaultValue = ''): string
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **string** |             |


### ƒ configAsInteger

```php
public configAsInteger(string $path, int $defaultValue): int
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **int**    |             |


### ƒ configAsFloat

```php
public configAsFloat(string $path, float $defaultValue): float
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **float**  |             |


### ƒ configAsBool

```php
public configAsBool(string $path, bool $defaultValue = false): bool
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **bool**   |             |


### ƒ configAsArray

```php
public configAsArray(string $path, array $defaultValue = []): array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$path`         | **string** |             |
| `$defaultValue` | **array**  |             |


### ƒ setConfigAsString

```php
public setConfigAsString(string $path, string $value = ''): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **string** |             |


### ƒ setConfigAsInteger

```php
public setConfigAsInteger(string $path, int $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **int**    |             |


### ƒ setConfigAsFloat

```php
public setConfigAsFloat(string $path, float $value): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **float**  |             |


### ƒ setConfigAsBool

```php
public setConfigAsBool(string $path, bool $value = false): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **bool**   |             |


### ƒ setConfigAsArray

```php
public setConfigAsArray(string $path, array $value = []): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$path`   | **string** |             |
| `$value`  | **array**  |             |


### ƒ dangerouslyInjectDesktopHtmlContent

```php
public dangerouslyInjectDesktopHtmlContent(string $where): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$where`  | **string** |             |


### ƒ collectExtendibles

```php
public collectExtendibles(string $extendibleName): array
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$extendibleName` | **string** |             |


### ƒ addSearchSwitch

```php
public addSearchSwitch(string $switch, string $name): void
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |
| `$name`   | **string** |             |


### ƒ canHandleSearchSwith

```php
public canHandleSearchSwith(string $switch): bool
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$switch` | **string** |             |

