<?php

require('vendor/autoload.php');
require('lib/MyGuideVis.php');
require('cfg/env.php');
require('cfg/template.php');

$page = substr($_GET['page'] ?? '', 3); // remove v0/ from the page

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->setAsAdmin(true);

  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}