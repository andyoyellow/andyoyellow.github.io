<?php
/**
 * @package Sidekick
 * @since Sidekick 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 810;


function sidekick_widgets_uninit() {
	unregister_sidebar( 'sidebar-1' );
}
add_action( 'widgets_init', 'sidekick_widgets_uninit', 11 );


/**
 * Set up Sidekick specific setting.
 */
function sidekick_setup() {
	/**
	 * Declare textdomain for this child theme.
	 */
	load_child_theme_textdomain( 'sidekick', get_stylesheet_directory() . '/languages' );

	/**
	 * Remove Featured Content
	 */
	remove_theme_support( 'featured-content' );

	/**
	 * Add Panoramic image size
	 */
	add_image_size( 'sidekick-panoramic', 5000, 500, false );
}
add_action( 'after_setup_theme', 'sidekick_setup', 11 );


/**
 * Enqueue scripts and styles
 */
function sidekick_scripts() {
	wp_dequeue_script( 'superhero-script' );
	wp_dequeue_script( 'superhero-flex-slider' );
	wp_dequeue_style( 'superhero-flex-slider-style' );

	wp_enqueue_script( 'sidekick-script', get_stylesheet_directory_uri() . '/js/sidekick.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'sidekick_scripts', 11 );

/**
 * Enqueue header image admin styles
 */
function sidekick_admin_header_style( $hook_suffix ) {

	if ( 'appearance_page_custom-header' != $hook_suffix )
		return;
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			background: #f2f2f2 !important;
			max-height: 9999px !important;
		}
	</style>
<?php
}
add_action( 'admin_enqueue_scripts', 'sidekick_admin_header_style' );


/**
 * Set new custom header default color
 */
function sidekick_custom_header_args( $args ) {
	$args = array(
		'default-image'          => '',
		'default-text-color'     => '262626',
		'width'                  => 480,
		'height'                 => 150,
		'flex-width'             => true,
		'flex-height'            => true,
		'wp-head-callback'       => 'superhero_header_style',
		'admin-head-callback'    => 'superhero_admin_header_style',
		'admin-preview-callback' => 'superhero_admin_header_image',
	);
	return $args;
}
add_filter( 'superhero_custom_header_args', 'sidekick_custom_header_args', 999 );


/**
 * Set Sidekick theme colors
 */
$themecolors = array(
	'bg'     => 'e2e2e2',
	'border' => 'dddddd',
	'text'   => '373737',
	'link'   => '1982d1',
	'url'    => '1982d1',
);
