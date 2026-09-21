<?php

$page = trim($_GET['page'] ?? '', '/');
$pageParts = explode("/", $page);
$version = reset($pageParts);

$availableVersions = ['v1', 'v2'];
$defaultVersion = 'v1';

if ($version === 'v0') {
  array_shift($pageParts);
  $page = implode('/', $pageParts);
}

if (!in_array($version, $availableVersions, true)) {
  $baseUrl = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/.');
  $path = implode('/', array_map('rawurlencode', $pageParts));
  $query = $_GET;
  unset($query['page']);
  $queryString = http_build_query($query);
  header('Location: ' . $baseUrl . '/' . $defaultVersion . '/' . $path
    . ($queryString === '' ? '' : '?' . $queryString), true, 302);
  exit;
} else if (is_file(__DIR__ . "/{$version}/index.php")) {
  require __DIR__ . "/{$version}/index.php";
}
