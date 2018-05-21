<?php

register_nav_menu( 'primary', __( 'Primary Menu', 'main-menu' ));

function mytheme_styles() {
  wp_enqueue_style( 'mytheme-common', get_template_directory_uri() . '/dist/main.css', array(), date("H:i:s"));
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true );
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
      'supports' => array ( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
    )
  );
}

add_action( 'init', 'create_post_type' );
add_action( 'wp_enqueue_scripts', 'mytheme_styles' );
add_theme_support('post-thumbnails');

add_image_size( 'card-size', 520, 400, true );
add_image_size( 'banner-size', 9999, 400, true );


/*
 *
 * 
 * 
 */
define( 'PWA_THEME_MANIFEST_ARG', 'jetpack_app_manifest' );


function pwa_theme_get_manifest_path() {
  return add_query_arg( PWA_THEME_MANIFEST_ARG, '1', site_url() );
}

function pwa_theme_register_query_vars( $vars ) {
  // $vars[] = PWA_SW_QUERY_VAR;
  $vars[] = PWA_THEME_MANIFEST_ARG;
  return $vars;
}
add_filter( 'query_vars', 'pwa_theme_register_query_vars' );


function pwa_theme_render_custom_assets() {
  global $wp_query;
  if ( $wp_query->get( PWA_THEME_MANIFEST_ARG ) ) {
    $theme_color = pwa_theme_get_theme_color();

    $manifest = array(
        'start_url'  => get_bloginfo( 'url' ),
        'short_name' => get_bloginfo( 'name' ),
        'name'       => get_bloginfo( 'name' ),
        'display'    => 'standalone',
        'background_color' => $theme_color,
        'theme_color' => $theme_color,
    );

    $icon_48 = pwa_site_icon_url( 48 );

    if ( $icon_48 ) {
        $manifest[ 'icons' ] = array(
            array(
                'src' => $icon_48,
                'sizes' => '48x48'
            ),
            array(
                'src' => pwa_site_icon_url( 192 ),
                'sizes' => '192x192'
            ),
            array(
                'src' => pwa_site_icon_url( 512 ),
                'sizes' => '512x512'
            )
        );
    }

    wp_send_json( $manifest );
  }
}
add_action( 'template_redirect', 'pwa_theme_render_custom_assets', 2 );

function pwa_theme_get_theme_color() {
   // if we have AMP enabled, use those colors?
  if ( current_theme_supports( 'custom-background' ) ) {
    $theme_color = get_theme_support( 'custom-background' )->{'default-color'};
  } else {
    $theme_color = '#FFF';
  }
  return apply_filters( 'pwa_theme_background_color', $theme_color );
}

function pwa_site_icon_url( $size ) {
  $url =  get_site_icon_url( $size );
  if ( ! $url ) {
    return sprintf('%s/images/icon.png', get_template_directory_uri());
  }
}
