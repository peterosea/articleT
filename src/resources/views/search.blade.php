@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="container mx-auto py-[120px] flex flex-col justify-center items-center">
      <div class="mb-[28px]">
        <img src="{!! get_theme_file_uri('resources/images/not-found.jpg') !!}" alt="" class="max-w-[600px]">
      </div>
      <div class="text-davyGrey text-[24px] mb-[60px] text-center">
        이용에 불편을 드려 죄송합니다.<br/>
        페이지에 아티클이 존재하지 않습니다.
      </div>
      <div class="my-[80px] w-[64px] h-[2px] rounded-full bg-davyGrey mx-auto"></div>
      <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] sm:mb-[48px] leading-none">추천 아티클</h2>
      <x-PostsRecommendation />
    </div>
  @else
    <div class="container mx-auto pt-[41px] lg:pt-[80px] pb-[52px] lg:pb-[120px]">
      <div class="text-center mb-[30px] lg:mb-[80px]">
        <h2 class="mb-[20px] lg:mb-[32px] text-[26px] lg:text-[52px] font-bold lg:font-normal"><span class="font-bold text-primary">'{!! get_search_query() !!}'</span>에<br class="block lg:hidden" /> 대한 검색결과입니다.</h2>
        <div class="text-[14px] lg:text-[24px]">검색결과 <span class="text-primary font-bold">{!! $count !!}</span>개를 찾았습니다.</div>
      </div>
      <div class="pt-[40px] lg:pt-[80px] pb-[28px] lg:pb-[60px] border-t-[2px] border-b-[2px] border-black">
        <div class="grid gap-y-[52px] lg:gap-y-[62px]">
          @while(have_posts()) @php(the_post())
            <div class="lg:-card__s7 lg:!card__s6">
              @includeFirst(['partials.content-search', 'partials.content'])
            </div>
          @endwhile
        </div>
      </div>
      <div>
        {!! $pagination !!}
      </div>
    </div>
    <x-SidebarWidget />
  @endif
@endsection
