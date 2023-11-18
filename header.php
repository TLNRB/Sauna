<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name") ?></title>
  <?php wp_head() ?>
</head>
<body>
  <header class="flex items-center p-[1.25rem]">
    <!-- Logo -->
    <div class="text-[1.125rem] font-bold">SaunaLand.</div>
    <!-- Menu Links -->
    <nav class="hidden"><?php wp_nav_menu( array( 'theme_location' => 'wp_sauna_main_menu', 'depth' => 1 )); ?></nav>
    <!-- Language Picker -->
    <div class="ml-auto flex gap-[.375rem] items-center text-[.875rem] font-[500] cursor-pointer">
      <p>HU</p>
      <p>EN</p>
    </div>
    <!-- Menu Dropdown -->
    <div class="menu-icon">
      <span class="menu-icon__line menu-icon__line-left"></span>
      <span class="menu-icon__line"></span>
      <span class="menu-icon__line menu-icon__line-right"></span>
    </div>
  </header>