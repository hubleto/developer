<?php

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../lib/MyGuideVis.php');
require(__DIR__ . '/../cfg/env.php');
require(__DIR__ . '/../cfg/template.php');

$page = $_GET['page'] ?? '';

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}