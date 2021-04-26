<?php
function theme_slug_get_social_sites() {
 
 // Store social site names in array
 $social_sites = array(
     'facebook', 
     'twitter', 
     'google-plus',
     'pinterest',
     'linkedin'
 );
return $social_sites;

}
function yamifood_social_link($wp_customize){

$wp_customize->add_section( 'social_settings', array(
 'title' => __( 'Social Media Icons', 'fun-food' ),
 'priority' => 100,
));


$social_sites = theme_slug_get_social_sites();
$priority = 5;

foreach( $social_sites as $social_site ) {

  $wp_customize->add_setting( "$social_site", array(
     'type' => 'theme_mod',
     'capability' => 'edit_theme_options',
     'sanitize_callback' => 'esc_url_raw',

 ));

 $wp_customize->add_control( $social_site, array(
     'label' => ucwords( __( "$social_site URL:", 'social_icon' )),
     'section' => 'social_settings',
     'type' => 'text',
     'priority' => $priority,
 ));
 $priority += 5;
}

}
add_action('customize_register','yamifood_social_link');