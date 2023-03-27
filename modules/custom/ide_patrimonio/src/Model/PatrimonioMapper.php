<?php


namespace Drupal\ide_patrimonio\Model;


class PatrimonioMapper {

  public static function mapEntityFromModel($entity, $module_path): Patrimonio {
    $patrimonio = new Patrimonio();
    $patrimonio->setId($entity->id);
    $patrimonio->setName($entity->name);
    $patrimonio->setRegion($entity->region);
    $patrimonio->setProvincia($entity->provincia);
    $patrimonio->setComuna($entity->comuna);
    $patrimonio->setLatitude($entity->latitude);
    $patrimonio->setLongitude($entity->longitude);
    $patrimonio->setCapa($entity->nombre_capa);
    $patrimonio->setUrl(self::getImageURL($entity, $module_path));
    $patrimonio->setCapaIc(self::getIconoCapa($entity, $module_path));
    $patrimonio->setVisor($entity->visor_capa_satelital);
    $patrimonio->setZoom($entity->zoom);
    return $patrimonio;
  }

  public static function mapEntityFromModelList($entities, $module_path): array {
    $array = [];
    foreach ($entities as $entity) {
      $array[] = self::mapEntityFromModel($entity, $module_path);
    }
    return $array;
  }

  /**
   * @param string $module_path
   *
   * @return string
   */
  private static function getImageURL($entity, string $module_path): string {
    $entityImagen = $entity->url;
    if(empty($entityImagen)){
      //get the bigger image
      return str_replace('.png', '_540.png', self::getIconoCapa($entity, $module_path));
    }

    if(!str_contains($entityImagen, 'src=')) {
      return $entityImagen;
    }

    $urlImage = "";
    $doc = new \DOMDocument();
    @$doc->loadHTML($entityImagen);
    $imgs = $doc->getElementsByTagName('img');
    if($imgs !== NULL && count($imgs) > 0){
      $urlImage = $imgs[0]->getAttribute('src');
    }
    return $urlImage;
  }


  private static function getIconoCapa($patrimonio, string $module_path): string {
    return "/$module_path/assets/images/capas/".$patrimonio->icono_capa;
  }
}
