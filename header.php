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
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <h1><?php bloginfo('name'); ?></h1>
    </div>
  </header>