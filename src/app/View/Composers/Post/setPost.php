<?php

namespace Wp\Post;


class Hook {
  public static $posts;
  public $taxonomies = ['category' => ['insight_category', 'life_category', 'tb_story_category'], 'collection'];

  /**
   * Create the component instance.
   *
   * @param  array   $posts
   * @param  array   $taxonomies
   * @return void
   */
  public function __construct($posts = null, $taxonomies = null)
  {
    if (!is_null($posts)) {
      self::$posts = $this->setPostData($posts);
      foreach($taxonomies ?? $this->taxonomies as $type => $_) {
        if (is_array($_)) {
          foreach ($_ as $taxonomy) {
            $this->setPostTaxonomy($taxonomy, $type);
          }
        } else {
          $this->setPostTaxonomy($_, $_);
        }
      }
    }
  }

  public function setPostData($posts)
  {
      return array_map(function ($post) {
        $post->permalink = get_the_permalink($post);
        $post->thumbnail = get_the_post_thumbnail_url($post);
        $post->excerpt = get_the_excerpt($post);
        $post->date = get_the_date('Y/m/d', $post);
        return $post;
      }, $posts);
  }


  /**
   * TODO: array_map 두번사용하는거 리팩토링
   */
  public function setTaxonomyData($terms)
  {
    $terms = array_map(function ($term) {
      $term->link = get_term_link($term);
      if ($color = get_field('color', $term->taxonomy."_".$term->term_id)) {
        $term->color = $color;
      }
      return $term;
    }, $terms);
    $termsHierarchy = array();
    $this->find_parent_terms_hierarchically($terms, $termsHierarchy);
    $terms = array_map(function ($term) {
      $term->link = get_term_link($term);
      if ($color = get_field('color', $term->taxonomy."_".$term->term_id)) {
        $term->color = $color;
      }
      return $term;
    }, $termsHierarchy);

    return $terms;
  }

  public function setPostTaxonomy($taxonomy, $type)
  {
      return array_map(function ($post) use ($taxonomy, $type) {
        $postType = get_post_type($post);
        if (strpos($taxonomy, $postType) === false) {
          return;
        };
        $terms = get_the_terms($post, $taxonomy);
        $post->{$type} = !is_wp_error($terms) && !empty($terms) ? $this->setTaxonomyData($terms) : [];
      }, self::$posts);
  }

  /**
   * 부모를 가진 자식 taxonomy를 통해 부모 - 자식 위계질서 배열 만들기
   *
   * @param  array   $terms   taxonomy
   * @param  array   $into    최종적으로 내부 배열을 셋팅할 배열
   * @return void
   */
  public function find_parent_terms_hierarchically(array &$terms, array &$into)
  {
    foreach ($terms as $term) {
      if ($term->parent !== 0) {
        $parentTerm = get_term($term->parent, $term->taxonomy);
        $parentTerm->children = array();
        array_push($parentTerm->children, $term);
        array_push($into, $parentTerm);
      } else {
        array_push($into, $term);
      }
    }

    foreach ($into as $parentTerm) {
      if ($parentTerm->parent !== 0) {
        $this->find_parent_terms_hierarchically($into, $into);
      }
    }
  }
}