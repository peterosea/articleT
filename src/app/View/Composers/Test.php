<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Test extends Composer
{
    protected static $views = [
        'template-test',
    ];
    public function override()
    {
        return [
            'test' => $this->test(),
        ];
    }

    public function test()
    {
        $t = get_field('main-popularity_post', 'option');
        var_dump($t);
    }
}
