<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class RSS extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'rss.popularity_post',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
          'posts' => $this->getPost(),
        ];
    }

    public function getPost()
    {
      $posts = get_field('main-popularity_post', 'option');
      array_push($posts, get_field('main-hero_post', 'option')[0]);
      $ids = [];
      foreach ($posts as $post) {
        $ids[] = $post->ID;
      }

      if (count($ids) > 0) {
        return new WP_Query([
          'post_type' => 'any',
          'post__in' => $ids
        ]);
      }
    }
}
