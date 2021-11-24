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
    @if(empty($bgImg) || is_null($bgImg))
      @include('partials.img', ['ex' => 'jpg', 'name' => 'header-03', 'class' => 'header__page-bg'])
    @else
      {!! $bgImg !!}
    @endif
  </div>
</div>
