<?php

function footer_setup($wp_customize){
    
    $wp_customize->add_section( 'footer', array(
		'title' => __( 'Footer', 'fun-food' ),
		'priority' => 100,
	   ));

	
	$wp_customize->add_setting('footer_logo', array(
        'default'  => '',
        'type'     => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize,'footer_logo', array(
        'label' => __( 'Footer Logo', 'fun-food' ),
        'section' => 'footer',
        'settings' => 'footer_logo',
	)));
	}
add_action('customize_register','footer_setup');

function header_setup($wp_customize){
    
    $wp_customize->add_section( 'header', array(
		'title' => __( 'Header', 'fun-food' ),
		'priority' => 100,
	   ));
    
    $wp_customize->add_setting( "banner_title", array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    )); 
    $wp_customize->add_control( "banner_title", array(
        'label' =>__( "Banner Title", 'banner_title' ),
        'section' => 'header',
        'type' => 'text',
        
    ));

    $wp_customize->add_setting( "small_title", array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        ));
   $wp_customize->add_control( "small_title", array(
    'label' =>__( "Small Title", 'small_title' ),
    'section' => 'header',
    'type' => 'text',
    ));

    $wp_customize->add_setting( "banner_content", array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( "banner_content", array(
        'label' =>__( "Banner Content", 'banner_content' ),
        'section' => 'header',
        'type' => 'text',
        ));

    $wp_customize->add_setting( "banner_btn_link", array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( "banner_btn_link", array(
        'label' => ucwords( __( "Banner Button URL:", 'banner_btn_link' )),
        'section' => 'header',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting( "banner_btn_title", array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control( "banner_btn_title", array(
        'label' =>__( "Banner Button Title", 'banner_btn_title' ),
        'section' => 'header',
        'type' => 'text',
    ));
    
	}
add_action('customize_register','header_setup');	