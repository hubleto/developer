
# \Hubleto\Framework\Db\Column\DateTime
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../Column">\Hubleto\Framework\Column</a></td></tr></table>


## Properties


<div class="mt-2">&nbsp;</div>
### ☍ type
```php
protected string $type
```




<div class="mt-2">&nbsp;</div>
### ☍ sqlDataType
```php
protected string $sqlDataType
```



## Methods

### ƒ normalize

```php
public normalize(mixed $value): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### ƒ sqlIndexString

```php
public sqlIndexString(string $table, string $columnName): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |


## Inherited methods

### ƒ __construct

```php
public __construct(\Hubleto\Framework\Model $model, string $title): mixed
```

#### Parameters

| Parameter | Type                         | Description |
|-----------|------------------------------|-------------|
| `$model`  | **\Hubleto\Framework\Model** |             |
| `$title`  | **string**                   |             |


### ƒ addIndex

```php
public addIndex(string $indexDefinition): \Hubleto\Framework\Column
```

#### Parameters

| Parameter          | Type       | Description |
|--------------------|------------|-------------|
| `$indexDefinition` | **string** |             |


### ƒ getIndexes

```php
public getIndexes(): array
```


### ƒ getProperty

```php
public getProperty(string $pName): mixed
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |


### ƒ setProperty

```php
public setProperty(string $pName, mixed $pValue): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |
| `$pValue` | **mixed**  |             |


### ƒ getReactComponent

```php
public getReactComponent(): string
```


### ƒ setReactComponent

```php
public setReactComponent(string $reactComponent): \Hubleto\Framework\Column
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$reactComponent` | **string** |             |


### ƒ getByteSize

```php
public getByteSize(): int
```


### ƒ setByteSize

```php
public setByteSize(int $byteSize): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$byteSize` | **int** |             |


### ƒ getType

```php
public getType(): string
```


### ƒ setType

```php
public setType(string $type): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$type`   | **string** |             |


### ƒ getSqlDataType

```php
public getSqlDataType(): string
```


### ƒ setSqlDataType

```php
public setSqlDataType(string $sqlDataType): \Hubleto\Framework\Column
```

#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$sqlDataType` | **string** |             |


### ƒ getTitle

```php
public getTitle(): string
```


### ƒ setTitle

```php
public setTitle(string $title): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$title`  | **string** |             |


### ƒ getReadonly

```php
public getReadonly(): bool
```


### ƒ setReadonly

```php
public setReadonly(bool $readonly = true): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type     | Description |
|-------------|----------|-------------|
| `$readonly` | **bool** |             |


### ƒ getRequired

```php
public getRequired(): bool
```


### ƒ setRequired

```php
public setRequired(bool $required = true): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type     | Description |
|-------------|----------|-------------|
| `$required` | **bool** |             |


### ƒ getVisibility

```php
public getVisibility(): int
```


### ƒ setVisibility

```php
public setVisibility(int $visibility): \Hubleto\Framework\Column
```

#### Parameters

| Parameter     | Type    | Description |
|---------------|---------|-------------|
| `$visibility` | **int** |             |


### ƒ setAlwaysVisible

```php
public setAlwaysVisible(): \Hubleto\Framework\Column
```


### ƒ setAlwaysHidden

```php
public setAlwaysHidden(): \Hubleto\Framework\Column
```


### ƒ setDefaultVisible

```php
public setDefaultVisible(): \Hubleto\Framework\Column
```


### ƒ setDefaultHidden

```php
public setDefaultHidden(): \Hubleto\Framework\Column
```


### ƒ getPlaceholder

```php
public getPlaceholder(): bool
```


### ƒ setPlaceholder

```php
public setPlaceholder(bool $placeholder = true): \Hubleto\Framework\Column
```

#### Parameters

| Parameter      | Type     | Description |
|----------------|----------|-------------|
| `$placeholder` | **bool** |             |


### ƒ getUnit

```php
public getUnit(): string
```


### ƒ setUnit

```php
public setUnit(string $unit): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$unit`   | **string** |             |


### ƒ getColorScale

```php
public getColorScale(): string
```


### ƒ setColorScale

```php
public setColorScale(string $colorScale): \Hubleto\Framework\Column
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$colorScale` | **string** |             |


### ƒ getCssClass

```php
public getCssClass(): string
```


### ƒ setCssClass

```php
public setCssClass(string $cssClass): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$cssClass` | **string** |             |


### ƒ getFormat

```php
public getFormat(): bool
```


### ƒ setFormat

```php
public setFormat(bool $format = true): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type     | Description |
|-----------|----------|-------------|
| `$format` | **bool** |             |


### ƒ getDescription

```php
public getDescription(): string
```


### ƒ setDescription

```php
public setDescription(string $description): \Hubleto\Framework\Column
```

#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$description` | **string** |             |


### ƒ getExamples

```php
public getExamples(): array
```


### ƒ setExamples

```php
public setExamples(array $examples): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type      | Description |
|-------------|-----------|-------------|
| `$examples` | **array** |             |


### ƒ getEnumValues

```php
public getEnumValues(): array
```


### ƒ setEnumValues

```php
public setEnumValues(array $enumValues): \Hubleto\Framework\Column
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$enumValues` | **array** |             |


### ƒ getEnumCssClasses

```php
public getEnumCssClasses(): array
```


### ƒ setEnumCssClasses

```php
public setEnumCssClasses(array $enumCssClasses): \Hubleto\Framework\Column
```

#### Parameters

| Parameter         | Type      | Description |
|-------------------|-----------|-------------|
| `$enumCssClasses` | **array** |             |


### ƒ getPredefinedValues

```php
public getPredefinedValues(): array
```


### ƒ setPredefinedValues

```php
public setPredefinedValues(array $predefinedValues): \Hubleto\Framework\Column
```

#### Parameters

| Parameter           | Type      | Description |
|---------------------|-----------|-------------|
| `$predefinedValues` | **array** |             |


### ƒ getHidden

```php
public getHidden(): bool
```


### ƒ setHidden

```php
public setHidden(bool $hidden = true): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type     | Description |
|-----------|----------|-------------|
| `$hidden` | **bool** |             |


### ƒ getRawSqlDefinition

```php
public getRawSqlDefinition(): string
```


### ƒ setRawSqlDefinition

```php
public setRawSqlDefinition(string $rawSqlDefinition): \Hubleto\Framework\Column
```

#### Parameters

| Parameter           | Type       | Description |
|---------------------|------------|-------------|
| `$rawSqlDefinition` | **string** |             |


### ƒ getDefaultValue

```php
public getDefaultValue(): mixed
```


### ƒ setDefaultValue

```php
public setDefaultValue(mixed $defaultValue): \Hubleto\Framework\Column
```

#### Parameters

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$defaultValue` | **mixed** |             |


### ƒ getTableCellRenderer

```php
public getTableCellRenderer(): string
```


### ƒ setTableCellRenderer

```php
public setTableCellRenderer(string $tableCellRenderer): \Hubleto\Framework\Column
```

#### Parameters

| Parameter            | Type       | Description |
|----------------------|------------|-------------|
| `$tableCellRenderer` | **string** |             |


### ƒ getLookupModel

```php
public getLookupModel(): string
```


### ƒ setLookupModel

```php
public setLookupModel(string $lookupModel): \Hubleto\Framework\Column
```

#### Parameters

| Parameter      | Type       | Description |
|----------------|------------|-------------|
| `$lookupModel` | **string** |             |


### ƒ getDecimals

```php
public getDecimals(): int
```


### ƒ setDecimals

```php
public setDecimals(int $decimals): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type    | Description |
|-------------|---------|-------------|
| `$decimals` | **int** |             |


### ƒ getStep

```php
public getStep(): float
```


### ƒ setStep

```php
public setStep(float $step): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$step`   | **float** |             |


### ƒ getIcon

```php
public getIcon(): string
```


### ƒ setIcon

```php
public setIcon(string $icon): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$icon`   | **string** |             |


### ƒ getEndpoint

```php
public getEndpoint(): string
```


### ƒ setEndpoint

```php
public setEndpoint(string $endpoint): \Hubleto\Framework\Column
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$endpoint` | **string** |             |


### ƒ getCreatable

```php
public getCreatable(): bool
```


### ƒ setCreatable

```php
public setCreatable(bool $creatable = true): \Hubleto\Framework\Column
```

#### Parameters

| Parameter    | Type     | Description |
|--------------|----------|-------------|
| `$creatable` | **bool** |             |


### ƒ getInputProps

```php
public getInputProps(): array
```


### ƒ setInputProps

```php
public setInputProps(array $inputProps): \Hubleto\Framework\Column
```

#### Parameters

| Parameter     | Type      | Description |
|---------------|-----------|-------------|
| `$inputProps` | **array** |             |


### ƒ setInputProp

```php
public setInputProp(string $pName, mixed $pValue): \Hubleto\Framework\Column
```

#### Parameters

| Parameter | Type       | Description |
|-----------|------------|-------------|
| `$pName`  | **string** |             |
| `$pValue` | **mixed**  |             |


### ƒ describeInput

```php
public describeInput(): \Hubleto\Framework\Description\Input
```


### ƒ loadFromArray

```php
public loadFromArray(array $columnConfig): \Hubleto\Framework\Column
```

#### Parameters

| Parameter       | Type      | Description |
|-----------------|-----------|-------------|
| `$columnConfig` | **array** |             |


### ƒ jsonSerialize

```php
public jsonSerialize(): array
```


### ƒ toArray

```php
public toArray(): array
```


### ƒ getNullValue

```php
public getNullValue(): mixed
```


### ƒ isEmpty

```php
public isEmpty(mixed $value): bool
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### ƒ normalize

```php
public normalize(mixed $value): mixed
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### ƒ validate

```php
public validate(mixed $value): bool
```

#### Parameters

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$value`  | **mixed** |             |


### ƒ sqlCreateString

```php
public sqlCreateString(string $table, string $columnName): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |


### ƒ sqlIndexString

```php
public sqlIndexString(string $table, string $columnName): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$table`      | **string** |             |
| `$columnName` | **string** |             |

