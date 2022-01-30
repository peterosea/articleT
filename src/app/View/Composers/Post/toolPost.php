<?php

namespace Wp\Post;

use function Roots\view;

class Tool
{
    /**
     * objectThumbnail
     * object fit 스타일을 같는 섬네일을 전달하는데 이미지가 없을때 기본 값인 no image를 리턴한다.
     *
     * @param WP_Post $post
     * 
     * @return image
     */
    public static function objectThumbnail($post)
    {
        if ($thumbnail_url = get_the_post_thumbnail_url($post)) {
            return <<<EOD
        <img src="$thumbnail_url">
EOD;
        } else {
            $img = get_theme_file_uri('resources/images/no-image-icon-23487.png');
            return <<<EOD
      <img src="$img">
EOD;
        }
    }
}
