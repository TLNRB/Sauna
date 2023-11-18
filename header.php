<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name") ?></title>
  <?php wp_head() ?>
</head>
<body>
  <header>
    <nav class=""><?php wp_nav_menu( array( 'theme_location' => 'wp_sauna_main_menu', 'depth' => 1 )); ?></nav>
  </header>