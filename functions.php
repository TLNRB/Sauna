<?php
function sauna_styles_scripts() {
    wp_enqueue_style("sauna-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css',  array(), 'all');
}
add_action("wp_enqueue_scripts", "sauna_styles_scripts");