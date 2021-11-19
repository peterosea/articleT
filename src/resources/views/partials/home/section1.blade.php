{{--
  Section Name: 고정, 인기 포스트
--}}

<section>
  <div class="container mx-auto grid grid-cols-1 lg:grid-cols-[1fr,1px,1fr] xl:grid-cols-[5fr,1px,4fr] lg:gap-x-[26px] xl:gap-x-[52px]">
    <div class="sm:py-[100px] mb-[54px] sm:mb-0 flex flex-col justify-between">
      @include('partials.content-hero', ['post' => $heroPost])
      <div>
        <div class="hidden sm:block sm:h-px bg-steam w-full sm:w-[calc(100%+52px+var(--container_px))] mt-[60px] sm:mb-[36px] ml-full"></div>
        <div class="py-[20px] sm:py-0 bg-[#f7f7f7] sm:bg-transparent px-[var(--container_px)] sm:px-0 mx-full sm:mx-0">
          @include('partials.banner.client_announcement')
        </div>
      </div>
    </div>
    <div class="hidden sm:block bg-steam"></div>
    <div class="sm:py-[100px] mb-[54px] sm:mb-0">
      <div class="text-[24px] sm:text-[28px] font-bold mb-[45px] sm:mb-[50px]">인기 포스트</div>
      <ul class="sm:listDivider__rows1 grid gap-y-[54px] sm:gap-y-[67px]" style="--gap-y: 67px">
        @foreach ($popularityPosts as $post)
          <li class="lg:-card__s2 lg:!card__s1">
            @include('partials.card.template', [
              'title' => $post->post_title,
              'permalink' => $post->permalink,
              'thumbnail' => $post->thumbnail,
              'date' => $post->date,
              'excerpt' => $post->excerpt,
              'collection' => $post->collection,
              'category' => $post->category,
            ])
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</section>