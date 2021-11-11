<div class="header__page">
  <div class="header__page-inner">
    <div class="header__page-labelWrap {!! $labelBg !!}">
      <div class="header__page-label">
        {!! $label !!}
      </div>
    </div>
    <div class="header__page-main">
      <div class="text-center">
        <h1 class="header__page-title">{!! $title !!}</h1>
        <div class="header__page-subtitle">
          {!! $content !!}
        </div>
      </div>
    </div>
    @if (is_bool($bgImg))
      @include('partials.img', ['ex' => 'jpg', 'name' => 'pageheader-'.get_post_type(), 'class' => 'header__page-bg'])
    @else
      <img class="header__page-bg" src="{!! $bgImg !!}" alt="">
    @endif
  </div>
</div>
