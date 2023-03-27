<?php


namespace Drupal\ide_patrimonio\Model;


class CapasMapper {
  public static function mapEntityFromModel($entity, $module_path): Capa {
    $capa = new Capa();
    $capa->setName($entity->nombre);
    $capa->setDescription($entity->descripcion);
    $capa->setImage(self::getCapaImagen($entity->imagen,$module_path));
    $capa->setIcono(self::getCapaIcono($entity->icono,$module_path));
    $capa->setVisor($entity->visor);
    $capa->setExtent($entity->extent);
    return $capa;
  }
  public static function mapEntityFromModelList($entities, $module_path): array {
    $array = [];
    foreach ($entities as $entity) {
      $array[] = self::mapEntityFromModel($entity, $module_path);
    }
    return $array;
  }

  private static function getCapaImagen($imagen, $module_path): string {
    return "/".$module_path."/assets/images/capas/".$imagen;
  }

  private static function getCapaIcono($icono,$module_path): string {
    return "/".$module_path."/assets/images/capas/".$icono;
  }

  public static function mapResultCapasEstadisticas($capas, $module_path): array {
    $array = [];
    foreach ($capas as $entity) {
      $capa = new Capa();
      $capa->setName($entity->nombre);
      $capa->setIcono(self::getCapaIcono($entity->icono,$module_path));
      $capa->setExtent($entity->extent);
      $capa->setCantidadPatrimonios($entity->cantidad_filtrada);
      $capa->setCantidadPatrimoniosNacional($entity->cantidad_nacional);
      $capa->setVisor($entity->visor);
      $array[] = $capa;
    }
    return $array;
  }

}
