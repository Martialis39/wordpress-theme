<?php
    function enqueue_styles() {
        wp_enqueue_style( 'style.css', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
?>