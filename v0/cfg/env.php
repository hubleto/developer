<?php

ini_set('display_errors', 1);
ini_set("error_reporting", E_ALL ^ E_DEPRECATED);

$env = [
  'guideRootFolder' => __DIR__ . '/..',
  'guideRootUrl' => '/hubleto/public/developer/v0',

  'templateRootFolder' => __DIR__ . '/../template',
  'templateRootUrl' => '/hubleto/public/developer/v0/template',

  'bookRootFolder' => __DIR__ . '/../book',
  'bookRootUrl' => '/hubleto/public/developer/v0/book',
];
