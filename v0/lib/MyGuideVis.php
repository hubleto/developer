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
}
