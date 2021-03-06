<?php

namespace Wp\Nav\Walker\Header;

use Walker_Nav_Menu;

class SNS extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ($depth == 0 ? 'main-menu-item' : 'sub-menu-item'),
            ($depth >= 2 ? 'sub-sub-menu-item' : ''),
            ($depth % 2 ? 'menu-item-odd' : 'menu-item-even'),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr(implode(' ', $depth_classes));

        // Passed classes.
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

        // Build HTML.
        $output .= <<<EOD
        $indent<li class="nav__sns-item $depth_class_names $class_names">
EOD;

        // Link attributes.
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
        $attributes .= ' class="menu-link nav__sns-menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';

        // icon
        $iconUrl = get_field('icon', $item->ID);
        $icon = <<<EOD
        <div class="nav__sns-icon">
          <img src="$iconUrl" />
        </div>
EOD;

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf(
            '%1$s<a%2$s>%7$s%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $args->link_after,
            $args->after,
            $icon
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
