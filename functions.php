<?php
/**
 * Starbase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starbase
 */

if ( ! function_exists( 'starbase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starbase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Starbase, use a find and replace
		 * to change 'starbase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'starbase', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'starbase' ),
		) );

		// Register Custom Navigation Walker


		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'starbase_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'starbase_setup' );

function starbase_add_editor_style(){
	add_editor_style('assets/css/editor-style.css');
}
add_action('admin_init', 'starbase_add_editor_style');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starbase_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starbase_content_width', 1140 );
}
add_action( 'after_setup_theme', 'starbase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starbase_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'starbase' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'starbase' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'starbase_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starbase_scripts() {
	wp_enqueue_style('starbase-bs-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

	wp_enqueue_style( 'starbase-style', get_stylesheet_uri() );

	wp_enqueue_script('starbase-jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js', array(), '20151215', true);

	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '20151215', true);

	wp_enqueue_script('starbase-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true);

	wp_enqueue_script('collapse', get_template_directory_uri() . '/assets/js/collapse.js', array('jquery'), '20151215', true);

	wp_enqueue_script('nav-scroll', get_template_directory_uri() . '/assets/js/nav-scroll.js', array('jquery'), '20151215', true);

	wp_enqueue_script('bootstrap-hover', get_template_directory_uri() . '/assets/js/bootstrap-hover.js', array('jquery'), '20151215', true);

	wp_enqueue_script( 'starbase-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starbase_scripts' );


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
 * Bootstrap Navwalker.
 */
require get_template_directory() . '/inc/bootstrap-wp-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Replaces the excerpt "more" text by a link.
*/
function new_excerpt_more($more) {
	global $post;
	return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
* Limit excerpt words
*/
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...<a class="moretag" href="'. get_permalink($post->ID) . '"> continue reading &raquo;</a>';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
