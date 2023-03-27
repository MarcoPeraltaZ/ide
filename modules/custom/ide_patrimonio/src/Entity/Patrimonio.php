<?php

namespace Drupal\ide_patrimonio\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\ContentEntityInterface;

/**
 * Defines the patrimonio entity.
 *
 * @ingroup patrimonio
 *
 * @ContentEntityType(
 *   id = "patrimonio",
 *   label = @Translation("patrimonio"),
 *   base_table = "patrimonio",
 *   entity_keys = {
 *     "id" = "id",
 *     "name" = "name",
 *     "region" = "region",
 *     "provincia" = "provincia",
 *     "comuna" = "comuna",
 *     "latitude" = "latitude",
 *     "longitude" = "longitude",
 *     "url" = "url",
 *   },
 * )
 */

class Patrimonio extends ContentEntityBase implements ContentEntityInterface {

  //Crea base de datos
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    // Standard field, used as unique if primary index.
    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('ID del patrimonio'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Nombre'))
      ->setDescription(t('nombre del Patrimonio'))
      ->setReadOnly(TRUE);

    $fields['region'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Región'))
      ->setDescription(t('Región del patrimonio'))
      ->setReadOnly(TRUE);

    $fields['provincia'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Provincia'))
      ->setDescription(t('Provincia del patrimonio'))
      ->setReadOnly(TRUE);

    $fields['comuna'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Comuna'))
      ->setDescription(t('Comuna del patrimonio'))
      ->setReadOnly(TRUE);

    $fields['latitude'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Latitud'))
      ->setDescription(t('Latitud'))
      ->setReadOnly(TRUE);

    $fields['longitude'] = BaseFieldDefinition::create('float')
      ->setLabel(t('Longitud'))
      ->setDescription(t('Longitud'))
      ->setReadOnly(TRUE);

    $fields['url'] = BaseFieldDefinition::create('string')
      ->setLabel(t('URL'))
      ->setDescription(t('url imagen'))
      ->setReadOnly(TRUE);


    return $fields;
  }
}
?>
