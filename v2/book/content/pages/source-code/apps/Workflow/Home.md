
# 
# Workflow

## Namespaces

### \Hubleto\App\Community\Workflow

#### Classes

| Class                                                                       | Description |
|-----------------------------------------------------------------------------|-------------|
| [`AutomatManager`](./classes/Hubleto/App/Community/Workflow/AutomatManager) |             |
| [`Loader`](./classes/Hubleto/App/Community/Workflow/Loader)                 |             |
| [`Manager`](./classes/Hubleto/App/Community/Workflow/Manager)               |             |
| [`Workflow`](./classes/Hubleto/App/Community/Workflow/Workflow)             |             |

### \Hubleto\App\Community\Workflow\Automats\Actions

#### Classes

| Class                                                                                    | Description |
|------------------------------------------------------------------------------------------|-------------|
| [`LogMessage`](./classes/Hubleto/App/Community/Workflow/Automats/Actions/LogMessage)     |             |
| [`SetWorkflow`](./classes/Hubleto/App/Community/Workflow/Automats/Actions/SetWorkflow)   |             |
| [`UpdateRecord`](./classes/Hubleto/App/Community/Workflow/Automats/Actions/UpdateRecord) |             |

### \Hubleto\App\Community\Workflow\Automats\Evaluators

#### Classes

| Class                                                                                             | Description |
|---------------------------------------------------------------------------------------------------|-------------|
| [`RecordCompare`](./classes/Hubleto/App/Community/Workflow/Automats/Evaluators/RecordCompare)     |             |
| [`WorkflowCompare`](./classes/Hubleto/App/Community/Workflow/Automats/Evaluators/WorkflowCompare) |             |

### \Hubleto\App\Community\Workflow\Controllers

#### Classes

| Class                                                                                 | Description |
|---------------------------------------------------------------------------------------|-------------|
| [`Automats`](./classes/Hubleto/App/Community/Workflow/Controllers/Automats)           |             |
| [`History`](./classes/Hubleto/App/Community/Workflow/Controllers/History)             |             |
| [`Home`](./classes/Hubleto/App/Community/Workflow/Controllers/Home)                   |             |
| [`Workflow`](./classes/Hubleto/App/Community/Workflow/Controllers/Workflow)           |             |
| [`Workflows`](./classes/Hubleto/App/Community/Workflow/Controllers/Workflows)         |             |
| [`WorkflowSteps`](./classes/Hubleto/App/Community/Workflow/Controllers/WorkflowSteps) |             |

### \Hubleto\App\Community\Workflow\Controllers\Api

#### Classes

| Class                                                                                                   | Description |
|---------------------------------------------------------------------------------------------------------|-------------|
| [`GetWorkflows`](./classes/Hubleto/App/Community/Workflow/Controllers/Api/GetWorkflows)                 |             |
| [`GetWorkflowStepByTag`](./classes/Hubleto/App/Community/Workflow/Controllers/Api/GetWorkflowStepByTag) |             |

### \Hubleto\App\Community\Workflow\Controllers\Boards

#### Classes

| Class                                                                                                            | Description |
|------------------------------------------------------------------------------------------------------------------|-------------|
| [`ItemsWithNotUpdatedStep`](./classes/Hubleto/App/Community/Workflow/Controllers/Boards/ItemsWithNotUpdatedStep) |             |

### \Hubleto\App\Community\Workflow\EventListeners

#### Classes

| Class                                                                                                | Description |
|------------------------------------------------------------------------------------------------------|-------------|
| [`SaveWorkflowHistory`](./classes/Hubleto/App/Community/Workflow/EventListeners/SaveWorkflowHistory) |             |
| [`WorkflowAutomat`](./classes/Hubleto/App/Community/Workflow/EventListeners/WorkflowAutomat)         |             |

### \Hubleto\App\Community\Workflow\Extendibles

#### Classes

| Class                                                                     | Description |
|---------------------------------------------------------------------------|-------------|
| [`AppMenu`](./classes/Hubleto/App/Community/Workflow/Extendibles/AppMenu) |             |

### \Hubleto\App\Community\Workflow\Interfaces

#### Interfaces

| Interface                                                                                                    | Description |
|--------------------------------------------------------------------------------------------------------------|-------------|
| [`AutomatActionInterface`](./classes/Hubleto/App/Community/Workflow/Interfaces/AutomatActionInterface)       |             |
| [`AutomatEvaluatorInterface`](./classes/Hubleto/App/Community/Workflow/Interfaces/AutomatEvaluatorInterface) |             |

### \Hubleto\App\Community\Workflow\Models

#### Classes

| Class                                                                                | Description |
|--------------------------------------------------------------------------------------|-------------|
| [`Automat`](./classes/Hubleto/App/Community/Workflow/Models/Automat)                 |             |
| [`Workflow`](./classes/Hubleto/App/Community/Workflow/Models/Workflow)               |             |
| [`WorkflowHistory`](./classes/Hubleto/App/Community/Workflow/Models/WorkflowHistory) |             |
| [`WorkflowStep`](./classes/Hubleto/App/Community/Workflow/Models/WorkflowStep)       |             |

### \Hubleto\App\Community\Workflow\Models\Migrations

#### Classes

| Class                                                                                                     | Description |
|-----------------------------------------------------------------------------------------------------------|-------------|
| [`Automat_0001`](./classes/Hubleto/App/Community/Workflow/Models/Migrations/Automat_0001)                 |             |
| [`Workflow_0001`](./classes/Hubleto/App/Community/Workflow/Models/Migrations/Workflow_0001)               |             |
| [`WorkflowHistory_0001`](./classes/Hubleto/App/Community/Workflow/Models/Migrations/WorkflowHistory_0001) |             |
| [`WorkflowStep_0001`](./classes/Hubleto/App/Community/Workflow/Models/Migrations/WorkflowStep_0001)       |             |

### \Hubleto\App\Community\Workflow\Models\RecordManagers

#### Classes

| Class                                                                                               | Description |
|-----------------------------------------------------------------------------------------------------|-------------|
| [`Automat`](./classes/Hubleto/App/Community/Workflow/Models/RecordManagers/Automat)                 |             |
| [`Workflow`](./classes/Hubleto/App/Community/Workflow/Models/RecordManagers/Workflow)               |             |
| [`WorkflowHistory`](./classes/Hubleto/App/Community/Workflow/Models/RecordManagers/WorkflowHistory) |             |
| [`WorkflowStep`](./classes/Hubleto/App/Community/Workflow/Models/RecordManagers/WorkflowStep)       |             |
