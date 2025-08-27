# Automation hooks

Automation hooks serve the purpose as their name suggest - to automate workflow.

If you have your own installation of Hubleto, you may need to create your custom automations to improve efficiency of your Hubleto even more. This can be done very easly - by creating **automation hooks**.

Take a look at this example:

###### ./hooks/Default/LogUsage.php
```php
namespace Hubleto\Erp\Hook\Default;
class LogUsage extends \Hubleto\Erp\Core\Hook {
  public function run(string $event, array $args): void {
    if ($event == 'controller:init-start') {
      $controller = $args[0];
      $this->getAppManager()->getApp(\Hubleto\App\Community\Usage::class)->logUsage($controller);
    }
  }
}
```

This is the simplest hook utlizing the `Usage` app and its `logUsage()` method to log usage of any controller. Let's break it down.

## Create a hook script

A hook is a PHP script located in `./hooks` folder. The example above is a `./hooks/Default/LogUsage.php` file. To create your own hook, simply create your script.

You may create your script (your hook) in any subfolder of `./hooks`. Just don't forget to set the proper namespace. In the example above, we have the hook in the `Default` folder, so the namespace is `Hubleto\Erp\Hook\Default`.

## Create a Hook class

Once you have your file ready, create a class that extends the `\Hubleto\Erp\Core\Hook`. Do not forget to properly specify the namespace (based on the location of your hook) and name of the class (the same as the name of your script). Your script should now look similar to this:

###### ./hooks/MyHooks/MyFirstHook.php
```php
namespace Hubleto\Erp\Hook\MyHooks;
class MyFirstHook extends \Hubleto\Erp\Core\Hook { }
```

## Add a `run()` method

Now, add the `run()` method:

###### ./hooks/MyHooks/MyFirstHook.php
```php
namespace Hubleto\Erp\Hook\MyHooks;
class MyFirstHook extends \Hubleto\Erp\Core\Hook {
  public function run(string $event, array $args): void { }
}
```

This method takes two arguments:

  * `string $event`
    * Name of the event on which the hook is called
  * `array $args`
    * Array of arguments for the event. This may be different for each event. For example, event `controller:init-start` used in the example above provides as the single argument a controller from which the hook has been called.

## Implement your hook's logic

Now implement the logic of your hook. You may do something at each `$event` but most preferrably, you will compare the `$event` to some specific name and do something only in the case of this event.

## Hook events

See [list of availabe events](events).

## Learn by examples

There are many built-in hooks available. Check the source here: https://github.com/hubleto/main/tree/main/hooks