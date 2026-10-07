
# \Hubleto\App\Community\Tasks\Models\Task
<table class='table-default dense'>
<tr><td>Parent class</td><td><a href="../../../../Erp/Model">Model</a></td></tr></table>


## Constants

| Constant              | Visibility | Type | Value                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
|-----------------------|------------|------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `VIRT_RELATED_TO_SQL` | public     |      | "(\r\n    select\r\n      concat(\r\n        group_concat(ifnull(leads.title, '') separator ', '),\r\n        group_concat(ifnull(concat(deals.identifier, ' ', deals.title), '') separator ', '),\r\n        group_concat(ifnull(concat(projects.identifier, ' ', projects.title), '') separator ', ')\r\n      )\r\n    from tasks t2\r\n\r\n    left join leads_tasks on leads_tasks.id_task = t2.id\r\n    left join leads on leads.id = leads_tasks.id_lead\r\n\r\n    left join deals_tasks on deals_tasks.id_task = t2.id\r\n    left join deals on deals.id = deals_tasks.id_deal\r\n\r\n    left join projects_tasks on projects_tasks.id_task = t2.id\r\n    left join projects on projects.id = projects_tasks.id_project\r\n\r\n    where\r\n      t2.id = tasks.id \r\n      and (\r\n        leads_tasks.id_task = tasks.id\r\n        or deals_tasks.id_task = tasks.id\r\n        or projects_tasks.id_task = tasks.id\r\n      )\r\n  )" |

## Properties


<div class="mt-2">&nbsp;</div>
### ☍ table
```php
public string $table
```




<div class="mt-2">&nbsp;</div>
### ☍ recordManagerClass
```php
public string $recordManagerClass
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupSqlValue
```php
public ?string $lookupSqlValue
```




<div class="mt-2">&nbsp;</div>
### ☍ lookupUrlDetail
```php
public ?string $lookupUrlDetail
```




<div class="mt-2">&nbsp;</div>
### ☍ relations
```php
public array $relations
```



## Methods

### ƒ describeColumns

[Description for describeColumns]

```php
public describeColumns(): array
```


### ƒ describeTable

[Description for describeTable]

```php
public describeTable(): \Hubleto\Framework\Description\Table
```


### ƒ onAfterCreate

[Description for onAfterCreate]

```php
public onAfterCreate(array $savedRecord): array
```

#### Parameters

| Parameter      | Type      | Description |
|----------------|-----------|-------------|
| `$savedRecord` | **array** |             |

