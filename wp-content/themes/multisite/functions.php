<?php

function multisite_enqueue_tailwindcss() { 
    wp_enqueue_style('tailwindcss', get_template_directory_uri() . '/multisite.css' ); 
} 

add_action('wp_enqueue_scripts', 'multisite_enqueue_tailwindcss');

function multisite_enqueue_script(){
    wp_enqueue_script( 'multisite-script', get_template_directory_uri() . '/script.js');
}
add_action( 'wp_enqueue_scripts', 'multisite_enqueue_script');
