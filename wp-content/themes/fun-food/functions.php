<?php
/**
 * fun-food functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fun-food
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fun_food_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fun_food_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fun-food, use a find and replace
		 * to change 'fun-food' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fun-food', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary-menu' => esc_html__( 'Primary Menu', 'fun-food' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fun_food_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fun_food_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fun_food_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fun_food_content_width', 640 );
}
add_action( 'after_setup_theme', 'fun_food_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fun_food_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'NewsLetter', 'fun-food' ),
			'id'            => 'newsletter',
			'description'   => esc_html__( 'Add widgets here.', 'fun-food' ),
			'before_widget' => '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="ft-title color-white text-center"> ',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Info', 'fun-food' ),
			'id'            => 'footer_widgets',
			'description'   => esc_html__( 'Add widgets here.', 'fun-food' ),
			'before_widget' => '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-box-b">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3> ',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'fun_food_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fun_food_scripts() {
	wp_enqueue_style( 'fun-food-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fun-food-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fun-food-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fun_food_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/social-link.php';

/**
 * Customizer Footer.
 */
require get_template_directory() . '/inc/header-footer-custom.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


