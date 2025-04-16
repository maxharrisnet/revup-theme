<?php

/**
 * Custom Walker Class for displaying menu items with SVG icons
 */
class Revup_Menu_Icon_Walker extends Walker_Nav_Menu
{
  /**
   * Starts the element output.
   */
  public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

    // Get the icon slug from post meta
    $icon_slug = get_post_meta($item->ID, '_menu_item_icon', true);

    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
    $id = $id ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li' . $id . $class_names . '>';

    $atts = array();
    $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
    $atts['target'] = !empty($item->target) ? $item->target : '';
    $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
    $atts['href']   = !empty($item->url) ? $item->url : '';

    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

    $attributes = '';
    foreach ($atts as $attr => $value) {
      if (!empty($value)) {
        $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
        $attributes .= ' ' . $attr . '="' . $value . '"';
      }
    }

    // Start building the item output
    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';

    // Add the SVG icon if icon slug exists
    if (!empty($icon_slug)) {
      $icon_path = get_template_directory() . '/assets/icons/services/' . sanitize_file_name($icon_slug) . '.svg';
      $icon_url = get_template_directory_uri() . '/assets/icons/services/' . sanitize_file_name($icon_slug) . '.svg';

      if (file_exists($icon_path)) {
        $item_output .= '<span class="menu-icon"><img src="' . esc_url($icon_url) . '" alt="" class="menu-icon-svg"></span>';
      }
    }

    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
