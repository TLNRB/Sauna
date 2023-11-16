<?php
function wpsauna_load_scripts() {
    // At the end of development delete the filemtime() and set back the version number
    wp_enqueue_style("wpsauna-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all'); 
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css',  array(), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap', array(), null);
}
add_action("wp_enqueue_scripts", "wpsauna_load_scripts");