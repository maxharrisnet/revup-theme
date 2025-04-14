<?php

// security for WordPress functions.php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

// Images
add_theme_support('post-thumbnails');

add_theme_support('custom-logo', array(
  'height' => 100,
  'width' => 400,
  'flex-height' => true,
  'flex-width' => true,
));

// Menus
add_theme_support('menus');

function revup_register_menus()
{
  register_nav_menus(array(
    'header-menu' => __('Header Menu'),
    'footer-menu' => __('Footer Menu'),
  ));
}
add_action('init', 'revup_register_menus');

// Styles and Scripts
function revup_enqueue_styles()
{
  wp_enqueue_style('revup-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'revup_enqueue_styles');
