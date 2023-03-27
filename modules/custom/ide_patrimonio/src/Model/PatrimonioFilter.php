<?php


namespace Drupal\ide_patrimonio\Model;


use Symfony\Component\HttpFoundation\Request;

class PatrimonioFilter {

  private string $searchText;
  private string $region;
  private string $comuna;
  private string $capa;
  private int $resultsPerPage;
  private ?int $page = NULL;

  /**
   * @return string
   */
  public function getSearchText(): string {
    return $this->searchText;
  }

  /**
   * @param string $searchText
   *
   * @return PatrimonioFilter
   */
  public function setSearchText(string $searchText): PatrimonioFilter {
    $this->searchText = $searchText;
    return $this;
  }

  /**
   * @return string
   */
  public function getRegion(): string {
    return $this->region;
  }

  /**
   * @param string $region
   *
   * @return PatrimonioFilter
   */
  public function setRegion(string $region): PatrimonioFilter {
    $this->region = $region;
    return $this;
  }

  /**
   * @return string
   */
  public function getComuna(): string {
    return $this->comuna;
  }

  /**
   * @param string $comuna
   *
   * @return PatrimonioFilter
   */
  public function setComuna(string $comuna): PatrimonioFilter {
    $this->comuna = $comuna;
    return $this;
  }

  /**
   * @return string
   */
  public function getCapa(): string {
    return $this->capa;
  }

  /**
   * @param string $capa
   *
   * @return PatrimonioFilter
   */
  public function setCapa(string $capa): PatrimonioFilter {
    $this->capa = $capa;
    return $this;
  }

  /**
   * @return int
   */
  public function getResultsPerPage(): int {
    return $this->resultsPerPage;
  }

  /**
   * @param int $resultsPerPage
   *
   * @return PatrimonioFilter
   */
  public function setResultsPerPage(int $resultsPerPage): PatrimonioFilter {
    $this->resultsPerPage = $resultsPerPage;
    return $this;
  }

  /**
   * @return int
   */
  public function getPage(): ?int {
    return $this->page;
  }

  /**
   * @param int $page
   */
  public function setPage(int $page): void {
    $this->page = $page;
  }

  public function loadFromRequest(Request $request): void {
    $this
      ->setSearchText($request->query->get('search-text') ?? '')
      ->setRegion($request->query->get('region') ?? '')
      ->setComuna($request->query->get('comuna') ?? '')
      ->setCapa($request->query->get('capa') ?? '')
      ->setResultsPerPage($request->query->getInt('result-per-page',6))
      ->setPage($request->query->getInt('page'));
  }
}
