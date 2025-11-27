<?php

class MyGuideVis extends \WaiBlue\GuideVis\Loader {
  private bool $asAdmin = false;

  public function setAsAdmin(bool $asAdmin): MyGuideVis
  {
    $this->asAdmin = $asAdmin;
    return $this;
  }

  public function getAsAdmin(): bool
  {
    return $this->asAdmin;
  }

  public function getPageVars(array $pageData = []): array
  {
    $pageVars = parent::getPageVars($pageData);
    $pageVars['bookIndex'] = $this->buildBookIndex();
    $pageVars['guide'] = $this;
    $pageVars['onThisPage'] = $this->getOnThisPage($this->pageContentMd);
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
