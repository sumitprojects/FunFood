<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fun-food
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet"
        href="<?php  echo get_template_directory_uri(); ?>/css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="<?php  echo get_template_directory_uri(); ?>/js/modernizer.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'fun-food' ); ?></a>


        <?php header_layout(); ?>