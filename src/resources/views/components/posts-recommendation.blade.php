<div class="grid gap-y-[54px] sm:gap-y-[62px] w-full">
  @foreach ($posts as $post)
    <div class="lg:-card__s7 lg:!card__s6">
      @include('partials.card.template', [
        'title' => $post->post_title,
        'permalink' => $post->permalink,
        'thumbnail' => $post->thumbnail,
        'date' => $post->date,
        'excerpt' => $post->excerpt,
      ])
    </div>
  @endforeach
</div>
