<footer id="footer__main" class="footer__main">
  <div class="footer__main-1">
    <div class="footer__main-inner grid grid-cols-1 xl:grid-cols-[auto,auto] sm:gap-y-[40px] gap-x-[40px] container mx-auto">
      <div class="flex order-2 sm:order-2">
        {!! wp_nav_menu([
          'menu' => 23,
          'container' => false,
          'echo' => false,
          'depth' => 2,
          'menu_class' => 'footer__main-1-nav',
          ]) !!}
      </div>
      <div class="order-1 sm:order-2">
        <h2 class="h2">Help & Support</h2>
        <div class="grid grid-cols-3 sm:grid-cols-[auto,auto] gap-[12px] items-center">
          <a href="http://talentbank.co.kr/common/faq" target="_blank" rel="noopener noreferrer" class="gap-x-[14px] text-[14px] lg:text-[16px] gap-y-[12px] flex items-center text-seaSerpent font-bold">
            <i class="icon-faq text-[40px] sm:text-[24px] leading-none"></i>
            FAQ
          </a>
          <div class="hidden sm:block text-right">
            가장 많이 문의 주셨던 사항을 정리했습니다.
          </div>
          <div class="gap-x-[14px] text-[14px] lg:text-[16px] gap-y-[12px] flex items-center text-seaSerpent font-bold">
            <i class="icon-phone text-[40px] sm:text-[24px] leading-none"></i>
            1833-4730
          </div>
          <div class="hidden sm:block text-right">
            AM 9:00 ~ PM 5:00 (토/일/공휴일 휴무)
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__main-2">
    <div class="footer__main-inner container mx-auto grid grid-cols-1 gap-x-[40px] lg:grid-cols-[auto,auto]">
      <div class="grid gap-y-[20px]">
        {!! wp_nav_menu([
          'menu' => 11,
          'container' => false,
          'echo' => false,
          'depth' => 2,
          'menu_class' => 'footer__main-2-nav text-[#bebebe] font-extralight',
          ]) !!}
          <div class="hidden lg:flex mt-[4px] gap-x-[40px]">
            <a href="//talentbank.co.kr" target="_blank" rel="noopener noreferrer">
              @include('partials.img', ['ex' => 'png', 'name' => 'logo_tb-footer', 'class' => '', 'alt' => 'Talentbank'])
            </a>
            {!! wp_nav_menu([
              'menu' => 26,
              'container' => false,
              'echo' => false,
              'depth' => 1,
              'menu_class' => 'flex gap-x-[16px]',
              ]) !!}
          </div>
      </div>
      <div class="block lg:hidden h-px w-full bg-[color:#4c4c4c] my-[16px]"></div>
      <div class="grid gap-y-[30px]">
        <div class="flex flex-col gap-y-[10px]">
          <div class="icon-label text-[#bebebe] icon-label-award1 font-light">제8회 모바일브랜드대상 인재매칭 플랫폼 부문 수상</div>
          <div class="icon-label text-[#bebebe] icon-label-award2 font-light">모바일 어워드 코리아 2019 구인플랫폼 부문 대상</div>
          <div class="icon-label text-[#bebebe] icon-label-award3 font-light">2019 소비자의 선택 인재매칭 플랫폼 부문 수상</div>
        </div>
        <div class="flex justify-center lg:hidden">
          {!! wp_nav_menu([
            'menu' => 26,
            'container' => false,
            'echo' => false,
            'depth' => 1,
            'menu_class' => 'flex gap-x-[20px]',
            ]) !!}
        </div>
      </div>
    </div>
  </div>
</footer>
<div id="backtop" class="backtop fixed bottom-[40px] right-[24px] z-[9000]">
  <a href="#page" class="btn-backtop">
    <span class="text-[0px]">위로가기</span>
  </a>
</div>
{{-- <div class="icon-label-google_play"></div>
<div class="icon-label-app_store"></div> --}}
