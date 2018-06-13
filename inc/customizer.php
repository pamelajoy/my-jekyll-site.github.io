<?php

/**
* Create Logo Setting and Upload Control
*/
function tq_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('alt_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'alt_logo',
array(
'label' => 'Alternative Logo',
'section' => 'title_tagline',
'settings' => 'alt_logo',
) ) );
}
add_action('customize_register', 'tq_new_customizer_settings');