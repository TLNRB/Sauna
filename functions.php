<?php
// Add styles and scripts
function wpsauna_load_scripts() {
    // At the end of development delete the filemtime() and set back the version number
    wp_enqueue_style("wpsauna-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all'); 
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css',  array(), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap', array(), null);
    wp_enqueue_script('menu', get_template_directory_uri() . '/js/menu.js', array(), '1.0', true);
}
add_action("wp_enqueue_scripts", "wpsauna_load_scripts");

// Register menus
function wpsauna_config() {
  register_nav_menus( 
    array(
      'wp_sauna_main_menu' => 'Main Menu'
    )
  );
 
}
add_action( 'after_setup_theme', 'wpsauna_config', 0 );

// Register string for translation
function wpsauna_register_strings() {
  pll_register_string('WP Sauna', 'Contact Us');
  pll_register_string('WP Sauna', 'About Us And Our History');
  pll_register_string('WP Sauna', 'Services We Provide');
  pll_register_string('WP Sauna', 'Our Prices');
  pll_register_string('WP Sauna', 'See Our Saunas');
  pll_register_string('WP Sauna', 'View');
  pll_register_string('WP Sauna', 'Our Projects');
  pll_register_string('WP Sauna', 'Contact');
  pll_register_string('WP Sauna', 'Email');
  pll_register_string('WP Sauna', 'Phone');
  pll_register_string('WP Sauna', 'Address');
  pll_register_string('WP Sauna', 'Social Media');
}

add_action('init', 'wpsauna_register_strings');

// Remove admin bar
/* add_filter( 'show_admin_bar', '__return_false' ); */

// Remove Guttenberg Editor
function ad_remove_gutenberg() {
    remove_post_type_support( "page", "editor" );
    remove_post_type_support( "post", "editor" );
}

add_action("init", "ad_remove_gutenberg");