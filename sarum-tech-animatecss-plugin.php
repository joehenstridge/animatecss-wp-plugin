<?php
/**
 * Plugin Name: Sarum Tech - AnimateCSS Library
 * Description: Adding the AnimateCSS Library to the project.
 * Version: 1.00.1
 * Tested up to: 5.7
 * Requires PHP: 5.6.20
 * Author: Sarum Tech
 * Author URI: https://sarumtech.com 
 */


// Add the Animate CSS code here:
function load_animate_css() {
  // Load Animate CSS
  wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css' );

  // Load Css
  wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'load_animate_css' );
