<?php

register_nav_menu( 'primary', __( 'Primary Menu', 'main-menu' ));

function mytheme_styles() {
  wp_enqueue_style( 'material', 'https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css', array(), date("H:i:s"));
  wp_enqueue_style( 'mytheme-common', get_template_directory_uri() . '/dist/main.css', array(), date("H:i:s"));
}


function create_post_type() {
  register_post_type( 'course',
    array(
      'labels' => array(
        'name' => __( 'Course' ),
        'singular_name' => __( 'Course' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

add_action( 'init', 'create_post_type' );
add_action( 'wp_enqueue_scripts', 'mytheme_styles' );
add_theme_support('post-thumbnails', array('post', 'page', 'course'));