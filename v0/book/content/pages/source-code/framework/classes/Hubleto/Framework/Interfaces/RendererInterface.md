
# \Hubleto\Framework\Interfaces\RendererInterface

## Methods

### init

```php
public init(): void
```


### getTwig

```php
public getTwig(): \Twig\Environment
```


### addNamespace

```php
public addNamespace(string $folder, string $namespace): mixed
```

**Parameters:**

| Parameter    | Type       | Description |
|--------------|------------|-------------|
| `$folder`    | **string** |             |
| `$namespace` | **string** |             |


### renderView

```php
public renderView(string $view, array $vars = []): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$view`   | **string** |             |
| `$vars`   | **array**  |             |


### render

```php
public render(string $route = '', array $params = []): string
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$route`  | **string** |             |
| `$params` | **array**  |             |


### renderSuccess

```php
public renderSuccess(mixed $return): string
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$return` | **mixed** |             |


### renderWarning

```php
public renderWarning(mixed $message, mixed $isHtml = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |
| `$isHtml`  | **mixed** |             |


### renderFatal

```php
public renderFatal(mixed $message, mixed $isHtml = true): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |
| `$isHtml`  | **mixed** |             |


### renderHtmlFatal

```php
public renderHtmlFatal(mixed $message): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$message` | **mixed** |             |


### renderExceptionHtml

```php
public renderExceptionHtml(mixed $exception, array $args = []): string
```

**Parameters:**

| Parameter    | Type      | Description |
|--------------|-----------|-------------|
| `$exception` | **mixed** |             |
| `$args`      | **array** |             |


### renderHtmlWarning

```php
public renderHtmlWarning(mixed $warning): string
```

**Parameters:**

| Parameter  | Type      | Description |
|------------|-----------|-------------|
| `$warning` | **mixed** |             |


### onBeforeRender

```php
public onBeforeRender(): void
```


### onAfterRender

```php
public onAfterRender(): void
```

