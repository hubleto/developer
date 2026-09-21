# Lesson 11: Model callbacks

<i class="fas fa-medal mr-2"></i> Developer Certification Level 1

## Introduction

Model callbacks let an application run model-specific logic at defined points
in a record's lifecycle. They can reject invalid operations, prepare values
before a database write, react to a completed write, clean up dependent data,
or enrich records returned to the user interface.

Callbacks are methods of the model. The RecordManager calls them while it
validates, creates, updates, deletes, or loads records. They are different from
Eloquent model events and from controller actions.

> **What you will learn:**
>
> * Which model callbacks are available.
> * When each callback runs.
> * Which callback return values affect the database write.
> * How callbacks interact with `recordSave()` and related records.
> * How to validate business rules and compare an updated record with its
>   original state.
> * How to enrich loaded data without changing the stored record.
> * Which callback patterns can cause recursion, repeated side effects, or slow
>   table loading.

## 1. Callback overview

The base model provides ten callback methods:

| Callback | Parameters | Purpose |
| --- | --- | --- |
| `onBeforeValidate()` | submitted record | Run a business check before standard column validation. |
| `onAfterValidate()` | validated working record | Run a check after the record and selected nested relations pass validation. |
| `onBeforeCreate()` | new record | Prepare a record immediately before normalization and insertion. |
| `onAfterCreate()` | saved record | React after insertion, when the new ID is available. |
| `onBeforeUpdate()` | submitted record | Prepare an existing record immediately before normalization and update. |
| `onAfterUpdate()` | original record, saved record | React after update and compare old and new values. |
| `onBeforeDelete()` | record ID | Check or prepare for deletion. |
| `onAfterDelete()` | record ID | React after deletion. |
| `onAfterLoadRecord()` | one loaded record | Add or transform response data for one record. |
| `onAfterLoadRecords()` | array of loaded records | Transform a complete table or tree result. |

The callback signatures are:

```php
public function onBeforeValidate(array $record): array;
public function onAfterValidate(array $record): array;

public function onBeforeCreate(array $record): array;
public function onAfterCreate(array $savedRecord): array;

public function onBeforeUpdate(array $record): array;
public function onAfterUpdate(
  array $originalRecord,
  array $savedRecord
): array;

public function onBeforeDelete(int $id): int;
public function onAfterDelete(int $id): int;

public function onAfterLoadRecord(array $record): array;
public function onAfterLoadRecords(array $records): array;
```

Use the exact signature of the callback being overridden. In particular,
`onAfterUpdate()` receives two records, while `onBeforeUpdate()` receives only
the submitted record.

## 2. The save lifecycle

The standard relation-aware save entry point is `recordSave()`. For a top-level
record, its relevant steps are:

```text
recordSave()
  permission check
  recordValidate()
    onBeforeValidate()
    validate model columns
    validate selected nested relations
    onAfterValidate()
  choose create or update
    create:
      onBeforeCreate()
      normalize model columns
      INSERT
      onAfterCreate()
    update:
      load the original record
      onBeforeUpdate()
      normalize model columns
      UPDATE
      onAfterUpdate(original, saved)
  save selected nested relations
```

This order has practical consequences:

* Standard column validation runs before `onBeforeCreate()` or
  `onBeforeUpdate()`.
* Values changed in `onBeforeCreate()` and `onBeforeUpdate()` are normalized
  and then written to the database.
* `onAfterCreate()` and `onAfterUpdate()` run after the database write.
* Nested relation records selected through `saveRelations` are validated
  during the top-level validation pass and saved after the parent record.

### Validation callbacks do not prepare saved values

`recordValidate()` works with the array returned by its validation callbacks,
but `recordSave()` uses that method as a validation step. It does not replace
the record being saved with the returned validation array.

Use validation callbacks to inspect data and throw an exception. Do not rely
on them to populate a value that must later be stored.

### After callbacks do not save a second time

The arrays returned from `onAfterCreate()` and `onAfterUpdate()` become part of
the result returned by the RecordManager. Changing the array there does not
issue another database update.

If a value must be stored as part of the original write, set it in
`onBeforeCreate()` or `onBeforeUpdate()`. If it can be calculated only after an
ID exists, perform an explicit follow-up operation and account for the
callbacks that operation will trigger.

## 3. Preserve inherited callback behavior

The base callback methods fire events through Hubleto's event manager and then
return their input unchanged. A parent model may also contain its own callback
logic.

Call the parent callback exactly once unless suppressing inherited behavior is
intentional:

```php
public function onBeforeCreate(array $record): array
{
  $record = parent::onBeforeCreate($record);

  // Add application-specific behavior.

  return $record;
}
```

For an after-update callback, keep both arguments:

```php
public function onAfterUpdate(
  array $originalRecord,
  array $savedRecord
): array {
  $savedRecord = parent::onAfterUpdate(
    $originalRecord,
    $savedRecord
  );

  return $savedRecord;
}
```

Calling the parent first or last also determines whether inherited logic runs
before or after the model's custom logic. Whichever order you choose, return
the array produced by the complete callback chain.

## 4. Validation callbacks

Standard required-field and type validation belongs in `describeColumns()`.
Callback validation is useful when validity depends on multiple fields or on a
business rule that a column cannot express.

### Validate a date range

```php
use Hubleto\Framework\Exceptions\RecordSaveException;

public function onBeforeValidate(array $record): array
{
  $record = parent::onBeforeValidate($record);

  $dateFrom = strtotime((string) ($record['date_from'] ?? ''));
  $dateTo = strtotime((string) ($record['date_to'] ?? ''));

  if ($dateFrom !== false && $dateTo !== false && $dateTo < $dateFrom) {
    throw new RecordSaveException(
      $this->translate('Date to cannot be earlier than date from.')
    );
  }

  return $record;
}
```

Throwing `RecordSaveException` stops the save before the create or update
write. The Worksheets app uses the same general pattern to reject activities
that are outside its permitted date range.

### Before or after validation?

Use `onBeforeValidate()` when the rule should run before standard column and
nested-relation checks. Use `onAfterValidate()` when the custom rule should run
only after those checks have passed.

Neither callback replaces database constraints. Uniqueness, foreign keys, and
other schema rules still belong in migrations.

## 5. Before-create callbacks

When `recordSave()` chooses the create path, `onBeforeCreate()` receives the
new record after the top-level validation phase and immediately before
normalization. A direct `recordCreate()` call also invokes this callback, but
does not run validation first. Use it for values that are needed only when
inserting a new row.

### Generate a value for new records

```php
public function onBeforeCreate(array $record): array
{
  $record = parent::onBeforeCreate($record);

  if (empty($record['public_uid'])) {
    $record['public_uid'] = bin2hex(random_bytes(16));
  }

  return $record;
}
```

The Documents app uses this pattern to generate a UID when one was not
provided. The generated key must correspond to a real model column; unknown
keys are removed during normalization.

When the callback is reached through `recordSave()`, validation has already
run. Do not use this callback as the only way to populate a missing column
marked as required. Its value must already be present in the submitted record
when standard Hubleto validation runs. A database default can be used only when
the model does not require that value in the submitted record.

## 6. Before-update callbacks

`onBeforeUpdate()` runs only for an existing record. The returned array is
normalized and written to the database. When it is called directly through
`recordUpdate()`, validation and save permission checks are not added
automatically.

### Apply the same business check to create and update

Keep shared logic in a private method and call it from both callbacks:

```php
private function validateBusinessDate(array $record): void
{
  $timestamp = strtotime((string) ($record['date'] ?? ''));

  if ($timestamp === false) {
    throw new RecordSaveException(
      $this->translate('A valid date is required.')
    );
  }
}

public function onBeforeCreate(array $record): array
{
  $this->validateBusinessDate($record);
  return parent::onBeforeCreate($record);
}

public function onBeforeUpdate(array $record): array
{
  $this->validateBusinessDate($record);
  return parent::onBeforeUpdate($record);
}
```

This is the pattern used by the Worksheets app when the same date restriction
must protect both create and update operations.

`onBeforeUpdate()` does not receive the original record as an argument. Use
`onAfterUpdate()` when the task requires a direct comparison between old and
new values. If the operation must be rejected before the write based on the
old row, explicitly load the original row during the before callback or place
the operation in a dedicated service where the complete transaction can be
controlled.

## 7. After-create and after-update callbacks

After callbacks are suitable for work that requires the saved record ID or
must react to a completed write.

Typical uses include:

* recalculating a parent record,
* creating dependent data,
* applying a default workflow,
* writing an audit entry,
* and removing a replaced external resource after an update.

### Recalculate a related parent

Payments affect their invoice totals. The same helper can be called after both
create and update:

```php
private function recalculateInvoice(array $savedRecord): void
{
  $idInvoice = (int) ($savedRecord['id_invoice'] ?? 0);

  if ($idInvoice > 0) {
    $invoice = $this->getModel(Invoice::class);
    $invoice->recalculateTotalsForInvoice($idInvoice);
  }
}

public function onAfterCreate(array $savedRecord): array
{
  $savedRecord = parent::onAfterCreate($savedRecord);
  $this->recalculateInvoice($savedRecord);
  return $savedRecord;
}

public function onAfterUpdate(
  array $originalRecord,
  array $savedRecord
): array {
  $savedRecord = parent::onAfterUpdate(
    $originalRecord,
    $savedRecord
  );

  $this->recalculateInvoice($savedRecord);
  return $savedRecord;
}
```

The Invoices app uses this pattern when a payment changes.

### React only when a value changed

`onAfterUpdate()` provides the database row loaded before the update and the
record produced by the update flow:

```php
public function onAfterUpdate(
  array $originalRecord,
  array $savedRecord
): array {
  $savedRecord = parent::onAfterUpdate(
    $originalRecord,
    $savedRecord
  );

  $oldStatus = $originalRecord['status'] ?? null;
  $newStatus = $savedRecord['status'] ?? null;

  if ($oldStatus !== $newStatus) {
    $savedRecord['_STATUS_CHANGED'] = true;
  }

  return $savedRecord;
}
```

`_STATUS_CHANGED` in this example is response data only. It is not persisted
by returning it from the after callback.

`recordSave()` loads the original row and supplies it to `recordUpdate()`. If
application code calls `recordUpdate($record)` directly, its optional
`$originalRecord` argument defaults to an empty array. Pass the original row
explicitly when an after-update callback depends on the comparison.

### Avoid recursive saves

Calling the same model's `recordUpdate()` from `onAfterUpdate()` starts another
update and invokes `onAfterUpdate()` again. Without an explicit guard, this can
create an infinite loop.

When a follow-up write is required:

* prefer calculating the value before the original write,
* update a different dependent model when that is the real requirement,
* or add a clear guard that prevents the callback from repeating itself.

## 8. Delete callbacks

The RecordManager's delete flow calls `onBeforeDelete($id)`, checks the record
and delete permission, deletes the row, and then calls `onAfterDelete($id)`.

The before-delete callback is reached before the permission check performed
inside `recordDelete()`. It may reject the operation, but it should not perform
irreversible external cleanup at that point. The later permission check can
still deny the deletion.

### Reject a deletion

```php
public function onBeforeDelete(int $id): int
{
  parent::onBeforeDelete($id);

  $hasChildren = $this->record
    ->where('id_parent', $id)
    ->exists();

  if ($hasChildren) {
    throw new RecordSaveException(
      $this->translate('A record with child records cannot be deleted.')
    );
  }

  return $id;
}
```

The integer returned by a delete callback does not select another record for
deletion. Treat `$id` as context and return it unchanged.

### Keep delete side effects safe

`onAfterDelete()` confirms that the database delete completed, but it receives
only the ID. If cleanup needs the old row, load the required information before
deletion and perform the complete operation through a dedicated service or
carefully designed callback pair.

Do not invoke callback methods manually around `recordDelete()`. The
RecordManager owns their invocation. External actions such as deleting files
or sending messages should also be idempotent: retrying or reaching the same
callback more than once must not corrupt data or repeat an irreversible action.

## 9. Load callbacks

Load callbacks transform records returned by standard read flows. They do not
write their changes back to the database.

### `onAfterLoadRecord()`

This callback runs for a record returned through `recordRead()`, including a
standard form load. It also runs once for every row loaded by the standard
table and tree loaders.

```php
public function onAfterLoadRecord(array $record): array
{
  $record = parent::onAfterLoadRecord($record);

  $quantity = (float) ($record['quantity'] ?? 0);
  $unitPrice = (float) ($record['unit_price'] ?? 0);
  $record['_LINE_TOTAL'] = $quantity * $unitPrice;

  return $record;
}
```

The Invoices app uses this type of callback to add calculated summary values
to a loaded invoice and its items.

### `onAfterLoadRecords()`

The standard table and tree loaders call this callback after all individual
`onAfterLoadRecord()` calls:

```php
public function onAfterLoadRecords(array $records): array
{
  $records = parent::onAfterLoadRecords($records);

  foreach ($records as $key => $record) {
    $records[$key]['_ROW_NUMBER'] = $key + 1;
  }

  return $records;
}
```

Use it when the transformation needs the complete result set. A form load
returns one record and does not call `onAfterLoadRecords()`.

### Read-callback boundaries

These callbacks belong to the standard record, table, and tree loading flows.
They are not automatically applied to lookup queries or to arbitrary direct
Eloquent queries.

Keep `onAfterLoadRecord()` inexpensive. Running another database query for
every table row creates an N+1 query problem. Add joins or eager-loaded
relations in the RecordManager when the value depends on related database
data, then use the callback only for lightweight response preparation.

Do not add confidential values merely because the callback can access them.
Returned callback data becomes part of the API response.

## 10. Callbacks and related records

When `recordSave()` receives `saveRelations`, it validates the selected nested
records and later saves them through each related model's RecordManager.

This means:

* the parent model receives callbacks for the parent record,
* every selected child record receives callbacks from its own model,
* a new parent is written before its child records are saved,
* and a failure in a later relation callback can happen after an earlier write
  has already completed.

Do not assume that all callback side effects are automatically wrapped in one
database transaction. When several writes and external systems must succeed or
fail together, coordinate the operation in a dedicated service and use an
explicit transaction where appropriate.

## 11. RecordManager methods and callback coverage

The method used to write or load data determines which callbacks run:

| Operation | Validation callbacks | Lifecycle callbacks | Load callbacks |
| --- | --- | --- | --- |
| `recordSave()` | Yes, for the top-level save and selected relations | Create or update callbacks | No |
| `recordCreate()` | No | Before/after create | No |
| `recordUpdate()` | No | Before/after update | No |
| `recordDelete()` | No | Before/after delete | A permission read can load the record |
| `loadFormData()` / `recordRead()` | No | No | After-load record |
| `loadTableData()` | No | No | After-load record for every row, then after-load records |
| Direct Eloquent `create()`, `update()`, `delete()` or query | No | No | No |

Use `recordSave()` for normal form-driven create and update operations. It adds
permission checks, validation, create/update callbacks, normalization, and
optional nested relation saving.

Direct Eloquent writes are valid low-level tools, but they bypass the model
callback contract described in this lesson. If bypassing callbacks is
intentional, document that decision at the call site.

## 12. Common mistakes

### Expecting an after callback to persist returned values

After callbacks change the returned array, not the completed database write.
Prepare stored values before the write or perform a guarded follow-up update.

### Using validation callbacks to populate required fields

The validation callback return is not adopted as the record later passed to
create or update. Use it for checks and exceptions.

### Forgetting the parent callback

Skipping the parent can suppress inherited model behavior and the event fired
by the base callback.

### Saving the same model from `onAfterUpdate()`

An unguarded call to `recordUpdate()` invokes the callback again and can recurse
indefinitely.

### Performing expensive queries in `onAfterLoadRecord()`

The callback may run once per table row. Prepare related data in the
RecordManager instead of issuing a query for every record.

### Assuming direct Eloquent writes invoke Hubleto callbacks

They do not. Use the appropriate RecordManager method when callbacks are part
of the required behavior.

### Treating callbacks as authorization

Callbacks can reject an operation, but record permissions still belong in the
model's permission configuration and the standard RecordManager flow.

## Practical exercise

Extend a small scheduling model with these behaviors:

1. Add `onBeforeValidate()` and reject a `date_to` earlier than `date_from`.
2. Add `onBeforeCreate()` and generate an optional public UID when it is empty.
3. Add `onAfterUpdate()` and detect whether the status changed by comparing
   the original and saved records.
4. Add `onAfterLoadRecord()` and return a calculated duration without storing
   it in the database.
5. Save one new record and update one existing record through `recordSave()`.
6. Repeat one write through a direct Eloquent method and identify which checks
   and callbacks no longer run.
7. Load the record in a form and table and confirm that the calculated response
   value is present but not stored as a database column.

Test invalid input as well as the successful path. The invalid date range must
fail before a create or update callback reaches the database write.

## Best practices

* Put reusable required and type rules in `describeColumns()`.
* Use validation callbacks for cross-field and business validation.
* Use before callbacks for values that must participate in the current write.
* Use after callbacks for reactions that require the saved ID or old/new
  comparison.
* Keep read callbacks side-effect-free and inexpensive.
* Call the parent callback exactly once unless inherited behavior is
  intentionally disabled.
* Return the complete record array from every array callback.
* Keep external side effects idempotent.
* Guard follow-up writes against callback recursion.
* Use a dedicated service and transaction for multi-record business operations.

## Study material

| Resource | Description |
| --- | --- |
| [Lesson 8](lesson-8) | Models, RecordManagers, `recordSave()`, and normalization. |
| [Lesson 9](lesson-9) | Relation-aware saves, permissions, and direct RecordManager methods. |
| [Lesson 10](lesson-10) | Column validation and Description API configuration. |
| [Models](../../docs/framework/models) | Model structure and responsibilities. |
| [Record manager](../../docs/framework/models/record-manager) | RecordManager read and write methods. |
| [Records API](../../docs/framework/models/records-api) | Standard API endpoints for record operations. |

## Videos

The webinar recording for this lesson will be added after the live session.

## Do you have any questions?

Do you have any questions or comments? Leave us a message in the community
portal.

<a class="btn" href="https://community.hubleto.eu/d/35-qa-developer-certification-level-1"><span class="text">Go to community.hubleto.eu</span></a>

If you are new here, learn more about the
[developer certification course](../../certification).
