@include('layout.header')
@include('layout.lnb')
<div class="sub-page-layout">
    <div class="sub-page-header">관계업체</div>
</div>
<div class="company-layout">
    <div class="cooperative">
        <p class="title m10b">신승지류유통 관계회사</p>
        <p class="desc">신승지류유통은 각 전문 분야에 특화된 관계 회사들을 별도로 운영중입니다.</p>
        <img src="{{ URL::asset('img/company/cooperative.png') }}" alt="">
    </div>
</div>
@include('layout.footer')