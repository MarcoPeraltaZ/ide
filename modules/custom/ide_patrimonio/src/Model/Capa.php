<?php


namespace Drupal\ide_patrimonio\Model;


class Capa {
  private $name;
  private $description;
  private $image;
  private $icono;
  private $visor;
  private $extent;
  private $cantidadPatrimonios;
  private $cantidadPatrimoniosNacional;

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
  public function getDescription() {
    return $this->description;
  }

  /**
   * @param mixed $description
   */
  public function setDescription($description): void {
    $this->description = $description;
  }

  /**
   * @return mixed
   */
  public function getImage() {
    return $this->image;
  }

  /**
   * @param mixed $image
   */
  public function setImage($image): void {
    $this->image = $image;
  }

  /**
   * @return mixed
   */
  public function getIcono() {
    return $this->icono;
  }

  /**
   * @param mixed $icono
   */
  public function setIcono($icono): void {
    $this->icono = $icono;
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
  public function getExtent() {
    return $this->extent;
  }

  /**
   * @param mixed $extent
   */
  public function setExtent($extent): void {
    $this->extent = $extent;
  }

  /**
   * @return mixed
   */
  public function getCantidadPatrimonios() {
    return $this->cantidadPatrimonios;
  }

  /**
   * @param mixed $cantidadPatrimonios
   */
  public function setCantidadPatrimonios($cantidadPatrimonios): void {
    $this->cantidadPatrimonios = $cantidadPatrimonios;
  }

  /**
   * @return mixed
   */
  public function getCantidadPatrimoniosNacional() {
    return $this->cantidadPatrimoniosNacional;
  }

  /**
   * @param mixed $cantidadPatrimoniosNacional
   */
  public function setCantidadPatrimoniosNacional($cantidadPatrimoniosNacional): void {
    $this->cantidadPatrimoniosNacional = $cantidadPatrimoniosNacional;
  }

}
