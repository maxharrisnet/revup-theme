<?php

/**
 * Header template .
 *
 * @package RevUp
 */
if (!defined('ABSPATH')) {
  exit;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="main-header">
    <div class="container header-container">
      <div class="logo">
        <?php
        if (function_exists('the_custom_logo')) {
          the_custom_logo();
        }
        ?>
      </div>
      <div class='header-title'>
        <h1><?php bloginfo('name'); ?></h1>
      </div>
      <nav class="header-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'container' => false,
          'items_wrap' => '<ul class="nav-links">%3$s</ul>',
        ));
        ?>
    </div>
  </header>