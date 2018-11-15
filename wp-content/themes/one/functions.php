<?php
/**
 * one functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package one
 */

if ( ! function_exists( 'one_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function one_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on one, use a find and replace
     * to change 'one' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'one', get_template_directory() . '/languages' );

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
    'menu-1' => esc_html__( 'Primary', 'one' ),
    ) );

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
    add_theme_support( 'custom-background', apply_filters( 'one_custom_background_args', array(
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
//		add_theme_support( 'custom-logo', array(
//			'height'      => 250,
//			'width'       => 250,
//			'flex-width'  => true,
//			'flex-height' => true,
//		) );
  }
endif;
add_action( 'after_setup_theme', 'one_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function one_content_width() {
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters( 'one_content_width', 640 );
}
add_action( 'after_setup_theme', 'one_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function one_scripts() {

  wp_enqueue_style( 'css', get_template_directory_uri().'/build/app.css', '', '234234324328', false );

  wp_enqueue_script( 'js', get_template_directory_uri() . '/build/app.js', array(), '20151215', true );

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}
}
add_action( 'wp_enqueue_scripts', 'one_scripts' );

// diverse jquery
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery/jquery.min.js', array(), '2015121518', false );
  wp_enqueue_script('jquery');
}

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

// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
  function wpex_mce_text_sizes( $initArray ){
    $initArray['fontsize_formats'] = "9px 10px 11px 12px 13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 25px 26px 27px 28px 29px 30px 31px 32px 33px 34px 35px 36px 37px 38px 39px 40px 41px 42px 43px 44px 45px 50px 55px 60px 65px 70px 75px 80px";
    return $initArray;
  }
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

//custom fonts mce editor
add_filter( 'tiny_mce_before_init', 'mce_custom_fonts' );
function mce_custom_fonts( $init ) {
  $theme_advanced_fonts = "Lora=Lora,Arial,sans-serif;" .
  "Avenir=Avenir,Helvetica,sans-serif;" .
  "Lyon Display=Lyon Display,Times New Roman,sans-serif;".
  "Arial=arial,helvetica,sans-serif;" .
  "Kalam=Kalam,sans-serif;" .
  "Arial Black=arial black,avant garde;" .
  "Book Antiqua=book antiqua,palatino;" .
  "Comic Sans MS=comic sans ms,sans-serif;" .
  "Courier New=courier new,courier;" .
  "Georgia=georgia,palatino;" .
  "Helvetica=helvetica;" .
  "Impact=impact,chicago;" .
  "Symbol=symbol;" .
  "Tahoma=tahoma,arial,helvetica,sans-serif;" .
  "Terminal=terminal,monaco;" .
  "Times New Roman=times new roman,times;" .
  "Trebuchet MS=trebuchet ms,geneva;" .
  "Verdana=verdana,geneva;" .
  "Webdings=webdings;" .
  "Wingdings=wingdings,zapf dingbats";
  $init['font_formats'] = $theme_advanced_fonts;
  return $init;
}

/* -- styles for admin panel -- */
function my_admin_theme_style() {
  add_editor_style(get_template_directory_uri() . '/build/css_admin_panel.css');
}
add_action('after_setup_theme', 'my_admin_theme_style');

/* --- */
function kauffman_widgets_init() {
  register_sidebar( array(
  'name'          => 'Footer left',
  'id'            => 'footer_left',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'kauffman_widgets_init' );

function widget_center() {
  register_sidebar( array(
  'name'          => 'Footer center',
  'id'            => 'footer_center',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'widget_center' );

function widget_right() {
  register_sidebar( array(
  'name'          => 'Footer right',
  'id'            => 'footer_right',
  'before_widget' => '<div>',
  'after_widget'  => '</div>',
  'before_title'  => '<h2 class="widget-title">',
  'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'widget_right' );

/* opacity */
require_once( get_stylesheet_directory() . '/php/tinymce/opacity_tinymce.php' );

/* locations taxonomy and post type */
require_once( get_stylesheet_directory() . '/php/locations/locations.php' );

/* question taxonomy and post type */
require_once( get_stylesheet_directory() . '/php/question/question.php' );

/* unyson enable on posts */

function _thz_filter_auto_activate_builder() {

  $auto = array(
  'post' => true,
  'page' => true
  //'press_releases' => true,
  //'team' => true
  );

  return  $auto;
}
add_filter( 'fw_ext_page_builder_settings_options_post_types_default_value', '_thz_filter_auto_activate_builder' );