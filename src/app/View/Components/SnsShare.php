<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;
use \Smartcrawl_Canonical_Value_Helper;
use \Smartcrawl_OpenGraph_Value_Helper;

class SnsShare extends Component
{
    public $script;
    /**
     * 이미지 링크 배열 단일 링크로 변경
     *
     * @param array $images
     * @var string
     */
    public function get_imgurl($images)
    {
        $images = is_array($images) && !empty($images)
        ? array_values($images)[0][0]
        : '';
        return $images;
    }
    /**
     * share에 사용할 변수들
     *
     * @var string
     */
    public $title;
    public $description;
    public $img;
    public $link;
    /**
     * Create the component instance.
     *
     * @return void
     */
    public function __construct($script = 'true')
    {
      $this->script = $script === 'true' ? true : false;
      $value_helper = new Smartcrawl_OpenGraph_Value_Helper();
      $helper = new Smartcrawl_Canonical_Value_Helper();
      $this->title = get_the_title();
      $this->description = $value_helper->get_description();
      $this->link = $helper->get_canonical();

      if ($this->get_imgurl($value_helper->get_images()) || get_the_ID() === 18) {
        $this->img = $this->get_imgurl($value_helper->get_images());
      }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.sns-share');
    }
}
