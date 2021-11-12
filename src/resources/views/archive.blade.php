
@extends('layouts.app')

@section('content')
@include('partials.banner.header', [
  'label' => $title,
  'labelBg' => $labelBg,
  'title' => $description, 
  'bgImg' =>  true,
  'content' => <<<EOD
  #탤런트뱅크서비스소개  #100%활용방법  #뉴스룸 #웨비나
EOD,
])
  <div class="container mx-auto pt-[100px] pb-[100px]">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[70px] gap-y-[56px] lg:gap-y-[85px]">
      @while(have_posts()) @php(the_post())
        <div class="!card__s2">
          @includeFirst(['partials.content-card', 'partials.content'])
        </div>
      @endwhile
    </div>
  </div>
  <div class="container mx-auto pb-[120px]">
    {!! $pagination !!}
  </div>
@endsection
