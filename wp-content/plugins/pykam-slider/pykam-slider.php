<?php
/**
 * Plugin Name: Slider
 * Description: Multisite Slider plugin
 * 
 * Author:      Albert Kuular
 * Text Domain: pykam-slider
 */


 if ( ! defined( 'ABSPATH' ) ) {
	exit;
 }

 require_once __DIR__ . '/pykam_slider_metabox.php';

 /**
 * Register the "slider" custom post type
 */
function pykam_setup_post_type() {
	register_post_type( 'slider', [
        'label' => 'Slides',
        'public' => false,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 26,
        'menu_icon' => 'dashicons-slides',
        'supports' => ['title'],
        'rewrite' => false,
        'query_var' => false,
         ] ); 
} 
add_action( 'init', 'pykam_setup_post_type' );


/**
 * Load the admin area JS
 */
function pykam_slides_admin_script( $hook ) {

	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	
 	wp_enqueue_script( 'pykam_slide_admin_script', plugin_dir_url( __FILE__ ) . '/js/admin.js', array('jquery'), null, false );
}

add_action( 'admin_enqueue_scripts', 'pykam_slides_admin_script' );


/**
 * Shortcode for Slider post type
 */
function pykam_slider_shortcode( $atts ) {

    $content = '';

    if (!isset($atts[0])) {
        return $content;
    }

    $slides = get_post_meta($atts[0], 'pykam_slider_image_source', true);
    $content .= '<div class="pykam-slides">';

    foreach ($slides as $slide) {
        $content .= '<div class="pykam-slide"><img src="' . $slide . '" /></div>';
    }
    $content .= '</div>';

	return $content;

}

add_shortcode( 'pykam-slider', 'pykam_slider_shortcode' );

