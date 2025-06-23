<?php

namespace HubletoApp\Custom\MyApp\Controllers;

class Dashboard extends \HubletoMain\Core\Controllers\Controller
{

  public function prepareView(): void
  {
    parent::prepareView();
    $this->viewParams['now'] = date('Y-m-d H:i:s');
    $this->setView('@HubletoApp:Custom:MyApp/Dashboard.twig');
  }

}