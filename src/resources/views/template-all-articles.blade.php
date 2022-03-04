{{--
  Template Name: 최신글
--}}

@extends('layouts.app')
@section('content')
  @include('partials.banner.header', [
    'labelBg' => null,
    'title' => $title,
    'content' => $excerpt ?? $description ?? <<<EOD
    #탤런트뱅크 #신고용플랫폼 #긱-이코노미
EOD,
  ])
  <div class="container mx-auto pt-[100px] pb-[100px]">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[70px] gap-y-[56px] lg:gap-y-[85px]">
      @while (have_posts()) @php(the_post())
        <div class="!card__s2">
          @includeFirst(['partials.content-hashtag', 'partials.content'])
        </div>
      @endwhile
    </div>
  </div>
  <div class="container mx-auto pb-[120px]">
    {!! $pagination !!}
  </div>
@endsection

@php(wp_reset_query())
