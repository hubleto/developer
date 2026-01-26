<?php

$page = $_GET['page'] ?? '';
$pageParts = explode("/", $page);
$version = reset($pageParts);

$availableVersions = ['v0'];
$lastVersion = end($availableVersions);

if (!in_array($version, $availableVersions)) {
  $upCount = count($pageParts) - 1;
  header("Location: " . str_repeat("../", $upCount) . "{$lastVersion}/{$page}", 302);  
} else if (file_exists("{$version}/index.php")) {
  include("{$version}/index.php");
}