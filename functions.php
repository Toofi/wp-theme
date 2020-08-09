<?php

function theme_supports() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}

// Load logo supports
function themename_custom_logo_setup() {
  $defaults = array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description' ),
  );
  add_theme_support( 'custom-logo', $defaults );
 }

// Load HTML5 Blank styles
function theme_register_assets()
{
  wp_enqueue_style( 
    'style', 
    get_template_directory_uri() . '/style.css',
    array(), 
    '1.0'
);
}



  add_action('after_setup_theme', 'theme_supports');
  add_action('after_setup_theme', 'themename_custom_logo_setup');
  add_action('wp_enqueue_scripts', 'theme_register_assets');

?>