<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>School English</title>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">

  <!-- PWA metadata -->
  <link rel="manifest" href="<?php echo pwa_theme_get_manifest_path(); ?>">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="application-name" content="<?php bloginfo('name'); ?>">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
  <meta name="theme-color" content="<?php echo pwa_theme_get_theme_color(); ?>">
  <meta name="msapplication-navbutton-color" content="<?php echo pwa_theme_get_theme_color(); ?>">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="msapplication-starturl" content="/">
  <link rel="icon" type="image/jpeg" sizes="512x512" href="<?php echo get_site_icon_url( 512 ) ?>">
  <link rel="apple-touch-icon" type="image/jpeg" sizes="512x512" href="<?php echo get_site_icon_url( 512 ) ?>">

   <?php wp_head(); ?>
 </head>
</head>
<body <?php body_class(); ?>>
  <header class="top-bar">
    <div class="top-bar__contact">
      <a href="tel:999999999" class="link--call">99 999 9999</a>
    </div>

    <div class="top-bar__wrap">
      <nav role="navigation">
        <div id="menuToggle">

          <input type="checkbox" />

          <span></span>
          <span></span>
          <span></span>

          <?php wp_nav_menu(array(
              'theme_location' => 'main-menu',
              'menu_class' => 'top-bar__menu') ); ?>
        </div>
      </nav>
      <h1 class="top-bar__site-logo"><?php bloginfo('name'); ?></h1>
    </div>
  </header>