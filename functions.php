<?php
/**
 * konstochpyssel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package konstochpyssel
 */

if ( ! function_exists( 'konstochpyssel_setup' ) ) :
	function konstochpyssel_setup() {
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'konstochpyssel' ),
            'menu-2' => esc_html__( 'Filter', 'konstochpyssel' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'konstochpyssel_custom_background_args', array(
			'default-color' => 'f2f3f4',
			'default-image' => '',
		) ) );
	}
endif;
add_action( 'after_setup_theme', 'konstochpyssel_setup' );

function konstochpyssel_scripts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400i|Roboto:400,400i,700,700i', false );
    wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.1.0/css/all.css', false );
    wp_script_add_data( 'font-awesome', array( 'integrity', 'crossorigin' ) , array( 'sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt', 'anonymous' ) );
    wp_enqueue_style( 'konstochpyssel-bundled-style', get_template_directory_uri() . '/dist/style.css' );
	wp_enqueue_style( 'konstochpyssel-style', get_stylesheet_uri() );

    wp_enqueue_script( 'smoothscroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@14/dist/smooth-scroll.polyfills.min.js', false, false, true );
    wp_enqueue_script( 'konstochpyssel-vendor', get_template_directory_uri() . '/dist/vendor.js', false, false, true );
	wp_enqueue_script( 'konstochpyssel-bundle', get_template_directory_uri() . '/dist/bundle.js', false, false, true );
    
    $wnm_custom = array( 
        'restURL' => get_rest_url()
    );
    wp_localize_script('konstochpyssel-bundle', 'wpglobals', $wnm_custom);
}
add_action( 'wp_enqueue_scripts', 'konstochpyssel_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}