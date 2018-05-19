<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>School English</title>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
   <?php wp_head(); ?>
 </head>
</head>
<body class="mdc-typography">
  <header>
    <h1><?php bloginfo('name'); ?></h1>
    <nav>
      <ul>
        <li>home</li>
        <li>Course</li>
        <li>Accommodation</li>
        <li>About</li>
        <li>Level Test</li>
      </ul>
    </nav>
    <?php wp_nav_menu('main-menu'); ?>
    <button>Get a quote</button>
  </header>