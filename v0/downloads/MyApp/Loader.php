<?php

namespace HubletoApp\Custom\MyApp;

class Loader extends \HubletoMain\Core\App
{

  public function init(): void
  {
    parent::init();

    $this->main->router->httpGet([
      '/^my-app\/?$/' => Controllers\Dashboard::class,
      '/^my-app\/contacts\/?$/' => Controllers\Contacts::class,
    ]);

  }

  public function installTables(int $round): void
  {
    $mContact = new \HubletoApp\Custom\MyApp\Models\Contact($this->main);
    $mContact->dropTableIfExists()->install();
  }
}
