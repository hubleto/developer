<?php

require('vendor/autoload.php');
require('lib/MyGuideVis.php');
require('cfg/env.php');
require('cfg/template.php');

$page = $_GET['page'];
if (str_starts_with($page, 'v0/')) $page = substr($page, 3); // remove v0/ from the page

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->setAsAdmin(true);

  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}