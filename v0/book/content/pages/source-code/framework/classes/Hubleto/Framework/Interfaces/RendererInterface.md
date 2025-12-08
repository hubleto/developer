
# \Hubleto\Framework\Interfaces\RendererInterface

## Methods

### ƒ init

```php
public init(): void
```


### ƒ getTwig

```php
public getTwig(): \Twig\Environment
```


### ƒ addNamespace

```php
public addNamespace(string $folder, string $namespace): mixed
```

#### Parameters

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$folder`    | **string** |             |
| `$namespace` | **string** |             |


### ƒ renderView

```php
public renderView(string $view, array $vars = []): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |
| `$vars`   | **array**  |             |


### ƒ render

```php
public render(string $route = '', array $params = []): string
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |
| `$params` | **array**  |             |


### ƒ renderSuccess

```php
public renderSuccess(mixed $return): string
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$return` | **mixed** |             |


### ƒ renderWarning

```php
public renderWarning(\Hubleto\Framework\Exceptions\Exception $exception, mixed $isHtml = true): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |
| `$isHtml`    | **mixed**                                   |             |


### ƒ renderFatal

```php
public renderFatal(\Hubleto\Framework\Exceptions\Exception $exception, mixed $isHtml = true): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |
| `$isHtml`    | **mixed**                                   |             |


### ƒ renderHtmlFatal

```php
public renderHtmlFatal(\Hubleto\Framework\Exceptions\Exception $exception): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |


### ƒ renderExceptionHtml

```php
public renderExceptionHtml(mixed $exception, array $args = []): string
```

#### Parameters

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$exception` | **mixed** |             |
| `$args`      | **array** |             |


### ƒ renderHtmlWarning

```php
public renderHtmlWarning(\Hubleto\Framework\Exceptions\Exception $exception): string
```

#### Parameters

| Parameter    | Type                                        | Description |
|--------------|---------------------------------------------|-------------|
| `$exception` | **\Hubleto\Framework\Exceptions\Exception** |             |


### ƒ onBeforeRender

```php
public onBeforeRender(): void
```


### ƒ onAfterRender

```php
public onAfterRender(): void
```

