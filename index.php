<?php

require('vendor/autoload.php');
require('env.php');

$page = $_GET['page'] ?? '';
$templateConfig = [
  'notFoundPage' => [
    'pageTemplate' => 'not-found',
    'elementTemplates' => [
      'header' => 'header',
      'sidebar' => 'sidebar',
      'footer' => 'footer',
    ],
  ],
  'defaultPageConfig' => [
    'pageTemplate' => 'main',
    'elementTemplates' => [
      'header' => 'header',
      'sidebar' => 'sidebar',
      'footer' => 'footer',
      'onThisPage' => 'on-this-page',
    ],
  ],
];

class MyGuideVis extends \WaiBlue\GuideVis\Loader {
  public function loadPagesFromContent(string $contentFolder, string $pagePrefix = ''): array
  {
    $pages = parent::loadPagesFromContent($contentFolder, $pagePrefix);
    foreach ($pages as $page => $pageData) {
      $content = $this->getPageContent($page);

      $lines = explode("\n", $content);
      foreach ($lines as $line) {
        $line = trim($line);
        if (\str_starts_with($line, "# ")) {
          $pages[$page]['title'] = trim($line, '# ');
          break;
        }
      }

      if (empty($pages[$page]['title'])) $pages[$page]['title'] = $page;
    }
    return $pages;
  }
}

try {
  $renderer = new MyGuideVis($page, $env, $templateConfig);
  $renderer->init();
  echo $renderer->render();
} catch (\Exception $e) {
  echo $e->getMessage();
}