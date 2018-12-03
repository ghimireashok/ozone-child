<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;



if ( !function_exists( 'ozone_parent_css' ) ):
    function ozone_parent_css() {
        wp_enqueue_style( 'parent_style', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap','font-awesome','animate','icomoon','magnific-popup','owl.carousel' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'ozone_parent_css', 10 );

