
***

* Full name: `\Hubleto\Framework\Db\Column\Varchar`
* Parent class: [`\Hubleto\Framework\Db\Column`](./)

## Properties

### type

```php
protected string $type
```

***

### byteSize

```php
protected int $byteSize
```

***

### autocomplete

```php
protected ?\Hubleto\Framework\Db\ColumnProperty\Autocomplete $autocomplete
```

***

## Methods

### __construct

```php
public __construct(\Hubleto\Framework\Model $model, string $title, int $byteSize = 255): mixed
```

**Parameters:**

| Parameter   | Type                         | Description |
|-------------|------------------------------|-------------|
| `$model`    | **\Hubleto\Framework\Model** |             |
| `$title`    | **string**                   |             |
| `$byteSize` | **int**                      |             |

***

### getByteSize

```php
public getByteSize(): int
```

***

### setByteSize

```php
public setByteSize(int $byteSize): \Hubleto\Framework\Db\Column\Varchar
```

**Parameters:**

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$byteSize` | **int** |             |

***

### getAutocomplete

```php
public getAutocomplete(): \Hubleto\Framework\Db\ColumnProperty\Autocomplete
```

***

### setAutocomplete

```php
public setAutocomplete(\Hubleto\Framework\Db\ColumnProperty\Autocomplete $autocomplete): \Hubleto\Framework\Db\Column\Varchar
```

**Parameters:**

| Parameter       | Type                                                  | Description |
|-----------------|-------------------------------------------------------|-------------|
| `$autocomplete` | **\Hubleto\Framework\Db\ColumnProperty\Autocomplete** |             |

***

### describeInput

```php
public describeInput(): \Hubleto\Framework\Description\Input
```

***

### jsonSerialize

```php
public jsonSerialize(): array
```

***

### sqlCreateString

```php
public sqlCreateString(string $table, string $columnName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |

***

## Inherited methods

### __construct

```php
public __construct(\Hubleto\Framework\Model $model, string $title): mixed
```

**Parameters:**

| Parameter | Type                         | Description |
|-----------|------------------------------|-------------|
| `$model`  | **\Hubleto\Framework\Model** |             |
| `$title`  | **string**                   |             |

***

### addIndex

```php
public addIndex(string $indexDefinition): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$indexDefinition` | **string** |             |

***

### getIndexes

```php
public getIndexes(): array
```

***

### getProperty

```php
public getProperty(string $pName): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |

***

### setProperty

```php
public setProperty(string $pName, mixed $pValue): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |
| `$pValue` | **mixed**  |             |

***

### getReactComponent

```php
public getReactComponent(): string
```

***

### setReactComponent

```php
public setReactComponent(string $reactComponent): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$reactComponent` | **string** |             |

***

### getByteSize

```php
public getByteSize(): int
```

***

### setByteSize

```php
public setByteSize(int $byteSize): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$byteSize` | **int** |             |

***

### getType

```php
public getType(): string
```

***

### setType

```php
public setType(string $type): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$type`   | **string** |             |

***

### getSqlDataType

```php
public getSqlDataType(): string
```

***

### setSqlDataType

```php
public setSqlDataType(string $sqlDataType): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$sqlDataType` | **string** |             |

***

### getTitle

```php
public getTitle(): string
```

***

### setTitle

```php
public setTitle(string $title): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$title`  | **string** |             |

***

### getReadonly

```php
public getReadonly(): bool
```

***

### setReadonly

```php
public setReadonly(bool $readonly = true): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter   | Type     | Description |
|-------------|----------|-------------|
| `$readonly` | **bool** |             |

***

### getRequired

```php
public getRequired(): bool
```

***

### setRequired

```php
public setRequired(bool $required = true): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter   | Type     | Description |
|-------------|----------|-------------|
| `$required` | **bool** |             |

***

### getPlaceholder

```php
public getPlaceholder(): bool
```

***

### setPlaceholder

```php
public setPlaceholder(bool $placeholder = true): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter      | Type     | Description |
|----------------|----------|-------------|
| `$placeholder` | **bool** |             |

***

### getUnit

```php
public getUnit(): string
```

***

### setUnit

```php
public setUnit(string $unit): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$unit`   | **string** |             |

***

### getColorScale

```php
public getColorScale(): string
```

***

### setColorScale

```php
public setColorScale(string $colorScale): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$colorScale` | **string** |             |

***

### getCssClass

```php
public getCssClass(): string
```

***

### setCssClass

```php
public setCssClass(string $cssClass): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$cssClass` | **string** |             |

***

### getFormat

```php
public getFormat(): bool
```

***

### setFormat

```php
public setFormat(bool $format = true): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type     | Description |
|-----------|----------|-------------|
| `$format` | **bool** |             |

***

### getDescription

```php
public getDescription(): string
```

***

### setDescription

```php
public setDescription(string $description): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$description` | **string** |             |

***

### getExamples

```php
public getExamples(): array
```

***

### setExamples

```php
public setExamples(array $examples): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$examples` | **array** |             |

***

### getEnumValues

```php
public getEnumValues(): array
```

***

### setEnumValues

```php
public setEnumValues(array $enumValues): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$enumValues` | **array** |             |

***

### getEnumCssClasses

```php
public getEnumCssClasses(): array
```

***

### setEnumCssClasses

```php
public setEnumCssClasses(array $enumCssClasses): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$enumCssClasses` | **array** |             |

***

### getPredefinedValues

```php
public getPredefinedValues(): array
```

***

### setPredefinedValues

```php
public setPredefinedValues(array $predefinedValues): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter           | Type      | Description |
|---------------------|-----------|-------------|
| `$predefinedValues` | **array** |             |

***

### getHidden

```php
public getHidden(): bool
```

***

### setHidden

```php
public setHidden(bool $hidden = true): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter | Type     | Description |
|-----------|----------|-------------|
| `$hidden` | **bool** |             |

***

### getRawSqlDefinition

```php
public getRawSqlDefinition(): string
```

***

### setRawSqlDefinition

```php
public setRawSqlDefinition(string $rawSqlDefinition): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter           | Type       | Description |
|---------------------|------------|-------------|
| `$rawSqlDefinition` | **string** |             |

***

### getDefaultValue

```php
public getDefaultValue(): mixed
```

***

### setDefaultValue

```php
public setDefaultValue(mixed $defaultValue): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$defaultValue` | **mixed** |             |

***

### getTableCellRenderer

```php
public getTableCellRenderer(): string
```

***

### setTableCellRenderer

```php
public setTableCellRenderer(string $tableCellRenderer): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter            | Type       | Description |
|----------------------|------------|-------------|
| `$tableCellRenderer` | **string** |             |

***

### getLookupModel

```php
public getLookupModel(): string
```

***

### setLookupModel

```php
public setLookupModel(string $lookupModel): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$lookupModel` | **string** |             |

***

### getDecimals

```php
public getDecimals(): int
```

***

### setDecimals

```php
public setDecimals(int $decimals): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$decimals` | **int** |             |

***

### describeInput

```php
public describeInput(): \Hubleto\Framework\Description\Input
```

***

### loadFromArray

```php
public loadFromArray(array $columnConfig): \Hubleto\Framework\Db\Column
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$columnConfig` | **array** |             |

***

### jsonSerialize

```php
public jsonSerialize(): array
```

***

### toArray

```php
public toArray(): array
```

***

### getNullValue

```php
public getNullValue(): mixed
```

***

### isEmpty

```php
public isEmpty(mixed $value): bool
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |

***

### normalize

```php
public normalize(mixed $value): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |

***

### validate

```php
public validate(mixed $value): bool
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |

***

### sqlCreateString

```php
public sqlCreateString(string $table, string $columnName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |

***

### sqlIndexString

```php
public sqlIndexString(string $table, string $columnName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |

***
