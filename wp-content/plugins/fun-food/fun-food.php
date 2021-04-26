<?php
/*
Plugin Name: Food Plugin
Plugin URI: #
Description: Just another contact form plugin. Simple but flexible.
Author: Adil Patel
Author URI: https://ideasilo.wordpress.com/
Text Domain: fun-food
Domain Path: /languages/
Version: 1.2.0
*/

defined('ABSPATH') or die('Hey, what are you doing here?');

/**
 * Main Elementor Test Extension Class
 *
 * The main class that initiates and runs the plugin.
 *
 * @since 1.0.0
 */
final class Plugin {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Elementor_Test_Extension The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Elementor_Test_Extension An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {

		add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );

	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {

		load_plugin_textdomain( 'fun-food' );

	}

	/**
	 * On Plugins Loaded
	 *
	 * Checks if Elementor has loaded, and performs some compatibility checks.
	 * If All checks pass, inits the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function on_plugins_loaded() {

		if ( $this->is_compatible() ) {
			add_action( 'elementor/init', [ $this, 'init' ] );
		}

	}

	/**
	 * Compatibility Checks
	 *
	 * Checks if the installed version of Elementor meets the plugin's minimum requirement.
	 * Checks if the installed PHP version meets the plugin's minimum requirement.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function is_compatible() {

		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_missing_main_plugin' ] );
			return false;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_elementor_version' ] );
			return false;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', [ $this, 'admin_notice_minimum_php_version' ] );
			return false;
		}

		return true;

	}

	/**
	 * Initialize the plugin
	 *
	 * Load the plugin only after Elementor (and other plugins) are loaded.
	 * Load the files required to run the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init() {
	
		$this->i18n();

		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		// add_action( 'elementor/controls/controls_registered', [ $this, 'init_controls' ] );
        add_action( 'elementor/elements/categories_registered', [$this,'add_elementor_widget_categories'] );

	}

    function add_elementor_widget_categories( $elements_manager ) {

        $elements_manager->add_category(
            'fun_food_cat',
            [
                'title' => __( 'Food Control', 'fun-food' ),
                'icon' => 'fa fa-plug',
            ]
        );
        
    
    }
	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {

		// Include Widget files  
        
        require_once( __DIR__ . '/inc/About_Elementor.php' );
        require_once( __DIR__ . '/inc/Title_Info_Elementor.php' );
        require_once( __DIR__ . '/inc/Product_Menu_Elementor.php' );
        require_once( __DIR__ . '/inc/Testimonial_Elementor.php' );
        require_once( __DIR__ . '/inc/Our_Menu_Elementor.php' );
        require_once( __DIR__ . '/inc/Our_Blog.php' );
        require_once( __DIR__ . '/inc/Pricing_Plan_Elementor.php' );
        
		
		// Register widget
		
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \About_Elementor() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Title_Info_Elementor() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Product_Menu_Elementor() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Testimonial_Elementor() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Our_Menu_Elementor() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Our_Blog() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Pricing_Plan_Elementor() );
		
		
	}
	
	/**
	 * Admin notice	
	 *
	 * Warning when the site doesn't have Elementor installed or activated. 
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_missing_main_plugin() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor */
			esc_html__( '"%1$s" requires "%2$s" to be installed and activated.', 'fun-food' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'fun-food' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'fun-food' ) . '</strong>'
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}


	public function admin_notice_minimum_elementor_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: Elementor 3: Required Elementor version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'fun-food' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'fun-food' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'fun-food' ) . '</strong>',
			 self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

	/**
	 * Admin notice
	 *
	 * Warning when the site doesn't have a minimum required PHP version.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function admin_notice_minimum_php_version() {

		if ( isset( $_GET['activate'] ) ) unset( $_GET['activate'] );

		$message = sprintf(
			/* translators: 1: Plugin name 2: PHP 3: Required PHP version */
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'fun-food' ),
			'<strong>' . esc_html__( 'Elementor Test Extension', 'fun-food' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'fun-food' ) . '</strong>',
			 self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message );

	}

}

Plugin::instance();