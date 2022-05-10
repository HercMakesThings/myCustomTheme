<?php
//Theme Functions Go here

// function myFunction(){
//
// }
//
// myFunction();

function enqueue_my_styles_and_scripts(){
  //Enqueueing our custom Portfolio styles
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/myassets/css/alum.css', array(), '1.0.0', 'all');

  //Enqueueing our custom Portfolio javascript
  wp_enqueue_script('my-scripts', get_theme_file_uri() . '/myassets/js/alum.js', array('jquery'), '1.0.0', false);


}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
