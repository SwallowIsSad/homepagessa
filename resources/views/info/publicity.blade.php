
<style>
    .employment-info .label ul .active{
        color:#0152a4;
        font-weight: bold;
    }
</style>
<div style="width:1px; height:100px;"></div>
@include('layout.infolnb')
<div class="sub-page-layout" id="#info-content3">
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