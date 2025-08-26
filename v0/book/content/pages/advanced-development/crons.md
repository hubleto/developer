# Scheduled jobs (cron)

If you are familiar with Linux cron, it will be super easy for you to create a scheduled job in Hubleto.

Take a look at this example:

###### ./crons/Example.php
```php
namespace HubletoMain\Cron;
class Example extends \HubletoMain\Core\Cron {
  public string $schedulingPattern = '*/10 * * * *';
  public function run(): void { $this->getLogger()->info("Sample cron started."); }
}
```

This is the simplest scheduled job which runs every ten minutes (see `*/10` in the scheduling pattern) and simply
uses the Hubleto's default logger to log some activity.

## Create your own scheduled job (cron)

A cron is a PHP script located in `./crons` folder. The example above is a `./crons/Example.php` file. To create your own cron, simply create your script.

You may create your script (your cron) in any subfolder of `./crons`. Just don't forget to set the proper namespace. In the example above, we have the cron in the root folder, so the namespace is `HubletoMain\Cron`.

## Create a cron class

Once you have your file ready, create a class that extends the `\HubletoMain\Core\Cron`. Do not forget to properly specify the namespace (based on the location of your cron) and name of the class (the same as the name of your script). Your script should now look similar to this:

###### ./crons/MyFirstCron.php
```php
namespace HubletoMain\Cron;
class MyFirstCron extends \HubletoMain\Core\Cron { }
```

## Add a `run()` method

Now, add the `run()` method:

###### ./crons/MyFirstCron.php
```php
namespace HubletoMain\Cron;
class MyFirstCron extends \HubletoMain\Core\Cron {
  public function run(): void { }
}
```

This method takes no arguments. But you can use `$this->main` object to access everything in Hubleto.

## Implement your cron's logic

Now implement the logic of your cron. You may, for example check for the new emails in your external IMAP folder and do something when a new email arrives.

## Invoke cron runner

To run your crons, you must invoke the cron runner in some way. Default implementation is inside the root `index.php`:

###### ./index.php
```php
if (isset($_GET['cron'])) {
  echo $main->getCronManager()->init();
  echo $main->getCronManager()->run();
} else {
  echo $main->render();
}
```

You can read from the code above, the the crons will be run if you include the 'cron' attribute to the Hubleto's URL, e.g. `http://localhost/my-hubleto/?cron`. However, you may implement any other means to run crons in your project.