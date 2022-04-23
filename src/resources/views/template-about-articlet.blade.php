{{--
  Template Name: 아티클T 소개
--}}

@extends('layouts.app')

@section('content')
  <!-- 섹션:키비주얼 -->
  <div id="KeyVisual" class="keyvisual-abouta scrollmargintop">
    @include('partials.img', ['ex' => 'png', 'name' => 'about_a-logo-articlet', 'class' => 'kv_logo sm:mb-[80px] max-w-[240px] lg:max-w-[310px]'])
    <h2 class="text-[45px] font-bold mb-[40px]">
    기업의 세상을 확장하는 연결점, <span>아티클T</span>
    </h2>
    <div class="prose">
      <p>
      자신의 비즈니스 영역에서 성공을 거둔 검증된 전문가의<br>
      현장 노하우와 비즈니스 트렌드 정보,<br>
      오직 아티클T에서만 만날 수 있습니다.
      </p>
    </div>
    <!-- 스크롤 아이콘 -->
    <div class="scrolldown-wrapper">
      <div class="scrolldown">
        <svg height="30" width="10">
          <circle class="scrolldown-p1" cx="5" cy="15" r="2" />
          <circle class="scrolldown-p2" cx="5" cy="15" r="2" />
        </svg>
      </div>
      <p>scroll</p>
    </div>
    <!-- End.스크롤 아이콘 -->
  </div>
  <!-- End.섹션:키비주얼 -->
  <!-- 섹션:아티클T만의 차별점 -->
  <section class="pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container mx-auto">
      <div class="text-center">
        <span class="text-subtitle mb-[30px]">articleT Differences</span>
        <h2 class="text-[26px] font-bold mb-[65px]">
          아티클T만의 차별점
        </h2>
        <div class="prose">
          @include('partials.img', ['ex' => 'png', 'name' => 'about_a-sec02-graphic', 'class' => 'graphic_img'])
        </div>
      </div>
    </div>
  </section>
  <!-- End.섹션:아티클T만의 차별점 -->
  <section class="pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container mx-auto">
      <div class="mb-[90px]">
        <div class="text-center">
          <h3 class="text-[26px] lg:text-[34px] text-black mb-[8px] font-semibold">탤런트뱅크만의 차별점</h3>
          <div class="text-[16px] text-davyGrey mb-[56px]">
            <p>
              탤런트뱅크의 차별화된 서비스를 직접 경험해보세요.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-y-[12px] gap-x-[52px] listDivider__middle">
          <div class="p-[20px] lg:p-[48px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid grid-cols-[1fr,60px] lg:grid-cols-1 gap-y-[24px] justify-center">
              <div class="grid grid-cols-[36px,auto] sm:grid-cols-[60px,auto] items-center gap-x-[12px] lg:justify-self-center">
                <div class="ball">1</div>
                <span class="text-[18px] lg:text-[22px] font-bold">합리적인 비용</span>
              </div>
              <div class="justify-self-center lg:mb-[31px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-0'])
              </div>
              <div class="col-span-2 lg:col-span-1 lg:text-center leading-normal text-[14px] tracking-[-0.28px] text-davyGrey lg:text-carbon">
                <p class="mb-[14px]">
                  대기업 팀장/중소기업 임원 이상 경력의 전문가를 일(단기자문, 프로젝트 외) 단위로 계약할 수 있습니다.
                </p>
                <p>
                  탤런트뱅크에서 전문가 대금을 사전에 확인한 후 프로젝트를 의뢰할 수 있습니다.
                </p>
              </div>
            </div>
          </div>
          <div class="p-[20px] lg:p-[48px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid grid-cols-[1fr,60px] lg:grid-cols-1 gap-y-[24px] justify-center">
              <div class="grid grid-cols-[36px,auto] sm:grid-cols-[60px,auto] items-center gap-x-[12px] lg:justify-self-center">
                <div class="ball">2</div>
                <span class="text-[18px] lg:text-[22px] font-bold">기업 맞춤형 서비스</span>
              </div>
              <div class="justify-self-center lg:mb-[31px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-1'])
              </div>
              <div class="col-span-2 lg:col-span-1 lg:text-center leading-normal text-[14px] tracking-[-0.28px] text-davyGrey lg:text-carbon">
                <p class="mb-[14px]">
                  프로젝트를 의뢰하면, 전문가 출신 BD가 배정되어 사전 면담을 통해 기업의 상황을 체크하고 꼭 필요한 전문가를 매칭해 드립니다.
                </p>
                <p>
                  단기 자문, 프로젝트, 헤드헌팅, Functional Work 등 기업이 원하는 기간과 조건으로 확실하게 비즈니스 문제 해결을 지원합니다.
                </p>
              </div>
            </div>
          </div>
          <div class="p-[20px] lg:p-[48px] border border-cerebralGrey rounded-[4px] bg-white relative">
            <div class="grid grid-cols-[1fr,60px] lg:grid-cols-1 gap-y-[24px] justify-center">
              <div class="grid grid-cols-[36px,auto] sm:grid-cols-[60px,auto] items-center gap-x-[12px] lg:justify-self-center">
                <div class="ball">3</div>
                <span class="text-[18px] lg:text-[22px] font-bold">세부단계를 통해 검증된 전문가</span>
              </div>
              <div class="justify-self-center lg:mb-[31px]">
                @include('partials.img', ['ex' => 'png', 'name' => 'about-us-2'])
              </div>
              <div class="col-span-2 lg:col-span-1 lg:text-center leading-normal text-[14px] tracking-[-0.28px] text-davyGrey lg:text-carbon">
                <p>
                  탤런트뱅크는 서류 심사 및 심층 인터뷰를 통해 선별된 산업별 Top-Class 전문가 그룹과 함께 하고 있습니다.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
