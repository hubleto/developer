<?php

class MyGuideVis extends \WaiBlue\GuideVis\Loader {
  private bool $asAdmin = false;
  public string $searchPage = 'search';

  public function setAsAdmin(bool $asAdmin): MyGuideVis
  {
    $this->asAdmin = $asAdmin;
    return $this;
  }

  public function getAsAdmin(): bool
  {
    return $this->asAdmin;
  }

  public function init()
  {
    parent::init();
    if ($this->page === $this->searchPage && isset($_GET['q'])) {
      $this->pageContentMd = '';
    }
  }

  public function pageExists(string $page): bool
  {
    if (parent::pageExists($page)) return true;
    $found = false;
    $this->walkTableOfContents(function($item) use ($page, &$found) {
      if ($item['page'] === $page) $found = true;
    });
    return $found;
  }

  public function getPageContent(string $page): string
  {
    $pageContentFile = $this->env['bookRootFolder'] . '/content/pages/' . $page . '.md';
    if (!is_file($pageContentFile)) {
      if ($page === $this->searchPage) return '';
      $slug = basename($page);
      $title = ucwords(str_replace('-', ' ', $slug));
      return "# {$title}\n\n{% include 'components/work-in-progress.twig' %}\n";
    }
    return parent::getPageContent($page);
  }

  public function getPageVars(array $pageData = []): array
  {
    $pageVars = parent::getPageVars($pageData);
    $pageVars['bookIndex'] = $this->buildBookIndex();
    $pageVars['guide'] = $this;
    $pageVars['onThisPage'] = $this->getOnThisPage($this->pageContentMd);

    $pagesFolder = $this->env['bookRootFolder'] . '/content/pages/';
    $pageExistsMap = [];
    $this->walkTableOfContents(function($item) use (&$pageExistsMap, $pagesFolder) {
      $pageExistsMap[$item['page']] = is_file($pagesFolder . $item['page'] . '.md');
    });
    $pageVars['pageExistsMap'] = $pageExistsMap;

    return $pageVars;
  }

  public function getOnThisPage(string $mdContent): array
  {
    $onThisPage = parent::getOnThisPage($mdContent);
    foreach ($onThisPage as $key => $value) {
      if (empty($key)) unset($onThisPage[$key]);
    }
    return $onThisPage;
  }

  public function loadPageConfig(): array
  {
    if (!$this->pageExists($this->page)) {
      $config = $this->templateConfig['notFoundPage'];
    } else {
      $config = array_merge($this->templateConfig['defaultPageConfig'] ?? [], $this->bookConfig['pages'][$this->page] ?? []);
    }

    $toc = [];
    $prevPage = [];
    $setNextPage = false;
    $this->walkTableOfContents(function($page) use(&$toc, &$prevPage, &$setNextPage) {
      if ($page['page'] == $this->page) {
        $toc = $page;
        $toc['prevPageData'] = $prevPage;
        $setNextPage = true;
      } else if ($setNextPage) {
        $toc['nextPageData'] = $page;
        $setNextPage = false;
      } else {
        $prevPage = $page;
      }
    });

    $config['tocData'] = $toc;

    return $config;
  }

}
