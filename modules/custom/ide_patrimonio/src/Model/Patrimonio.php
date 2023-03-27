<?php


namespace Drupal\ide_patrimonio\Model;


class Patrimonio implements \JsonSerializable{

  private $id;
  private $name;
  private $region;
  private $provincia;
  private $comuna;
  private $latitude;
  private $longitude;
  private $url;
  private $capa;
  private $capa_ic;
  private $visor;
  private $zoom;

  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id): void {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getName() {
    return $this->name;
  }

  /**
   * @param mixed $name
   */
  public function setName($name): void {
    $this->name = $name;
  }

  /**
   * @return mixed
   */
  public function getRegion() {
    return $this->region;
  }

  /**
   * @param mixed $region
   */
  public function setRegion($region): void {
    $this->region = $region;
  }

  /**
   * @return mixed
   */
  public function getProvincia() {
    return $this->provincia;
  }

  /**
   * @param mixed $provincia
   */
  public function setProvincia($provincia): void {
    $this->provincia = $provincia;
  }

  /**
   * @return mixed
   */
  public function getComuna() {
    return $this->comuna;
  }

  /**
   * @param mixed $comuna
   */
  public function setComuna($comuna): void {
    $this->comuna = $comuna;
  }

  /**
   * @return mixed
   */
  public function getLatitude() {
    return $this->latitude;
  }

  /**
   * @param mixed $latitude
   */
  public function setLatitude($latitude): void {
    $this->latitude = $latitude;
  }

  /**
   * @return mixed
   */
  public function getLongitude() {
    return $this->longitude;
  }

  /**
   * @param mixed $longitude
   */
  public function setLongitude($longitude): void {
    $this->longitude = $longitude;
  }

  /**
   * @return mixed
   */
  public function getUrl() {
    return $this->url;
  }

  /**
   * @param mixed $url
   */
  public function setUrl($url): void {
    $this->url = $url;
  }

  /**
   * @return mixed
   */
  public function getCapa() {
    return $this->capa;
  }

  /**
   * @param mixed $capa
   */
  public function setCapa($capa): void {
    $this->capa = $capa;
  }

  /**
   * @return mixed
   */
  public function getCapa_Ic() {
    return $this->capa_ic;
  }

  /**
   * @param mixed $capa_ic
   */
  public function setCapaIc($capa_ic): void {
    $this->capa_ic = $capa_ic;
  }

  public function jsonSerialize(){
    return get_object_vars($this);
  }

  /**
   * @return mixed
   */
  public function getVisor() {
    return $this->visor;
  }

  /**
   * @param mixed $visor
   */
  public function setVisor($visor): void {
    $this->visor = $visor;
  }

  /**
   * @return mixed
   */
  public function getZoom() {
    return $this->zoom;
  }

  /**
   * @param mixed $zoom
   */
  public function setZoom($zoom): void {
    $this->zoom = $zoom;
  }

}
