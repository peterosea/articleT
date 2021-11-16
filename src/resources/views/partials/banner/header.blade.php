<div class="header__page">
  <div class="header__page-inner">
    <div class="header__page-labelWrap {!! $labelBg !!}">
      <div class="header__page-label">
        {!! $label !!}
      </div>
    </div>
    <div class="header__page-main">
      <div class="text-center">
        <h1 class="header__page-title mb-0">{!! $title !!}</h1>
        {{-- <div class="header__page-subtitle">
          {!! $content !!}
        </div> --}}
      </div>
    </div>
    @if(empty($bgImg))
      @include('partials.img', ['ex' => 'jpg', 'name' => 'header-03', 'class' => 'header__page-bg'])
    @elseif (is_string($bgImg))
      <img class="header__page-bg" src="{!! $bgImg !!}" alt="">
    @elseif ($bgImg)
      {!! $bgImg !!}
    @endif
  </div>
</div>
