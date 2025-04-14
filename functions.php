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
    'services-menu-01' => __('Services Menu Col 1'),
    'services-menu-02' => __('Services Menu Col 2'),
    'services-menu-03' => __('Services Menu Col 3'),
    'services-menu-04' => __('Services Menu Col 4'),
    'services-menu-mobile' => __('Services Menu Mobile'),
  ));
}
add_action('init', 'revup_register_menus');

// Menu icon string
function revup_add_menu_icon_field($item_id, $item, $depth, $args)
{
  $icon = get_post_meta($item_id, '_menu_item_icon', true);
?>
  <p class="field-icon description description-wide">
    <label for="edit-menu-item-icon-<?php echo $item_id; ?>">
      <?php _e('Icon (Font Awesome or SVG)'); ?><br>
      <input type="text" id="edit-menu-item-icon-<?php echo $item_id; ?>" class="widefat edit-menu-item-icon" name="menu-item-icon[<?php echo $item_id; ?>]" value="<?php echo esc_attr($icon); ?>" />
    </label>
  </p>
<?php
}
add_action('wp_nav_menu_item_custom_fields', 'revup_add_menu_icon_field', 10, 4);


// Styles and Scripts
function revup_enqueue_styles()
{
  wp_enqueue_style('revup-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'revup_enqueue_styles');
