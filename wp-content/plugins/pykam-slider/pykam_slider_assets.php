<?php



/**
 * Load the admin area JS
 */
function pykam_slides_admin_script() {

	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	
 	wp_enqueue_script( 'pykam_slide_admin_script', plugin_dir_url( __FILE__ ) . '/js/admin.js', array('jquery'), null, false );
}

add_action( 'admin_enqueue_scripts', 'pykam_slides_admin_script' );


/**
 * Load client JS
 */
function pykam_slides_script() {
 	wp_enqueue_script( 'pykam_slide_script', plugin_dir_url( __FILE__ ) . '/js/slider.js', array('pykam_swiper_script'), null, false );
}

add_action( 'wp_enqueue_scripts', 'pykam_slides_script' );

/**
 * Load swiper JS
 */
function pykam_swiper_script() {
    wp_enqueue_script( 'pykam_swiper_script', plugin_dir_url( __FILE__ ) . '/swiper/dist/swiper-bundle.min.js');
}

add_action( 'wp_enqueue_scripts', 'pykam_swiper_script' );

/**
 * Load swiper styles
 */
function pykam_swiper_styles() {
	wp_enqueue_style( 'pykam_swiper_styles', plugin_dir_url( __FILE__ ) . '/swiper/dist/swiper-bundle.min.css' );
}

add_action( 'wp_enqueue_scripts', 'pykam_swiper_styles' );

/**
 * Load pykam-sliderstyles
 */
function pykam_slider_styles() {
	wp_enqueue_style( 'pykam_slider_styles', plugin_dir_url( __FILE__ ) . '/css/pykam-styles.css' );
}

add_action( 'wp_enqueue_scripts', 'pykam_slider_styles' );



