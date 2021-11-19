{{--
  Section Name: 탤런트뱅크 소개
--}}

<section class="bg-lighthouse overflow-hidden">
  <div class="container mx-auto lg:pt-[100px] py-[50px] lg:pb-[120px]">
    <h2 class="text-center text-[24px] sm:text-[34px] font-bold mb-[28px] lg:mb-[72px]">탤런트뱅크 소개</h2>
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="mx-full lg:mx-0">
        @include('partials.img', ['ex' => 'jpg', 'name' => 'front-01'])
      </div>
      <div class="lg:pl-[48px] relative grid">
        <p class="text-[14px] sm:text-[20px] text-carbon leading-loose">
          가장 가치 있는 지식은 경험을 기반으로 합니다.<br class="block lg:hidden" /> 하지만 경험을 <br class="hidden lg:block" />
          공유 하기 어렵습니다.<br class="block lg:hidden" /> 전통적인 지식공유 방법은 한계가 있습니다.<br />
          <span class="pointUnderLine ring-deepSpaceRodeo ring-opacity-20" style="--h: 50%">탤런트뱅크만이 혁신적인 테크놀로지와 프로세스</span>에서 경험지식을 <br class="hidden lg:block" />
          가진 전문가와 함께 기업의 고민을 해결해보세요.
        </p>
        <div class="order-first lg:absolute left-1/2 bottom-0 xl:bottom-[60px] transform -translate-y-1/3 lg:translate-y-1/2 xl:translate-y-0 lg:-translate-x-1/2 lg:gap-x-[52px] gap-x-[8px] mx-auto flex">
          @foreach (['talentbank', 'For Client', 'For Expert'] as $key => $item)
            <div class="w-[100px] sm:w-[150px] xl:w-[200px] h-[100px] sm:h-[150px] xl:h-[200px] text-white bg-aero rounded-full flex items-center justify-center flex-col">
              <img class="w-[48px] h-[48px] sm:w-[74px] sm:h-[74px] xl:w-[100px] xl:h-[100px]" src="{!! get_theme_file_uri('resources/images/main-icon-'.$key.'.svg') !!}" alt="">
              <div class="text-[12px] sm:text-[18px] xl:text-[26px] mb-[10px] xl:mb-[30px]">{!! $item !!}</div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>