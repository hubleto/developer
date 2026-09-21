<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/lib/MyGuideVis.php';
require __DIR__ . '/cfg/paths.php';
require __DIR__ . '/cfg/template.php';

$page = $_GET['page'] ?? '';
$version = basename(__DIR__);
if ($page === $version) $page = '';
if (str_starts_with($page, $version . '/')) $page = substr($page, strlen($version) + 1);

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->searchPage = 'search';
  $renderer->setAsAdmin(true);

  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}
