<?php

namespace Drupal\ide_patrimonio\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure ide_patrimonio settings for this site.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'ide_patrimonio_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['ide_patrimonio.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['visor_cerca_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('URL Visor Patrimonio Cerca de Mí'),
      '#default_value' => $this->config('ide_patrimonio.settings')->get('visor_cerca_url'),
    ];
    $form['visor_territorial_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('URL Visor Territorial'),
      '#default_value' => $this->config('ide_patrimonio.settings')->get('visor_territorial_url'),
    ];
    $form['visor_estadistico_url'] = [
      '#type' => 'textfield',
      '#title' => $this->t('URL Visor Estadístico'),
      '#default_value' => $this->config('ide_patrimonio.settings')->get('visor_estadistico_url'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (!str_contains($form_state->getValue('visor_cerca_url'), 'http')) {
      $form_state->setErrorByName('visor_cerca_url', $this->t('La URL debe contener http'));
    }
    if (!str_contains($form_state->getValue('visor_territorial_url'), 'http')) {
      $form_state->setErrorByName('visor_territorial_url', $this->t('La URL debe contener http'));
    }
    if (!str_contains($form_state->getValue('visor_estadistico_url'), 'http')) {
      $form_state->setErrorByName('visor_estadistico_url', $this->t('La URL debe contener http'));
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('ide_patrimonio.settings')
      ->set('visor_cerca_url', $form_state->getValue('visor_cerca_url'))
      ->set('visor_territorial_url', $form_state->getValue('visor_territorial_url'))
      ->set('visor_estadistico_url', $form_state->getValue('visor_estadistico_url'))
      ->save();
    parent::submitForm($form, $form_state);
  }

}
