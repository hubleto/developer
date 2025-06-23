<?php

namespace HubletoApp\Custom\MyApp\Controllers;

class Contacts extends \HubletoMain\Core\Controllers\Controller
{

  public function prepareView(): void
  {
    parent::prepareView();
    $this->setView('@HubletoApp:Custom:MyApp/Contacts.twig');
  }

}