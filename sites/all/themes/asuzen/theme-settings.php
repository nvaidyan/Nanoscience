<?php
// asuzen 6.x-3.x

// Include the definition of zen_settings() and zen_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'zen') . '/theme-settings.php';


/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @return
 *   A form array.
 */
function asuzen_settings($saved_settings) {

  // Get the default values from the .info file.
  $defaults = zen_theme_get_default_settings('asuzen');

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  /*
   * Create the form using Forms API: http://api.drupal.org/api/6
   */

  $form = array();

  $form['asuzen_asu_header'] = array(
    '#type'          => 'textfield',
    '#title'         => t('ASU header path'),
    '#description'   => t("Enter the path to the custom header."),
    '#default_value' => $settings['asuzen_asu_header'],
    '#element_validate' => array('asuzen_asu_header_validate'),
  );

  $form['asuzen_fixed'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Fixed width layout'),
    '#default_value' => $settings['asuzen_fixed'],
    '#description'   => t("Sets a fixed-width of 1000px."),
  );


  // Add the base theme's settings.
  $form += zen_settings($saved_settings, $defaults);

  // Remove some of the base theme's settings.
  unset($form['themedev']['zen_layout']); // We don't need to select the base stylesheet.

  // Return the form
  return $form;
}

/**
* Capture theme settings submissions and validate
*/
function asuzen_asu_header_validate ($element, &$form_state) {
   $header_path = $form_state['values']['asuzen_asu_header'];

   if (empty($header_path)) {
      form_error($element, t('ASU header path: This field is required.'));
   }
   else if (!file_exists($header_path)) { 
      form_error($element, t('ASU header path: This is not a valid path or the file does not exist.'));
   }
}
