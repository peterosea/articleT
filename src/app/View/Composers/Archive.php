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
}
