@include('layout.header')
@include('layout.lnb')
<div class="sub-page-layout">
    <div class="sub-page-header">오시는 길</div>
</div>
<div class="cs-layout">
    <div class="map">
        <p class="title">본사 / 본점 물류센터</p>
        <img src="{{ URL::asset('img/cs/map2.png') }}" alt="">
        <p class="title">파주 물류센터</p>
        <img src="{{ URL::asset('img/cs/map.png') }}" alt="">
    </div>
</div>
@include('layout.footer')