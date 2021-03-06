<?php


/**
 * Configuration form.
 */
function cms_species_service_config_form($form, $form_state) {
  $form = array(
    'cms_iucnredlist_url' => array(
      '#type' => 'textfield',
      '#title' => t('IUCN Redlist WS base URL'),
      '#default_value' => variable_get('cms_iucnredlist_url', 'http://apiv3.iucnredlist.org/api/v3'),
    ),
    'cms_iucnredlist_apikey' => array(
      '#type' => 'textfield',
      '#title' => t('IUCN Redlist v3 API key'),
      '#description' => t('Please visit <a href="http://apiv3.iucnredlist.org/api/v3/token" target="_blank">this page</a> to generate a valid token for API access'),
      '#default_value' => variable_get('cms_iucnredlist_apikey', '9bb4facb6d23f48efbf424bb05c0c1ef1cf6f468393bc745d42179ac4aca5fee'),
    )
  );
  return system_settings_form($form);
}
