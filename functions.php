<?php

// security for WordPress functions.php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

// Images
add_theme_support('post-thumbnails');

add_theme_support('custom-logo', array(
  'height' => 70,
  'width' => 400,
  'flex-height' => true,
  'flex-width' => true,
));

// Register FAQ Custom Post Type
function revup_register_post_types()
{
  register_post_type('faq', array(
    'labels' => array(
      'name' => __('FAQs'),
      'singular_name' => __('FAQ'),
      'add_new' => __('Add New FAQ'),
      'add_new_item' => __('Add New FAQ'),
      'edit_item' => __('Edit FAQ'),
      'new_item' => __('New FAQ'),
      'view_item' => __('View FAQ'),
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array('slug' => 'faqs'),
    'menu_icon' => 'dashicons-format-chat',
    'show_in_rest' => true,
    'rest_base' => 'faqs',
  ));
}

add_action('init', 'revup_register_post_types');

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
      <?php _e('Icon slug'); ?><br>
      <input type="text" id="edit-menu-item-icon-<?php echo $item_id; ?>" class="widefat edit-menu-item-icon" name="menu-item-icon[<?php echo $item_id; ?>]" value="<?php echo esc_attr($icon); ?>" />
    </label>
  </p>
<?php
}
add_action('wp_nav_menu_item_custom_fields', 'revup_add_menu_icon_field', 10, 4);

function revup_save_menu_icon($menu_id, $menu_item_db_id)
{
  if (isset($_POST['menu-item-icon'][$menu_item_db_id])) {
    update_post_meta($menu_item_db_id, '_menu_item_icon', sanitize_text_field($_POST['menu-item-icon'][$menu_item_db_id]));
  }
}
add_action('wp_update_nav_menu_item', 'revup_save_menu_icon', 10, 2);

// Icon Walker
require_once get_template_directory() . '/class-revup-menu-icon-walker.php';

// Styles and Scripts
function revup_enqueue_styles()
{
  wp_enqueue_style('revup-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'revup_enqueue_styles');

function revup_enqueue_scripts()
{
  wp_enqueue_script('revup-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'revup_enqueue_scripts');


/**
 * Register custom blocks
 */
function revup_register_blocks()
{
  // Check if Gutenberg is active
  if (!function_exists('register_block_type')) {
    return;
  }

  // Register blocks
  require_once get_template_directory() . '/blocks/explainer-block/explainer-block.php';
}
add_action('init', 'revup_register_blocks', 9);
