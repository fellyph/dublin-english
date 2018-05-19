<?php

register_nav_menu( 'primary', __( 'Primary Menu', 'main-menu' ));

function mytheme_styles() {
  wp_enqueue_style( 'material', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css', array(), date("H:i:s"));
  wp_enqueue_style( 'mytheme-common', get_template_directory_uri() . '/dist/main.css', array(), date("H:i:s"));
}

add_action( 'wp_enqueue_scripts', 'mytheme_styles' );