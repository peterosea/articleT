<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use Wp\Post\Hook;
use Wp\Post\Tool;

class PostsRecommendation extends Component
{
    public $posts = [];

    public function postsAsPostDataSet($posts)
    {
        return array_map(function ($post) {
            $WpTool = new Tool();
            $post->thumbnail = $WpTool::objectThumbnail($post);
            unset($post->post_content);
            return $post;
        }, $posts);
    }
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct()
    {
        $posts = [];

        $posts = array_merge($posts, get_posts(array(
            'post_type' => ['insight', 'life', 'tb-story'],
            'numberposts' => 3,
            'orderby' => 'rand'
        )));

        $posts = (new Hook($posts))::$posts;
        $posts = $this->postsAsPostDataSet($posts);
        $this->posts = $posts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.posts-recommendation');
    }
}
