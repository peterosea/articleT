<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use WP_Query;
use Wp\Archive\UI\Pagination;

class AllArticles extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-all-articles',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'pagination' => (new Pagination())->render(),
            'title' => get_the_title(),
            'description' => get_the_excerpt(),
            'excerpt' => $this->getExcerpt()
        ];
    }

    public function __construct()
    {
        wp_reset_postdata();
        $GLOBALS['wp_query'] = new WP_Query(array(
            'post_type' => ['insight', 'life', 'tb-story'],
            'post_status' => 'publish',
            'posts_per_page' => 15,
            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
        ));
    }

    public function getExcerpt()
    {
        return get_field('all_description', 'option');
    }
}
