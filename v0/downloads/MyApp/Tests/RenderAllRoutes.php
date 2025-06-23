<?php

namespace HubletoApp\Custom\MyApp\Tests;

class RenderAllRoutes extends \HubletoMain\Core\AppTest
{

  public function run(): void
  {
    $this->main->render('my-app');
    $this->main->render('my-app/contacts');
  }

}
