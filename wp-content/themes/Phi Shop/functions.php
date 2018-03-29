<?php

// Including CSS and JS files
function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'MaterializeCSS', get_template_directory_uri() . '/css/materialize.min.css' );
  wp_enqueue_style( 'Themify', get_template_directory_uri() . '/css/themify-icons.css' );

  wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery.min.js' );
  wp_enqueue_script( 'MaterializeJS', get_template_directory_uri() . '/js/materialize.min.js' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


?>
