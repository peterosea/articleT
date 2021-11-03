<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Wp\Nav\Walker\TNB;
use Wp\Nav\Walker\GNB;

class Header extends Composer
{
    protected static $views = [
        'partials.header',
    ];
    public function with()
    {
        return [
          'tnb' => $this->tnb(),
          'gnb' => $this->gnb(),
        ];
    }

    public function tnb() {
      return wp_nav_menu([ 
        'menu' => 'top', 'container' => false, 'echo' => false, 'depth' => 1,
        'menu_class' => 'header__top-nav coldiv__s1',
        'walker' => new TNB(),
      ]);
    }

    public function gnb() {
      return wp_nav_menu([ 
        'menu' => 'main', 'container' => false, 'echo' => false, 'depth' => 2,
        'menu_class' => 'header__global-nav',
        'walker' => new GNB(),
      ]);
    }
}


