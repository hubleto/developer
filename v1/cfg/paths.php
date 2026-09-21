<?php

// Public, environment-independent paths for this documentation version.

$rootFolder = dirname(__DIR__);
$guideVersion = basename($rootFolder);
$scriptFolder = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
$guideRootUrl = rtrim($scriptFolder, '/.');
$versionPosition = strpos($guideRootUrl . '/', '/' . $guideVersion . '/');
$guideRootUrl = $versionPosition === false
  ? $guideRootUrl . '/' . $guideVersion
  : substr($guideRootUrl, 0, $versionPosition + strlen($guideVersion) + 1);

$env = [
  'guideVersion' => $guideVersion,
  'guideRootFolder' => $rootFolder,
  'guideRootUrl' => $guideRootUrl,
  'templateRootFolder' => $rootFolder . '/template',
  'templateRootUrl' => $guideRootUrl . '/template',
  'bookRootFolder' => $rootFolder . '/book',
  'bookRootUrl' => $guideRootUrl . '/book',
];
