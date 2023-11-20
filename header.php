<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name") ?></title>
  <?php wp_head() ?>
</head>
<body>
  <header class="fixed backdrop-blur-[12px] top-0 right-0 left-0 flex items-center py-[1rem] px-[1rem] z-[10] sm:px-[1.5rem] md:px-[2rem] lg:px-[4rem] xxl:px-[6rem] xxxl:px-[8rem]">
    <!-- Logo -->
    <div class="text-[1.125rem] font-bold z-[2] xs:text-[1.25rem] sm:text-[1.5rem]">SaunaLand.</div>
    <!-- Menu Links -->
    <nav id="menu" class="absolute translate-y-[-400px] duration-[.25s] ease-in-out left-0 top-0 right-0 pt-[4rem] pb-[1.5rem] bg-bgNormal text-[1.25rem] font-[500] text-textDark border-x-[1px] border-b-[1px] border-bgSemiDark rounded-b-[20px] sm:text-[1.375rem] md:translate-y-0 md:relative md:text-[1rem] md:bg-transparent md:p-0 md:ml-auto md:border-none"><?php wp_nav_menu( array( 'theme_location' => 'wp_sauna_main_menu', 'depth' => 1 )); ?></nav>
    <!-- Language Picker -->
    <div class="ml-auto flex gap-[.375rem] items-center text-[.875rem] font-[500] cursor-pointer z-[2] md:ml-[3rem] lg:ml-[4rem] xxxxl:text-[1rem]">
      <p>HU</p>
      <p>EN</p>
    </div>
    <!-- Menu Dropdown -->
    <div class="menu-icon md:hidden">
      <span class="menu-icon__line menu-icon__line-left"></span>
      <span class="menu-icon__line"></span>
      <span class="menu-icon__line menu-icon__line-right"></span>
    </div>
  </header>