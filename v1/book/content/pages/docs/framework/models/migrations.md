# Migrations

When developing an application, your database schema (the structure of your tables, columns, and relations) will evolve over time. You might add a new table, rename a column, or introduce a new foreign key. 

In Hubleto, **Migrations** act as a version control system for your database. Instead of manually executing SQL queries in a database administration tool (like phpMyAdmin or DataGrip), you define your schema changes within PHP files called "migrations". 

This approach brings several powerful benefits:
1. **Reproducibility**: Any developer on your team can set up the exact same database structure by running a single command.
2. **Version History**: You have a chronological record of every change made to the database, tracked in your Git repository alongside your code.
3. **Safe Deployments**: When pushing your app to a production environment, migrations ensure the production database is updated automatically and safely.

In the Hubleto framework, migrations are strictly tied to your **Models**. Each application contains its own `Migrations` folder situated within its `Models` directory (e.g., `erp/apps/YourApp/Models/Migrations/`).

## Anatomy of a Migration Class

When you translate a model's PHP definition (like its columns and relations) into a migration, the framework needs to know exactly how to build and tear down that specific structure. 

A migration class in Hubleto implements the `Hubleto\Framework\Interfaces\MigrationInterface` by extending the base `Hubleto\Framework\Migration` class. 

It is composed of four distinct methods. We split the installation into two parts (tables vs. foreign keys) to handle situations where multiple tables are being created at once and depend on one another.

Here is a comprehensive example of what a typical migration file looks like:

```php
<?php

namespace Hubleto\App\Custom\YourApp\Models\Migrations;

use Hubleto\Framework\Migration;

class ExampleModel_20260305_0001 extends Migration
{
    /**
     * Executes the SQL required to create the table, its columns, and any indexes.
     * Foreign keys are intentionally omitted here.
     */
    public function installTables(): void
    {
        $this->db->execute("
            set foreign_key_checks = 0;
            drop table if exists `example_models`;
            set foreign_key_checks = 1;
        ");
        $this->db->execute("
            SET foreign_key_checks = 0;
            CREATE TABLE `example_models` (
             `id` int(8) primary key auto_increment,
             `related_item_id` int(8) NULL default NULL,
             `title` varchar(255),
             `status` int(4) default 1,
             `created_at` datetime,
             INDEX `id` (`id`),
             INDEX `related_item_id` (`related_item_id`),
             INDEX `status` (`status`)
            ) ENGINE = InnoDB;
            SET foreign_key_checks = 1;
        ");
    }

    /**
     * Reverts the actions of installTables() by dropping the table entirely.
     */
    public function uninstallTables(): void
    {
        $this->db->execute("
            set foreign_key_checks = 0;
            drop table if exists `example_models`;
            set foreign_key_checks = 1;
        ");
    }

    /**
     * Executes the SQL required to bind relations via Foreign Keys.
     * This is run in a separate phase after ALL tables have been created.
     */
    public function installForeignKeys(): void
    {
        $this->db->execute("
            ALTER TABLE `example_models`
            ADD CONSTRAINT `fk_example_related_item`
            FOREIGN KEY (`related_item_id`)
            REFERENCES `related_items` (`id`)
            ON DELETE CASCADE
            ON UPDATE CASCADE;
        ");
    }

    /**
     * Reverts the actions of installForeignKeys() by dropping the constraints.
     */
    public function uninstallForeignKeys(): void
    {
        $this->db->execute("
            ALTER TABLE `example_models`
            DROP FOREIGN KEY `fk_example_related_item`;
        ");
    }
}
```

Notice the use of `$this->db->execute()`. This method allows the migration to run raw SQL statements directly against your configured database.

> **Important:** A migration is considered an **atomic unit** of change, but it should *not* manage database transactions itself. You should never call `$this->db->startTransaction()` or `$this->db->commit()` inside a migration class. The philosophy of the framework is that the migration runner script handles the transaction lifecycle. If a migration process crashes, the runner automatically attempts to roll back the operation to prevent the database from entering an inconsistent state.

## How Versioning Works

Hubleto requires an intelligent way to figure out *which* migrations have already been run on your database, and *which* are entirely new and pending. 

Rather than relying on complex tracking tables, Hubleto handles versioning directly through strict **file and class naming conventions**. 

The format for a migration file is:
`{ModelName}_{YYYYMMDD}_{Version}.php`

Let's break down an example filename: `Customer_20261015_0001.php`

1. **`Customer` (Model Name):** The exact, case-sensitive name of the model this migration belongs to.
2. **`20261015` (Date):** The date the migration was generated in `YYYYMMDD` format (October 15th, 2026). This ensures migrations are executed in chronological order.
3. **`0001` (Version Padding):** A sequential four-digit number starting from `0001`. If you need to create a second migration for the `Customer` model on the exact same day, it would be named `Customer_20261015_0002.php`.

**Crucial Rule:** The name of the class *inside* the PHP file must match the filename exactly (excluding the `.php` extension). 

By reading these filenames, the framework cross-references the files on disk with the database state to determine what needs to be executed next.

## Creating a Migration

While it is entirely possible to create these files entirely by hand, writing out raw SQL is tedious. The recommended approach is to let the Hubleto CLI Agent generate the basic boilerplate to speed up your workflow.

The CLI Agent reads the `describeColumns()` and `$relations` definitions inside your Model class and drafts the initial `CREATE TABLE` and constraint statements. However, **the CLI tool is only a starting point**. It does not understand the deeper business logic or meaning behind your data, so it is strictly the developer's responsibility to review, optimize, and finalize the generated SQL.

### Step-by-step Generation

To generate a migration, navigate to your terminal and use the `create migration` command. 

The syntax requires the application namespace and the specific model name:

```bash
php hubleto create migration "<AppNamespace>" <ModelName>
```

**Example:**
If you just created a new `Invoice` model in your `Accounting` app, you would run:

```bash
php hubleto create migration "Hubleto\App\Custom\Accounting" Invoice
```

**What happens under the hood?**
1. The CLI Agent boots up the framework and locates your `Invoice` model.
2. It analyzes the properties, looking at what columns you defined (e.g., `Varchar`, `Integer`, `Date`) and any relations (e.g., `HAS_MANY`, `BELONGS_TO`).
3. It generates the basic `CREATE TABLE`, `CREATE INDEX`, and `ALTER TABLE` SQL commands to act as a foundation.
4. It creates a brand new file (like `Invoice_20261015_0001.php`) in your app's `Models/Migrations` directory, pre-filled with this drafted SQL.

> **Developer Tip:** The CLI Agent is a powerful assistant, but it is not infallible. Always open the newly generated migration file and review the SQL commands. Ensure the data types, default values, and constraints match your exact intentions before applying them to your database.

## Running Migrations

Once you have generated your migration files, your database is still completely unaware of the changes. You must "run" or "apply" the migrations to execute the SQL within them.

You accomplish this using the `migrate` command via the CLI Agent.

To apply all pending migrations across all enabled applications in your Hubleto environment, simply run:

```bash
php hubleto migrate
```

If you want to be more specific and only apply migrations for a single model, you can specify the target:

```bash
php hubleto migrate "Hubleto\App\Custom\Accounting" Invoice
```

### The Two-Round Execution Process

When you trigger the `migrate` command, Hubleto processes your migrations in a very specific, deliberate order to prevent errors. It uses a "Two-Round" system:

* **Round 1 (Creating Tables):** The framework iterates through every pending migration and executes the `installTables()` method. This guarantees that every single physical table and column exists in the database first.
* **Round 2 (Applying Constraints):** After all tables are confirmed to exist, the framework iterates through the pending migrations again, this time executing the `installForeignKeys()` method. 

This two-round process is vital. If Table A has a foreign key pointing to Table B, but Table A's migration runs first, the database would throw an error because Table B doesn't exist yet. By creating all tables first in Round 1, Hubleto guarantees that Round 2 will always succeed, regardless of the order the migrations are processed.

## Modifying Existing Tables

As your app grows, you will inevitably need to change an *existing* table - perhaps adding a new column or renaming an old one.

**Do not edit old migrations!** 
Once a migration has been committed to version control and run on your database, it should be considered read-only. Editing an old migration will not update the database, because Hubleto already marked that file as "executed" and will skip it.

**Instead, create a new migration:**
1. Update your Model's `describeColumns()` method to reflect the new state.
2. Run the `create migration` command again.
3. The CLI Agent will generate a *new* file with today's date and a bumped version number.
4. Open the new migration file. Since the CLI Agent typically drafts a `DROP TABLE IF EXISTS` followed by a full `CREATE TABLE` command, **you will need to manually adjust the SQL** in this new migration to use `ALTER TABLE` statements so you don't lose your existing data.

*Example of a manual adjustment for an update migration:*
```php
public function installTables(): void
{
    // Instead of dropping and recreating, we alter the existing table
    $this->db->execute("
        ALTER TABLE `example_models` 
        ADD COLUMN `new_feature_flag` tinyint(1) DEFAULT 0 AFTER `status`;
    ");
}