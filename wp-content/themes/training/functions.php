<?php
/**
 * training functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package training
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', time() );
}

if ( ! function_exists( 'training_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function training_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on training, use a find and replace
		 * to change 'training' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'training', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'training' ),
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
				'training_custom_background_args',
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
add_action( 'after_setup_theme', 'training_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function training_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'training_content_width', 640 );
}
add_action( 'after_setup_theme', 'training_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function training_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'training' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'training' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'training_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function training_scripts() {
	wp_enqueue_style( 'training-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'training-style', 'rtl', 'replace' );
    /**
     * my style
     */
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri(). '/assets/css/bootstrap.min.css', array(), 'v3.2.0' );
    wp_enqueue_style( 'main', get_template_directory_uri(). '/assets/css/main.css', array(), _S_VERSION );
    wp_enqueue_style( 'blue', get_template_directory_uri(). '/assets/css/blue.css', array(), _S_VERSION );
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri(). '/assets/css/owl.carousel.css', array(), 'v1.3.3' );
    wp_enqueue_style( 'owl.transitions', get_template_directory_uri(). '/assets/css/owl.transitions.css', array(), 'v1.3.2' );
    wp_enqueue_style( 'animate.min', get_template_directory_uri(). '/assets/css/animate.min.css', array(), 'v1.3.2' );
    wp_enqueue_style( 'rateit', get_template_directory_uri(). '/assets/css/rateit.css', array(), _S_VERSION );
    wp_enqueue_style( 'bootstrap-select.min', get_template_directory_uri(). '/assets/css/bootstrap-select.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'lightbox', get_template_directory_uri(). '/assets/css/lightbox.css', array(), _S_VERSION );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri(). '/assets/css/font-awesome.css', array() );
    wp_enqueue_style( 'Roboto', 'http://fonts.googleapis.com/css?family=Roboto:300,400,500,700', array() );
    wp_enqueue_style( 'Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800', array() );
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array() );


	wp_enqueue_script( 'training-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
     * my script
     */
    wp_enqueue_script( 'jquery-1.11.1.min', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap-hover-dropdown', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'echo.min', get_template_directory_uri() . '/assets/js/echo.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.easing-1.3.min', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap-slider.min', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.rateit.min', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'lightbox.min', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'training_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

