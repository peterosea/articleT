<div class="card__template">
  <div class="card__template-meta listDivider__cols2">
    <time datetime="{!! $date !!}"></time>
    @if (!empty($collection) && count($collection) > 0)
      @foreach ($collection as $term)
        <div class="card__template-meta-term">
          <a href="{!! $term->link !!}" class="btn-seaSerpent" @if (!empty($term->color)) style="background-color: {!! $term->color !!}" @endif>{!! $term->name !!}</a>
          @if (!empty($term->children) && count($term->children) > 0)
              @foreach ($term->children as $child)
                  <a href="{!! $child->link !!}">{!! $child->name !!}</a>
              @endforeach
          @endif
        </div>
      @endforeach
    @elseif(!empty($category) && count($category) > 0)
      @foreach ($category as $term)
        <div class="card__template-meta-term">
          <a href="{!! $term->link !!}">{!! $term->name !!}</a>
        </div>
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