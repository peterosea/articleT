{{--
  Template Name: 아티클T 소개
--}}

@extends('layouts.app')

@section('content')
  <!-- 섹션:키비주얼 -->
  <div id="KeyVisual" class="sec01 keyvisual-abouta scrollmargintop">
    @include('partials.img', ['ex' => 'png', 'name' => 'about_a-logo-articlet', 'class' => 'kv_logo mb-[40px] sm:mb-[80px] max-w-[240px] lg:max-w-[310px]'])
    <h2 class="abouta-title font-bold mb-[20px] sm:mb-[40px]">
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
  <section class="sec02 pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container about_a-mw mx-auto">
      <div class="text-center">
        <span class="abouta-subtitle mb-[30px]">articleT Differences</span>
        <h2 class="abouta-title font-bold mb-[65px]">
          아티클T만의 <span>차별점</span>
        </h2>
        <div class="prose">
          @include('partials.img', ['ex' => 'png', 'name' => 'about_a-sec02-graphic', 'class' => 'graphic_img img_desktop'])
          @include('partials.img', ['ex' => 'png', 'name' => 'about_a-sec-02-graphic-m', 'class' => 'graphic_img img_mobile'])
        </div>
      </div>
    </div>
  </section>
  <!-- End.섹션:아티클T만의 차별점 -->
  <!-- 섹션:아티클T 콘텐츠 -->
  <section class="sec03 pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container about_a-mw mx-auto">
      <div class="text-center">
        <span class="abouta-subtitle mb-[30px]">articleT contents</span>
        <h2 class="abouta-title font-bold mb-[80px]">
          아티클T <span>콘텐츠</span>
        </h2>
      </div>
      <div class="grid_grp mb-[40px] sm:mb-[80px]">
        <div class="grid_title">비즈니스 인사이트</div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[56px] gap-y-[60px] lg:gap-y-[0px]">
          <a href="/insight/category/industry/" class="_article">
            @include('partials.img', ['ex' => 'png', 'name' => 'sec-03-thumb-01', 'class' => 'graphic_img'])
            <h6 class="_title">산업구조 해부</h6>
            <p class="_description">
              낯선 비즈니스는 뼈대부터 살펴보세요.<br>
              이젠 신사업도 어렵지 않습니다.
            </p>
            <span class="btn btn-blue">MORE +</span>
          </a>
          <a href="/insight/category/tech-trend/" class="_article">
          @include('partials.img', ['ex' => 'png', 'name' => 'sec-03-thumb-02', 'class' => 'graphic_img'])
            <h6 class="_title">뉴 트렌드</h6>
            <p class="_description">
            실시간으로 떠오르는<br>
            산업 트렌드 정보를 놓치지 마세요.
            </p>
            <span class="btn btn-blue">MORE +</span>
          </a>
          <a href="/insight/category/case-study/" class="_article">
          @include('partials.img', ['ex' => 'png', 'name' => 'sec-03-thumb-03', 'class' => 'graphic_img'])
            <h6 class="_title">원포인트 레슨</h6>
            <p class="_description">
            사업에 필요한 조언 딱 한마디가 필요하시다면,<br>
            전문가의 원포인트 레슨을 골라보세요.
            </p>
            <span class="btn btn-blue">MORE +</span>
          </a>
        </div>
      </div>
      <div class="grid_grp">
        <div class="grid_title">전문가 광장</div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-x-[56px] gap-y-[60px] lg:gap-y-[0px]">
          <a href="/life/category/expert/" class="_article">
            @include('partials.img', ['ex' => 'png', 'name' => 'sec-03-thumb-04', 'class' => 'graphic_img'])
            <h6 class="_title">전문가 스토리</h6>
            <p class="_description">
            생생한 전문가 인사이트를 둘러보세요.<br>
            다양한 전문가들이 기다리고 있습니다.
            </p>
            <span class="btn btn-blue">MORE +</span>
          </a>
          <a href="/life/category/expert-life/" class="_article">
            @include('partials.img', ['ex' => 'png', 'name' => 'sec-03-thumb-05', 'class' => 'graphic_img'])
            <h6 class="_title">전문가로 살기</h6>
            <p class="_description">
            전문가와 직장인은 다릅니다. 전문가에게는<br>
            어떤 삶이 펼쳐질지 미리 살펴보세요.
            </p>
            <span class="btn btn-blue">MORE +</span>
          </a>
          <a href="/life/category/ceo/" class="_article">
            @include('partials.img', ['ex' => 'png', 'name' => 'sec-03-thumb-06', 'class' => 'graphic_img'])
            <h6 class="_title">성공사례</h6>
            <p class="_description">
            기업에 딱 필요한 그 순간, 연결된 전문가가<br>
            해결한 비즈니스. 혼자 고민하지 마세요.
            </p>
            <span class="btn btn-blue">MORE +</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End.섹션:아티클T 콘텐츠 -->
  <!-- 섹션:아티클T 집필진 -->
  <section class="sec04 pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container about_a-mw mx-auto">
      <div class="text-center mb-[40px] sm:mb-[80px]">
        <span class="abouta-subtitle mb-[30px]">Writers of articleT</span>
        <h2 class="abouta-title font-bold mb-[40px]">
          아티클T <span>집필진</span>
        </h2>
        <p class="abouta-desc">각 산업을 대표하는 4,000명 이상의 검증된 전문가의 시선을 공유합니다.</p>
      </div>
      <div class="scroll mb-[20px] lg:mb-[90px]">
        <div class="_wrapper flex">
          <div class="writer">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-a-writer-a', 'class' => 'graphic_img'])
          </div>
          <div class="writer">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-a-writer-b', 'class' => 'graphic_img'])
          </div>
          <div class="writer">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-a-writer-c', 'class' => 'graphic_img'])
          </div>
          <div class="writer">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-a-writer-d', 'class' => 'graphic_img'])
          </div>
          <div class="writer">
            @include('partials.img', ['ex' => 'png', 'name' => 'about-a-writer-e', 'class' => 'graphic_img'])
          </div>
        </div>
      </div>
      <div class="btn_wrapper mb-[40px] lg:mb-[0px]">
        <a href="https://www.talentbank.co.kr/common/expertListIndex" target="_blank" class="btn btn-blue with_arrow">전문가 만나기 <svg xmlns="http://www.w3.org/2000/svg" width="53" height="20"><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M1.999 16.999h47l-15-15"/></svg></a>
      </div>
    </div>
  </section>
  <!-- End.섹션:아티클T 집필진 -->
  <!-- 섹션:집필진 지원 -->
  <section class="sec05 pt-[80px] lg:pt-[120px] pb-[80px] lg:pb-[120px]">
    <div class="container about_a-mw mx-auto">
      <div class="flex">
        <h2 class="abouta-title-w font-bold mb-[40px] lg:mb-[60px]">
          아티클T에서 인사이트를 나누고 싶다면, 여기로
        </h2>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSc3XyKD_LJk7n8ESncV0brfd4fZHX8HBn6AtUNj9LgEoTpWsQ/viewform" target="_blank" class="btn btn-border-w with_arrow">
          집필진 지원 <svg xmlns="http://www.w3.org/2000/svg" width="53" height="20"><path stroke="#FFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M1.999 16.999h47l-15-15"/></svg>
        </a>
      </div>
    </div>
  </section>
  <!-- End.섹션:집필진 지원 -->

@endsection
