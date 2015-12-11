<?php

function wpt_theme_styles() {
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.min.css' );

  wp_enqueue_style( 'open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' );

  wp_enqueue_style( 'awesome-font', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wpt_theme_styles');

?>
