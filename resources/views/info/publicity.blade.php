
<style>
    .employment-info .label ul .active{
        color:#0152a4;
        font-weight: bold;
    }
</style>
<div id="info-content3"></div>
<div style="width:1px; height:100px;"></div>
<?php if(!preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT'])):?>
    @include('layout.infolnb')
    <div style="width:1px; height:100px;"></div>
<?php endif;?>
<div class="nopadding-layout">
    <div class="section-title">
        <span class="icon">···</span>
        홍보센터
        <span class="icon">···</span>
    </div>
</div>
<div class="sub-page-layout">
    <div class="company-layout">
        <img src="{{ URL::asset('img/banner/infotest2.png') }}" alt="" style="max-width:100%">
    </div>
        <div class="pagination">
            <ul>
                <li><img src="{{ URL::asset('img/board/left-arrow-gray.png') }}" alt=""></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><img src="{{ URL::asset('img/board/right-arrow.png') }}" alt=""></li>
            </ul>
        </div>
    <div class="company-layout">
        <div class="employment-info">
            <nav class="label m20b">
                <ul>
                    <li class="active">Instagram</li>
                    <li>Facebook</li>
                </ul>
            </nav>
        </div>
        <nav class="pub">
            <ul>
                <li>
                    <img src="{{ URL::asset('img/info/info1.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info2.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info3.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info4.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info5.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info6.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info7.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info8.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info9.png') }}" alt="">
                </li>
                <li>
                    <img src="{{ URL::asset('img/info/info10.png') }}" alt="">
                </li>
            </ul>
        </nav>
    </div>
</div>