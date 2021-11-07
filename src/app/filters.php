<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

/**
 * ACF Options 활성화
 *
 * @author       Hansanghyeon
 * @copyright    Hansanghyeon <999@hyeon.pro>
 **/

if (function_exists('acf_add_options_sub_page')) {
    acf_add_options_sub_page(array(
    'page_title'  => 'main',
    'menu_title'  => 'main',
		'menu_slug' 	=> 'main',
    'capability'	=> 'edit_posts',
  ));
}
