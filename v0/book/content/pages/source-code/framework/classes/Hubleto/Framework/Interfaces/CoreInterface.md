
# \Hubleto\Framework\Interfaces\CoreInterface

## Methods

### getServiceStatic

```php
public static getServiceStatic(string $service): mixed
```

* This method is **static**.
**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### getService

```php
public getService(string $service): mixed
```

**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$service` | **string** |             |


### env

```php
public env(): \Hubleto\Framework\Interfaces\EnvInterface
```


### authProvider

```php
public authProvider(): \Hubleto\Framework\Interfaces\AuthInterface
```


### db

```php
public db(): \Hubleto\Framework\Interfaces\DbInterface
```


### appManager

```php
public appManager(): \Hubleto\Framework\Interfaces\AppManagerInterface
```


### router

```php
public router(): \Hubleto\Framework\Interfaces\RouterInterface
```


### hookManager

```php
public hookManager(): \Hubleto\Framework\Interfaces\HookManagerInterface
```


### sessionManager

```php
public sessionManager(): \Hubleto\Framework\Interfaces\SessionManagerInterface
```


### permissionsManager

```php
public permissionsManager(): \Hubleto\Framework\Interfaces\PermissionsManagerInterface
```


### cronManager

```php
public cronManager(): \Hubleto\Framework\Interfaces\CronManagerInterface
```


### emailProvider

```php
public emailProvider(): \Hubleto\Framework\Interfaces\EmailProviderInterface
```


### config

```php
public config(): \Hubleto\Framework\Interfaces\ConfigManagerInterface
```


### logger

```php
public logger(): \Hubleto\Framework\Interfaces\LoggerInterface
```


### locale

```php
public locale(): \Hubleto\Framework\Interfaces\LocaleInterface
```


### renderer

```php
public renderer(): \Hubleto\Framework\Interfaces\RendererInterface
```


### translator

```php
public translator(): \Hubleto\Framework\Interfaces\TranslatorInterface
```


### getModel

```php
public getModel(string $model): \Hubleto\Framework\Interfaces\ModelInterface
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$model`  | **string** |             |


### getController

```php
public getController(string $controller): \Hubleto\Framework\Interfaces\ControllerInterface
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$controller` | **string** |             |


### translate

```php
public translate(string $string, array $vars = [], string $contextInner = ''): string
```

**Parameters:**

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$string`       | **string** |             |
| `$vars`         | **array**  |             |
| `$contextInner` | **string** |             |

