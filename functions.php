<?php

function kenny_files() {
  wp_enqueue_style('google-font', '//fonts.googleapis.com/css?family=Barlow+Condensed&display=swap');
  wp_enqueue_style('kenny_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'kenny_files');
?>