<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Wp\Archive\UI\Pagination;

use function Roots\view;

class Archive extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive',
        'archive-*',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => $this->title(),
            'description' => $this->description(),
            'pagination' => (new Pagination())->render(),
            'labelBg' => $this->labelBg(),
            'bgImg' => $this-> bgImg(),
            'tags' => $this->getTags(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if (is_archive()) {
            return get_the_archive_title();
        }

        return get_the_title();
    }

    public function description()
    {
        if (is_post_type_archive()) {
          return get_the_post_type_description();
        }
    }

    public function labelBg()
    {
      if (is_post_type_archive()) {
        return match (get_post_type()) {
          'life' => 'bg-seaSerpent',
          'insight' => 'bg-deepSpaceRodeo',
          'tb-story' => 'bg-celticBlue',
          default => null
        };
      }
    }

    public function bgImg()
    {
      return match ((get_queried_object())->name) {
        'life' , 'insight', 'tb-story' => view('partials.img', ['ex' => 'jpg', 'name' => 'pageheader-'. (get_queried_object())->name, 'class' => 'header__page-bg']),
        default => null
      };
    }

    public function array_map_assoc(callable $f, array $a) {
      return array_column(array_map($f, array_keys($a), $a), 1, 0);
    }

    public function getTags()
    {
      global $wp_the_query;
      $result = [];
      foreach ($wp_the_query->posts as $post) {
        $tags = get_the_tags($post);
        if($tags) {
          $result = array_merge($result, $this->array_map_assoc(function($k, $v) {
            return [$v->slug, $v];
          }, $tags));
        }
      }
      if (count($result) > 0) {
        $dump = '';
        $index = 0;
        foreach ($result as $r) {
          if ($index < 5) {
            $link = get_term_link($r);
            $name = $r->name;
            $dump .= <<<EOD
              <a href="$link">#$name</a> 
EOD;
            $index++;
          }
        }
        return $dump;
      } else {
        return null;
      }
    }
}
