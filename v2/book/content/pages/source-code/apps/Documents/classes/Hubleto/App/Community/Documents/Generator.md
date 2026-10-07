
# \Hubleto\App\Community\Documents\Generator
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../Erp/Core">Core</a></td></tr></table>


## Methods

### ƒ renderTemplate

[Description for renderTemplate]

```php
public renderTemplate(string $model, int $idTemplate, array $vars): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$model`      | **string** |             |
| `$idTemplate` | **int**    |             |
| `$vars`       | **array**  |             |


### ƒ getPreviewHtml

[Description for getPreviewHtml]

```php
public getPreviewHtml(string $model, int $recordId, int $idTemplate): string
```

#### Parameters

| Parameter     | Type       | Description |
|---------------|------------|-------------|
| `$model`      | **string** |             |
| `$recordId`   | **int**    |             |
| `$idTemplate` | **int**    |             |


### ƒ getPreviewVars

[Description for getPreviewVars]

```php
public getPreviewVars(string $model, int $recordId): array
```

#### Parameters

| Parameter   | Type       | Description |
|-------------|------------|-------------|
| `$model`    | **string** |             |
| `$recordId` | **int**    |             |


### ƒ generatePdf

[Description for generatePdf]

```php
public generatePdf(string $model, int $recordId, string $documentName): array
```

#### Parameters

| Parameter       | Type       | Description |
|-----------------|------------|-------------|
| `$model`        | **string** |             |
| `$recordId`     | **int**    |             |
| `$documentName` | **string** |             |


### ƒ generatePdfDocumentFromTemplate

Generates PDF document from template and returns ID of the generated document.

```php
public generatePdfDocumentFromTemplate(string $documentName, string $model, int $recordId, int $idTemplate, string $outputFilename, array $vars, bool $createDocumentEntry = false): int
```

#### Parameters

| Parameter              | Type       | Description                                               |
|------------------------|------------|-----------------------------------------------------------|
| `$documentName`        | **string** |                                                           |
| `$model`               | **string** | Model (full class name) which the document is related to. |
| `$recordId`            | **int**    | ID of the record in the model.                            |
| `$idTemplate`          | **int**    | ID of template to be used for generating the document.    |
| `$outputFilename`      | **string** | Name of the file to be generated.                         |
| `$vars`                | **array**  | Variable values to be replaced in template.               |
| `$createDocumentEntry` | **bool**   |                                                           |

#### Return Value

ID of generated document (0 if $createDocumentEntry == false)


### ƒ createPdfDocumentFromTemplate

Shorthand for generatePdfDocumentFromTemplate with $createDocumentEntry set to true.

```php
public createPdfDocumentFromTemplate(string $documentName, string $model, int $recordId, int $idTemplate, string $outputFilename, array $vars): int
```

#### Parameters

| Parameter         | Type       | Description |
|-------------------|------------|-------------|
| `$documentName`   | **string** |             |
| `$model`          | **string** |             |
| `$recordId`       | **int**    |             |
| `$idTemplate`     | **int**    |             |
| `$outputFilename` | **string** |             |
| `$vars`           | **array**  |             |

