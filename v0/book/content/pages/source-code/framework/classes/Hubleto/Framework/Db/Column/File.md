
# \Hubleto\Framework\Db\Column\File
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../Column">\Hubleto\Framework\Column</a></td></tr></table>


## Properties

### type

`protected string $type`


### sqlDataType

`protected string $sqlDataType`


### folderPath

`protected string $folderPath`


### renamePattern

`protected string $renamePattern`


## Methods

### getFolderPath

```php
public getFolderPath(): string
```


### setFolderPath

```php
public setFolderPath(string $folderPath): \Hubleto\Framework\Db\Column\File
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$folderPath` | **string** |             |


### getRenamePattern

```php
public getRenamePattern(): string
```


### setRenamePattern

```php
public setRenamePattern(string $renamePattern): \Hubleto\Framework\Db\Column\File
```

**Parameters:**

| Parameter        | Type       | Description |
|------------------|------------|-------------|
| `$renamePattern` | **string** |             |


### normalize

```php
public normalize(mixed $value): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


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


### addIndex

```php
public addIndex(string $indexDefinition): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$indexDefinition` | **string** |             |


### getIndexes

```php
public getIndexes(): array
```


### getProperty

```php
public getProperty(string $pName): mixed
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |


### setProperty

```php
public setProperty(string $pName, mixed $pValue): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |
| `$pValue` | **mixed**  |             |


### getReactComponent

```php
public getReactComponent(): string
```


### setReactComponent

```php
public setReactComponent(string $reactComponent): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$reactComponent` | **string** |             |


### getByteSize

```php
public getByteSize(): int
```


### setByteSize

```php
public setByteSize(int $byteSize): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$byteSize` | **int** |             |


### getType

```php
public getType(): string
```


### setType

```php
public setType(string $type): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$type`   | **string** |             |


### getSqlDataType

```php
public getSqlDataType(): string
```


### setSqlDataType

```php
public setSqlDataType(string $sqlDataType): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$sqlDataType` | **string** |             |


### getTitle

```php
public getTitle(): string
```


### setTitle

```php
public setTitle(string $title): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$title`  | **string** |             |


### getReadonly

```php
public getReadonly(): bool
```


### setReadonly

```php
public setReadonly(bool $readonly = true): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type     | Description |
|-------------|----------|-------------|
| `$readonly` | **bool** |             |


### getRequired

```php
public getRequired(): bool
```


### setRequired

```php
public setRequired(bool $required = true): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type     | Description |
|-------------|----------|-------------|
| `$required` | **bool** |             |


### getVisibility

```php
public getVisibility(): int
```


### setVisibility

```php
public setVisibility(int $visibility): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter     | Type    | Description |
|---------------|---------|-------------|
| `$visibility` | **int** |             |


### setAlwaysVisible

```php
public setAlwaysVisible(): \Hubleto\Framework\Column
```


### setAlwaysHidden

```php
public setAlwaysHidden(): \Hubleto\Framework\Column
```


### setDefaultVisible

```php
public setDefaultVisible(): \Hubleto\Framework\Column
```


### setDefaultHidden

```php
public setDefaultHidden(): \Hubleto\Framework\Column
```


### getPlaceholder

```php
public getPlaceholder(): bool
```


### setPlaceholder

```php
public setPlaceholder(bool $placeholder = true): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter      | Type     | Description |
|----------------|----------|-------------|
| `$placeholder` | **bool** |             |


### getUnit

```php
public getUnit(): string
```


### setUnit

```php
public setUnit(string $unit): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$unit`   | **string** |             |


### getColorScale

```php
public getColorScale(): string
```


### setColorScale

```php
public setColorScale(string $colorScale): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$colorScale` | **string** |             |


### getCssClass

```php
public getCssClass(): string
```


### setCssClass

```php
public setCssClass(string $cssClass): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$cssClass` | **string** |             |


### getFormat

```php
public getFormat(): bool
```


### setFormat

```php
public setFormat(bool $format = true): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type     | Description |
|-----------|----------|-------------|
| `$format` | **bool** |             |


### getDescription

```php
public getDescription(): string
```


### setDescription

```php
public setDescription(string $description): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$description` | **string** |             |


### getExamples

```php
public getExamples(): array
```


### setExamples

```php
public setExamples(array $examples): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$examples` | **array** |             |


### getEnumValues

```php
public getEnumValues(): array
```


### setEnumValues

```php
public setEnumValues(array $enumValues): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$enumValues` | **array** |             |


### getEnumCssClasses

```php
public getEnumCssClasses(): array
```


### setEnumCssClasses

```php
public setEnumCssClasses(array $enumCssClasses): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$enumCssClasses` | **array** |             |


### getPredefinedValues

```php
public getPredefinedValues(): array
```


### setPredefinedValues

```php
public setPredefinedValues(array $predefinedValues): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter           | Type      | Description |
|---------------------|-----------|-------------|
| `$predefinedValues` | **array** |             |


### getHidden

```php
public getHidden(): bool
```


### setHidden

```php
public setHidden(bool $hidden = true): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type     | Description |
|-----------|----------|-------------|
| `$hidden` | **bool** |             |


### getRawSqlDefinition

```php
public getRawSqlDefinition(): string
```


### setRawSqlDefinition

```php
public setRawSqlDefinition(string $rawSqlDefinition): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter           | Type       | Description |
|---------------------|------------|-------------|
| `$rawSqlDefinition` | **string** |             |


### getDefaultValue

```php
public getDefaultValue(): mixed
```


### setDefaultValue

```php
public setDefaultValue(mixed $defaultValue): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$defaultValue` | **mixed** |             |


### getTableCellRenderer

```php
public getTableCellRenderer(): string
```


### setTableCellRenderer

```php
public setTableCellRenderer(string $tableCellRenderer): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter            | Type       | Description |
|----------------------|------------|-------------|
| `$tableCellRenderer` | **string** |             |


### getLookupModel

```php
public getLookupModel(): string
```


### setLookupModel

```php
public setLookupModel(string $lookupModel): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$lookupModel` | **string** |             |


### getDecimals

```php
public getDecimals(): int
```


### setDecimals

```php
public setDecimals(int $decimals): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$decimals` | **int** |             |


### getStep

```php
public getStep(): float
```


### setStep

```php
public setStep(float $step): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$step`   | **float** |             |


### getIcon

```php
public getIcon(): string
```


### setIcon

```php
public setIcon(string $icon): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$icon`   | **string** |             |


### getEndpoint

```php
public getEndpoint(): string
```


### setEndpoint

```php
public setEndpoint(string $endpoint): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$endpoint` | **string** |             |


### getCreatable

```php
public getCreatable(): bool
```


### setCreatable

```php
public setCreatable(bool $creatable = true): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter    | Type     | Description |
|--------------|----------|-------------|
| `$creatable` | **bool** |             |


### getInputProps

```php
public getInputProps(): array
```


### setInputProps

```php
public setInputProps(array $inputProps): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$inputProps` | **array** |             |


### setInputProp

```php
public setInputProp(string $pName, mixed $pValue): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |
| `$pValue` | **mixed**  |             |


### describeInput

```php
public describeInput(): \Hubleto\Framework\Description\Input
```


### loadFromArray

```php
public loadFromArray(array $columnConfig): \Hubleto\Framework\Column
```

**Parameters:**

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$columnConfig` | **array** |             |


### jsonSerialize

```php
public jsonSerialize(): array
```


### toArray

```php
public toArray(): array
```


### getNullValue

```php
public getNullValue(): mixed
```


### isEmpty

```php
public isEmpty(mixed $value): bool
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### normalize

```php
public normalize(mixed $value): mixed
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### validate

```php
public validate(mixed $value): bool
```

**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### sqlCreateString

```php
public sqlCreateString(string $table, string $columnName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |


### sqlIndexString

```php
public sqlIndexString(string $table, string $columnName): string
```

**Parameters:**

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |

