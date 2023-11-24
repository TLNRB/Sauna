<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo("name") ?></title>
  <?php wp_head() ?>
</head>
<body>
  <header class="fixed backdrop-blur-[12px] top-0 right-0 left-0 flex items-center py-[.5rem] px-[1rem] z-[10] sm:px-[1.5rem] md:px-[2rem] lg:px-[4rem] xxl:px-[6rem] xxxl:px-[8rem]">
    <!-- <div class="text-[1.125rem] font-bold text-bgSemiDark z-[2] xs:text-[1.25rem] sm:text-[1.5rem]">SaunaLand.</div> -->
    <!-- Logo for small screen -->
    <?php $logoSmall = get_field("logo") ?>
    <a href="#home"><img src="<?php echo $logoSmall["url"] ?>" alt="<?php echo $logoSmall["alt"] ?>" class="h-[40px] relative z-[2] xs:h-[45px] sm:hidden"></a>
    <!-- Logo for large screen -->
    <?php $logoLarge = get_field("logo_with_text") ?>
    <a href="#home"><img src="<?php echo $logoLarge["url"] ?>" alt="<?php echo $logoLarge["alt"] ?>" class="hidden h-[50px] relative z-[2] sm:block xxxl:h-[55px] xxxxl:h-[60px]"></a>
    <!-- Menu Links -->
    <nav id="menu" class="absolute translate-y-[-400px] duration-[.25s] ease-in-out left-0 top-0 right-0 pt-[4rem] pb-[1.5rem] bg-bgNormal text-[1.25rem] font-[500] text-textDark border-x-[1px] border-b-[1px] border-bgSemiDark rounded-b-[20px] sm:text-[1.375rem] lg:translate-y-0 lg:relative lg:text-[1rem] lg:bg-transparent lg:p-0 lg:ml-auto lg:border-none"><?php wp_nav_menu( array( 'theme_location' => 'wp_sauna_main_menu', 'depth' => 1 )); ?></nav>
    <!-- Language Picker -->
    <ul class="ml-auto flex gap-[.25rem] items-center text-[.875rem] text-bgSemiDark font-[500] cursor-pointer z-[2] lg:ml-[4rem] xxxxl:text-[1rem]">
      <?php pll_the_languages() ?>
    </ul>
    <!-- Menu Dropdown -->
    <div class="menu-icon lg:hidden">
      <span class="menu-icon__line menu-icon__line-left"></span>
      <span class="menu-icon__line"></span>
      <span class="menu-icon__line menu-icon__line-right"></span>
    </div>
  </header>