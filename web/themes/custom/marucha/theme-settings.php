<?php

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function marucha_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {

  $form['twitter_url'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter URL'),
    '#description'   => t("TwitterアカウントのURLを入力します。"),
    '#default_value' => theme_get_setting('twitter_url'),
  );

}