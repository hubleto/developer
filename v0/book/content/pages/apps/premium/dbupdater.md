# DbUpdater

namespace Hubleto\App\Premium\DbUpdater

This app checks for differences in the SQL database structure (list of tables and their columns) and models in the Hubleto app. When a difference is found, the app offers to run an SQL script to do necessary modifications to the database structure.

The app is accessible via a `Settings and tools` -> `Tools` -> `Database updater`.

> **Note** | Currently only missing tables and missing columns are checked.
