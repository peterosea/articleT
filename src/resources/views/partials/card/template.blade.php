<div class="card__template @if(!empty($class)) {!! implode($class) !!} @endif">
  <div class="card__template-meta">
    <time datetime="{!! $date !!}"></time>
    @if (!empty($hashtag) && count($hashtag) > 0)
      @foreach ($hashtag as $term)
        <a href="{!! $term->link !!}" class="hashtag">{!! $term->name !!}</a>
        @if (!empty($term->children) && count($term->children) > 0)
            @foreach ($term->children as $child)
              <a href="{!! $child->link !!}" class="hashtag">{!! $child->name !!}</a>
            @endforeach
        @endif
      @endforeach
    @endif
  </div>
  <div class="card__template-body">
    <div class="card__template-title">
      <a href="{!! $permalink !!}">{!! $title !!}</a>
    </div>
  </div>
  <a href="{!! $permalink !!}" class="card__template-thumbnail">
    {!! $thumbnail !!}
  </a>
  <div class="card__template-main">
    <div class="prose">
      {!! $excerpt !!}
    </div>
    <div class="card__template-readmore">
      <a href="{!! $permalink !!}" class="underline power" style="--uph: 1px">Read on</a>
    </div>
  </div>
</div>
