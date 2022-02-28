<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'siteLogo' => $this->siteLogo(),
            'id' => get_the_id(),
            'newsletterLink' => $this->getLink(719),
            'hashtagLink' => $this->getLink(717),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function siteLogo()
    {
        return get_theme_file_uri('resources/images/logo-01.svg');
    }

    public function getLink($id)
    {
        $post = get_post($id);
        return get_the_permalink($post);
    }
}
